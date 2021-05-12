<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;
margin: 0;}
* {box-sizing: border-box;}

.input-container {
 display: -ms-flexbox; 
 display: flex;
  width: 100%;
  margin-bottom: 15px;
  
}
.main{height: 9.25cm;}

.icon {
  padding: 10px;
  background: #98B1C4;
  color:black;
  width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  font-size: medium;
  
}

.btn {
  background-color: black;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size: medium;
  
}

.btn:hover {
  opacity: 1;
}

.imgcontainer {
  text-align: center;
  margin: 20px 0 12px 0;
}

img.avatar {
  width: 15%;

}

input{
    background-color: #98B1C4;
    border : none;
}
.opsi {
  height: 3px;
  font-size: 15px;
  text-align: center;
  margin-top: 16px;
  color: black;
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
    {{ HTML::asset('img/logo.png', 'alt logo', array('class' => 'logo')) }}
      </div>
      <div class="main">
      <form action="####" style="max-width:500px;margin:auto">
        <div class="input-container">
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Username" name="usrnm">
        </div>
        <div class="input-container">
          <i class="fa fa-lock icon"></i>
          <input class="input-field" type="password" placeholder="Password" name="psw">
        </div>
        <button type="submit" class="btn">Masuk</button>   
      </form>
      <p class="opsi"> <a href="#" > Lupa Kata Sandi?</a> <b> |<a href="#"> Daftar</a></b><p>
    </div>
     <footer>
      <p>© 2021 Pikachu inc. All Rights Reserved.</p>
     </footer>
      
</body>
</html>
