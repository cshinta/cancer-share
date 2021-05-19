@extends('layouts.app')

@section('content')
    <style>
    .rectangle{
            position: absolute;
            width: 140px;
            height: 20px;
            margin-top: 5px;
            border-radius:45px;

            background: #033D68;
        }
        .btn-forum{
            text-align: left;
            margin-left:30%;
            border-radius:70px;
        }

        .btn-forum-next{
            background-color: #033D68;
        }

        .btn-forum-next:hover{
            background-color:rgb(22, 15, 71);
        }
        .btn-to-forum{
            text-align: center;
            border-radius:70px;
            margin-top:15px;
        }

        .btn-to-forum-next{
            background-color: #033D68;
        }

        .btn-to-forum-next:hover{
            background-color:rgb(22, 15, 71);
        }
        .judul{
          font-weight:bold;
          font-size:60px;
        }
        .isi{
          margin-top:60px;
        }
        
        .isitulisan{
          margin-top:25px;
        }
        .truncate-synopsis {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .judul2{
          font-weight:bold;
          font-size:60px;
          text-align:center;
        }
        .rectangle2{
          position: absolute;
          width: 140px;
          height: 20px;
          margin-left:45%;
          border-radius:45px;

          background: #033D68;
        }
        .judulisi{
          text-align:center;
        }
        .card-img-top{
          width:130px;
          height:87px;
        }
        .card-img{
            margin-left:50px;
            margin-top:20px;
            width:192px;
            height:198px;
        }
        .btn-lengkap{
            text-align: right;
            border-radius:70px;
        }
        .btn-lengkap-next{
            background-color: #033D68;
        }

        .btn-lengkap-next:hover{
            background-color:rgb(22, 15, 71);
        }
        .btn-baca-lengkap{
            text-align: right;
            border-radius:70px;
            
        }
        .btn-baca-lengkap-next{
            background-color: #033D68;
            border: 2px solid white;
        }

        .btn-baca-lengkap-next:hover{
            background-color:rgb(22, 15, 71);
        }
        
        .btn-donasi{
            text-align: center;
            border-radius:70px;
            border: 6px solid #033D68;
            margin-left:38%;
            margin-right:38%;
        }
        .btn-donasi a{
          color:white;
          border-radius:80px 87px;
          font-weight:bold;
          font-size:20px;
        }
        .btn-donasi-next{
            background-color: #033D68;
            border: 6px solid #033D68;
        }

        .btn-donasi-next:hover{
            background-color:rgb(22, 15, 71);
        }
        .btn-lihat-lengkap{
            text-align: right;
            border-radius:70px;
            border: 2px solid white;
            margin-left:50%;
        }
        .btn-lihat-lengkap a{
          color:#033D68;
          border-radius:80px 87px;
          font-weight:bold;
          font-size:20px;
        }
        .btn-lihat-lengkap-next{
            background-color: white;
            border: 6px solid #033D68;
        }

        .btn-lihat-lengkap-next:hover{
            background-color:rgb(22, 15, 71);
        }
        .card-news{
          background-color: #033D68;
          margin-right:50px;
          padding: 5px 0px 5px 10px;
        }
        .card{
          border-radius:45px;
        }
        .judulberita{
          font-weight:bold;
          color:white;
          font-size:25px;
        }
        .carousel-indicators > li {
            border-radius: 500px;
        }
    </style>
    <main>
        <div class="hal1">
        <div class="row">
            <div class="col-8"style="padding-left:80px;">
            <div class="judul">CANCER SUFFERER'S <br>PLACE TO SHARE</div>
            <div class="rectangle"></div>
            <div class="isi">
                <p class="card-text truncate-synopsis" id="synopsis-forum">
                kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                </p>
            </div>
            <div class="btn-forum">
                <a href="#" class="btn btn-primary btn-forum-next rounded-pill">TENTANG KAMI</a>
            </div>
            </div>

            <div class="col-4">
            <img class="handcrop" style="width:450px; height:650px;object-fit:cover;object-position:91% 0%"src="{{ asset('img/crophand.png') }}" >
            </div>
        </div>
        </div>
        <div class="hal2">
        <div class="tengah">
            <img  style="width:100%;"src="{{ asset('img/Polygon 3.png') }}" >
            <div class="judul2">EDUKASI</div>
            <div class="rectangle2"></div>
            <div class="isitulisan">
                <p class="judulisi">
                Mencegah lebih baik daripada mengobati. Yuk, pelajari selengkapnya!
                </p>
            </div>
            <div class="row">
                <div style="margin-left:70px;"class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/paruparu.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Kanker Paru-Paru</h5>
                    <h5  style="color:white;" class="card-news" >34.783 Kasus - 2020</h5>
                    <p class="card-text truncate-synopsis">Kanker paru-paru adalah kondisi ketika sel ganas (kanker) terbentuk di paru-paru. Kanker ini merupakan satu dari tiga jenis kanker yang paling banyak terjadi di Indonesia.</p>
                    <div class="btn-lengkap">
                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                    </div>
                </div>
                </div>
                </div>
                <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/hati.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Kanker Hati</h5>
                    <h5  style="color:white;" class="card-news" >21.392 Kasus - 2020</h5>
                    <p class="card-text truncate-synopsis">Kanker hati adalah kanker yang bermula dari organ hati, dan bisa menyebar ke organ lain di tubuh. Kondisi ini terjadi ketika sel-sel di dalam hati bermutasi dan membentuk tumor.</p>
                    <div class="btn-lengkap">
                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/darah.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Kanker Darah</h5>
                    <h5  style="color:white;" class="card-news" >14.979 Kasus - 2020</h5>
                    <p class="card-text truncate-synopsis">Kanker darah adalah kondisi ketika sel darah yang menjadi abnormal atau ganas. Sebagian besar kanker ini bermula di sumsum tulang tempat sel darah diproduksi.</p>
                    <div class="btn-lengkap">
                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/usus.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Kanker Usus Besar</h5>
                    <h5  style="color:white;" class="card-news" >34.189 Kasus - 2020</h5>
                    <p class="card-text truncate-synopsis">Kanker usus besar adalah tumor ganas di usus besar. Gejala yang paling umum dari kanker usus besar adalah buang air besar (BAB) berdarah.</p>
                    <div class="btn-lengkap">
                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <img  style="width:100%;"src="{{ asset('img/Polygon 6.png') }}" >
        </div>
        </div>
        <div class="hal3">
        <div class="tengah">
            <div class="judul2">KATA MEREKA</div>
            <div class="rectangle2"></div>
            <div class="isitulisan">
                <p class="judulisi">
                “Sharing is Caring”<br>Ikuti kisah perjuangan mereka disini!
                </p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row"style="margin-left:150px;">
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img" src="{{ asset('img/profilAvatar.png') }}" alt="Card image cap">
                                <div class="card-body"style="background-color:#033D68;border-radius:45px;padding-top:70px;">
                                    <p class="card-text truncate-synopsis"style="color:white;">Awalnya saya merasa putus asa saat menderita penyakit kanker. Namun, akhirnya Saya mencoba </p>
                                    <p class="card-text truncate-synopsis"style="color:white;">- Arief</p>
                                    <div class="btn-lengkap">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img" src="{{ asset('img/profilAvatar.png') }}" alt="Card image cap">
                                <div class="card-body"style="background-color:#033D68;border-radius:45px;padding-top:70px;">
                                    <p class="card-text truncate-synopsis"style="color:white;">Awalnya saya merasa putus asa saat menderita penyakit kanker. Namun, akhirnya Saya mencoba </p>
                                    <p class="card-text truncate-synopsis"style="color:white;">- Arief</p>
                                    <div class="btn-lengkap">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img" src="{{ asset('img/profilAvatar.png') }}" alt="Card image cap">
                                <div class="card-body"style="background-color:#033D68;border-radius:45px;padding-top:70px;">
                                    <p class="card-text truncate-synopsis"style="color:white;">Awalnya saya merasa putus asa saat menderita penyakit kanker. Namun, akhirnya Saya mencoba </p>
                                    <p class="card-text truncate-synopsis"style="color:white;">- Arief</p>
                                    <div class="btn-lengkap">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row"style="margin-left:150px;">
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img" src="{{ asset('img/profilAvatar.png') }}" alt="Card image cap">
                                <div class="card-body"style="background-color:#033D68;border-radius:45px;padding-top:70px;">
                                    <p class="card-text truncate-synopsis"style="color:white;">Awalnya saya merasa putus asa saat menderita penyakit kanker. Namun, akhirnya Saya mencoba </p>
                                    <p class="card-text truncate-synopsis"style="color:white;">- Arief</p>
                                    <div class="btn-lengkap">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img" src="{{ asset('img/profilAvatar.png') }}" alt="Card image cap">
                                <div class="card-body"style="background-color:#033D68;border-radius:45px;padding-top:70px;">
                                    <p class="card-text truncate-synopsis"style="color:white;">Awalnya saya merasa putus asa saat menderita penyakit kanker. Namun, akhirnya Saya mencoba </p>
                                    <p class="card-text truncate-synopsis"style="color:white;">- Arief</p>
                                    <div class="btn-lengkap">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img" src="{{ asset('img/profilAvatar.png') }}" alt="Card image cap">
                                <div class="card-body"style="background-color:#033D68;border-radius:45px;padding-top:70px;">
                                    <p class="card-text truncate-synopsis"style="color:white;">Awalnya saya merasa putus asa saat menderita penyakit kanker. Namun, akhirnya Saya mencoba </p>
                                    <p class="card-text truncate-synopsis"style="color:white;">- Arief</p>
                                    <div class="btn-lengkap">
                                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">Pelajari Selengkapnya</a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            <div class="btn-to-forum">
                <a href="#" class="btn btn-primary btn-to-forum-next rounded-pill">PERGI KE FORUM</a>
            </div>
        </div>
        </div>
        <div class="hal4">
            <div class="judul2" style="margin-top:50px;">BERITA POPULER</div>
            <div class="rectangle2"></div>
            <div class="row"style="margin-top:34px;">
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
                </div>
            </div>

            <div class="col-4" style="background-color: #28618C;padding-left:15px;">
                <p class="judulberita" style="margin-top:40px;">INI 5 MANFAAT BUAH TIN,<br> BISA UNTUK KESEHATAN <br>PENCERANAAN HINGGA ANTI <br>KANKER</p>
                <div class="isiberita"style="padding-right:80px;margin-top:55px;">
                <p class="card-text truncate-synopsis" id="synopsis-forum" style="color:white;">
                "KONTAN.CO.ID - JAKARTA. Banyak nutrisi dan vitamin yang terkandung dalam buah Tin atau buah Ara. 
                Setidaknya, ada lima manfaat buah tin yang bisa diperoleh saat mengonsumsinya"
                </p>
                </div>
                <div class="btn-baca-lengkap"  style="margin-top:43.1px;">
                <a href="#" class="btn btn-primary btn-baca-lengkap-next rounded-pill">BACA SELENGKAPNYA</a>
                </div>
                <div class="btn-lihat-lengkap" style="margin-top:23px;font-size:18px;color:white;background-color:#033D68;">
                    LIHAT BERITA LAINNYA
                    <a href="#" class="btn btn-primary btn-lihat-lengkap-next ">></a>
                </div>
                <p style="margin-top:30%;color:white;font-weight:bold;">KOMPAS.COM</p>
            </div>
            </div>
            <script>$('.carousel').carousel()</script>
        </div>
        
        <div class="hal5">
        <img  style="width:100%;"src="{{ asset('img/Polygon 5.png') }}" >
        <div class="judul2"style="margin-top:60px;"style="font-size:64px;">DONASI UNTUK PEJUANG KANKER</div>
        <div class="isitulisan">
            <p class="judulisi"style="font-size:30px;">
            Mari kita bantu saudara kita penderita kanker dan beri dukungan penuh dengan berdonasi!
            </p>
        </div>
        <div class="btn-donasi" style="margin-top:30px;margin-bottom:200px;font-size:30px;font-weight:bold;">
            DONASI SEKARANG
            <a href="#" class="btn btn-primary btn-donasi-next ">></a>
        </div>
        </div>
    </main>  

@endsection
