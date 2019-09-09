@extends('layouts.main')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="{{ route('home')}}">Home</a> </li>
    <li class="breadcrumb-item active">Simulasi</li>
</ol>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('simulasi/proses')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Pilih Barang</label>
                        <select id="multiple-select" name="barang[]" multiple class="form-control" size="40">
                            @foreach($transactions as $transaction)
                            <option value="{{$transaction->kode_barang.'-'.$transaction->nama_barang}}">
                                {{$transaction->nama_barang}}</option>
                            @endforeach
                        </select>
                        {{csrf_field()}}
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                        Proses</button>
                </form>
            </div>
        </div>
    </div>
    <br/>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Perhitungan
            </div>
            <div class="card-body" >
                @if (session('result'))
                <h4>Setting</h4>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Minimal Support</td>
                            <td>Minimal Confidence</td>
                        </tr>
                        <tr>
                            <td>{{session('result')['min_sup']/100}}</td>
                            <td>{{session('result')['min_conf']/100}}</td>
                        </tr>
                    </tbody>
                </table>
                <h4>Frequen Item</h4>
                <p>Kemunculan banyaknya barang yang memenuhi minimal support</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Frequen Item</th>
                            <th>Support</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('result')['freqs'] as $freq)
                        <tr>
                            <td>{{$freq->kode_barang}}</td>
                            <td>{{$freq->nama_barang}}</td>
                            <td>{{$freq->freq}}</td>
                            <td>{{($freq->support*100)}} %</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4>Iterasi</h4>
                <p>kombinasi barang dari frequent item yang memenuhi minimal support</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Barang</th>
                            <th>Support</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $iterations = session('result')['iterations'];@endphp
                        @foreach($iterations as $iteration)
                        <tr>
                            <td> { {{implode(' , ', $iteration['item'])}} }</td>
                            <td>{{(number_format($iteration['support'], 2)*100)}} %</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4>Aturan Asosiasi</h4>
                <p>Asosiasi dari iterasi yang memenuhi minimal support</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Aturan Asosiasi</th>
                            <th>Support</th>
                            <th>Confidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $rules = session('result')['rules']; @endphp
                        @foreach($rules as $rule)
                        <tr>
                            <td>{ {{implode(' , ', $rule['antecedent'])}} } &nbsp;&nbsp;&nbsp; -----> { {{implode(' , ', $rule['consequent'])}} }</td>
                            <td>{{(number_format($rule['support'], 2)*100)}}%</td>
                            <td>{{(number_format($rule['confidence'], 2)*100)}}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
    <br/>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Hasil rekomendasi
                    </div>
                    <div class="card-body">
                        @if (session('result'))
                        <h4>Data Barang</h4>
                        <p> Daftar Barang yang Diproses</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(session('result')['barangs'] as $barang)
                                @php $row = explode('-', $barang)@endphp
                                <tr>
                                    <td>{{$row[0]}}</td>
                                    <td>{{$row[1]}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h4>Data Rekomendasi</h4>
                        <p>Hasil barang rekomendasi yang sesuai dengan aturan asosiasi.</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($predicts != [])
                                @foreach($predicts as $no => $barang)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$barang}}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="2">Tidak Ada Rekomendasi karena tidak memenuhi rule.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script type="application/javascript">
    $(document).ready(function () {
        $('#multiple-select').select2();
    })

</script>
@endpush
