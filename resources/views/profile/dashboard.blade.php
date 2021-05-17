@extends('layouts.auth')

@section('content')
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    nav li {
        display: inline;
        margin-right: 80px;
        margin-left:80px;  
        font-size:30px;
        line-height:60px;
    }
    nav li a {
        text-decoration: none;
        color: #033D68;}
    a{
        text-decoration: none;
        color : #FFFFFF;
        text-align: center;
        top:3px;
    } 
    .rectangle{
        position: absolute;
        width: 1070px;
        height: 80px;
        left: 185px;
        right: 185px;
        top: 480px;
        margin : auto;

        background: #FFFFFF;
        border: 5px solid #033D68;
        box-sizing: border-box;
        border-radius: 45px;
    }
    .editprofil{
        position: absolute;
        width: 132px;
        height: 50px;
        left: 620px;
        top: 315px;

        background: #033D68;
        border-radius : 45px;
        font-family: Signika;
        font-style: normal;
        font-weight: bold;
        font-size:18px;
        line-height:45px;
        color: #FFFFFF;
        text-align:center;
    }
    .logo{
        text-align:left;
        margin-left:5px;
    }
    .fotoorang{
        text-align:center;
        margin:-50px 0px ;
    }
    img.avatar{
        width:12%
    }
    h2 {
        text-align: center;
        font-family: 'Signika';
        font-size: 27px;
        font-weight:bold;
        margin: 0%;
    }
    h3 {
        text-align: center;
        font-family: 'Signika';
        font-size: 15px;
        color: #737373;
        margin: 0%;
    }
    </style>
    <main >
        <div class="Logo">
         <img src="{{ asset('img/logo.png') }}" class="logo" weight=120 height=190>
        </div>
        <div class="fotoorang">
          <img src="{{ asset('img/profilAvatar.png') }}" class="avatar">
        </div>
        <div class="editprofil">
            <a href="" >Lihat Profil</a>
        </div>
        <h2>Selamat Datang,Arief!</h2>
        <h3>Silahkan pilih halaman yang ingin dikunjungi :</h3>
        <div class="rectangle">
            <nav>
              <ul>
                <li><a href="" class="current">Home</a></li>
                <li><a href="">Berita</a></li>
                <li><a href="">Forum</a></li>
                <li><a href="">Donasi</a></li>    
              </ul>
            </nav>
        </div> 
    </main>  
</html>  