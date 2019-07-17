@extends('layouts.main') @section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Rule</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="header-text">
                        <h4>
                            <i class="fa fa-align-justify"></i> Data Rule</h4>
                    </div>
                    <br/> @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{url('rule/proses')}}" method="post" class="form-horizontal">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="name">Min Confidence</label>
                                <input type="text" name="min_conf" class="form-control" placeholder="min confidence" value="{{$min_conf}}"> {{csrf_field()}}
                            </div>
                            <div class="col-md-3">
                                <label for="name">Min Support</label>
                                <input type="text" name="min_sup" class="form-control" placeholder="min support" value="{{$min_sup}}">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" style="margin-top: 30px" class="btn btn-primary">Proses</button>
                            </div>
                        </div>
                        <div class="" style="background-color: #8dd0da; padding: 10px">
                            @if($support) Info :
                            <br> Rata-rata Frequent Item Set Data = 
                            <br> Range minimal support : 20-40 , Range minimal confidence
                            :30-50
                            <br> Semakin kecil nilai support dan confidence semakin banyak hasil keterkaitan barang @else
                            <p>Frequent Item Masih Kosong</p>
                            @endif
                        </div>
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Jika</th>
                                <th>Maka</th>
                                <th>Support</th>
                                <th>Confidence</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rules as $rule)
                            <tr>
                                <td>{{$rule->antecedent}}-->{{$rule->consequent}}</td>
                                <td>{{$rule->consequent}}</td>
                                <td>{{$rule->support}}</td>
                                <td>{{$rule->confidence}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $rules->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection