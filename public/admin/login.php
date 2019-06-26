<?php
/*$adminEmail = "arnaudpizzetta@live.com";
$adminPass = 123;

if(
  isset($_POST) === 2
  && $adminEmail === $_POST['email']
  && $adminPass === $_POST['pass']
){
  $_SESSION['is_logged_in'] = true;
}else{
   header('Location: http://portfolio.local/admin/login.php');
  exit();
}
*/
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Admin-Portfolio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      html,
body {
  height: 100%;
}

body {
background-image : url("https://i.pinimg.com/originals/c6/22/46/c62246425d2c45d07ff2ad24ecd620cc.jpg");
background-repeat:no-repeat;
background-size:cover;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>
  </head>
  <body class="text-center">
    <form class="form-signin">
  <h1 class=" text-light h3 mb-3 font-weight-normal">Enregistrez-vous</h1>
  <label for="inputEmail" class="text-light sr-only">Login</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
  <label for="inputPassword" class="text-light sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control text-light" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input class="text-light" type="checkbox" value="remember-me"> Se rappeller de moi
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
</body>
</html>
