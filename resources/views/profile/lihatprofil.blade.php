@section('content')
@extends('layouts.auth')
<style>
.atas{
    text-align:center;
    padding-top:30px;
}
.profil{
    width: 10%;
    margin-bottom:5px;
}
.onklik{
    background: #033D68;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    height: 40px;
    color: #FFFFFF;
    width: 10%;
}
.container-fluid {
    display: flex;
    margin: 0;
    padding: 0 1rem 0 0;
    }

.kiri {
    width: 45%;
    padding: 40px;
    margin-top:50px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
    height: 400px;
    margin-left:30px;
 }

.tengah {
    width:90%;
    padding-top: 30px;
    margin-left:80px;
    margin-top:50px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
    }

.datadiri {
    display: flex;
    margin: 0;
    padding: 0 5px 0 0;
    }
.datakanan{
    padding-left: 20px;
    }
.datakiri{
    color:#8F8F8F;
    }
.tombol{
    background: #033D68;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    height: 50px;
    color: #FFFFFF;
    width: 30%; 
    margin-left:170px;
    }
.tombolubah{
    
    padding-top:20px;
    }
    
.Logout{
    margin-left:205px;
    margin-top:20px;

    }
a:hover {
    text-decoration: none;
    color:blue;
}
a:link {
    color:black;
    text-decoration: underline;
}
a:visited {
    color:black;
}
.judul{
    margin-left:60px;
}
.profilkecil{
    width: 45px;
}
.rowprofil{
    display: flex;
    margin-top: 30px;
    padding: 0 5px 0 0;
}
.profilkecilkiri{
    margin-left:60px;
}
.profilketerangan{
    margin-left:20px;
    margin-top:10px;
}
.tulisan{
    display: flex;
    margin-top: 1px;
    padding: 0 5px 0 0;
}
.namakategori{
    margin-left:3px;
    border-left: 2px solid black;
    padding-left:4px;
}
.konten{
    margin-top:20px;
    width: 80%;
}
.selengkapnya{
    background: #033D68;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    height: 45px;
    color: #FFFFFF;
    width: 40%; 
    margin-left:250px;
    }
.tombolselengkapnya{
    margin-top:15px;
    margin-bottom:15px;
}
.isikonten{
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
   
}

</style>
<main>
    <div class="atas">
    <img src="{{ asset('img/profilAvatar.png') }}" class="profil">
        <h4><b>Arief Dava<b></h4>
        <button onclick="window.location.href='/sunting-profil'" class="onklik">Sunting Profil</button>
    </div>
<div class="container-fluid">
    <div class="kiri">
        <h4><b>Data Diri<b></h4>
        <div class="datadiri">
                <div class="datakiri">
                <h5>Nama Depan</h5>
                <h5>Nama Belakang</h5>
                <h5>Username</h5>
                <h5>Email</h5>
                <h5>No. Handphone</h5>
            </div>
            <div class="datakanan">
                <h5>Arief</h5>
                <h5>Dava</h5>
                <h5>arief77</h5>
                <h5>ariefdava77@gmail.com</h5>
                <h5>08123456789</h5>
            </div>
        </div>
            <div class="tombolubah">
                <button onclick="window.location.href='/change-password'" class="tombol" >Ubah Kata Sandi</button>
            <div>
            <h4 class="logout"><b><a href="/login">Logout</a><b></h4>
            </div>
        </div>           
    </div>


    <div class="tengah">

        <div class="title"> 
             <h2 class="judul"><b>Kisah Anda<b></h2>
        </div>

            <div class="rowprofil">
                    <div class="profilkecilkiri">
                    <img src="{{ asset('img/profilAvatar.png') }}" class="profilkecil">
                    </div>
                <div class="profilketerangan"> 
                    <div class="tulisan">
                        <div class="namaprofil">
                        <h6><b>Arief Dava <b></h6>
                        </div>
                        <div class="namakategori">
                        <h6>  Kanker Paru-Paru</h6>
                        </div>
                    </div>

                <div class="konten">
            <h4 style="font-size:20px"><b>Kisah Saya Melawan Kanker Paru-Paru 3 Tahun Lamanya<b></h4>
            <div class="isikonten">
            <h6 style="font-size: 15px">Saya pernah menderita kanker paru-paru selama kurang lebih 3 tahun.
            Namun, Saya berhasil dinyatakan sembuh total dari penyakit Saya 
            berkat kerja keras dan pengobatan yang Saya jalani secara rutin 
            di Rumah Sakit Kanker Dharmais. Pihak rumah sakit juga ramah dan 
            sabar dalam menangani pasiennya sehingga Saya sebagai pasien 
            pun nyaman dan senang menjalani perawatan.Kalau ditanya, 
            pernah ga sih ngerasa putus asa dan ingin
            menyerah saja?Jawabannya, pasti pernah. Lalu, bagaimana cara
            Saya bangun dari keputus-asaan tersebut? Banyak hal yang 
            Saya alami sekaligus pelajari saat masih menjadi pejuang kanker .....</h6>
            </div>
                </div>
                <div class="tombolselengkapnya"><button onclick="window.location.href='#'" class="selengkapnya" >Baca Selengkapnya</button></div>
                </div>
    </div>  

</div>
</main>
@endsection