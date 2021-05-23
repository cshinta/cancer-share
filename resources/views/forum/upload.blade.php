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

        .judul {
            text-align: center;
            margin-top: 40px;

        }

        .title {
            font-style: normal;
            font-weight: bold;
            font-size: 30px;
            line-height: 40px;
        }

        .poto-up {
            text-align: center;
            width: 115px;
            height: 110px;

        }

        .up-input {
            display: flex;
            justify-content: center;
            margin-left: 5%;
            margin-top: 20px;
        }

        .prev {
            text-align: center;
            width: 50%;
            margin-left: -5%;
        }

        .custom-select {
            position: relative;
            margin-left: 50px;

        }

        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {}

        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0px;
            height: 0;
            border: 6px solid transparent;
            border-color: #000000 transparent transparent transparent;
        }

        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #000000 transparent;
            top: 7px;
        }

        /*style the items (options), including the selected item*/
        .select-items div,
        .select-selected {
            color: black;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent #000000 transparent;
            cursor: pointer;
            user-select: none;
            font-size: 20px;
        }

        /*style items (options)*/
        .select-items {
            position: absolute;
            background-color: #EFEDED;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;

        }

        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .form {
            margin-top: 40px;
            margin-left: 50px;

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
        .validation-show{
            margin-left: 50px;
            margin-right: 65px;
        }
    </style>

    <main>
        <div class="backforum">
            <h1><b><a class="" href="/forum" style="font-size: 24px;">{{ __('< Kembali ke Forum') }}</a></b></h1>
        </div>

        <div class="judul">
            <h1 class="title"><b>Yuk, bagikan kisahmu!</b></h1>
        </div>
        <!-- Validation Errors -->
        <div class="validation-show">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
        <form method="POST" action="{{ url('/upload-forum') }}" enctype="multipart/form-data">
            @csrf
            <div class="upload">
                <!-- up-->
                <div class="up-input mb-3">
                    <div class="form-file-group" style="width: 191px; height: 177px; border-radius: 50%">
                        <input type="file" style="display: none" id="up" name="forum-image" onchange="preview(this)" />
                        <img class="poto-up" src="{{ asset('img/up.png') }}"
                            onclick="document.querySelector('#up').click()" />
                    </div>
                    <div class="prev" id="previewBox" style="display: none">
                        <img src="" id="previewImg" style="width: 50%; text-align:center"
                            onclick="document.querySelector('#up').click()" />
                    </div>
                </div>

                <div class="custom-select" style="width:400px;height: 53px; background: #EFEDED;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            border-radius: 10px;">
                    <select name="type">
                        <option value="0">Jenis Kanker</option>
                        <option value="1">Kanker Paru-Paru</option>
                        <option value="2">Kanker Hati</option>
                        <option value="3">Kanker Darah</option>
                        <option value="4">Kanker Usus Besar</option>
                    </select>
                </div>

                <div class="form">
                    <!-- judul ya bund -->
                    <div class="pb-4">
                        <input id="judul" class="form-control notname-input" type="text" placeholder="Judul" name="title">
                    </div>

                    <!-- storynya bund -->
                    <div class="pb-4">
                        <textarea class="form-control notname-input" rows="5" placeholder="Ceritakan Kisahmu" id="story"
                            name="content"></textarea>
                    </div>
                </div>
                <div class="btn-up-loc">
                    <button class="btn-up">{{ __('Unggah') }}</button>
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
            var x, i, j, l, ll, selElmnt, a, b, c;
            /*cari elemen apa pun dengan kelas "custom-select":*/
            x = document.getElementsByClassName("custom-select");
            l = x.length;
            for (i = 0; i < l; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                ll = selElmnt.length;
                /*untuk setiap elemen, buat DIV baru yang akan bertindak sebagai item yang dipilih:*/
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /*for each element, create a new DIV that will contain the option list:*/
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 1; j < ll; j++) {
                    /*for each option in the original select element,
                    create a new DIV that will act as an option item:*/
                    c = document.createElement("DIV");
                    c.innerHTML = selElmnt.options[j].innerHTML;
                    c.addEventListener("click", function(e) {
                        /*when an item is clicked, update the original select box,
                        and the selected item:*/
                        var y, i, k, s, h, sl, yl;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        sl = s.length;
                        h = this.parentNode.previousSibling;
                        for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML == this.innerHTML) {
                                s.selectedIndex = i;
                                h.innerHTML = this.innerHTML;
                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                yl = y.length;
                                for (k = 0; k < yl; k++) {
                                    y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                        }
                        h.click();
                    });
                    b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function(e) {
                    /*when the select box is clicked, close any other select boxes,
                    and open/close the current select box:*/
                    e.stopPropagation();
                    closeAllSelect(this);
                    this.nextSibling.classList.toggle("select-hide");
                    this.classList.toggle("select-arrow-active");
                });
            }

            function closeAllSelect(elmnt) {
                /*a function that will close all select boxes in the document,
                except the current select box:*/
                var x, y, i, xl, yl, arrNo = [];
                x = document.getElementsByClassName("select-items");
                y = document.getElementsByClassName("select-selected");
                xl = x.length;
                yl = y.length;
                for (i = 0; i < yl; i++) {
                    if (elmnt == y[i]) {
                        arrNo.push(i)
                    } else {
                        y[i].classList.remove("select-arrow-active");
                    }
                }
                for (i = 0; i < xl; i++) {
                    if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                    }
                }
            }
            /*if the user clicks anywhere outside the select box,
            then close all select boxes:*/
            document.addEventListener("click", closeAllSelect);

        </script>
    </main>
@endsection
