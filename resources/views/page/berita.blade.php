@extends('layouts.app')

@section('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <style>
        .carousel-caption {
            color: #1C1A62;
        }

        .btn-lengkap {
            text-align: right;
            border-radius: 70px;
        }

        .btn-lengkap-next {
            background-color: #9B9B9B;
        }

        .btn-lengkap-next:hover {
            background-color: rgb(22, 15, 71);
        }

        #content {
            border: 12px solid red;
            padding: 90px;
            margin: 0 45px 0 45px;
        }

        .titlebox {
            float: left;
            padding: 0 45px;
            margin: -137px 0 0 35vw;
            background: #fff;
        }

        .tombolbaca {
            text-align: right;
            margin-top: -6%;
        }

        .merahbulat {
            background-color: red;
            border-radius: 50%;
            width: 15px;
            height: 15px;
        }

        .nav {
            margin-right: 10%;
        }

        .nav button.active {
            border-bottom: 3px solid red !important;
            background-color: white;
        }

        .nav button {
            border-bottom: 3px solid grey !important;
            background-color: white;
        }

        /*Container holding the image and the text */
        .container {
            position: relative;
            text-align: center;
        }

        /* Top left text */
        .top-left {
            position: absolute;
            top: 3%;
            left: 7%;
            color: white;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered2 {
            position: absolute;
            top: 89%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .beritasingkat {
            height: 40%;
        }

    </style>
    <main>
        <div class="bag1">
            <div class="row">
                <div class="col-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/beritacarousel.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5
                                        style="text-align:left;font-size:30px;padding-right:25%;font-weight:bold;margin-top:-40%;">
                                        Deteksi Dini Kanker Serviks Pakai Asam Cuka Dapur, Ini Tips dari Pakar UI</h5>
                                    <div class="btn-lengkap" style="margin-top:20%;">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">BACA
                                            SELENGKAPNYA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/beritacarousel.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5
                                        style="text-align:left;font-size:30px;padding-right:25%;font-weight:bold;margin-top:-40%;">
                                        Deteksi Dini Kanker Serviks Pakai Asam Cuka Dapur, Ini Tips dari Pakar UI</h5>
                                    <div class="btn-lengkap" style="margin-top:20%;">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">BACA
                                            SELENGKAPNYA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/beritacarousel.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5
                                        style="text-align:left;font-size:30px;padding-right:25%;font-weight:bold;margin-top:-40%;">
                                        Deteksi Dini Kanker Serviks Pakai Asam Cuka Dapur, Ini Tips dari Pakar UI</h5>
                                    <div class="btn-lengkap" style="margin-top:20%;">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">BACA
                                            SELENGKAPNYA</a>
                                    </div>
                                </div>
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

                </div>

                <div class="col-4" style="background-color: #F3F3F3;">
                    <p class="judulberita" style="font-size:30px; font-weight:bold;text-align:center;color: #858585;">HOT
                        TOPIC</p>
                    <div class="beritasingkat" style="width: 100%;background-color:#DBD7D7;">
                        <div class="card-body" style="padding-top: 10%;">
                            <div class="row">
                                <div class="col-4"><img src="{{ asset('img/kanancarousel.png') }}" class="d-block w-100"
                                        alt="..."></div>
                                <div class="col-8" style="font-size:15px;">Angka Kematian Masih Tinggi, Kanker Paru Didorong
                                    Jadi Prioritas Nasional<br></br>8 days ago</div>
                            </div>
                            <div class="tombolbaca">
                                <a href="#" style="color:black;font-weight:bold;">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="beritasingkat" style="width: 100%;background-color:#DBD7D7;margin-top:1px;">
                        <div class="card-body" style="padding-top: 10%;">
                            <div class="row">
                                <div class="col-4"><img src="{{ asset('img/kanancarousel2.png') }}" class="d-block w-100"
                                        alt="..."></div>
                                <div class="col-8" style="font-size:15px;">Derita Bocah Kristina, Lidah Bengkak dan Menjulur
                                    8,5 Sentimeter karena Kanker<br></br>2 weeks ago</div>
                            </div>
                            <div class="tombolbaca" style="margin-top:1%;">
                                <a href="#" style="color:black;font-weight:bold;">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('.carousel').carousel()

                </script>
            </div>
            <div class="bag2" style="margin-top:60px;">
                <div class="row">
                    <div class="col" style="padding-left: 3%;">
                        <div class="latestnews" style="margin-left:16%;">LATEST NEWS</div>
                        <div class="merahbulat" style="margin-left:10%;margin-top:-20px;"></div>
                        <div class="beritasingkat-2" style="width: 100%;margin-top:15px;">
                            <div class="card-body">
                                <div style="font-size:20px;font-weight:bold;text-transform:uppercase;">Gejala Kanker Otak,
                                    Penyebab, dan Pencegahannya yang Perlu Dilakukan</div>
                                <div style="font-size:14px;margin-top:4%;">6 minutes ago</div>
                            </div>
                        </div>
                        <div class="beritasingkat-2" style="width: 100%;margin-top:1px;">
                            <div class="card-body">
                                <div style="font-size:20px;font-weight:bold;text-transform:uppercase;">Dukung pengidap
                                    kanker, aksi viral tukang cukur ikut pangkas rambutnya bikin haru</div>
                                <div style="font-size:14px;margin-top:4%;">10 minutes ago</div>
                            </div>
                        </div>
                        <div class="beritasingkat-2" style="width: 100%;margin-top:1px;">
                            <div class="card-body">
                                <div style="font-size:20px;font-weight:bold;text-transform:uppercase;">Mewujudkan asa anak
                                    penderita kanker di sulut</div>
                                <div style="font-size:14px;margin-top:4%;">14 minutes ago</div>
                            </div>
                        </div>
                        <div class="beritasingkat-2" style="width: 100%;margin-top:1px;">
                            <div class="card-body">
                                <div style="font-size:20px;font-weight:bold;text-transform:uppercase;">angka kematian masih
                                    tinggi, kanker paru didorong jadi prioritas nasional</div>
                                <div style="font-size:14px;margin-top:4%;">14 minutes ago</div>
                            </div>
                        </div>
                        <div class="beritasingkat-2" style="width: 100%;margin-top:1px;">
                            <div class="card-body">
                                <div style="font-size:20px;font-weight:bold;text-transform:uppercase;">diduga idap kanker
                                    kulit, warga kutai kartanegara butuh uluran tangan</div>
                                <div style="font-size:14px;margin-top:4%;">14 minutes ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="container">
                            <img src="{{ asset('img/beritatengah.png') }}" alt="Snow" style="width:100%;">
                            <div class="top-left">Judul</div>
                            <div class="centered">INI KALIMAT ITUNYA, KAYA JUDUL</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist"
                            style="align-items:center; justify-content:center;">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">LAST NEWS</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">HOT
                                TOPIC</button>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    Gejala Kanker Otak, Penyebab, dan Pencegahannya yang Perlu Dilakukan
                                                </div>
                                                <div style="font-size:12px;margin-top:4%;">6 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    Dukung pengidap kanker, aksi viral tukang cukur ikut pangkas rambutnya
                                                    bikin haru</div>
                                                <div style="font-size:12px;margin-top:4%;">10 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    Mewujudkan asa anak penderita kanker di sulut</div>
                                                <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">angka
                                                    kematian masih tinggi, kanker paru didorong jadi prioritas nasional
                                                </div>
                                                <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    diduga idap kanker kulit, warga kutai kartanegara butuh uluran tangan
                                                </div>
                                                <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    Gejala Kanker Otak, Penyebab, dan Pencegahannya yang Perlu Dilakukan
                                                </div>
                                                <div style="font-size:12px;margin-top:4%;">6 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    Dukung pengidap kanker, aksi viral tukang cukur ikut pangkas rambutnya
                                                    bikin haru</div>
                                                <div style="font-size:12px;margin-top:4%;">10 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    Mewujudkan asa anak penderita kanker di sulut</div>
                                                <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">angka
                                                    kematian masih tinggi, kanker paru didorong jadi prioritas nasional
                                                </div>
                                                <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                    class="d-block w-100" style="width:56px; height:56px;"></div>
                                            <div class="col-9">
                                                <div style="font-size:14px;font-weight:bold;text-transform:uppercase;">
                                                    diduga idap kanker kulit, warga kutai kartanegara butuh uluran tangan
                                                </div>
                                                <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                        class="d-block w-100" style="width:56px; height:56px;"></div>
                                                <div class="col-9">
                                                    <div style="font-size:12px;font-weight:bold;text-transform:uppercase;">
                                                        Gejala Kanker Otak, Penyebab, dan Pencegahannya yang Perlu Dilakukan
                                                    </div>
                                                    <div style="font-size:12px;margin-top:4%;">6 minutes ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                        class="d-block w-100" style="width:56px; height:56px;"></div>
                                                <div class="col-9">
                                                    <div style="font-size:12px;font-weight:bold;text-transform:uppercase;">
                                                        Dukung pengidap kanker, aksi viral tukang cukur ikut pangkas
                                                        rambutnya bikin haru</div>
                                                    <div style="font-size:12px;margin-top:4%;">10 minutes ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                        class="d-block w-100" style="width:56px; height:56px;"></div>
                                                <div class="col-9">
                                                    <div style="font-size:12px;font-weight:bold;text-transform:uppercase;">
                                                        Mewujudkan asa anak penderita kanker di sulut</div>
                                                    <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                        class="d-block w-100" style="width:56px; height:56px;"></div>
                                                <div class="col-9">
                                                    <div style="font-size:12px;font-weight:bold;text-transform:uppercase;">
                                                        angka kematian masih tinggi, kanker paru didorong jadi prioritas
                                                        nasional</div>
                                                    <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="beritasingkat" style="width: 100%;margin-top:15px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3"><img src="{{ asset('img/kanancarousel.png') }}"
                                                        class="d-block w-100" style="width:56px; height:56px;"></div>
                                                <div class="col-9">
                                                    <div style="font-size:12px;font-weight:bold;text-transform:uppercase;">
                                                        diduga idap kanker kulit, warga kutai kartanegara butuh uluran
                                                        tangan</div>
                                                    <div style="font-size:12px;margin-top:4%;">14 minutes ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="content" style="margin-top:50px;margin-bottom:50px;">
                <div class="titlebox" style="font-size:48px;font-family:'Quando';">Quotes</div>
                <div class="container">
                    <img src="{{ asset('img/quotes.png') }}" alt="Snow" style="width:24%;">
                    <div class="centered1" style="font-size:36px;text-align:center;"><b>Health is the greatest gift,
                        contentment the greatest wealth, faithfulness the best relationship.</b></div>
                    <div class="centered2" style="color:#28618C;text-align:center; font-size:18px; margin-top: 2%;">Gautama Buddha</div>
                </div>

            </div>
    </main>

@endsection
