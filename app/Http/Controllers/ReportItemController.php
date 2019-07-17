<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportItemController extends Controller
{
    public function index()
    {

        return view('reports.itemsReport', compact(''));
    }

    public function print()
    {
        return (new ItemReports($items))->download('data_barang_tanggal_'.str_slug(Carbon::now()->format('d M Y')).'.xls');
    }
}
