  @extends('layouts.auth')

  @section('content')

      <style>
          .input-container {
              display: -ms-flexbox;
              display: flex;
              width: 100%;
              margin-bottom: 15px;
              background: #98B1C4

          }

          .icon {
              padding: 10px;
              background: #98B1C4;
              color: black;
              width: 50px;
              text-align: center;
          }

          .input-field {
              width: 100%;
              padding: 10px;
              outline: none;
              font-size: medium;
              

          }

          .btn {
              background-color: black;
              color: white;
              padding: 15px 20px;
              border: none;
              cursor: pointer;
              width: 100%;
              opacity: 0.9;
              font-size: medium;

          }

          .btn:hover {
              opacity: 1;
          }

          .imgcontainer {
              text-align: center;
              margin: 20px 0 12px 0;
          }

          img.avatar {
              width: 15%;

          }

          input {
              background-color: #98B1C4;
              border: none;
          }

          .opsi {
              height: 3px;
              font-size: 15px;
              text-align: center;
              margin-top: 16px;
              color: black;
          }

          a{
              text-decoration: none;
              color: black;
          }

          a:hover {
              color: blue;
          }

      </style>

      <main>
          <div class="imgcontainer">
              <img src="{{ asset('img/logo.png') }}" class="avatar">
          </div>
          <div class="main">
              <form method="POST" action="{{ url('/login') }}" style="max-width:500px;margin:auto">
                @csrf
                  <div class="input-container">
                      <i class="fa fa-user icon"></i>
                      <input class="input-field" type="text" placeholder="Username" name="username">
                  </div>
                  <div class="input-container">
                      <i class="fa fa-lock icon"></i>
                      <input class="input-field" type="password" placeholder="Password" name="password">
                  </div>
                  <button type="submit" class="btn">Masuk</button>
              </form>
              <p class="opsi"> <a href="/forgot-password"> Lupa Kata Sandi?</a> <b> |<a href="/register"> Daftar</a></b>
              <p>
          </div>

      </main>
  @endsection
