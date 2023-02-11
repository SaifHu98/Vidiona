<?php
session_start();
global $LNG;
require 'lang/ar.php';
 ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="./images/favicon.png">
    <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $LNG[title]; ?></title>
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css" type="text/css">
  </head>
  <body>
    <header>
      <div class="container-fluid" >
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt="">  </a>
            <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="#A" class="nav-link"> <?php echo $LNG[Services]; ?></a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> <?php echo $LNG[Login]; ?></a> </li>
              <li class="nav-item"> <a href="about.php" class="nav-link"> <?php echo $LNG[about]; ?></a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1><?php echo $LNG[See]; ?> </h1> <br>
            <a href="register.php" type="button" class="btn btn-danger btn-block"><?php echo $LNG[SignUpFree]; ?></a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>خدماتنا</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h5 class="arrange"><img src="images/mob.png" alt=""> <br> <?php echo $LNG[Mob]; ?>
              </h5>
            </div><div class="col-md-4">
              <h5 class="arrange"><img src="images/mess.png"  alt=""> <br> <?php echo $LNG[Chat]; ?>
              </h5>
            </div>
              <div class="col-md-4">

                <h5 class="arrange">
                  <img src="images/desktop.jpg"> <br>   <?php echo $LNG[Disktop]; ?>
                </h5>
              </div>

            </div>
<br><br><br><br><br><br>
          </div>
    </section>
    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3"><?php echo $LNG[Copy]; ?>
      </div>
    </footer>
  </body>
</html>
