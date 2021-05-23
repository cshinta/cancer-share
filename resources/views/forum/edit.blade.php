@section('content')
    @extends('layouts.app')
    <style>
        .backforum {
            padding-left: 50px;
            padding-top: 1%;
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

        .title {
            font-style: normal;
            font-weight: bold;
            font-size: 30px;
            line-height: 40px;
            text-align: center;
            margin-left: 27%;
        }

        .poto-up {
            text-align: center;
            width: 300px;

        }

        .poto-gaada {
            text-align: center;
            width: 115px;
            height: 110px;

        }

        .up-input {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .prev {
            text-align: center;
            width: 50%;
            margin-left: -5%;
        }

        .form {
            margin-top: 40px;
            margin-left: 50px;

        }

        .select-post {
            margin-left: 50px;

        }

        .form-select {
            width: 400px;
            height: 53px;
            background: #EFEDED;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            font-size: 18px;
             !important
        }

        .notname-input {
            width: 90%;
            height: 70px;
            background: #FAFAFA;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            border: none;
            font-size: 24px;

        }

        .btn-up-loc {
            text-align: center;
        }

        .btn-up {
            width: 167px;
            height: 67px;
            background: #033d68;
            font-family: Signika;
            font-size: 24px;
            font-style: normal;
            color: #fff;
            border-radius: 30px;
            margin-top: 30px;
            margin-bottom: 50px;
        }

        .delete-icon {
            font-size: 22px;
        }

        .delete-link {
            text-align: center;
        }
        .judul-side{
            max-width: 90%;
        }
        .delete-side{
            max-width: 10%;
            text-align: center;
        }
        .row{
            width: 90%;
        }

        .delete-post{
            font-size: 18px;
        }
        .validation-show{
            margin: 0 50px;
        }
    </style>

    <main>
        <div class="backforum">
            <h1><b><a class="" href="/forum" style="font-size: 24px;">{{ __('< Kembali ke Forum') }}</a></b></h1>
        </div>

        <div class="judul">
            <div class="row">
                <div class="col judul-side">
                    <h1 class="title"><b>Edit Pengalaman</b></h1>
                </div>
                <div class="col delete-side">
                    <a href="{{url('/delete')}}/{{$post->postID}}" class="delete-link">
                        <i class="far fa-trash-alt delete-icon"></i>
                        <h4 class="delete-post"><b>Hapus</b></h4>
                    </a>
                </div>
            </div>

        </div>
        <div class="validation-show">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
        <form method="POST" action="{{ url('/edit-forum') }}" enctype="multipart/form-data">
            @csrf
            <div class="upload">
                <!-- up-->
                <div class="up-input mb-3">
                    <div class="form-file-group">
                        <input type="file" style="display: none" id="up" name="forum-image" onchange="preview(this)" />
                        @if ($post->image == 'null')
                            <img class="poto-gaada" src="{{ asset('img/up.png') }}"
                                onclick="document.querySelector('#up').click()" />
                    </div>
                @else
                    <img class="poto-up" src="{{ asset('storage' . $post->image) }}"
                        onclick="document.querySelector('#up').click()" />
                    @endif
                </div>
                <div class="prev" id="previewBox" style="display: none">
                    <img src="" id="previewImg" style="width: 50%; text-align:center"
                        onclick="document.querySelector('#up').click()" />
                </div>
            </div>
            <input type="hidden" value={{ $post->postID }} name="postID" />
            <div class="select-post">
                <select class="form-select" name="type">
                    @for ($i = 0; $i < 4; $i++)
                        @if ($post->type == $i + 1) <option selected
                        value="{{ $i + 1 }}"
                        class="option-post">{{ $choice[$i] }}</option>
                    @else
                        <option value="{{ $i + 1 }}"
                        class="option-post">{{ $choice[$i] }}</option> @endif
                    @endfor
                </select>

            </div>

            <div class="form">
                <!-- judul ya bund -->
                <div class="pb-4">
                    <textarea id="judul" class="form-control notname-input" rows="1" placeholder="Judul"
                        name="title">{{ $post->title }}</textarea>
                </div>

                <!-- storynya bund -->
                <div class="pb-4">
                    <textarea class="form-control notname-input" rows="5" placeholder="Ceritakan Kisahmu" id="story"
                        name="content">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="btn-up-loc">
                <button class="btn-up">{{ __('Simpan') }}</button>
            </div>


        </form>
        <script>
            function preview(input) {
                let file = $("input[type=file]").get(0).files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        $("#previewImg").attr('src', reader.result);
                        $("#previewBox").css('display', 'block');
                    }
                    $(".form-file-group").css('display', 'none');
                    reader.readAsDataURL(file);
                }
            }

        </script>

        <script>
            $(document).ready(function(e) {
                $('.selectpicker').selectpicker();
            });

        </script>
    </main>
@endsection
