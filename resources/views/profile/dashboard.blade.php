@extends('layouts.auth')

@section('content')
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    nav li {
        display: inline;
        margin-right:7%;
        margin-left:7%;  
        font-size:150%;
        line-height:70px;
    }
    nav li a {
        text-decoration: none;
        color: #033D68;}
    a{
        text-decoration: none;
        color : #FFFFFF;
        text-align: center;
    } 
    .rectangle{
        position: absolute;
        width: 60%;
        height: 13%;
        left: 20%;

        background: #FFFFFF;
        border: 5px solid #033D68;
        box-sizing: border-box;
        border-radius: 45px;
    }
    .tombol {
        border-radius : 45px;
        background-color: #033D68;
        padding: 14px 28px;
        font-size: 16px;
        align:center;
        margin: 5px 0 5px 24%;
    }
    .profil{
        color: white;
    }
    .profil:hover{
        color: white;
    }
    .column {
        float: left;
    }
    .left {
        width: 25%;
        padding: 10px;
    }

    .right {
        width: 75%;
    }

    img.avatar {
        width: 40%;
        text-align: left;
    }
    img.profil {
        width: 17%;
        text-align: center;
        margin: 60px 0 0px 230px;
    }
    div.a{
        font-size:350%;
        font-weight:bold;
        margin-left:5%;
    }
    div.b{
        font-size:150%;
        margin-left:10%;
    }
    </style>
    <main>
        <div class="row">
            <div class="column left"> 
                    <img src="{{ asset('img/logo.png') }}" class="avatar"> 
            </div>
            <div class="column right">
                <img src="{{ asset('img/profilAvatar.png') }}" class="profil">
                <div class="editprofil">
                    <button class="tombol profil">Lihat Profil</button>
                </div>
                <div class="a">Selamat Datang,Arief!</div>
                <div class="b">Silahkan pilih halaman yang ingin dikunjungi :</div>
                
                <div class="rectangle">
                    <nav>
                    <ul>
                        <li><a href="" class="current">HOME</a></li>
                        <li><a href="">BERITA</a></li>
                        <li><a href="">FORUM</a></li>
                        <li><a href="">DONASI</a></li>    
                    </ul>
                    </nav>
                </div> 
            </div>
        </div>
    
    </main>  
</html>  