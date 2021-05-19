<style>
    .navbarleft li a{
        text-decoration: none;
        color: #000000;
    }
    .navbarleft li a:hover{
        color: #000000;
    }
    .navbarright li a{
        text-decoration: none;
        color: #000000;
    }
    .navbarright li a:hover{
        color: #000000;
    }
    nav li{
        display: inline;
        vertical-align:middle;
    }
    nav {
        display:flex;
        justify-content: space-between;
        height: 130px;
        width:100%;
        align-items: center;
    }
    .navbarleft li{
        margin-right :10%;
    }
    .navbarright button{
        margin-left:10px;
        margin-right:10px;
    }
    .tombol {
        border-radius : 45px;
        background-color: #033D68;
        padding: 14px 28px;
        font-size: 16px;
    }
    .tombol1 {
        border-radius : 45px;
        border-color:#033D68;
        background-color: #FFFFFF;
        padding: 14px 28px;
        font-size: 16px;
    }
    .daftar{
        color: white;
    }
    .masuk{
        color: black;
    }
    .daftar:hover {
        color: white;
    }
    .masuk:hover{
        color:black;
    }

</style>

<nav>
    <ul class="navbarleft">
        <li><img src="{{ asset('img/logo.png') }}" width=15% ></li>
        <li><a href="">Edukasi</a></li>
        <li><a href="">Forum</a></li>
        <li><a href="">Berita</a></li>
        <li><a href="">Donasi</a></li>
    </ul>
    <ul class="navbarright">
        <button class="tombol daftar">Daftar</button>
        <button class="tombol1 masuk">Masuk</button>
    </ul>
</nav>  