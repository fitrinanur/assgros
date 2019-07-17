@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Barang</li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <form action="{{url('barang/edit/' . $barang->id)}}" method="post" class="form-horizontal">
                        <div class="header-text">
                            <h4><i class="fa fa-align-justify"></i> Edit Data Barang</h4>
                        </div>
                        <br/>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label" for="no_faktur">No Faktur</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="no_faktur" name="no_faktur" class="form-control input-sm" value="{{$barang->no_faktur}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label" for="kode_barang">Kode Barang</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="kode_barang" name="kode_barang" class="form-control input-sm" value="{{$barang->kode_barang}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label" for="nama_barang">Nama Barang</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="nama_barang" name="nama_barang" class="form-control input-sm" value="{{$barang->nama_barang}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Update</button>
                            <a  href="{{url('barang') }}" class="btn btn-sm btn-inverse pull-right"><i class="fa fa-dot-circle-o"></i> Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection