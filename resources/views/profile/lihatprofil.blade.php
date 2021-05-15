@section('content')
@extends('layouts.auth')
<style>
.atas{
    text-align:center;
    padding-top:30px;
}
.profil{
    width: 10%;
    margin-bottom:5px;
}
.onklik{
background: #033D68;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
border-radius: 15px;
height: 40px;
color: #FFFFFF;
width: 10%;
}
.row{
        display: flex;
        margin: 0;
        padding: 0 3rem 0 0;
    }
    


</style>
<main>
    <div class="atas">
    <img src="{{ asset('img/profilAvatar.png') }}" class="profil">
        <h4><b>Arief Dava<b></h4>
        <button onclick="window.location.href='/sunting-profil'" class="onklik">Sunting Profil</button>
    </div>
    <div class="row">
  <div class="kiri">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="kanan">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
</div>
</main>