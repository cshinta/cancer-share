@extends('layouts.app')

@section('content')
    
    
    <style>
    
    .judul2{
          font-weight:bold;
          font-size:30px;
          text-align:center;
    }
    .row{
        padding:0 5% 0 5%;
    }
    .card{
        border-radius:45px;
        margin-top:80px;
        background-color:#c4c4c4;
    }
    .card-body{
        padding:47px 103px 50px 103px;
    }
    li{
        display: inline;
    }
    </style>
    <main>
    <div class="row">
        <div class="judul2"style="padding:0 15% 0 15%">Berawal dari Pedihnya Kehilangan Anak, Ibu Ini Buka Rumah Singgah Gratis untuk Pejuang Kanker</div>
        <img src="{{ asset('img/beritalengkap.png') }}"  class="d-block w-100"style="padding:0 23% 0 23%; margin-top:40px;">
        <div class="card" style="width: 74rem;margin-left:2%">
            <div class="card-body">
            <p style="font-size:18px;">Liputan6.com, Jakarta - Berawal dari pedihnya kehilangan buah hati akibat kanker mata, Dewi Nurdjanah bertekad untuk mendirikan Rumah Pejuang Kanker Ambu dan memberikan pelayanan gratis untuk para pejuang kanker.
            <br><br>Perjuangan ibu yang akrab disapa Ambu ini berlangsung sejak 2009 hingga 2012 untuk kesembuhan sang buah hati. Namun, Tuhan berkata lain, ia harus merelakan sang anak untuk berpulang.
            <br><br>Allah memanggil anak Ambu, tapi setelahnya Allah kasih beratus-ratus anak untuk Ambu rawat," ujarnya dalam keterangan Kitabisa.com dikutip Rabu (21/4/2021).
            <br><br>Kepergian sang anak tak serta merta membuatnya berlama-lama larut dalam kesedihan. Ia pun bangkit dan mendapat panggilan jiwa untuk merawat pasien-pasien yang senasib dengan anaknya dengan mendirikan Rumah Pejuang Kanker Ambu.
            <br><br>“Ambu merasakan sendiri pahit pedihnya seorang ibu merawat anak. Rumah ini adalah bentuk syukur kepada Allah SWT.”
            <br><br>Rumah pelayanan gratis ini beralamat di Jl. Bijaksana Dalam nomor 11, Sukajadi, Bandung, Jawa Barat.
            <br><br>Tidak hanya dari Bandung, pasien-pasien kanker dari luar kota terus berdatangan. Mereka diberikan fasilitas tempat tinggal, makanan cukup gizi, dan transportasi ke beberapa rumah sakit.
            <br><br>“Alhamdulillah ada rezeki saat pasien pulang pun kita ongkosin,” tambahnya.</p>
            </div>
        </div>
        <ul class="icon">
        <li><img src="{{ asset('img/like.png') }}"></li>
        <li style="padding:62px;"><img src="{{ asset('img/comment.png') }}">1</li>
        </ul>
        
    </div>
    <p style="margin:60px 0 20px 2%;font-size:30px;font-weight:bold;"><img src="{{ asset('img/back.png') }}">Laman Sebelumnya</p>
    </main>  

@endsection
