<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Apriori Referensi Pembelian Stok">
    <meta name="author" content="Nur Fitrina">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    {{-- adminto theme --}}
    <link href="{{ asset('css/adminto.css') }}" rel="stylesheet" type="text/css" media="screen">
    @stack('style')

    {{-- <!-- Custom styles for this template -->
    <link href="{{asset('css/style2.css') }}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css') }}" rel="stylesheet"> --}}

    <style>
    .logo{
        letter-spacing: 3px;
        color:green;
    }
    </style>
</head>
<body>
<header id="topnav">
        @include('layouts.topbar')
        @include('layouts.menu')
</header>
<div class="wrapper">
        <div class="container">
        
        @yield('content')
         <!-- Footer -->
         @include('layouts.footer')
         <!-- End Footer -->
 
        </div>
     <!-- end container -->
</div>

</section>
{{-- adminto js --}}
<!-- jQuery  -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/adminto/jquery.min.js') }}"></script>
<script src="{{ asset('js/adminto/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/adminto/switchery.min.js') }}"></script>
<script src="{{ asset('js/adminto/detect.js') }}"></script>
<script src="{{ asset('js/adminto/fastclick.js') }}"></script>
<script src="{{ asset('js/adminto/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/adminto/jquery.blockUI.js') }}"></script>
<script src="{{ asset('js/adminto/waves.js') }}"></script>
<script src="{{ asset('js/adminto/wow.min.js') }}"></script>
<script src="{{ asset('js/adminto/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/adminto/jquery.scrollTo.min.js') }}"></script>
<!-- responsive-table-->
<script src="{{ asset('js/adminto/rwd-table.min.js') }}"></script>

<!-- multiple select & select2-->
<script src="{{ asset('js/adminto/jquery.multi-select.js') }}"></script>
<script src="{{ asset('js/adminto/select2.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/adminto/jquery.core.js') }}"></script>
<script src="{{ asset('js/adminto/jquery.app.js') }}"></script>

@stack('scripts')
{{-- end of adminto js --}}

</body>
</html>