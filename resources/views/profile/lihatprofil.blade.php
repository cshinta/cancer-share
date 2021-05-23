@section('content')
    @extends('layouts.app')
    <style>
        .atas {
            text-align: center;
            padding-top: 30px;
        }

        .profil {
            width: 10%;
            margin-bottom: 5px;
            border-radius: 50%;
        }

        .onklik {
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
            width: 50%;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            height: 400px;
            margin-left: 30px;
        }

        .tengah {
            width: 50%;
            padding-top: 30px;
            margin-left: 80px;
            margin-top: 50px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
        }

        .datadiri {
            display: flex;
            margin: 0;
            padding: 5px 5px 0 0;
        }

        .datakanan {
            padding-left: 20px;
        }

        .datakiri {
            color: #8F8F8F;
        }

        .tombol-profil {
            background: #033D68;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            height: 50px;
            color: #FFFFFF;
            width: 30%;
        }

        .tombolubah {
            padding-top: 20px;
            text-align: center;
        }

        .logout {
            margin-top: 20px;

        }

        a:hover {
            text-decoration: none;
            color: blue;
        }

        a:link {
            color: black;
            text-decoration: underline;
        }

        a:visited {
            color: black;
        }

        .judul {
            margin-left: 60px;
        }

        .profilkecil {
            width: 45px;
        }

        .rowprofil {
            display: flex;
            margin-top: 25px;
            padding: 0 5px 0 0;
            margin-right: 0;
        }

        .profilkecilkiri {
            margin-left: 60px;
        }

        .profilketerangan {
            margin-left: 20px;
            margin-top: 8px;
            width: 100%;
        }

        .tulisan {
            display: flex;
            margin-top: 1px;
            padding: 0 5px 0 0;
        }

        .namakategori {
            margin-left: 3px;
            border-left: 2px solid black;
            padding-left: 4px;
        }

        .konten {
            margin-top: 20px;
        }

        .selengkapnya {
            background: #033D68;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            height: 45px;
            color: #FFFFFF;
            width: 200px;
        }

        .tombolselengkapnya {
            margin-top: 15px;
            margin-bottom: 15px;
            text-align: right;
        }

        .isikonten {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;

        }

        .lihat-profil-detail {
            margin-bottom: 3%;
        }

        .postingan {
            width: 90%;
        }

        hr.solid {
            border-top: 3px solid #bbb;
        }

        .empty-forum {
            margin: 3% 0;
            text-align: center;
            color: #767676;
        }

        .share-empty {
            margin: 10% 0;
            color: black;
        }

        .add-button-empty {
            font-weight: bolder;
            margin-bottom: 2%;
        }

        #add-icon {
            font-size: 26px;
            color: #144a73;
        }

    </style>
    <main>
        <div class="atas">
            <img src="{{ asset('storage' . $user->avatar) }}" class="profil">
            <h4><b>{{ $user->firstname . ' ' . $user->lastname }}</b></h4>
            <button onclick="window.location.href='/sunting-profil'" class="onklik">Sunting Profil</button>
        </div>
        <div class="container-fluid lihat-profil-detail">
            <div class="kiri">
                <h2><b>Data Diri</b></h2>
                <div class="datadiri">
                    <div class="datakiri">
                        <h5>Nama Depan</h5>
                        <h5>Nama Belakang</h5>
                        <h5>Username</h5>
                        <h5>Email</h5>
                        <h5>No. Handphone</h5>
                    </div>
                    <div class="datakanan">
                        <h5>{{ $user->firstname }}</h5>
                        @if ($user->lastname == null)
                            &nbsp;
                        @else
                            <h5>{{ $user->lastname }}</h5>
                        @endif
                        <h5>{{ $user->username }}</h5>
                        <h5>{{ $user->email }}</h5>
                        <h5>{{ $user->phone }}</h5>
                    </div>
                </div>
                <div class="tombolubah">
                    <button onclick="window.location.href='/change-password'" class="tombol-profil">Ubah Kata Sandi</button>
                    <div>
                        <h4 class="logout"><b><a href="/logout">Logout</a></b></h4>
                    </div>
                </div>
            </div>


            <div class="tengah">

                <div class="title">
                    <h2 class="judul"><b>Kisah Anda</b></h2>
                </div>
                @if ($posts->isEmpty())
                    <div class="empty-forum">
                        <h3>Belum ada pengalaman yang diunggah.</h3>
                        <a href="/upload-forum">
                            <div class="share-empty">
                                <div class="add-button-empty"><i class="fas fa-plus" id="add-icon"></i></div>
                                <div class="empty-text">
                                    <h3><b>Bagi Pengalaman?</b></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @else
                    @foreach ($posts as $post)
                        <div class="postingan">
                            <div class="rowprofil">
                                <div class="profilkecilkiri">
                                    <img src="{{ asset('storage' . $post->users->avatar) }}" class="profilkecil">
                                </div>
                                <div class="profilketerangan">
                                    <div class="tulisan">
                                        <div class="namaprofil">
                                            <h6><b>{{ $post->users->firstname . ' ' . $post->users->lastname }}</b></h6>
                                        </div>
                                        <div class="namakategori">
                                            <h6>{{ $post->getStatusAttribute() }}</h6>
                                        </div>
                                    </div>

                                    <div class="konten">
                                        <h4 style="font-size:20px"><b>{{ $post->title }}</b></h4>
                                        <div class="isikonten">
                                            <h6 style="font-size: 15px">{{ $post->content }}</h6>
                                        </div>
                                    </div>
                                    <div class="tombolselengkapnya"><button
                                            onclick="window.location.href='{{ url('/forum/my/posts') }}/{{ $post->postID }}'"
                                            class="selengkapnya">Baca
                                            Selengkapnya</button></div>
                                </div>
                            </div>
                        </div>
                        @if ($loop->last == false)
                            <hr class="solid">
                        @endif
                    @endforeach
                @endif
            </div>
    </main>
@endsection
