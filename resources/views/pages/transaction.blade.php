@extends('layouts.main') 
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('home') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="">Data Transaksi</a>
    </li>
</ol>
<div class="row">
    <div class="col-lg-6">
        <a class="btn btn-info btn-secondary waves-effect" href="{{ route('transaction.create')}}"
            style="margin-bottom:10px;"> <span> <i class="fa fa-plus mr-1"></i>  Tambah Transaksi</span> </a>
    </div>
    <div class="col-lg-6">
        <div class="button-group pull-right">
            <a href="{{ url('transaction/import') }}" class="btn btn-primary" style="margin-bottom: 10px"><i
                    class="fa fa-file mr-1"></i> Import Data</a>
            {{-- <a href="{{url('transaction/export')}}" class="btn btn-success" style="margin-bottom: 10px"><i
                    class="fa fa-print mr-1"></i> Print Data</a> --}}
        </div>
    </div>

    <div class="col-lg-12">

        <div class="card-box">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($transactions) --}}
                    @foreach ($transactions as $key => $transaction)
                   
                        @foreach($transaction as $val)
                        @php
                        $kode[] = $val->kode_barang;
                        $nama[] = $val->nama_barang;

                        @endphp
                        <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $val->kode_barang}}</td>
                        <td>{{ $val->nama_barang}}</td>
                        <td>
                            <a class="btn btn-warning waves-effect waves-light"
                                href="{{url('transaction/edit/' . $val->id)}}">
                                <i class="fa fa-pencil mr-1"></i>edit</a>
                            <a class="btn btn-danger waves-effect waves-light"
                                href="{{url('transaction/delete/' . $val->id)}}">
                                <i class="fa fa-trash mr-1"></i>
                                delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
