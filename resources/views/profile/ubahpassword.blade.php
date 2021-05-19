@extends('layouts.auth')
@section('content')

    <style>
        .row {
            display: flex;
            margin: 0;
            padding: 0 3rem 0 0;
            width: 100vw;
        }

        .columnleft {
            width: 15%;
            padding: 10px;
        }

        .columnright {
            width: 70%;
            text-align: center;
        }


        h2 {
            font-family: 'Signika';
            margin-top: 10px;
            font-size: 24px;
            font-style: bold;
        }

        /* Clear floats after the columns */


        img.avatar {
            width: 70%;
            height: auto;
            text-align: center;
            margin: 0%;
        }

        img.profil {
            width: 200px;
            border-radius:50%;
            height: auto;
            text-align: center;
            margin: 10% 0 5px 0px;
        }

        input[type=password] {
            width: 50%;
            height: 50px;
            padding: 12px 20px;
            margin: 10px 0 10px 0;
            display: inline-block;
            border: 1px solid #9B9B9B;
            box-sizing: border-box;
            border-radius: 10px;
            background-color: #EDEDED;
            font-family: 'Signika';
            font-size: medium;
        }

        button[type=Submit] {
            width: 50%;
            height: 48px;
            padding: 12px 20px;
            margin: 10px 0 10px 0;
            background: #033D68;
            border: 1px solid #9B9B9B;
            box-sizing: border-box;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            color: white;
            font-family: 'Signika';
            font-size: medium;
        }

    </style>

    <main>

        <div class="row">
            <div class="columnleft">
                <img src="{{ asset('img/logo.png') }}" class="avatar">
            </div>
            <div class="columnright">
                <img src="{{ asset('storage' . $user->avatar) }}" class="profil">
                <h2><b>{{ $user['name'] }}<b></h2>
                <form action="{{ url('/change-password') }}" method="POST">
                    @csrf
                    <input type="password" placeholder="Kata Sandi Lama" name="password" required>
                    <div>
                        <input type="password" placeholder="Kata Sandi Baru" name="password_confirmation" required>
                    </div>
                    <div>
                        <button type="submit">Ubah Kata Sandi</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
@endsection
