@section('content')
@extends('layouts.auth')

<style>
.backforum{
        
padding-left:20px;
padding-top:10px;
    }

a {
color: black;
    }
    
a:hover {
color: blue;
text-decoration: none;
    }
    
a:visited {
color:black;
text-decoration: none;
}

.jenis-laporan{
    margin-left:60px;
margin-top:70px;
}

.custom-select{
    position: relative;
margin-left:50px;
margin-top:10px;

}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
}
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
.select-items div,.select-selected {
  color: black;
  padding: 5px 16px;
  border: 1px solid transparent;
  border-color: transparent
  cursor: pointer;
  user-select: none;
  font-size:20px;
}

/*style items (options)*/
.select-items {
  position: absolute;
  background: #FFFFFF;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
 
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.form-group{
    margin-top:10px;
    margin-left:50px;
}
.form-control{
    width: 80%;
background: #FFFFFF;
border: 1px solid #000000;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.btn-up-loc {
            text-align: center;
        }
.btn-up {
            width: 160px;
            height: 67px;
            background: #033d68;
            font-family: Signika;
            font-size: 24px;
            font-style: normal;
            color: #fff;
            border-radius: 10px;
            margin-top: 30px;
            margin-bottom: 50px;
        }
.alasan{
    margin-left:60px;
margin-top:40px;
}
</style>

<main>
<div class="backforum">
    <h1><b><a class="" href="" style="font-size: 25px;">{{ __('< Kembali') }}</a></b></h1>
    </div>

    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
<div class="jenis-laporan">
<h4><b>Jenis Laporan</b></h4>
</div>

<div class="custom-select" style="width:400px;height: 53px; background: #FFFFFF;
border: 1px solid #000000;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
  <select name="Jenis laporan">
    <option value="0">Pilih Jenis Laporan</option>
    <option value="1">Pornografi</option>
    <option value="2">Penghinaan</option>
    <option value="3">Pembajakan</option>
    <option value="4">Lainnya</option>
  </select>
</div>
                <div class="alasan">
                        <h4><b>Alasan</b></h4>
                    </div>
                    <div class="form">
                            <!-- alasan ya bund -->
                            <div class="form-group">
                                    <textarea class="form-control" rows="8" id="alasan"></textarea>
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