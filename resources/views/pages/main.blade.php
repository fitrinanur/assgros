@extends('layouts.main')
@section('content')


<div class="row">
    <div class="col-md-6">
        <div class="card" style="margin-top: 10px">
            <div class="card-box">
                <h3 class="text-success">Analisis Sistem Asosiasi Barang dengan Metode Apriori Studi Kasus : Minimarket Asgross Permata Pandean </h3>
                <p>Selamat datang, sistem rekomendasi barang berfungsi sebagai referensi dalam membantu admin
                    menentukan pembelian stok dengan adanya rekomendasi barang berdasarkan pola pembelian
                    konsumen.</p>
                <p>
                    <bold>Tutorial : </bold>
                </p>
                <ol>
                    <li>Masukan data transaksi sebagai data training dengan cara import file <i>excel</i>
                        menggunakan <i>extensi .csv</i> pada menu Master-Penjualan Barang</li>
                    <li>Atur <i>Minimum Support</i> dan <i>Minimum Confidence</i> pada menu Analisa-Rule</li>
                    <li>Menu simulasi digunakan penemuan rekomendasi yang sesuai dengan rule yang ada</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <section id="slide" style="margin-top:12px;max-width:1000px; max-height:400px !important;">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{asset('img/1.jpeg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block"
                                style="background-color:#888888;opacity:0.8;">
                                <h5 style="color:white">Algoritma Apriori</h5>
                                <p>Algoritma Market Base Analisis</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/2.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block"
                                style="background-color:#888888;opacity:0.8;">
                                <h5 style="color:white">Assgross Permata Pandean</h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/3.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block"
                                style="background-color:#888888;opacity:0.8;">
                                <h5 style="color:white">Assgross Permata Pandean</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
<!--/.row-->

@endsection
