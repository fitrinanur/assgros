@extends('layouts.main') @section('content') {{--
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Tambah Data Penjualan Barang</li>
</ol> --}}
<div class="row">
    <div class="card-box" style="margin-top : 15px;">
        <div class="header-title">
            <h4>
                <i class="fa fa-angle-double-right"> Form Data Penjualan Barang</i>
            </h4>
        </div>
        <br/>
        <div class="row">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-3 col-form-label" for="text-input">No. Faktur</label>
                    <div class="col-md-9">
                        <input type="text" id="text-input" name="no_faktur" class="form-control" placeholder="Nomer Faktur Penjualan">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-form-label" for="email-input">Kode Barang</label>
                    <div class="col-md-9">
                        <input type="text" id="email-input" name="kode_barang" class="form-control" placeholder="Kode Barang">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-form-label" for="email-input">Nama Item</label>
                    <div class="col-md-9">
                        <input type="text" id="email-input" name="nama_barang" class="form-control" placeholder="Nama Barang">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-form-label" for="email-input">Kuantiti</label>
                    <div class="col-md-9">
                        <input type="number" id="email-input" name="qty" class="form-control" placeholder="Quantity">
                    </div>
                </div>
        </div>

        <button type="submit" class="btn btn-sm btn-success">
            <i class="fa fa-dot-circle-o"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-danger">
            <i class="fa fa-ban"></i> Reset</button>
        <a class="btn btn-sm btn-primary pull-right" href={{ url ( 'barang') }}>
            <i class="fa fa-ban"></i> Back</a>

        </form>
    </div>
</div>
@endsection