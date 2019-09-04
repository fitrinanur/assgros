@extends('layouts.main') @section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Barang</li>
    <li class="breadcrumb-item active">Import</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <form action="{{url('transaction/import')}}" enctype="multipart/form-data" method="post" class="form-horizontal">
                        @csrf
                        <div class="header-text">
                            <h4><i class="fa fa-align-justify"></i> Import Data Barang</h4>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-file"></i>
                                    </span>
                                    <input type="file" id="input1-group1" name="file" class="form-control" placeholder="file"> {{csrf_field()}}
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa fa-dot-circle-o"></i> Import</button>
                        <a href="{{ url('transaction') }}" class="btn btn-sm btn-inverse pull-right">
                            <i class="fa fa-dot-circle-o"></i> Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection