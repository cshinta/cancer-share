  @extends('layouts.auth')

  @section('content')
      <style>
          .form {
              text-align: center;
          }

          input[type=text] {
              width: 33%;
              height: 50px;
              padding: 12px 20px;
              margin: 10px;
              display: inline-block;
              border: 1px solid #9B9B9B;
              box-sizing: border-box;
              border-radius: 10px;
              background-color: #EDEDED;
              font-family: 'Signika';
              font-size: medium;
          }

          .button-password {
              width: 33%;
              height: 48px;
              padding: 12px 20px;
              margin: 10px;
              background: #033D68;
              border: 1px solid #9B9B9B;
              box-sizing: border-box;
              box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
              border-radius: 10px;
              color: white;
              font-family: 'Signika';
              font-size: medium;
          }

          .imgcontainer {
              text-align: left;
              margin-left: 5px;
          }

          .imglock {
              text-align: center;
              margin: 20px 0 px 0;
              margin-bottom: 1%;
          }

          img.avatar {
              width: 8%;

          }

          img.lock {
              width: 6%;

          }

          h2 {
              text-align: center;
              font-family: 'Signika';
              font-size: 27px;
              margin: 0%;
          }

          h3 {
              text-align: center;
              font-family: 'Signika';
              font-size: 15px;
              color: #737373;
              margin: 0%;
          }

          h4 {
              text-align: center;
              font-family: 'Signika';
              font-size: 20px;
              color: #737373;
              margin: 12px;
          }

          .register-text {
              text-align: center;
              font-family: 'Signika';
              font-size: 20px;
              margin: 2.8%;
              font-weight: bold;
              
          }

          a {
              text-decoration: none;
              color: black;
          }

          a:hover {
              color: blue;
          }

          .separator {
              padding-top: 2%;
              display: flex;
              align-items: center;
              text-align: center;
              color: #B5B2B2;
          }

          .separator::before,
          .separator::after {
              content: '';
              flex: 1;
              border-bottom: 1px solid #B5B2B2;
          }

          .separator:not(:empty)::before {
              margin-left: 33%;
              margin-right: 3em;
          }

          .separator:not(:empty)::after {
              margin-right: 33%;
              margin-left: 3em;
          }

      </style>

      <main>
          <div class="imgcontainer">
              <img src="{{ asset('img/logo.png') }}" class="avatar">
          </div>
          <div class="imglock">
              <img src="{{ asset('img/lock1.png') }}" class="lock">
          </div>
          <h2>Lupa Kata Sandi?</h2>
          <h3>Masukkan alamat email atau no. Handphone yang sebelumnya<br> telah terdaftar pada akun.<br></h3>
          <div class="validation-show" style="max-width:600px;margin:auto">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
          <div class="form">
              <form action="{{ url('/forgot-password') }}" method="POST">
                  @csrf
                  <input type="text" placeholder="alamat email atau no. Handphone" name="email">
                  <div>
                      <button class="button-password" type="submit">Kirim Link Pulihan</button>
                  </div>
              </form>
              <div class="separator">atau</div>
          </div>
          <h5 class="register-text"><a href="/register">Buat Akun Baru</a></h5>
      </main>
  @endsection
