<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style-login.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style media="screen">
    body{
      background-image: url("bg3.jpg");
    }
    .card{
        margin-top: 175px ;
        margin-left: 350px ;
        width: 25%;

      }
    </style>
</head>
<body>
<h2>Login</h2>
<form action="proses.php" method="post">
<form action="" method="">
  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar">
  </div>
  
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" autocomplete="off" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" autocomplete="off" required>
     
    <div class="btnlogin">
    <br><input type="submit" value="Login" name="btnlogin"><br>
    </div>
    <a class="nav-item nav-link" href="http://localhost/tugasakhir/register/tambah.php">Buat akun</a>
  </div>
  </div>
</form>
</body>
</html>
