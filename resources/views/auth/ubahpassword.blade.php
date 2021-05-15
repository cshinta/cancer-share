<!DOCTYPE html>
<html>
<head>
<title>Change Password</title> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family:'Signika',Arial, Helvetica, sans-serif;
margin: 0;}
* {box-sizing: border-box;}

.column {
  float: left;
  padding: 10px;
  height: 80%; /* Should be removed. Only for demonstration */
}

.left {
  width: 25%;
}

.right {
  width: 75%;
}
h2{
    margin-left: 27%;
    font-family:'Signika';
    margin-top: 5px;
font-size: 23px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

img.avatar {
  width: 45%;
  text-align: left;
  margin:0%;
}
img.profil {
  width: 17%;
  text-align: center;
  margin: 80px 0 5px 240px;
}
input[type=password]{
  width: 45%;
  height: 50px;
  padding: 12px 20px;
  margin: 10px 0 10px 11%;
  display: inline-block;
  border: 1px solid #9B9B9B;;
  box-sizing: border-box;
  border-radius: 10px;
background-color: #EDEDED;
font-family: 'Signika';
font-size: medium;
}
button{
width: 45%;
height: 48px;
padding: 12px 20px;
margin: 10px 0 10px 11%;
background: #033D68;
border: 1px solid #9B9B9B;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
color: white;
font-family: 'Signika';
font-size: medium;
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
  margin-top: 61px;
}
</style>
</head>
<body>

    <div class="row">
      <div class="column left">
            <img src="logo.png" alt="logo" class="avatar">   
      </div>
      <div class="column right">
        <img src="avatar.png" alt="lock" class="profil">
        <h2>Arief Dava</h2>
        <form action="###" method="POST">
            <input type="password" placeholder="Kata Sandi Lama" name="passwordlama" required>
            <div>
            <input type="password" placeholder="Kata Sandi Baru" name="passwordbaru" required>
        </div>
        <div>
          <button type="submit">Ubah Kata Sandi</button>
      </div>
        </form>
      </div>
    </div>
    <footer>
        <p>© 2021 Pikachu inc. All Rights Reserved.</p>
       </footer>
</body>
</html>