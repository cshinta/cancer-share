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
            <div class="judul">Kanker Darah</div>
            <div class="rectangle"></div>
            <div class="isi"style="margin-top:48px;text-align:justify;margin-right:5%;">
                <p class="card-text " id="synopsis-forum" style="font-size:20px;">
                Kanker darah atau blood cancer adalah kondisi ketika sel darah yang menjadi abnormal atau ganas. 
                Sebagian besar kanker ini bermula di sumsum tulang tempat sel darah diproduksi. 
                Terdapat tiga jenis kanker darah, yaitu leukemia, limfoma, dan multiple myeloma.
                <br></br>Berbeda dengan kebanyakan kanker, sebagian besar kanker darah tidak membentuk benjolan padat (tumor).
                Selain tidak muncul benjolan, gejala kanker darah juga tidak spesifik dan menyerupai gejala penyakit lain.
                </p>
            </div>
        </div>
        <div class="col-6"style="margin-top:20px; text-align: right; padding-right: 4.4%;"><img src="{{ asset('img/edukasiDarah.jpeg') }}" style="width:650px;height:500px;"></div>
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
            Gejala kanker darah sangat beragam, tergantung kepada jenis kanker darah yang diderita. 
            Pada beberapa kasus, gejala cenderung sulit dikenali karena mirip dengan gejala kondisi lain, 
            contohnya flu. Namun secara umum, gejala kanker darah adalah:
            <br><br>
            <ol>
            <li>Demam dan menggigil.</li>
            <li>Mual dan muntah.</li>
            <li>Sembelit atau susah buang air besar.</li>
            <li>Sakit tenggorokan.</li>
            <li> Sakit kepala.</li>
            <li>Tubuh mudah lelah.</li>
            <li>Berkeringat di malam hari.</li>
            <li> Berat badan menurun drastis.</li>
            <li> Muncul bintik merah pada kulit.</li>
            <li> Sering terinfeksi.</li>
            <li>Pembengkakan kelenjar getah bening di leher, ketiak, atau selangkangan.</li>
            <li>Nyeri pada sendi dan tulang, terutama tulang belakang atau tulang dada.</li>
            <li>Mudah terjadi memar dan perdarahan, misalnya mimisan.</li>
            <li>Sesak napas.</li>
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
            Berdasarkan jenis sel darah dan letak munculnya kanker, kanker darah dapat dibagi menjadi tiga, yaitu:
            <br></br>
            <ol>
            
            <li>Leukimia
            <br></br>Leukemia terjadi akibat sel-sel yang berada di sumsum tulang tidak bisa berkembang dengan normal. 
            Jika sel darah putih normal akan mati, sel leukemia justru akan terus hidup. 
            Sayangnya, sel tersebut tidak membantu tubuh melawan infeksi dan malah menjadi hambatan 
            bagi perkembangan sel darah lain.
            <br></br>Jika tidak segera ditangani dan jumlahnya makin bertambah, sel leukemia akan memasuki 
            aliran darah lalu menyebar ke organ tubuh lainnya. Akibatnya, sel normal di dalam tubuh 
            pun tidak mampu berfungsi dengan optimal.</li>
            <li>Limfoma
            <br></br>Kanker darah jenis ini menyerang limfosit, sel darah putih yang bertugas melawan infeksi sekaligus
             membuang zat sisa metabolisme dalam tubuh. Selain di bagian sumsum tulang, limfosit juga terdapat pada 
             kelenjar getah bening, limpa, kelenjar timus, dan hampir pada semua bagian tubuh.
            <br></br>Limfoma akan mengakibatkan limfosit mengalami pertumbuhan yang tidak terkendali. Jika limfosit 
            terinfeksi kanker, sistem imunitas tubuh akan mengalami penurunan, sehingga tubuh akan lebih rentan terserang infeksi.</li>
            <li>Multiple myeloma
            <br></br>Ada pula multiple myeloma, jenis kanker yang menyerang plasmosit, bagian sel darah putih yang memiliki fungsi untuk memproduksi antibodi yang membantu mengatasi infeksi. Ketika proses produksi antibodi mengalami gangguan, seseorang akan menjadi lebih rentan mengalami infeksi.
            <br></br>Multiple myeloma terjadi ketika muncul sel plasma yang tidak normal pada sumsum tulang dan berkembang begitu cepat. Sel ini akan terus membentuk antibodi yang justru mengakibatkan terjadinya kerusakan pada organ tubuh, seperti tulang dan ginjal.</li>
            
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
            Belum ada cara untuk mencegah kanker darah. Akan tetapi, risiko terserang penyakit ini dapat dikurangi dengan cara:<br></br>
            <ol>
            <li>Berhenti merokok.</li>
            <li>Memperbanyak konsumsi makanan sehat bergizi.</li>
            <li>Menjaga berat badan ideal dengan rutin berolahraga.</li>
            <li>Mengikuti prosedur dan menggunakan alat pelindung diri (APD) bila bekerja di lingkungan yang terpapar radiasi dan senyawa kimia, seperti formalin, pestisida, dan benzena.</li>
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
            Setelah pasien dipastikan menderita kanker darah, dokter akan berdiskusi dengan pasien 
            mengenai langkah pengobatan yang perlu ditempuh. Metode pengobatan yang akan dipilih 
            tergantung pada jenis kanker, usia penderita, dan kondisi kesehatan secara keseluruhan.
            <br></br>Berikut ini adalah metode pengobatan yang tersedia untuk menangani kanker darah:

            Kemoterapi, yaitu pemberian obat-obatan untuk membunuh sel kanker. Obat ini dapat diberikan dalam bentuk minum atau melalui suntikan.
            Radioterapi, yaitu metode pengobatan menggunakan radiasi sinar khusus untuk menghancurkan sel kanker dan menghambat perkembangannya.
            Transplantasi sumsum tulang, untuk mengganti sumsum tulang yang sudah rusak dengan sumsum tulang yang sehat.
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
                <a href="/edukasi/kankerhati" class="btn btn-primary btn-next">Kanker Hati</a>
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
