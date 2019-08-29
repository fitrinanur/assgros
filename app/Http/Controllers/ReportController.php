<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Frequent;
use App\Stuff;
use PDF;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        return view('pages.reports.index');
    }

    public function export(Request $request){
        // dd($request->all());
        $transactions = Transaction::all();
        $frequents = Frequent::all();
        $stuffs = Stuff::all();
        $date = Carbon::now()->format('Y-m-d');
        $userGenerate = Auth()->user()->name;
        if($request->type == 'transactions'){
            // dd($request->type);
            $pdf = PDF::loadView('pages.reports.transactions', compact('transactions','date','userGenerate'));
            return $pdf->stream('Transaksi.pdf');
        }elseif($request->type == 'frequent'){
            $pdf = PDF::loadView('pages.reports.frequent-report', compact('frequents','date','userGenerate'));
            return $pdf->stream('Daftar Frequent.pdf');
        }elseif($request->type == 'stuffs'){
            $pdf = PDF::loadView('pages.reports.stuff-report', compact('stuffs','date','userGenerate'));
            return $pdf->stream('Daftar Barang.pdf');
        }
    }
}
