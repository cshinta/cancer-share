@extends('layouts.auth')

@section('content')

    <style>
        .container-fluid {
            display: flex;
            margin: 0;
            padding: 0 3rem 0 0;
        }

        .kiri {
            width: 15rem;

        }

        .tengah {
            padding-top: 4rem;
            padding-left: 5rem;
            padding-right: 5rem;
            flex-grow: 1;
        }

        .kanan {
            width: 15rem;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .user-details {
            margin-top: 6vh;
        }

        .logo {
            width: 50%;
            text-align: left;
            margin: 0%
        }

        .row-name {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .row-title {
            font-size: 48px;
            text-align: center;
            font-family: "Signika";
            font-style: bold;
            margin-bottom: 30px;

        }

        input {
            background: #98b1c4;
            border: 0;
            font-family: Signika;
            font-size: 20px;
            color: #787777;
            padding-left: 20px;
        }

        .name-input {
            height: 40px;
            width: 100%;
        }

        .notname-input {
            height: 40px;
            width: 100%;
        }

        .avatar {
            padding-top: 100px;
        }

        .avatar-input {
            display: flex;
            justify-content: center;
        }

        .avatar-daftar {
            text-align: center;
            width: 191px;
            height: 177px;
            border-radius: 50%;
        }

        .btn-daftar {
            width: 167px;
            height: 67px;
            background: #033d68;
            font-family: Signika;
            font-size: 24px;
            font-style: normal;
            color: #fff;
            border-radius: 40px;
        }

        a {
            color: black;
        }

        a:hover {
            color: blue;
        }

    </style>

    <main>
        <form method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="kiri">
                    <img class="logo" src="{{ asset('img/logo.png') }}" alt="" />
                </div>

                <div class="tengah">
                    <div class="row-title">
                        <h1 style="font-weight: bold">Daftar Akun</h1>
                    </div>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="user-details">
                        <div class="row pb-4">
                            <!-- First Name -->
                            <div class="col-6 name-box">
                                <input id="firstname" class="name-input" type="text" placeholder="Nama Depan"
                                    name="firstname" autofocus />
                            </div>

                            <!-- Last Name -->
                            <div class="col-6 name-box">
                                <input id="lastname" class="name-input" type="text" placeholder="Nama Belakang"
                                    name="lastname"/>
                            </div>
                        </div>


                        <!-- Userame -->
                        <div class="pb-4">
                            <input id="username" class="notname-input" type="text" placeholder="Username" name="username"/>
                        </div>

                        <!-- Email Address -->
                        <div class="pb-4">
                            <input id="email" class="notname-input" type="email" placeholder="Email" name="email"
                                :value="old('email')"/>
                        </div>

                        <!-- Password -->
                        <div class="pb-4">
                            <input id="password" class="notname-input" type="password" placeholder="Kata Sandi"
                                name="password" autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="pb-4">
                            <input id="password_confirmation" class="notname-input" type="password"
                                placeholder="Konfirmasi Kata Sandi" name="password_confirmation"/>
                        </div>

                        <!-- No-HP -->
                        <div class="pb-4">
                            <input class="notname-input" type="text" placeholder="No. Handphone" name="phone"/>
                        </div>

                    </div>
                </div>

                <div class="kanan">
                    <div class="avatar">
                        <!-- Avatar -->
                        <div class="avatar-input mb-3">
                            <div class="form-file-group" style="width: 191px; height: 177px; border-radius: 50%">
                                <input type="file" style="display: none" id="avatar" name="avatar"
                                    onchange="preview(this)" />
                                <img class="avatar-daftar" src="{{ asset('img/avatar-daftar.png') }}"
                                    onclick="document.querySelector('#avatar').click()" />
                            </div>
                            <div class="" id="previewBox" style="display: none">
                                <img src="" id="previewImg" style="width: 191px; height: 177px; border-radius: 50%"
                                    onclick="document.querySelector('#avatar').click()" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn-daftar">{{ __('Daftar') }}</button>
                        </div>

                        <!-- If already registered -->
                        <div class="login">
                            <a class="" href="/login" style="font-size: 20px;">{{ __('Sudah daftar?') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            function preview(input) {
                let file = $("input[type=file]").get(0).files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        $("#previewImg").attr('src', reader.result);
                        $("#previewBox").css('display', 'block');
                    }
                    $(".form-file-group").css('display', 'none');
                    reader.readAsDataURL(file);
                }
            }

        </script>
    </main>
@endsection
