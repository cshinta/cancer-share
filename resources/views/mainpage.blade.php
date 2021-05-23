@extends('layouts.app')

@section('content')
    <style>
        section {
            min-height: 100vh;
        }

        .hal1 {
            min-height: calc(100vh - 130px);
            background-image: url("{{ asset('img/crophand.png') }}");
            background-size: cover;
        }

        .hal1-section {
            display: flex;
            align-items: center;
            max-width: 63vw;
            margin: 0 5%;
            min-height: calc(100vh - 130px);
            text-align: justify;
        }

        .rectangle {
            position: absolute;
            width: 140px;
            height: 20px;
            margin-top: 5px;
            border-radius: 45px;
            background: #033D68;
        }

        .btn-forum {
            text-align: center;
            margin: 5% 0;
            font-weight: bold;
        }

        .btn-forum-next {
            background-color: #033D68;
            padding: 3% 7%;
            font-size: 18px;
            border-radius: 30px;
        }

        .btn-forum-next:hover {
            background-color: rgb(22, 15, 71);
        }

        .tengah {
            min-height: 100vh;
        }

        .btn-to-forum {
            text-align: center;
            border-radius: 70px;
            margin-top: 15px;
        }

        .btn-to-forum-next {
            background-color: #033D68;
            padding: 1% 2%;
            font-size: 18px;
            border-radius: 30px;
            font-weight: bold;
        }

        .btn-to-forum-next:hover {
            background-color: rgb(22, 15, 71);
        }

        .judul {
            font-weight: bold;
            font-size: 60px;
            text-align: left;
        }

        .isi {
            margin-top: 60px;
        }

        .isitulisan {
            margin-top: 25px;
        }

        .truncate-synopsis {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .judul2 {
            font-weight: bold;
            font-size: 64px;
            text-align: center;
        }

        .rectangle2 {
            position: absolute;
            width: 140px;
            height: 20px;
            margin-left: 46.5%;
            border-radius: 45px;
            background: #033D68;
        }

        .judulisi {
            text-align: center;
            font-size: 30px;
        }

        .judul-edukasi {
            text-align: center;
            min-width: 100vw;
        }

        .card-edukasi {
            text-align: justify;
            margin: 0 2%;

        }

        .card-edukasi-content {
            padding: 5%;
            width: 20vw;
            height: 60vh;
            display: flex;
            flex-flow: column;
        }

        .card-img-top {
            width: 130px;
            height: 87px;
        }

        .card-img {
            margin-left: 50px;
            margin-top: 20px;
            width: 192px;
            height: 198px;
        }

        .btn-lengkap {
            text-align: right;
            border-radius: 70px;
            flex: 0 1 auto;
        }

        .img-card-edukasi {
            flex: 0 1 auto;
        }

        .card-body-edukasi {
            flex: 1 1 auto;
        }

        .judul-mereka {
            margin-top: 5%;
        }

        .isi-forum {
            margin: 0;
            text-align: center;
            font-size: 30px;
        }

        .btn-lengkap-next {
            background-color: #033D68;
        }

        .btn-lengkap-next:hover {
            background-color: rgb(22, 15, 71);
        }

        .btn-baca-lengkap {
            text-align: right;
            border-radius: 70px;
        }

        .btn-baca-lengkap-next {
            background-color: #033D68;
            border: 2px solid white;
        }

        .btn-baca-lengkap-next:hover {
            background-color: rgb(22, 15, 71);
        }

        .btn-donasi {
            text-align: center;
            border-radius: 70px;
            border: 6px solid #033D68;
            margin-left: 38%;
            margin-right: 38%;
        }

        .btn-donasi a {
            color: white;
            border-radius: 80px 87px;
            font-weight: bold;
            font-size: 20px;
        }

        .btn-donasi-next {
            background-color: #033D68;
            border: 6px solid #033D68;
        }

        .btn-donasi-next:hover {
            background-color: rgb(22, 15, 71);
        }

        .btn-lihat-lengkap {
            text-align: right;
            border-radius: 70px;
            border: 2px solid white;
            margin-left: 35%;
        }

        .btn-lihat-lengkap a {
            color: #033D68;
            border-radius: 80px 87px;
            font-weight: bold;
            font-size: 20px;
        }

        .btn-lihat-lengkap-next {
            background-color: white;
            border: 6px solid #033D68;
        }

        .btn-lihat-lengkap-next:hover {
            background-color: rgb(22, 15, 71);
        }

        .card-news {
            background-color: #033D68;
            padding: 5px 0px 5px 10px;
        }

        .card {
            border-radius: 45px;
        }

        .judulberita {
            font-weight: bold;
            color: white;
            font-size: 30px;
            text-align: justify;
        }

        .carousel-indicators li {
            width: 10px;
            height: 10px;
        }

        .berita-content {
            padding-right: 3%;
            padding-left: 3%;
        }

        #synopsis-forum {
            text-align: justify;
        }

        .card-forum-main {
            width: 18rem;
            height: 35rem;
            margin-right: 0;
        }

        .card-body-forum {
            text-align: justify;
            flex: 1 1 auto;
        }

        .btn-forum {
            padding: 2% 6%;
            border-radius: 70px;
            text-align: right;
            flex: 0 1 auto;
        }

        .card-body-background {
            min-height: calc(35rem - 220px);
            background-color: #033D68;
            border-radius: 45px;
            padding-top: 15%;
            display: flex;
            flex-flow: column;
        }

    </style>
    <main>
        <section class="hal1">
            <div class="row hal1-section">
                <div class="col-8" style="padding-left:5%;">
                    <div class="judul"><b>CANCER SUFFERER'S PLACE TO SHARE</b></div>
                    <div class="rectangle"></div>
                    <div class="isi">
                        <b>
                            <p class="card-text" id="synopsis-forum">
                                CancerShare adalah salah satu tempat yang berfokus dalam memfasilitasi para pejuang kanker
                                untuk
                                bisa saling berbagi cerita dan pengalamannya kepada para pejuang lainnya serta masyrakat
                                umum di
                                Indonesia maupun dalam lingkup Internasional. Dengan ini, para pejuang kanker bisa saling
                                menyemangati satu dengan yang lain, juga bisa menjadi motivasi untuk terus berjuang bersama
                                sampai akhir.
                            </p>
                        </b>
                    </div>
                    <div class="btn-forum">
                        <a href="/tentang-kami" class="btn-lg btn btn-primary btn-forum-next">TENTANG KAMI</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="hal2" id="edukasi-main">
            <div class="tengah">
                <img style="width:100%;" src="{{ asset('img/Polygon 3.png') }}">
                <div class="judul2">EDUKASI</div>
                <div class="judul-edukasi">
                    <div class="rectangle2"></div>
                </div>
                <div class="isitulisan">
                    <p class="judulisi">
                        Mencegah lebih baik daripada mengobati. Yuk, pelajari selengkapnya!
                    </p>
                </div>
                <div class="row card-edukasi">
                    <div class="col">
                        <div class="card card-edukasi-content">
                            <div class="img-card-edukasi">
                                <img class="card-img-top" src="{{ asset('img/paruparu.png') }}" alt="Card image cap">
                            </div>
                            <div class="card-body card-body-edukasi">
                                <h5 class="card-title">Kanker Paru-Paru</h5>
                                <h5 style="color:white;" class="card-news">34.783 Kasus - 2020</h5>
                                <p class="card-text">Kanker paru-paru adalah kondisi ketika sel ganas
                                    (kanker) terbentuk di paru-paru. Kanker ini merupakan satu dari tiga jenis kanker
                                    yang
                                    paling banyak terjadi di Indonesia.</p>
                            </div>
                            <div class="btn-lengkap">
                                <a href="/edukasi/kankerparu" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-edukasi-content">
                            <div class="img-card-edukasi">
                                <img class="card-img-top" src="{{ asset('img/hati.png') }}" alt="Card image cap">
                            </div>
                            <div class="card-body card-body-edukasi">
                                <h5 class="card-title">Kanker Hati</h5>
                                <h5 style="color:white;" class="card-news">21.392 Kasus - 2020</h5>
                                <p class="card-text">Kanker hati adalah kanker yang bermula dari organ
                                    hati, dan bisa menyebar ke organ lain di tubuh. Kondisi ini terjadi ketika sel-sel
                                    di
                                    dalam hati bermutasi dan membentuk tumor.</p>
                            </div>
                            <div class="btn-lengkap">
                                <a href="/edukasi/kankerhati" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-edukasi-content">
                            <div class="img-card-edukasi">
                                <img class="card-img-top" src="{{ asset('img/darah.png') }}" alt="Card image cap">
                            </div>
                            <div class="card-body  card-body-edukasi">
                                <h5 class="card-title">Kanker Darah</h5>
                                <h5 style="color:white;" class="card-news">14.979 Kasus - 2020</h5>
                                <p class="card-text">Kanker darah adalah kondisi ketika sel darah yang
                                    menjadi abnormal atau ganas. Sebagian besar kanker ini bermula di sumsum tulang
                                    tempat
                                    sel darah diproduksi.</p>
                            </div>
                            <div class="btn-lengkap">
                                <a href="/edukasi/kankerdarah" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-edukasi-content">
                            <div class="img-card-edukasi">
                                <img class="card-img-top" src="{{ asset('img/usus.png') }}" alt="Card image cap">
                            </div>
                            <div class="card-body card-body-edukasi">
                                <h5 class="card-title">Kanker Usus Besar</h5>
                                <h5 style="color:white;" class="card-news">34.189 Kasus - 2020</h5>
                                <p class="card-text">Kanker usus besar adalah tumor ganas di usus besar.
                                    Gejala yang paling umum dari kanker usus besar adalah buang air besar (BAB)
                                    berdarah.
                                </p>
                            </div>
                            <div class="btn-lengkap">
                                <a href="/edukasi/kankerusus" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img style="width:100%;" src="{{ asset('img/Polygon 6.png') }}">
            </div>
        </section>
        <section class="hal3">
            <div class="tengah">
                <div class="judul2 judul-mereka">KATA MEREKA</div>
                <div class="rectangle2"></div>
                <div class="isitulisan">
                    <p class="isi-forum">
                        <b>“Sharing is Caring”</b>
                    </p>
                    <p class="isi-forum">
                        Ikuti kisah perjuangan mereka disini!
                    </p>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row" style="margin: 0 3% 0 13%;">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="col-sm">
                                        <div class="card card-forum-main">
                                            <div class="img-card-forum">
                                                <img class="card-img"
                                                    src="{{ asset('storage' . $posts[$i]->users->avatar) }}"
                                                    alt="Card image cap">
                                            </div>
                                            <div class="card-body-background">
                                                <div class="card-body card-body-forum">
                                                    <p class="card-text truncate-synopsis" style="color:white;">
                                                        {{ $posts[$i]->content }} </p>
                                                    <p class="card-text truncate-synopsis" style="color:white;">-
                                                        {{ $posts[$i]->users->firstname }}</p>
                                                </div>
                                                <div class="btn-forum">
                                                    <a href="{{ url('/forum/posts') }}/{{ $posts[$i]->postID }}"
                                                        class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari
                                                        Selengkapnya</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="margin: 0 3% 0 13%;">
                                @for ($i = 3; $i < 6; $i++)
                                    <div class="col-sm">
                                        <div class="card card-forum-main">
                                            <div class="img-card-forum">
                                                <img class="card-img"
                                                    src="{{ asset('storage' . $posts[$i]->users->avatar) }}"
                                                    alt="Card image cap">
                                            </div>
                                            <div class="card-body-background">
                                                <div class="card-body card-body-forum">
                                                    <p class="card-text truncate-synopsis" style="color:white;">
                                                        {{ $posts[$i]->content }} </p>
                                                    <p class="card-text truncate-synopsis" style="color:white;">-
                                                        {{ $posts[$i]->users->firstname }}</p>
                                                </div>
                                                <div class="btn-forum">
                                                    <a href="{{ url('/forum/posts') }}/{{ $posts[$i]->postID }}"
                                                        class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari
                                                        Selengkapnya</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="btn-to-forum">
                        <a href="/forum" class="btn btn-primary btn-to-forum-next">PERGI KE FORUM</a>
                    </div>
                </div>
            </div>
            <section class="hal4">
                <div class="judul2" style="margin-top:50px;">BERITA POPULER</div>
                <div class="rectangle2"></div>
                <div class="row" style="margin-top:34px;">
                    <div class="col-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/berita.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/berita.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/berita.png') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-4 berita-content" style="background-color: #28618C;padding-left:15px;">
                        <p class="judulberita" style="margin-top:40px;">INI 5 MANFAAT BUAH TIN, BISA UNTUK KESEHATAN
                            PENCERNAAN HINGGA ANTI KANKER
                        </p>
                        <div class="isiberita">
                            <p class="card-text" id="synopsis-forum" style="color:white;">
                                "KONTAN.CO.ID - JAKARTA. Banyak nutrisi dan vitamin yang terkandung dalam buah Tin atau buah
                                Ara.
                                Setidaknya, ada lima manfaat buah tin yang bisa diperoleh saat mengonsumsinya"
                            </p>
                        </div>
                        <div class="btn-baca-lengkap" style="margin-top:43.1px;">
                            <a href="#" class="btn btn-primary btn-baca-lengkap-next rounded-pill">BACA SELENGKAPNYA</a>
                        </div>
                        <div class="btn-lihat-lengkap"
                            style="margin-top:23px;font-size:18px;color:white;background-color:#033D68;">
                            LIHAT BERITA LAINNYA
                            <a href="/berita" class="btn btn-primary btn-lihat-lengkap-next ">></a>
                        </div>
                        <p style="margin-top:30%;color:white;font-weight:bold;">KOMPAS.COM</p>
                    </div>
                </div>
                <script>
                    $('.carousel').carousel()

                </script>
            </section>

            <section class="hal5">
                <img style="width:100%;" src="{{ asset('img/Polygon 5.png') }}">
                <div class="judul2" style="margin-top:60px;" style="font-size:64px;">DONASI UNTUK PEJUANG KANKER</div>
                <div class="isitulisan">
                    <p class="judulisi" style="font-size:30px;">
                        Mari kita bantu saudara kita penderita kanker dan beri dukungan penuh dengan berdonasi!
                    </p>
                </div>
                <div class="btn-donasi" style="margin-top:30px;margin-bottom:200px;font-size:30px;font-weight:bold;">
                    DONASI SEKARANG
                    <a href="/donasi" class="btn btn-primary btn-donasi-next ">></a>
                </div>
            </section>
    </main>

@endsection
