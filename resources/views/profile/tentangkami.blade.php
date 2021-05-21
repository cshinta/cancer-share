@section('content')
@extends('layouts.auth')
<style>
.container-fluid {
        display: flex;
        margin: 0;
        padding: 0 3rem 0 0;
        margin-bottom:50px;
    }

    .kiri {
        width: 10%;
        padding-left:50px;
        padding-top:20px;
        background: #033D68;
        border-radius: 45px;
        color:white;
        margin-top:70px;
        margin-left:50px;
        
    }

    .tengah {
       padding-top:4rem;
        padding-left: 5rem;
        width: 80%;
    }
    .silvy{
        display: flex;
        margin: 0;
        padding: 0 3rem 0 0; 
        background: #E4EBFD;
        border-radius: 50px;
        width: 900px;
        border-top-left-radius:140px;
        border-bottom-left-radius:140px;
    }
    .aul{
        display: flex;
        margin-top: 40px ;
        padding: 0; 
        background: #353535;
        border-radius: 50px;
        width: 900px;
        border-top-right-radius:160px;
        border-bottom-right-radius:160px;
    }
    .krisna{
        display: flex;
        margin-top: 40px;
        padding: 0 3rem 0 0; 
        background: #7B8766;
        border-radius: 50px;
        width: 900px;
        border-top-left-radius:140px;
        border-bottom-left-radius:140px;
    }
    .can{
        display: flex;
        margin-top: 40px;
        padding: 0;
        background: #D1A6D2;
        border-radius: 50px;
        width: 900px;
        border-top-right-radius:160px;
        border-bottom-right-radius:160px;
    }
    .kartika{
        display: flex;
        margin-top: 40px;
        padding: 0 3rem 0 0; 
        background: #353535;
        border-radius: 50px;
        width: 900px;
        border-top-left-radius:140px;
        border-bottom-left-radius:140px;
    }
    .tita{
        display: flex;
        margin-top: 40px;
        padding: 0;
        background: #BA9A69;
        border-radius: 50px;
        width: 900px;
        border-top-right-radius:160px;
        border-bottom-right-radius:160px;
    }
    .profilcantika, .profilkartika, .profiltita{
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.5));
    }
    
    .ketsilvy{
        margin-top:30px;
        margin-left:30px;
  }
  .quote{
     margin-top:20px;
  }
  .ketaul{
        margin-top:30px;
        margin-left:30px;
        color:white;
  }
  .ketkrisna{
        margin-top:30px;
        margin-left:30px;
        color:white;
  }
  .ketcan{
        margin-top:30px;
        margin-left:30px;
  }
  .ketkartika{
        margin-top:30px;
        margin-left:30px;
        color:white;
  }
  .kettita{
        margin-top:30px;
        margin-left:30px;

  }
  
</style>
<main>
<div class="container-fluid">
            <div class="kiri">
           <h1 style="font-size:40px; line-height: 3em;"><b>T<br>E<br>N<br>T<br>A<br>N<br>G<br> <br>K<br>A<br>M<br>I<b></h1>
            </div>

            <div class="tengah">
                <div class="silvy">
                        <div class="fotosilvy"> 
                            <img src="{{ asset('img/silvy.png') }}" class="profilsilvy">
                        </div>
                        <div class="ketsilvy">
                            <h4><b>Silvy Zafira Putri</b></h4>
                        <h5>19515020111102</h5>
                                <div class="quote">
                                <h5 style=" font-size:15px;"> Semoga dengan dikembangkannya web ini dapat
                                 mengringankan sedikit cobaan hidup pejuang kanker karena disini dapat
                                 saling menceritakan pengalaman selama hidupnya berjuang melawan penyakit yang luar biasa ini
                                 dan semoga manusia hebat yang sama sedang berjuang untuk hidupnya dapat termotivasi dan saling 
                                 memberikan dukungan juga kepada para pejuang kanker yang ada di luar sana.</h5>
                                </div>
                        </div>
                </div>
                
                <div class="aul">
                    <div class="ketaul">
                    <h4><b>Aulia Megha Ramadhani</b></h4>
                        <h5>195150200111024</h5>
                                <div class="quote">
                                <h5 style=" font-size:15px;"> Saya berharap dengan dikembangkannya web ini dapat
                                 membantu memotivasi dan saling memberikan dukungan kepada para pejuang kanker 
                                 yang ada di luar sana. Tak sedikit yang berusaha memberi semangat dan motivasi, 
                                 untuk rekan atau penderita kanker lain. Baik melalui dukungan secara langsung, 
                                 maupun memberikan kata-kata motivasi di selembar ucapan. 
                                 Terdengar sederhana, namun bisa sangat berarti bagi orang lain.</h5>
                                </div>
                    </div>
                        <div class="fotoaul"><img src="{{ asset('img/aulia.png') }}" class="profilaul">
                    </div>
                </div>

                <div class="krisna">
                    <div class="fotokrisna">
                    <img src="{{ asset('img/krisna.png') }}" class="profilkrisna">
                    </div>
                        <div class="ketkrisna">
                        <h4><b>Krisnanda Ahadian</b></h4>
                        <h5>195150200111030</h5>
                                <div class="quote">
                                <h5 style=" font-size:15px;"> Harapan saya dikembangkannya web ini dapat
                                 mengringankan sedikit cobaan hidup pejuang kanker karena disini dapat
                                 saling menceritakan pengalaman selama hidupnya berjuang melawan penyakit yang luar biasa ini
                                 Tuhan tahu mimpi sulit untuk diikuti, tetapi jangan biarkan siapa pun merobeknya. 
                                 Tunggu, akan ada hari esok, Pada waktunya kamu akan menemukan jalan. 
                                 Semangat dan jangan pernah menyerah! kalian tidak sendiri</h5>
                                </div>
                        </div>
                </div>

                <div class="can">
                <div class="ketcan">
                    <h4><b>Cantika Shinta Aristiani</b></h4>
                        <h5>195150200111025</h5>
                                <div class="quote">
                                <h5 style=" font-size:15px;"> Seorang penderita kanker pastinya memiliki tingkat stress yang cukup tinggi.
                                 Hal inilah yang membuat sebagian besar penderita merasa terpuruk dan putus asa. Jika sudah demikian,
                                 pikiran tersebut akan sangat membahayakan pasien. Saya berharap dengan dikembangkannya web ini dapat
                                 membantu memotivasi dan saling memberikan dukungan kepada para pejuang kanker 
                                 yang ada di luar sana. Jangan sedih dan takut untuk melewati semua ini.
                                 Apapun yang terjadi, tetaplah semangat dan kita akan melaluinya bersama-sama.</h5>
                                </div>
                    </div>
                        <div class="fotocan"><img src="{{ asset('img/cantika.png') }}" class="profilcan">
                    </div>
                </div>


                <div class="kartika">
                    <div class="fotokartika">
                    <img src="{{ asset('img/kartika.png') }}" class="profilkartika">
                    </div>
                        <div class="ketkartika">
                        <h4><b>Kartika Sari</b></h4>
                        <h5>195150200111068</h5>
                                <div class="quote">
                                <h5 style=" font-size:15px;"> Kanker bisa dikatakan sebagai salah satu penyakit
                                 yang bisa membunuh para penderitanya secara perlahan. Sel kanker yang ada 
                                 di dalam tubuh manusia akan terus menggerogoti organ dalam sehingga membuatnya 
                                 menjadi tidak berfungsi lagi. Harapan saya dikembangkannya web ini dapat
                                 mengringankan sedikit cobaan hidup pejuang kanker karena disini dapat
                                 saling menceritakan pengalaman selama hidupnya berjuang melawan penyakit yang luar biasa ini.
                                 Jangan menyerah, nikmati hari-harimu dan tetaplah bersemangat!
                                </h5>
                                </div>
                        </div>
                </div>


                <div class="tita">
                <div class="kettita">
                    <h4><b>Tita Alfiana</b></h4>
                        <h5>195150201111030</h5>
                                <div class="quote">
                                <h5 style=" font-size:15px;"> Tak cukup sampai disitu saja, pengobatan kanker pun
                                 terbilang tidak mudah dan lama. Pasien harus merasakan rasa sakit karena kemoterapi
                                 dan berbagai macam dampak lainnya seperti rambut rontok karena pengobatan kanker 
                                 yang satu ini. Saya berharap dengan dikembangkannya web ini dapat
                                 membantu memotivasi dan saling memberikan dukungan kepada para pejuang kanker 
                                 yang ada di luar sana.Rasa sakit yang kamu rasakan hari ini adalah kekuatan
                                yang kamu rasakan besok. Semangat!</h5>
                                </div>
                    </div>
                        <div class="fotocan"><img src="{{ asset('img/tita.png') }}" class="profiltita">
                    </div>

            </div>
                
</div>

<main>
@endsection