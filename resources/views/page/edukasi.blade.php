@extends('layouts.app')

@section('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
        .rectangle{
            position: absolute;
            width: 350px;
            height: 20px;
            margin-top: 5px;
            border-radius:45px;

            background: #033D68;
        }
        .judul{
          font-weight:bold;
          font-size:60px;
        }
        .accordion{
            margin-right:4.4%;
            margin-left:4.4%;
            border-radius:45px;
            margin-bottom:40px;
            border: 2px solid #033D68;
        }
        .accordion-button{
            background-color:#033D68;
            color:white;
            font-size:35px;
            text-align:left;
            width:100%;
            border-radius:45px 45px 45px 45px ;
            height:100%;
            padding: 2% 3%;
            font-weight: bold;
        }
        .accordion-body{
            text-align:justify;
            margin:20px 2% 20px 2%;
            font-size:18px;
            border-color:#033D68;
        }
        .accordion-item{
            border-color:#033D68;
        }
        .btn{
            padding: 5px 30px 5px 30px;
            font-size:24px;
        }
        .btn-next{
            background-color: #033D68;
        }

        .btn-next:hover{
            background-color:rgb(22, 15, 71);
        }
        .titlebox{
            float:left;
            padding:0 5px;
            margin:-25px 0 0 50%;
            background:#fff;
        }
        .down-symbol{
            margin-right: 3%;
        }
        .separator {
              padding-top: 2%;
              display: flex;
              align-items: center;
              text-align: center;
              color: black;
              font-size: 30px;
              font-weight: bold;
          }

          .separator::before,
          .separator::after {
              content: '';
              flex: 1;
              border-bottom: 1px solid #B5B2B2;
          }
          .separator:not(:empty)::before {
              margin-right: 1em;
          }

          .separator:not(:empty)::after {
              margin-left: 1em;
          }
          .col-4{
              margin: 0;
          }
    </style>
    <main>
    <div class="row" style="margin-bottom: 3%;">
        <div class="col-6"style="padding-left:4.4%;margin-bottom:78px;">
            <div class="judul">Kanker Paru-Paru</div>
            <div class="rectangle"></div>
            <div class="isi"style="margin-top:48px;text-align:justify;margin-right:5%;">
                <p class="card-text " id="synopsis-forum" style="font-size:20px;">
                Kanker paru-paru adalah suatu kondisi di mana sel-sel tumbuh secara tidak terkendali di dalam paru-paru 
                (organ yang berfungsi untuk menyebarkan oksigen ke dalam darah saat menghirup napas dan membuang karbondioksida
                 saat menghela napas). Kanker ini lebih banyak dialami oleh orang yang memiliki kebiasaan merokok dan merupakan 
                 satu dari tiga jenis kanker yang paling banyak terjadi di Indonesia.
                 <br><br>Walaupun sering terjadi pada perokok, kanker paru-paru juga bisa terjadi pada orang yang bukan perokok, 
                 terutama pada orang yang sering terpapar zat kimia di lingkungan kerjanya atau terpapar asap rokok dari orang lain (perokok pasif).
                </p>
            </div>
        </div>
        <div class="col-6"style="margin-top:20px; text-align: right; padding-right: 4.4%;"><img src="{{ asset('img/edukasiParu.png') }}" style="width:650px;height:500px;"></div>
    </div>
    <div class="accordion" id="accordionPanelsStayOpenExample" style="border-color: transparent;">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button button-edukasi" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <i class="fas fa-chevron-down down-symbol"></i> Gejala
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
            Sebagian besar gejala kanker paru terjadi di paru-paru, tapi juga mungkin mengalami gejala lain pada tubuh. 
            Hal ini karena kanker telah menyebar (dalam istilah medis disebut metastasis) ke bagian tubuh lainnya. 
            Tingkat keparahan gejala juga berbeda. Beberapa bahkan mungkin tidak merasakan gejala atau hanya merasa lelah pada umumnya. 
            Beberapa gejala yang harus diketahui, meliputi:
            <br><br>
            <ol>
            <li>Ketidaknyamanan atau nyeri pada dada</li>
            <li>Batuk yang tidak hilang atau semakin memburuk dari waktu ke waktu</li>
            <li>Masalah pernapasan</li>
            <li>Mengi</li>
            <li>Darah dalam dahak (lendir batuk dari paru-paru)</li>
            <li>Suara serak</li>
            <li>Masalah dalam menelan</li>
            <li>Kehilangan selera makan</li>
            <li>Kehilangan berat badan tanpa alasan yang diketahui</li>
            <li>Merasa sangat lelah</li>
            <li>Peradangan atau sumbatan di paru-paru</li>
            <li>Pembengkakan atau pembesaran kelenjar getah bening dalam dada di daerah paru-paru</li>
            </ol>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <i class="fas fa-chevron-down down-symbol"></i>Penyebab
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
            Kebanyakan kasus dari kanker paru-paru disebabkan karena rokok. 
            Rokok adalah faktor risiko terbesar dari kanker paru. Rokok mengandung
            60 zat racun yang berbeda, sehingga dapat menyebabkan kanker. Zat racun tersebut dikenal sebagai zat karsinogenik.

            <br></br>Jika seseorang merokok 25 batang sehari, berarti orang tersebut berisiko 25 
            kali lebih besar untuk mengidap kanker paru daripada orang yang tidak merokok. 
            Mengonsumsi tembakau lain dengan cara berbeda, seperti cerutu atau kunyah, juga dapat menyebabkan kanker paru dan kanker lainnya. Misalnya, kanker esofagus dan mulut.

            <br></br>Menghisap ganja juga meningkatkan risiko terkena kanker paru. Perokok pasif juga 
            meningkatkan risiko kanker paru. Riset membuktikan bahwa perokok pasif wanita yang
            pasangannya merokok, maka memiliki risiko 25 persen lebih besar daripada yang tinggal dengan orang yang tidak merokok.

             <br></br>Paparan terhadap zat racun lainya seperti arsen, asbes, silika, bau gas atau bensin, 
            gas NO (hasil dari kendaraan), dan sebagainya juga meningkatkan risiko terkena kanker paru. 
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <i class="fas fa-chevron-down down-symbol"></i>Pencegahan
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
            Cara terbaik untuk mencegah kanker paru-paru adalah dengan menghindari rokok dan asapnya. 
            Berhenti merokok selama 10 tahun menurunkan risiko kanker paru hingga 50 persen.

            <br></br>Riset juga membuktikan bahwa diet rendah lemak, tinggi serat, dan banyak mengonsumsi sayur,
             buah serta biji-bijian dapat menurunkan risiko kanker paru dan kanker lainnya. Selain itu, 
             olahraga secara teratur juga ditemukan dapat membantu menurunkan risiko kanker paru dan kanker lainnya. 
             Orang dewasa minimal harus melakukan olahraga aerobik intensitas sedang 150 menit seminggu.
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <i class="fas fa-chevron-down down-symbol"></i>Pengobatan
            </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">
            Pengobatan kanker paru-paru tergantung dari tipe kankernya dan kondisi tubuh secara umum. 
            Jika kanker didiagnosis pada tahap awal dan hanya di area kecil, akan membuat hasil perbedaan yang lebih baik pada hasil pengobatannya.

            <br></br>Pembedahan mengangkat kanker paru dapat dilakukan. Jika kondisi kesehatan pengidap melemah, 
            radioterapi dapat dilakukan untuk menghancurkan sel kanker. Jika kanker sudah menyebar, pembedahan 
            dan radioterapi tidak dapat dilakukan. Kemoterapi biasanya digunakan untuk kasus tersebut.
            </div>
            </div>
        </div>
    </div>
    <div id="content"style="margin-top:10px;margin-bottom:5px;">
        <div class="separator">Lihat Edukasi Lainnya</div>
    </div>
    <div class="row"style="margin:30px 10% 100px 9%;">
        <div class="col-4" style="text-align: right;">
            <div class="btn">
                <a href="#" class="btn btn-primary btn-next">Kanker Hati</a>
            </div>
        </div>
        <div class="col-4" style="text-align: center;">
            <div class="btn">
                <a href="#" class="btn btn-primary btn-next">Kanker Darah</a>
            </div>
        </div>
        <div class="col-4" style="text-align: left;">
            <div class="btn" >
                <a href="#" class="btn btn-primary btn-next">Kanker Usus Besar</a>
            </div>
        </div>
    </div>
    </main>  

@endsection
