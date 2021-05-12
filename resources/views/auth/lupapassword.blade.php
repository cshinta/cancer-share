<!DOCTYPE html>
<html>
<head>
<title>Lupa Kata Sandi?</title> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family:'Signika',Arial, Helvetica, sans-serif;
margin: 0;}
* {box-sizing: border-box;}

.form{
    text-align: center;
}
input[type=text]{
  width: 33%;
  height: 50px;
  padding: 12px 20px;
  margin: 10px;
  display: inline-block;
  border: 1px solid #9B9B9B;;
  box-sizing: border-box;
  border-radius: 10px;
background-color: #EDEDED;
font-family: 'Signika';
font-size: medium;
}

button{
width: 33%;
height: 48px;
padding: 12px 20px;
margin: 10px;
background: #033D68;
border: 1px solid #9B9B9B;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
color: white;
font-family: 'Signika';
font-size: medium;
}
.imgcontainer {
  text-align: left;
  margin-left: 5px;
}
.imglock {
  text-align: center;
  margin: 20px 0 px 0;
}

img.avatar {
  width: 10%;

}
img.lock {
  width: 6%;

}
h2{
    text-align: center;
    font-family:'Signika';
font-size: 27px;
margin: 0%;
}
h3{
    text-align: center;
    font-family:'Signika';
font-size: 15px;
color: #737373;
margin: 0%;
}

h4{
    text-align: center;
    font-family:'Signika';
font-size: 20px;
color: #737373;
margin: 12px;
}
h5{
    text-align: center;
    font-family:'Signika';
font-size: 20px;
margin: 2.8%;
}

  a:link{
    text-decoration:none;
    color: black;
  }
  a:hover{
    color: blue;
  }

footer {
  background-color:#033D68;
;
  text-align: center;
  color: white;
  width: auto;
  height: 1cm;
  padding: 1px;
  font-size: 13px;
}
</style>
</head>
<body>

    <div class="imgcontainer">
        <img src="logo.png" alt="logo" class="avatar">
      </div>
    <div class="imglock">
        <img src="lock1.png" alt="lock" class="lock">
      </div>
      <h2>Lupa Kata Sandi?</h2>
      <h3>Masukkan alamat email atau no. Handphone yang sebelumnya<br> telah terdaftar pada akun.<br></h3>
      <div class="form">
      <form action="" method="POST">
        <input type="text" placeholder="alamat email atau no. Handphone" name="pulihan" required>
        <div>
        <button type="submit">Kirim Link Pulihan</button>
    </div>
      </form>
    </div>
    <h4>atau</h4>
    <h5><a href="#" >Buat Akun Baru</a></h5>
     <footer>
      <p>© 2021 Pikachu inc. All Rights Reserved.</p>
     </footer>

      
      
</body>
</html>