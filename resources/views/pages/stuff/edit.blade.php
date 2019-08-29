@extends('layouts.main')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home')}}"> Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('stuff.index')}}"> Barang</a></li>
    <li class="breadcrumb-item active"> Edit Barang</li>
</ol>
<div class="row">
    <div class="col-lg-8 offset-2">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Edit Barang
            </div>
            <div class="card-block" style="padding: 10px;">
                <form action="{{ route('stuff.update', $stuff) }}"  method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCode" class="col-form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="inputCity" name="stuff_code" value="{{ $stuff->stuff_code }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName" class="col-form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="inputCity" name="stuff_name" value="{{ $stuff->stuff_name}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
