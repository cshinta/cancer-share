@section('content')
@extends('layouts.auth')
<style>
.backprofil {
        
        padding-left:50px;
        padding-top:30px;
    }
    a {
        color: black;
    }

    a:hover {
        color: blue;
        text-decoration: none;
    }
    a:visited {
  color:black;
  text-decoration: none;
}
.ketprofil{
    display: flex;
        margin-top: 80;
        margin-left:60px;
        padding: 0 3rem 0 0;
}
.profilkecil{
    width: 59px;
}
.namaprofil{
    margin-left:10px;
    margin-top:5px;
}
.title{
    margin-left:127px;
    margin-top:30px;
}
.gambarvideo{
    width: 30%;
    margin-left:500px;
}
.ketcerita{
    margin-left:127px;
    margin-top:30px;
    display: -webkit-box;
    -webkit-line-clamp: 15;
    -webkit-box-orient: vertical;
    overflow: hidden;
   
}

</style>

<main>

<div class="backprofil">
    <h1><b><a class="" href="/lihat-profil" style="font-size: 24px;">{{ __('< Kembali ke Profil') }}</a></b></h1>
    </div>

<div class="ketprofil">
    <div class=potoprofil>
    <img src="{{ asset('img/profilAvatar.png') }}" class="profilkecil">
    </div>

    <div class="namaprofil">
    <h6 style="font-size: 24px;"><b>Arief Dava <b></h6>
    <h6 style="margin:0;">Kanker Paru-Paru</h6>
    </div>
</div>

<div class="title">
    <h6 style="font-size: 24px;"><b>Kisah Saya Melawan Kanker Paru-Paru 3 Tahun Lamanya<b></h6>
    </div>

<img src="{{ asset('img/gambarvideo.png') }}" class="gambarvideo">

<div class="ketcerita">
<h6 style="font-size: 17px;">Saya pernah menderita kanker paru-paru selama kurang lebih 3 tahun. Namun, Saya berhasil dinyatakan sembuh total dari penyakit Saya berkat kerja
keras dan pengobatan yang Saya jalani secara rutin di Rumah Sakit Kanker Dharmais. Pihak rumah sakit juga ramah dan sabar dalam menangani pasiennya
sehingga Saya sebagai pasien pun nyaman dan senang menjalani perawatan. Kalau ditanya, pernah ga sih ngerasa putus asa dan ingin menyerah saja? 
Jawabannya, pasti pernah. Lalu, bagaimana cara Saya bangun dari keputus-asaan tersebut? Banyak hal yang Saya alami sekaligus pelajari saat masih
menjadi pejuang kanker. Salah satunya adalah belajar bagaimana menjadi pribadi yang semakin kuat tiap harinya. Selalu berpikir positif merupakan 
poin terpenting untuk Saya dapat bertahan hingga dinyatakan sembuh. Usaha keras tanpa perasaan positif akan membuatmu sulit untuk mencapai tujuanmu 
yang sebenarnya.
blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla 
blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla 
blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla 
blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla 
blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla
blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla 
blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla blabla bla blablablabla blablabla 
blabla bla blablablabla.<h6>
    </div>

</main>
@endsection