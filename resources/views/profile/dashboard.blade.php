@extends('layouts.auth')

@section('content')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        nav li {
            display: inline;
            margin-right: 7%;
            margin-left: 7%;
            font-size: 150%;
            line-height: 70px;
        }

        nav li a {
            text-decoration: none;
            color: #033D68;
        }

        a {
            text-decoration: none;
            color: #FFFFFF;
            text-align: center;
        }

        .rectangle {
            width: 60%;
            height: 35%;
            margin: auto;
            background: #FFFFFF;
            border: 5px solid #033D68;
            box-sizing: border-box;
            border-radius: 45px;
        }

        .tombol {
            border-radius: 45px;
            background-color: #033D68;
            padding: 14px 28px;
            font-size: 16px;
        }

        .profil {
            color: white;
        }

        .profil:hover {
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
            width: 47%;
            text-align: center;
        }

        img.avatar {
            width: 40%;
            text-align: left;
        }

        img.profil {
            width: 200px;
            text-align: center;
            margin: 12% 0 3% 0;
            border-radius: 50%;
        }

        div.a {
            font-size: 350%;
            font-weight: bold;
        }

        div.b {
            font-size: 150%;
            margin: 0 0 1% 0;
        }

        .dashboard-column{
            text-align: center;
            width: 100%;
        }

    </style>
    <main>
        <div class="row">
            <div class="column left">
                <img src="{{ asset('img/logo.png') }}" class="avatar">
            </div>
            <div class="column right">
                <img src="{{ asset('/storage' . $user->avatar) }}" class="profil">
                <div class="editprofil">
                    <button class="tombol profil" onclick="window.location.href='{{url('/lihat-profil')}}'">Lihat Profil</button>
                </div>
            </div>
            <div class="dashboard-column">
                <div class="a">Selamat Datang, {{ $user->firstname }}!</div>
                <div class="b">Silahkan pilih halaman yang ingin dikunjungi :</div>

                <div class="rectangle">
                    <nav>
                        <ul>
                            <li><a href="{{url('/')}}" class="current">HOME</a></li>
                            <li><a href="">BERITA</a></li>
                            <li><a href="{{url('/forum')}}">FORUM</a></li>
                            <li><a href="">DONASI</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </main>

@endsection
