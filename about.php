<?php
session_start();
global $LNG;
require 'lang/ar.php';
 ?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head style='background-color:#000000;'>
<link rel="icon" href="./images/favicon.png">
  <meta charset="utf-8">
  <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $LNG[about]; ?></title>
  <link rel="stylesheet" href="./css/about.css" type="text/css">
  <link rel="stylesheet" href="./css/bootstrap/bootstrap.css" >
</head>
  <body style='background-color:#000000;'>
    <header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

            <ul class="navbar-nav">
              <?php
              
              echo"<li class='nav-item'> <a href='user-login.php' class='nav-link'>$LNG[Login]</a> </li>

                  <li class='nav-item'> <a href='test.php' class='nav-link'>$LNG[reg]</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";


              echo"<h1 style='color:black;position:sticky;'>$LNG[films]</h1><h1 style = 'color: black;font-size: 25px'></h1>
                  </div>
                  </header>
                  <section>

                  
                <div class='jumbotron' align=center style='margin-top:15px;padding-top:30px;padding-bottom:30px;'>
                <div class=''>
                         <h1>$LNG[abouttitle]</h1><br>
                         <h2> $LNG[aboutsubtitle] </h2><br>
                         <h3> $LNG[aboutsub2title] </h3><br>


                         <br>
                         <h4> $LNG[aboutdescription] </h4>
                         




                </div>
                </div>";
                  ?>




      </div>

  </section >
  <footer class="page-footer font-small blue" >

    <div class="footer-copyright text-center py-3"><?php echo $LNG[Copy]; ?>
    </div>

  </footer>
  </body>
</html>
