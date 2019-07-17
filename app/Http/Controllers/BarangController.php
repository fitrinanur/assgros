<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Library\BarangImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\BarangRequest;

class BarangController extends Controller
{
    private $barang;
    public function __construct(Barang $barang)
    {
        $this->middleware('auth');
        $this->barang = $barang;
    }

    public function index(Request $request)
    {
        $search = $request->input('search', '');
        $data['search'] = $search;
        $data['barangs'] = $this->barang->where('nama_barang','like', "%$search%")->orderBy('no_faktur')->paginate(30);
        return view('pages.barang', $data);
    }

    public function create(Barang $barang)
    {
        return view('pages.item.index');
    }

    public function store(BarangRequest $request, Barang $barang)
    {
        $barang = Barang::create($request->all());

        return redirect('barang')->with('status', 'Berhasil menambahkan 1 data penjualan barang');
    }

    public function import()
    {
        return view('pages.barang-import');
    }

    public function export()
    {
        $datas =  $this->barang->get(['no_faktur','kode_barang','nama_barang','qty'])->toArray();
        return Excel::create('barang', function($excel) use ($datas) {
            $excel->sheet('barang', function($sheet) use ($datas) {
                $sheet->fromArray($datas);
            });
        })->export('csv');
    }

    public function doImport(BarangImport $import)
    {
        $results = $import->get();
        Barang::truncate();
        Barang::insert($results->toArray());
        return redirect('barang')->with('status', 'Import barang berhasil');
    }

    public function edit($id)
    {
        $barang = $this->barang->find($id);
        return view('pages.barang-edit', ['barang' => $barang]);
    }

    public function update($id, Request $request)
    {
        $barang = $this->barang->find($id);
        $barang->no_faktur = $request->no_faktur;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->save();
        return redirect('barang')->with('status', 'Update barang berhasil');
    }

    public function delete($id)
    {
        $this->barang->find($id)->delete();
        return redirect('barang')->with('status', 'barang berhasil dihapus');
    }
}
