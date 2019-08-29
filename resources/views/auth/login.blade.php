@extends('layouts.app') @section('content')
<div class="container">
    <div class="col-lg-5" style="margin: 30px 0 0 300px">
        <div class="card-box">
            <div class="header-text" style="text-align :center; background-color:#067DC6; color: white">
                <div>
                    <p>
                    <br/>
                    <img src="img/sinus.png" alt="" width="110px" height="110px" /> </p>
                    <p>Analisis Sistem Asosiasi Barang dengan Metode Apriori <br/>Studi Kasus : Minimarket Asgross Permata Pandean</p>

                    <div class="writter" style="text-align:center">
                        <p>oleh :<br/>
                        Himawan Wibisono <br/> 13.5.00056</p>
                    </div>
                </div>
                <br/>
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                <h3>Login</h3>
                <p class="text-muted">Sign In to your account</p>
                <hr/> 
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required autofocus> {{ csrf_field() }}
                    <i class="icon-user"></i>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <i class="icon-lock"></i>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection