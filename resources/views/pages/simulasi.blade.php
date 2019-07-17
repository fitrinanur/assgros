@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Simulasi</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{url('simulasi/proses')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-header">
                                Simulasi Pembelian
                            </div>
                            <div class="card-block">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <select id="multiple-select" name="barang[]" multiple class="form-control" size="40">
                                            @foreach($barangs as $barang)
                                                <option value="{{$barang->kode_barang.'-'.$barang->nama_barang}}">{{$barang->nama_barang}}</option>
                                            @endforeach
                                        </select>
                                        {{csrf_field()}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Perhitungan
                            <div class="card-actions">
                                <a class="btn-minimize" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="card-block collapse" aria-expanded="false" id="collapseExample">
                            @if (session('result'))
                                <h4>Setting</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Min Support</td>
                                            <td>Min Confidence</td>
                                        </tr>
                                        <tr>
                                            <td>{{session('result')['min_sup']/100}}</td>
                                            <td>{{session('result')['min_conf']/100}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>Frequent Item</h4>
                                <p>Kemunculan banyaknya barang yang memenuhi min support</p>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Freq Item</th>
                                        <th>Support</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(session('result')['freqs'] as $freq)
                                        <tr>
                                            <td>{{$freq->kode_barang}}</td>
                                            <td>{{$freq->nama_barang}}</td>
                                            <td>{{$freq->freq}}</td>
                                            <td>{{$freq->support}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <h4>Iteration</h4>
                                <p>combinasi dari frequent item yang memenuhi min support</p>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Barang</th>
                                        <th>Support</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $iterations = session('result')['iterations']; ?>
                                    @foreach($iterations as $iteration)
                                        <tr>
                                            <td>{{implode(' ', $iteration['item'])}}</td>
                                            <td>{{number_format($iteration['support'], 2)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <h4>Rules</h4>
                                <p>assosiatif rule dari iteration yang memenuhi min support</p>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Assosiatif</th>
                                        <th>Support</th>
                                        <th>Confidence</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $rules = session('result')['rules']; ?>
                                    @foreach($rules as $rule)
                                        <tr>
                                            <td>{{implode(' ', $rule['antecedent'])}} -> {{implode(' ', $rule['consequent'])}}</td>
                                            <td>{{number_format($rule['support'], 2)}}</td>
                                            <td>{{number_format($rule['confidence'], 2)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Hasil rekomendasi
                                </div>
                                <div class="card-block">
                                    @if (session('result'))
                                        <h4>Data Pembelian</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(session('result')['barangs'] as $barang)
                                                <?php $row = explode('-', $barang)?>
                                                <tr>
                                                    <td>{{$row[0]}}</td>
                                                    <td>{{$row[1]}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <h4>Data Rekomendasi</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($predicts as $no => $barang)
                                                <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{$barang}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection