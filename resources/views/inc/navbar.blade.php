<style>
    .navbarleft li a {
        text-decoration: none;
        color: #000000;
    }

    .navbarleft li a:hover {
        color: #000000;
    }

    .navbarright li a {
        text-decoration: none;
        color: #000000;
    }

    .navbarright li a:hover {
        color: #000000;
    }

    #navbar-page li {
        display: inline;
        vertical-align: middle;
    }

    #navbar-page {
        display: flex;
        justify-content: space-between;
        height: 130px;
        width: 100%;
        align-items: center;
    }

    .navbarleft li {
        margin-right: 10%;
    }

    .navbarright button {
        margin-left: 10px;
        margin-right: 10px;
    }

    .tombol {
        border-radius: 45px;
        background-color: #033D68;
        padding: 14px 28px;
        font-size: 16px;
    }

    .tombol1 {
        border-radius: 45px;
        border-color: #033D68;
        background-color: #FFFFFF;
        padding: 14px 28px;
        font-size: 16px;
    }

    .daftar {
        color: white;
    }

    .masuk {
        color: black;
    }

    .daftar:hover {
        color: white;
    }

    .masuk:hover {
        color: black;
    }

    .navbarright-log li{
        margin-left:3%;
    }

    .navbarright-log{
        max-width: 20%;
    }

    #nav-foto{
        font-size: 20px;
        color: black;
    }
    #navbar-foto{
        width: 15%;
        max-height: 60px;
    }
</style>

<nav id="navbar-page">
    <ul class="navbarleft">
        <li><a href="/"><img src="{{ asset('img/logo.png') }}" width=15%></a></li>
        <li><a href="/edukasi">Edukasi</a></li>
        <li><a href="/forum">Forum</a></li>
        <li><a href="/berita">Berita</a></li>
        <li><a href="/donasi">Donasi</a></li>
    </ul>
    @if (Auth::check())
        <ul class="navbarright-log">
            <li><a href="/dashboard"><img src="{{ asset('storage' . Auth::user()->avatar) }}" id="navbar-foto"></a></li>
            <li><a href="/dashboard" id="nav-foto"><b>{{ Auth::user()->firstname }}</b></a></li>
        </ul>
    @else
        <ul class="navbarright">
            <button class="tombol daftar" onclick="window.location.href='/register'">Daftar</button>
            <button class="tombol1 masuk" onclick="window.location.href='/login'">Masuk</button>
        </ul>
    @endif

</nav>
