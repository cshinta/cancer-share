@extends('layouts.app')

@section('content')
    
    
    <style>
      .carousel-caption{
        color:#1C1A62;
      }
      .btn-lengkap{
            text-align: right;
            border-radius:70px;
        }
        .btn-lengkap-next{
            background-color: #9B9B9B;
        }

        .btn-lengkap-next:hover{
            background-color:rgb(22, 15, 71);
        }
        #content{
            border:12px solid red;
            padding:90px;
            margin: 0 45px 0 45px;
        }
        .titlebox{
            float:left;
            padding:0 45px;
            margin:-137px 0 0 50%;
            background:#fff;
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
                    <img src="{{ asset('img/beritacarousel.png') }}"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="btn-lengkap"  style="">
                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">BACA SELENGKAPNYA</a>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('img/beritacarousel.png') }}"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="btn-lengkap"  style="">
                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">BACA SELENGKAPNYA</a>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('img/beritacarousel.png') }}"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Thrid slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="btn-lengkap"  style="">
                        <a href="#" class="btn btn-primary btn-lengkap-next rounded-pill">BACA SELENGKAPNYA</a>
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
            </div>
            </div>
            <script>$('.carousel').carousel()</script>
        </div>
        <div class="bag2"style="margin-top:60px;">
            <div class="row">
                <div class="col">
                1 of 3
                </div>
                <div class="col-5">
                <img src="{{ asset('img/beritatengah.png') }}"  class="d-block w-100"style="z-index:-1;">
                <p>INI KALIMAT ITUNYA, KAYA JUDUL</p>
                </div>
                <div class="col">
                3 of 3
                </div>
            </div>
            </div>
        </div>
        <div id="content"style="margin-top:50px;margin-bottom:50px;">
            <div class="titlebox"style="font-size:48px;font-family:'Quando';">Quotes</div>
            <p style="font-size:36px;text-align:center;">
            Health is the greatest gift, contentment the greatest wealth, faithfulness the best relationship.
            </p>
            <img src="{{ asset('img/quotes.png') }}"style="margin-left:50%;z-index:-1;">
            <p style="color:blue;text-align:center;">Gautama Buddha</p>
        </div>
    </main>  

@endsection
