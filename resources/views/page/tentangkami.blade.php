@section('content')
    @extends('layouts.app')
    <style>
        .container-fluid {
            display: flex;
            margin: 0;
            padding: 0 3rem 0 0;
        }

        .kiri {
            width: 10%;
            padding-left: 50px;
            padding-top: 20px;
            background: #033D68;
            border-radius: 45px;
            color: white;
            margin-top: 70px;
            margin-left: 50px;
        }

        .tengah {
            padding-top: 4rem;
            padding-left: 5rem;
            width: 80%;
        }

        .silvy,
        .aul,
        .krisna,
        .can,
        .kartika,
        .tita {
            display: flex;
            margin: 0;
            padding: 0 3rem 0 0;
        }

        .profilcantika {
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.5));
        }

        .profilkartika {
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.5));
        }

        .profiltita {
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.5));

        }

        .ketsilvy {}

    </style>
    <main>
        <div class="container-fluid">
            <div class="kiri">
                <h1 style="font-size:40px; line-height: 3em;"><b>T<br>E<br>N<br>T<br>A<br>N<br>G<br> <br>K<br>A<br>M<br>I<b>
                </h1>
            </div>

            <div class="tengah">
                <div class="silvy">
                    <div class="ketsilvy"> </div>
                    <div class="fotosilvy">
                    </div>

                </div>
                <div class="aul">
                    <div class="fotoaul">
                        <img src="{{ asset('img/aulia.png') }}" class="profilaul">
                    </div>
                    <div class="ketaul"></div>
                </div>

                <div class="krisna">
                    <div class="fotokrisna">
                        <img src="{{ asset('img/krisna.png') }}" class="profilkrisna">
                    </div>
                    <div class="ketkrisna"></div>
                </div>
                <div class="can">
                    <div class="fotocan">
                        <img src="{{ asset('img/cantika.png') }}" class="profilcantika">
                    </div>
                    <div class="ketcan"></div>
                </div>
                <div class="kartika">
                    <div class="fotokartika">
                        <img src="{{ asset('img/kartika.png') }}" class="profilkartika">
                    </div>
                    <div class="ketkartika"></div>
                </div>
                <div class="tita">
                    <div class="fototita">
                        <img src="{{ asset('img/tita.png') }}" class="profiltita">
                    </div>
                    <div class="kettita"></div>
                </div>

            </div>

        </div>

        <main>
        @endsection
