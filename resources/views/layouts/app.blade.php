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
    {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('css/adminto.css') }}" rel="stylesheet" type="text/css" media="screen">
    @stack('style')
</head>
<body class="app header-fixed">
<div class="app-body">
    <main class="main">
        @yield('content')
    </main>
</div>
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