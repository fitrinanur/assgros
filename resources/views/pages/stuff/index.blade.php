@extends('layouts.main')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home')}}"> Home</a></li>
    <li class="breadcrumb-item active"> Toko</li>
</ol>
<div class="row">
    <div class="col-lg-8">
        <a class="btn btn-info btn-secondary waves-effect" href="{{ route('stuff.create')}}"
            style="margin-bottom:10px;"> <i class="fa fa-plus mr-1"></i> <span> Tambah Barang</span> </a>
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Data Barang
            </div>
            <div class="card-block" style="padding: 10px;">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stuffs as $stuff)
                            <tr>
                                <td>{{$stuff->id}}</td>
                                <td>{{$stuff->stuff_code}}</td>
                                <td>{{$stuff->stuff_name}}</td>
                                <td><a class="btn btn-warning waves-effect waves-light" href="{{ url('stuff/edit/' . $stuff->id)}}">  <i class="fa fa-pencil mr-1"></i> edit</a> <a
                                    class="btn btn-danger waves-effect waves-light" href="{{ url('stuff/destroy/' . $stuff->id)}}"> <i class="fa fa-trash mr-1"></i> delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- {{ $stuffs->links('vendor.pagination.bootstrap-4') }} --}}
            </div>
        </div>
    </div>
</div>
@endsection
