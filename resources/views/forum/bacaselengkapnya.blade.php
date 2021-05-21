@section('content')
    @extends('layouts.app')
    <style>
        .backprofil {

            padding-left: 50px;
        }

        a {
            color: black;
        }

        a:hover {
            color: blue;
            text-decoration: none;
        }

        a:visited {
            color: black;
            text-decoration: none;
        }

        .ketprofil {
            display: flex;
            margin-top: 80;
            margin-left: 60px;
            padding: 0 3rem 0 0;
        }

        .profilkecil {
            width: 59px;
        }

        .namaprofil {
            margin: 1% 0 0 1%;
        }

        .potoprofil {
            margin: 1% 0 0 0;
        }

        .title {
            margin: 1% 0 1% 135px;
        }

        .gambarvideo {
            width: 30%;
        }

        .ketcerita {
            margin-left: 135px;
            margin-top: 30px;
            text-align: justify;

        }

        .gambar-detail-forum {
            text-align: center;
        }

        .detail-forum {
            width: 95%;
            margin: 0 0 2% 0;
        }

        .detail-button {
            margin-left: auto;
            font-size: 21px;
        }

    </style>

    <main>
        <div class="backprofil">
            <h1><b><a class="" href="/lihat-profil" style="font-size: 24px;">{{ __('< Kembali ke Profil') }}</a></b></h1>
        </div>

        <div class="detail-forum">
            <div class="ketprofil">
                <div class=potoprofil>
                    <img src="{{ asset('storage' . $post->users->avatar) }}" class="profilkecil">
                </div>

                <div class="namaprofil">
                    <h6 style="font-size: 24px;"><b>{{ $post->users->firstname . ' ' . $post->users->lastname }} </b></h6>
                    <h6 style="margin:0;">{{ $post->getStatusAttribute() }}</h6>
                </div>

                <div class="detail-button">
                    @if ($id == $post->users->id)
                        <i class="fas fa-edit"></i>
                        <a href="{{url('/edit-forum')}}/{{$post->postID}}">Edit</a>
                    @else
                        <i class="fas fa-comment-alt-exclamation"></i>
                        <a href="{{url('/report')}}/{{$post->postID}}">Laporkan</a>
                    @endif
                </div>
            </div>

            <div class="title">
                <h6 style="font-size: 24px;"><b>{{ $post->title }}<b></h6>
            </div>
            @if ($post->image != "null")
                <div class="gambar-detail-forum">
                    <img src="{{ asset('storage' . $post->image) }}" class="gambarvideo">
                </div>
            @endif
            <div class="ketcerita">
                <h6 style="font-size: 17px;">{{ $post->content }}<h6>
            </div>
        </div>
    </main>
@endsection
