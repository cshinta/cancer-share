@extends('layouts.app')

@section('content')

    <style>
        .rectangle {
            width: 115px;
            height: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5px;
            border-radius: 45px;
            background: #033D68;
        }

        .batas {
            position: absolute;
            width: 1200px;
            height: 1px;
            left: 6%;
            border-radius: 45px;
            background: #033D68;
        }

        #header-forum {
            margin-top: 3vh;
        }

        .forum-pic {
            width: 15vw;
            height: 15vh;
            text-align: left;
        }

        .avatar-forum {
            max-width: 100%;
            height: 150%;
        }

        #title-forum {
            font-weight: bold;
            font-size: 24px;
        }

        .card {
            max-width: 90%;
        }

        .forum-isi {
            max-width: 80%;
        }

        .btn-forum {
            text-align: right;
        }

        .btn-forum-next {
            background-color: #033D68;
        }

        .btn-forum-next:hover {
            background-color: rgb(22, 15, 71);
        }

        .forum-card {
            margin-top: 2rem;
            padding-bottom: 2%;
            margin-left: 1rem;
            border-color: transparent;
            border-bottom-color: #033D68;
            border-bottom-width: 3px;
        }

        .card-body {
            padding: 1rem;
        }

        .Judul {
            text-align: center;
            font-weight: bold;
            font-size: 30px;
        }

        .datadiri {
            display: flex;
            margin: 0;
            padding: 0 5px 0 0;
        }

        .datakanan {
            padding-left: 40px;
        }

        .datakiri {
            color: #8F8F8F;
        }

        .kata {
            font-size: 20px;
        }

    </style>
    <main>
        <div class="container-fluid" id="header-forum">
            <div class="Judul">YUK,BERDONASI!</div>
            <div class="rectangle"></div>
            <div class="card w-100 forum-card" style="width: 5rem;margin-left:6.5%">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/okta.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <h5 class="card-title" id="title-forum">Bantu Penjual Gorengan Sembuhkan Anak dari Kanker</h5>
                            <div class="datadiri">
                                <div class="datakiri">
                                    <h5>Nama Pasien</h5>
                                    <h5>Umur Pasien</h5>
                                    <h5>Penggalangan Dana</h5>
                                </div>
                                <div class="datakanan">
                                    <h5>Okta Putra Pratama</h5>
                                    <h5>3,5 Tahun</h5>
                                    <h5>Yayasan Anugerah Tuhan Hafara</h5>
                                </div>
                            </div>
                            <div class="kata">kitabisa.com</div>
                            <div class="btn-forum">
                                <a href="https://kitabisa.com/campaign/hafarauntukokta" class="btn btn-primary btn-forum-next">DONASI SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="card w-100 forum-card" style="width: 5rem;margin-left:6.5%">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/melany.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <h5 class="card-title" id="title-forum">Penderita Kanker Stadium 4 Butuh Bantuan Untuk Pendidikan Anaknya</h5>
                            <div class="datadiri">
                                <div class="datakiri">
                                    <h5>Nama Pasien</h5>
                                    <h5>Umur Pasien</h5>
                                    <h5>Penggalangan Dana</h5>
                                </div>
                                <div class="datakanan">
                                    <h5>Melany Novemilda Amir</h5>
                                    <h5>45 Tahun</h5>
                                    <h5>BenihBaik</h5>
                                </div>
                            </div>
                            <div class="kata">benihbaik.com</div>
                            <div class="btn-forum">
                                <a href="https://m.benihbaik.com/campaign/bantumelany" class="btn btn-primary btn-forum-next">DONASI SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="card w-100 forum-card" style="width: 5rem;margin-left:6.5%">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/yaniah.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <h5 class="card-title" id="title-forum">Bantu Ibu Yaniah Yang Buta Untuk Agar Sembuh Dari Kanker Payudara</h5>
                            <div class="datadiri">
                                <div class="datakiri">
                                    <h5>Nama Pasien</h5>
                                    <h5>Umur Pasien</h5>
                                    <h5>Penggalangan Dana</h5>
                                </div>
                                <div class="datakanan">
                                    <h5>Yaniah</h5>
                                    <h5>52 Tahun</h5>
                                    <h5>Rumah Zakat</h5>
                                </div>
                            </div>
                            <div class="kata">wecare.com</div>
                            <div class="btn-forum">
                                <a href="https://wecare.id/yaniah/" class="btn btn-primary btn-forum-next">DONASI SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="card w-100 forum-card" style="width: 5rem;margin-left:6.5%">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/christianluis.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <h5 class="card-title" id="title-forum">Bantu Christian Luis Melawan Penyakit Kanker Ganas</h5>
                            <div class="datadiri">
                                <div class="datakiri">
                                    <h5>Nama Pasien</h5>
                                    <h5>Umur Pasien</h5>
                                    <h5>Penggalangan Dana</h5>
                                </div>
                                <div class="datakanan">
                                    <h5>Christian Luis</h5>
                                    <h5>9 Tahun</h5>
                                    <h5>Kristina Winata</h5>
                                </div>
                            </div>
                            <div class="kata">kitabisa.com</div>
                            <div class="btn-forum">
                                <a href="https://kitabisa.com/campaign/bantuchristianluis" class="btn btn-primary btn-forum-next">DONASI SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="card w-100 forum-card" style="width: 5rem;margin-left:6.5%;margin-bottom:1%;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/ahmad.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <h5 class="card-title" id="title-forum">Bantu Ahmad Sembuh  Dari Kanker Mata</h5>
                            <div class="datadiri">
                                <div class="datakiri">
                                    <h5>Nama Pasien</h5>
                                    <h5>Umur Pasien</h5>
                                    <h5>Penggalangan Dana</h5>
                                </div>
                                <div class="datakanan">
                                    <h5>Ahmad Zahidin Arief</h5>
                                    <h5>3 Tahun</h5>
                                    <h5>Atikah Abd Rahman</h5>
                                </div>
                            </div>
                            <div class="kata">pedulisehat.id</div>
                            <div class="btn-forum">
                                <a href="https://pedulisehat.id/bantuahmadsembuhdarikankermata" class="btn btn-primary btn-forum-next">DONASI SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

        </div>

    </main>

@endsection
