@extends('layouts.main')


@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home')}}"> Home</a></li>
    <li class="breadcrumb-item active"> Laporan</li>
</ol>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Download Laporan</h3>
            </div>
            <div class="card-block">
                <form action="{{ route('report.export') }}">
                    <button type="submit" name="type" value="stuffs" class="btn btn-info"
                        style="float:right;margin:10px">
                        <i class="fa fa-print"></i> Download Data Barang
                    </button>
                    <button type="submit" name="type" value="frequent" class="btn btn-info"
                        style="float:right;margin:10px">
                        <i class="fa fa-print"></i> Download Data Frequen
                    </button>
                    <button type="submit" name="type" value="transactions" class="btn btn-info"
                        style="float:right;margin:10px">
                        <i class="fa fa-print"></i> Download Data Transaksi
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
