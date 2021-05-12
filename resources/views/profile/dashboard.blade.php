@extends('layouts.auth')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>dashboard profile</title>
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
    .footer{
        background: #033D68;
        text-align: center;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        position: absolute;
        font-family: Roboto;
        font-style: normal;
        font-weight: 900;
        font-size: 18px;
        line-height: 21px;
        color: #FFFFFF;
    }
    .selamatdatang{
        position: absolute;
        width: 582px;
        height: 37px;
        left: 500px;
        top: 360px;
        font-family: Signika;
        font-style: normal;
        font-weight: bold;
        font-size:35px;
    }
    .silahkan{
        position: absolute;
        width: 582px;
        height: 37px;
        left: 430px;
        top: 400px;

        font-family: Signika;
        font-style: normal;
        font-size: 30px;
    }
    .rectangle{
        position: absolute;
        width: 1070px;
        height: 80px;
        left: 185px;
        right: 185px;
        top: 480px;

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
    </style>
    <main >
        <div class="Logo">
         <img src="{{ asset('img/logo.png') }}" class="logo" weight=120 height=190>
        </div>
        <div class="fotoorang">
          <img src="{{ asset('img/avatar.png') }}" class="avatar">
        </div>
        <div class="editprofil">
          <a href="">Lihat Profil</a>
        </div>
        <div class="selamatdatang">
          <p>Selamat Datang ,Arief!</p>
         </div>
        </div>
        <div class="silahkan">
            <p>Silahkan pilih halaman yang ingin dikunjungi : </P>
        </div>
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