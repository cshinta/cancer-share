@extends('layouts.auth')
@section('content')

<style>

.row{
  display: flex;
  margin: 0;
  padding: 0 3rem 0 0;
}

.columnleft {
  width: 25%;
  padding: 10px;
}

.columnright {
  width: 75%;
  padding-left:40px;
}
h2{
    margin-left: 28%;
    font-family:"Signika";
    margin-top: 10px;
font-size: 23px;
font-style: bold;
}
/* Clear floats after the columns */


img.avatar {
  width: 40%;
  text-align: left;
  margin:0%;
}
img.profil {
  width: 17%;
  text-align: center;
  margin: 80px 0 5px 220px;
}
input[type=password]{
  width: 47%;
  height: 50px;
  padding: 12px;
  margin: 10px 0 10px 10%;
  display: inline-block;
  border: 1px solid #9B9B9B;;
  box-sizing: border-box;
  border-radius: 10px;
background-color: #EDEDED;
font-family: "Signika";
font-size: medium;
}

button[type=Submit]{
width: 47%;
height: 48px;
padding: 12px;
margin: 10px 0 10px 10%;
background: #033D68;
border: 1px solid #9B9B9B;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
color: white;
font-family: "Signika";
font-size: medium;
}
</style>

<main>

    <div class="row">
      <div class="columnleft"> 
            <img src="{{ asset('img/logo.png') }}" class="avatar"> 
      </div>
      <div class="columnright">
        <img src="{{ asset('img/profilAvatar.png') }}" class="profil">
        <h2><b>Arief Dava<b></h2>
        <form action="###" method="POST">
        @csrf
            <input type="password" placeholder="Kata Sandi Baru" name="passwordbaru" required>
            <div>
            <input type="password" placeholder="Konfirmasi Kata Sandi" name="confirmpasswor" required>
        </div>
        <div class="button">
          <button type="submit">Simpan</button>
      </div>
        </form>
      </div>
    </div>
    
</main>
@endsection