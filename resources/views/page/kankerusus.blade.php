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
            <div class="judul">Kanker Usus</div>
            <div class="rectangle"></div>
            <div class="isi"style="margin-top:48px;text-align:justify;margin-right:5%;">
                <p class="card-text " id="synopsis-forum" style="font-size:20px;">
                Kanker usus besar adalah kanker atau adanya sebuah massa abnormal yang mengenai usus besar. 
                Usus besar merupakan bagian usus paling akhir dari sebuah sistem pencernaan. 
                Kanker usus besar biasanya mengenai pada orang dewasa. Muncul awalnya sebagai benjolan 
                kecil jinak berupa polip yang dalam berjalannya waktu benjolan tersebut bertransformasi menjadi ganas.

                <br></br>Kanker usus besar sering kali tidak menimbulkan gejala di awal. Namun, 
                jika Anda sering mengalami gejala gangguan pencernaan, seperti diare atau sembelit, 
                dan memiliki keluarga yang menderita kanker usus besar, dianjurkan untuk berkonsultasi dengan dokter. 
                Semakin awal terdeteksi, kemungkinan kanker usus besar untuk sembuh juga akan semakin besar.
                </p>
            </div>
        </div>
        <div class="col-6"style="margin-top:20px; text-align: right; padding-right: 4.4%;"><img src="{{ asset('img/edukasiUsus.jpeg') }}" style="width:650px;height:500px;"></div>
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
            Pada tahap awal, pengidap kanker usus besar biasanya tidak merasakan gejala. Gejala yang timbul biasanya bergantung pada jumlah, letak benjolan dan ukuran. Tanda dan gejala yang biasanya timbul antara lain:
            <br><br>
            <ol>
            <li>Perubahan menetap pola buang air besar, dapat berupa diare atau konstipasi..</li>
            <li>Perdarahan pada anus, atau adanya darah dalam feses.</li>
            <li>Rasa tidak nyaman pada perut yang bersifat menetap seperti kram, nyeri atau penimbunan gas. </li>
            <li>Timbul rasa lelah yang tidak dapat dijelaskan penyebabnya.</li>
            <li>Penurunan berat badan tanpa sebab.</li>
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
            Kanker usus besar disebabkan oleh perubahan atau mutasi gen pada jaringan usus besar. Akan tetapi, penyebab mutasi gen tersebut belum diketahui dengan pasti.
            <br></br>
            Meski penyebabnya tidak diketahui, ada beberapa gaya hidup yang diduga dapat meningkatkan risiko seseorang terkena penyakit kanker usus besar, antara lain:
            <br></br>
            <ol>
            <li>Pola makan kurang serat</li>
            <li>Terlalu banyak mengonsumsi daging merah dan lemak</li>
            <li>Merokok</li>
            <li>Mengonsumsi minuman beralkohol</li>
            <li>Jarang berolahraga</li>
            
            </ol>
            Selain itu, ada beberapa kondisi atau penyakit yang juga membuat seseorang menderita kanker usus besar, yaitu:
            <br></br>
            <ol>
            <li>Memiliki orang tua atau saudara kandung yang menderita kanker usus besar.</li>
            <li>Menderita polip usus.</li>
            <li>Mengalami kelebihan berat badan atau obesitas.</li>
            <li>Menderita diabetes.</li>
            <li>Menderita penyakit radang usus.</li>
            <li>Pernah menjalani radioterapi di bagian perut.</li>
            <li>Menderita kelainan genetik yang disebut familial adenomatous polyposis (FAP) atau sindrom Lynch.</li>
            <li>Berusia di atas 50 tahun.</li>
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
            Dokter dapat merekomendasikan pada orang dengan risiko kanker usus besar untuk melakukan skrining setelah usia 50 tahun. Perubahan gaya hidup dapat dilakukan untuk menurunkan risiko kanker kolon, yaitu:<br></br>
            <ol>
            <li>Konsumsi buah-buahan, sayur, dan serat tinggi. Vitamin, mineral dan antioksidan yang terkandung dalam makanan tersebut dapat berperan dalam menurunkan risiko kanker.</li>
            <li>Kurangi atau stop konsumsi alkohol.</li>
            <li>Berhenti merokok.</li>
            <li>Olahraga rutin setiap hari. Minimal sebanyak 30 menit setiap hari. Jika belum terbiasa melakukan olahraga sebelumnya, olahraga dapat dilakukan perlahan hingga tercapai 30 menit setiap hari.</li>
            <li>Menjaga berat badan ideal. Berat badan yang ideal dapat menurunkan risiko untuk berbagai penyakit termasuk kanker usus besar.</li>
            
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
            Terapi kanker usus besar sangat beragam bergantung pada tingkat keparahan dan gejala yang dialami pengidapnya. Secara umum terapi yang dapat dilakukan sebagai berikut:
            <br></br>
            <ol>
            <li>Pembedahan minimal, dilakukan pada kanker stadium awal dengan massa yang sangat kecil. Dengan melakukan kolonoskopi massa tersebut dapat diambil melalui sebuah sayatan minimal.</li>
            <li>Kolektomi, pada masa kanker yang lebih besar, sebagian area usus besar dapat dipotong kemudian pada sisi yang normal direkatkan kembali.</li>
            <li>Kemoterapi, dilakukan dengan memasukan sejumlah obat-obatan yang berfungsi untuk menghancurkan sel kanker.</li>
            <li>Radioterapi, dilakukan dengan memaparkan radiasi sinar X untuk menghancurkan sel kanker.</li>
            <li>Imunoterapi, dilakukan dengan memasukkan sel imun rekombinan yang telah dibuat sebelumnya, untuk membantu sel imun tubuh melawan sel kanker.</li>
            <li>Terapi suportif, dilakukan untuk meredakan nyeri yang disebabkan oleh kanker usus besar. Terapi suportif dapat pula digunakan untuk memperbaiki kualitas hidup pengidap kanker usus besar.</li>
            </ol>
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
                <a href="/edukasi/kankerhati" class="btn btn-primary btn-next">Kanker Hati</a>
            </div>
        </div>
    </div>
    </main>  

@endsection
