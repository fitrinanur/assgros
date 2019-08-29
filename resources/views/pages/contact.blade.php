@extends('layouts.main') 
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('home') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url('contact') }}">Contact</a>
    </li>
</ol>
<div class="container-fluid">
    <div class="card-box">
        <h1 class="text-success">Contact</h1>
        <div class="mapouter" style="margin-left:80px"><div class="gmap_canvas"><iframe width="903" height="363" id="gmap_canvas" src="https://maps.google.com/maps?q=asgross%20permata%20pandean&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:363px;width:903px;}.gmap_canvas {overflow:hidden;background:none!important;height:363px;width:903px;}</style></div>
    </div>

</div>
@endsection