<style>
    .navbarleft li a{
        text-decoration: none;
        color: #000000;
    }
    .navbarleft li a:hover{
        color: #000000;
    }
    nav li{
        display: inline;
        vertical-align:middle;
    }
    nav {
        display:flex;
        justify-content: space-between;
        height: 100%;
        width:100%;
        align-items: center;
    }
    .navbarleft li{
        margin-right :10%;
    }
    .navbarright li{
        margin-left:8%;
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
        <li><img src="{{ asset('img/profilAvatar.png') }}" class="avatar"width=15% ></li>
        <li><a href="">Arief</a></li>
    </ul>
</nav>  