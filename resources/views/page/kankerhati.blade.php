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
            <div class="judul">Kanker Hati</div>
            <div class="rectangle"></div>
            <div class="isi"style="margin-top:48px;text-align:justify;margin-right:5%;">
                <p class="card-text " id="synopsis-forum" style="font-size:20px;">
                Hati merupakan organ yang berfungsi untuk menetralisir racun di 
                dalam tubuh, membentuk protein dan faktor pembekuan darah, serta 
                memetabolisme beberapa hormon. Kanker hati adalah suatu tumor 
                ganas yang bermula dari organ hati. Kondisi ini terjadi ketika sel-sel di 
                dalam hati bermutasi dan membentuk tumor. Terdapat dua jenis kanker hati, 
                yaitu kanker yang berasal dari sel hati (hepatoma) dan kanker yang berasal 
                dari organ lain yang menjalar ke hati (metastasis).
                </p>
            </div>
        </div>
        <div class="col-6"style="margin-top:20px; text-align: right; padding-right: 4.4%;"><img src="{{ asset('img/edukasiHati.png') }}" style="width:650px;height:500px;"></div>
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
            Umumnya penderita kanker hati stadium awal tidak merasakan gejala apa pun. 
            Gejala baru akan terlihat bila kanker sudah memasuki stadium lanjut. 
            Meskipun demikian, beberapa keluhan berikut dapat diwaspadai sebagai gejala kanker hati:
            <br><br>
            <ol>
            <li>Berat badan menurun tanpa penyebab yang jelas.</li>
            <li>Demam berkepanjangan yang tidak jelas penyebabnya.</li>
            <li>Gangguan kesadaran </li>
            <li>Gatal di seluruh tubuh.</li>
            <li>Kehilangan nafsu makan.</li>
            <li>Mata dan kulit terlihat kuning (jaundice).</li>
            <li>Mual dan muntah.</li>
            <li>Pembesaran limpa.</li>
            <li>Penumpukan cairan dalam perut (asites).</li>
            <li>Perut terasa penuh meski hanya makan sedikit.</li>
            <li>Rasa tidak nyaman atau nyeri pada perut kanan atas.</li>
            <li>Tinja berwarna putih seperti kapur.</li>
            <li>Tubuh mudah lelah dan lemas.</li>
            <li>Tubuh mudah memar dan mengalami perdarahan.</li>
            <li>Ukuran hati membesar.</li>
            <li>Urine berwarna gelap</li>
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
            Meski belum diketahui penyebabnya, risiko terserang kanker hati lebih besar pada individu dengan sejumlah faktor berikut:
            <br></br>
            <ol>
            <li>Infeksi kronis hepatitis B atau hepatitis C.</li>
            <li>Sirosis atau terbentuknya jaringan parut di hati.</li>
            <li>Penyakit perlemakan hati.</li>
            <li>Konsumsi alkohol berlebihan.</li>
            <li>Penyakit hati turunan, seperti hemokromatosis dan penyakit Wilson.</li>
            <li>Kondisi tertentu, seperti diabetes, lupus, atau obesitas.</li>
            <li>Merokok.</li>
            <li>Paparan aflaktosin, suatu racun dari jamur yang mengontaminasi tumbuh-tumbuhan yang akan dijadikan makanan, serta tidak disimpan dengan baik.</li>
            <li> Sistem kekebalan tubuh lemah, misalnya karena menderita HIV/AIDS atau baru menjalani transplantasi organ tubuh.</li>
            <li>Paparan zat kimia, seperti arsenik, vinil klorida, dan trichloroethylene.</li>
            <li>Paparan radiasi dari foto Rontgen atau CT scan.</li>
            <li>Menjalani operasi pengangkatan kandung empedu (kolesistektomi).</li>
            </ol>
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
            Beberapa upaya yang dapat dilakukan untuk mencegah kanker hati, antara lain:<br></br>
            <ol>
            <li>Melakukan hubungan intim yang aman.</li>
            <li>Mendapatkan vaksin hepatitis B.</li>
            <li>Menggunakan alat pelindung diri saat terpapar bahan kimia.</li>
            <li>Mengurangi konsumsi alkohol.</li>
            <li>Menjaga berat badan tetap ideal.</li>
            <li>Menjauhi NAPZA, terutama dalam bentuk suntik.</li>
            </ol>
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
            Jika tumor masih berukuran kecil, pengobatan utama adalah dengan melakukan operasi pengangkatan tumor, 
            yang dapat dilanjutkan dengan transplantasi hati. Namun, jika kondisi tumor sudah berukuran besar dan tidak 
            dapat dioperasi, pengobatan yang dapat dilakukan adalah dengan kemoterapi dan radiasi untuk mengecilkan ukuran 
            tumor dan meringankan gejala yang dialami penderitanya, tetapi tidak dapat menghilangkan tumor sepenuhnya.
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
                <a href="/edukasi/kankerparu" class="btn btn-primary btn-next">Kanker Paru-Paru</a>
            </div>
        </div>
        <div class="col-4" style="text-align: center;">
            <div class="btn">
                <a href="/edukasi/kankerdarah" class="btn btn-primary btn-next">Kanker Darah</a>
            </div>
        </div>
        <div class="col-4" style="text-align: left;">
            <div class="btn" >
                <a href="/edukasi/kankerusus" class="btn btn-primary btn-next">Kanker Usus Besar</a>
            </div>
        </div>
    </div>
    </main>  

@endsection
