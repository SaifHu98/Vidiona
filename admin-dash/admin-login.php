<?php
session_start();
global $LNG;
require '../lang/ar.php';
 ?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $LNG[adminlogin]; ?></title>
    <link rel="stylesheet" href="./admin-css/admin-login.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" >
    <link rel="icon" href="./images/favicon.png">
  </head>
  <body>
    <header>
      <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="admin-login.php" class="navbar-brand"> <img src="./images/logo.png" alt=""> </a>
            <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

            <ul class="navbar-nav">

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron">
            <h1 align=center ><?php echo $LNG[adminlogin]; ?></h1> <br>
            <form class="" action="alogin.php" method="POST"> <br><br>
              <input type="text" class="form-control" placeholder=" اسم المستخدم او البريد الالكتروني" name="usname" value="">
              <br>
              <input type="password" class="form-control" placeholder="كلمة المرور" name="pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login"><?php echo $LNG[Login]; ?></button>

              </div>
              <div style="text-align:center;">
                </div>
              </form>

              </div>


          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3"><?php echo $LNG[Copy]; ?>
    </div>

  </footer>
  </body>

</html>
