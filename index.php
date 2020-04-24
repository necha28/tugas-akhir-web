<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style media="screen">
    body{
      background-image: url("bg.png");
    }
    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
      }
      #card-content {
      padding: 1px 39px;
    }
    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }
    .underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: 0.5rem auto 0 auto;
      width: 89px;
    }
    a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 25px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
    </style>
</head>
<body>
<div id="card">
<div id="card-content">
  <div id="card-title">
<h2>LOGIN</h2>
<div class="underline-title"></div>
  </div>
  <div class="card-body">
<form action="proses.php" method="post">
<form action="" method="">
  </div>

  <label for="username" style="padding-top:13px">&nbsp;Username</label>
  <input
   id="nama"
   class="form-content"
   type="text"
   name="username"
   autocomplete="on"
   required />
  <div class="form-border"></div>
<label for="password" style="padding-top:22px">&nbsp;Password</label>
  <input
   id="id"
   class="form-content"
   type="password"
   name="password"
   required />
  <div class="form-border"></div>

  <br><input id="submit-btn" type="submit" name="btnlogin" value="Login" /><br>
  <a href="http://localhost/tugasakhir/register/tambah.php" id="signup">Don't have account yet?</a>
  </div>
  </div>
</form>
</body>
</html>
