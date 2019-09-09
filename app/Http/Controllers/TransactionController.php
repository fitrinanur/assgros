<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Library\TransactionImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Stuff;
// use App\Http\Requests\BarangRequest;

class TransactionController extends Controller
{
    private $transaction;
    public function __construct(Transaction $transaction)
    {
        $this->middleware('auth');
        $this->transaction = $transaction;
    }

    public function index(Request $request)
    {
        // if($request->input('search')){
        //     $search = $request->input('search', '');
        //     $data['search'] = $search;
        //     $data['transactions'] = $this->transaction->where('nama_barang','like', "%$search%")->orderBy('no_faktur')->paginate(30);

        //     return $data;
        // }
        $transactions =Transaction::all()->groupBy('code');
       return view('pages.transaction',compact('transactions'));
    }

    public function create(Transaction $transaction)
    {
        $stuffs = Stuff::all();
        return view('pages.item.index',compact('stuffs'));
    }

    public function store(Request $request)
    {
        $stuffs = Stuff::whereIn('id', $request->stuff_id)->get();
        // dd($stuffs);
      
        foreach($stuffs as $stuff){
            $transaction = new \App\Transaction();
            $transaction->code = $request->transaction_code;
            $transaction->kode_barang = $stuff->stuff_code;
            $transaction->nama_barang = $stuff->stuff_name;
            $transaction->save();
        }
        return redirect('transaction')->with('status', 'Berhasil menambahkan 1 data penjualan barang');
    }

    public function import()
    {
        return view('pages.transaction-import');
    }

    public function export()
    {
        $datas =  $this->transaction->get(['no_faktur','kode_barang','nama_barang','qty'])->toArray();
        return Excel::create('barang', function($excel) use ($datas) {
            $excel->sheet('barang', function($sheet) use ($datas) {
                $sheet->fromArray($datas);
            });
        })->export('csv');
    }

    public function doImport(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Transaction::truncate();
            Excel::import(new TransactionImport, $file); //IMPORT FILE 
            return redirect('transaction')->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);
    }

    public function edit($id)
    {
        $transaction = $this->transaction->find($id);
        $stuffs = Stuff::all();
        return view('pages.transaction-edit', ['transaction' => $transaction,'stuffs'=> $stuffs]);
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $transaction = $this->transaction->find($id);
        
        $transaction->code = $request->code;
        $transaction->kode_barang = $request->stuff_kode;
        $transaction->nama_barang = $request->stuff_name;
        $transaction->save();
        return redirect('transaction')->with('status', 'Update barang berhasil');
    }

    public function delete($id)
    {
        $this->transaction->find($id)->delete();
        return redirect('transaction')->with('status', 'barang berhasil dihapus');
    }

    public function getCategory()
    {
        $selectedNumbers = request()->get('selectednumbers');
        $stuffs = Stuff::whereIn('id',$selectedNumbers)->get();
        $name = [];
        foreach($stuffs as $stuff){
            $name[]  = $stuff->stuff_name;
        }
      
        return ['name'=>$name]; 
    }

    public function getStuff()
    {
       
        $stuff_kode = request()->get('stuff_kode');
        $stuffs = Stuff::where('stuff_code',$stuff_kode)->get();
        $name = '';
        foreach($stuffs as $stuff){
            $name  = $stuff->stuff_name;
        }
      
        return ['name'=> $name]; 
    }
}


