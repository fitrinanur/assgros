@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Toko</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Data Penjualan Barang
                        </div>
                        <div class="card-block">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Toko</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tokos as $toko)
                                    <tr>
                                        <td>{{$toko->id}}</td>
                                        <td>{{$toko->nama}}</td>
                                        <td><a href="{{url('toko/edit/' . $toko->id)}}">edit</a> | <a href="{{url('toko/delete/' . $toko->id)}}">delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $tokos->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection