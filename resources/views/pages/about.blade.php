@extends('layouts.main') @section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('home') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url('about') }}">About</a>
    </li>
</ol>
<div class="container-fluid">
    <div class="card-box">
        <h1 class="text-success">Algoritma Apriori</h1>
        <p>Algoritma Apriori pertama kali diperkenalkan oleh Agrawal dan Shrikant <strong>(1994)</strong> yang berguna untuk menemukan <i>frequent item set</i> pada sekumpulan data. 
            Selain dari apriori terdapat beberapa algoritma association rule lainnya seperti <i>PredictiveApriori</i>, <i>Tertius</i> dan <i>Filtered Associator</i> <strong>(Aher dan Lobo, 2012:48)</strong></p>
        <p>Algoritma Apriori adalah bagian dari sebuah metode Association Rule, yang berfungsi untuk menemukan kombinasi item berdasarkan barang yang dibeli oleh pelanggan. Berikut adalah jenis-jenis aturan asosiasi :
            <ol>
                <li>Apriori</li>
                <li>Generalized Rule Induction</li>
                <li>Algoritma Hash Based</li>
            </ol>
        </p>
        <p>Association rule merupakan teknik data mining untuk menemukan aturan asosiatif antara suatu kombinasi item.contohnya analisis pembelian di suatu pasar swalayan, dapat diketahui berapa besar kemungkinan seorang pelanggan membeli roti bersamaan dengan susu. Dengan kondisi tersebut pemilik swalayan dapat mengatur penempatan barangnya, atau merancang promosi pemasaran dengan memakai kupon diskon untuk kombinasi barang tertentu.</p>
    </div>

</div>
@endsection