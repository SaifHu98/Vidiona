<?php
session_start();
global $LNG;
require 'lang/ar.php';
require './acc.php';
 ?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head style='background-color:#000000;'>
  <meta charset="utf-8">
  <link rel="icon" href="./images/favicon.png">
  <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $LNG[homepage]; ?></title>
  <link rel="stylesheet" href="css/homepage.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css" >
</head>
  <body style='background-color:#000000;'>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text"><?php echo _SITE_NAME; ?></span>

            <ul class="navbar-nav">
              <?php
                if ($_SESSION['admin']) {
                  echo "<li class='nav-item'> <a href='./admin-dash/dash.php' class='nav-link'>$LNG[dash]</a> </li>";
                }
                if ($_SESSION['user']) {
                  echo "<li class='nav-item'> <a href='account.php' class='nav-link'>$LNG[acc]</a> </li>";
                }
              echo"
                  <li class='nav-item'> <a href='logout.php' class='nav-link'>$LNG[signout]</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";
                  ?>
                  <?php
                  if ($_SESSION['user']) {
                    include 'dbh.php';
                    $id = $_SESSION['id'];
                    $quer = "SELECT * FROM user WHERE id = '$id' ";
                    $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user where id = '$id') ";
                    $stmt = $conn->prepare($quer); 
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $check = $stmt->get_result();
                    $rel = $check->fetch_assoc();
                    $check2 = mysqli_query($conn,$quer2);
                    $rel2 = mysqli_fetch_assoc($check2);
                    echo"<h1 style='color:black;position:sticky;'>$LNG[welcome]</h1><h1 style = 'color: black;font-size: 25px'> ".ucwords($rel['name'])." !</h1>
                    </div>
                    </header>
                    <section>
                    <div dir=rtl class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;background-color:#1C1C1C;'>
                    <div class='container' dir='rtl'>
                    <div class='row'>
                      <div class='col-sm'>
                        <form action='movie.php' method='POST'>
                        <h4 style='color:black;font-size:25px;color:white;' align='right'>اخر فيلم :
                        <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;' value='".ucwords($rel2['name'])."'/></h4>
                        </form><br>
                      </div><br>
                      <div class='col-sm'>
                        <form action='search.php' method='POST' align='right'>
                          <select  name='option' style='padding:5px;'>
                            <option selected>بحث بواسطة</option>
                            <option value='1'>الاسم</option>
                            <option value='2'>النوع</option>
                            <option value='3'>تاريخ الاصدار</option>
                          </select>
                          <input align='right' type='text' placeholder='ادخال..' name='textoption'>
    
                          <input align='right' type='submit' name='submit' class='btn btn-success' style='display:inline;width:70px;' value='بحث'/></h4>
                        </form>
                      </div>
                    </div>
                    </div>
                    </div>";
                    echo "
                    <div class='jumbotron' align=center style='background-color:#1C1C1C;' dir=rtl>
                    <h2 style='margin-top:0px;padding-top:0px;color:white;'><?php echo $LNG[recent]; ?></h2>
                      <div class='row'>";
                          include 'latest-fetcher.php';
                    echo " </div>
                  </div>
                  <div class='jumbotron' align=center style='background-color:#1C1C1C;'>
                    <h2 style='color:white;'>  <?php echo $LNG[all]; ?></h2>";
                      
                        include 'fetcher.php';
                echo "  </div>
            
              </section >";
                  }
                  ?>
                  <?php
                  if ($_SESSION['admin']) {
                    include 'dbh.php';
                    $id = $_SESSION['id'];
                    $quer = "SELECT * FROM admin WHERE id = '$id' ";
                    $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid FROM admin WHERE id = '$id') ";
                    $stmt = $conn->prepare($quer); 
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $check = $stmt->get_result();
                    $rel = $check->fetch_assoc();
                    $check2 = mysqli_query($conn,$quer2);
                    $rel2 = mysqli_fetch_assoc($check2);
                    echo"<h1 style='color:black;position:sticky;'>$LNG[welcome]</h1><h1 style = 'color: black;font-size: 25px'> ".ucwords($rel['name'])." !</h1>
                    </div>
                    </header>
                    <section>
  
                    
                    <div dir=rtl class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;background-color:#1C1C1C;'>
                    <div class='container' dir='rtl'>
                    <div class='row'>
                      <div class='col-sm'>
                        <form action='movie.php' method='POST'>
                        <h4 style='color:black;font-size:25px;color:white;' align='right'>اخر فيلم :
                        <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;' value='".ucwords($rel2['name'])."'/></h4>
                        </form><br>
                      </div><br>
                      <div class='col-sm'>
                        <form action='search.php' method='POST' align='right'>
                          <select  name='option' style='padding:5px;'>
                            <option selected>بحث بواسطة</option>
                            <option value='1'>الاسم</option>
                            <option value='2'>النوع</option>
                            <option value='3'>تاريخ الاصدار</option>
                          </select>
                          <input align='right' type='text' placeholder='ادخال..' name='textoption'>
    
                          <input align='right' type='submit' name='submit' class='btn btn-success' style='display:inline;width:70px;' value='بحث'/></h4>
                        </form>
                      </div>
                    </div>
                    </div>
                    </div>";
                    echo "
                    <div class='jumbotron' align=center style='background-color:#1C1C1C;' dir=rtl>
                    <h2 style='margin-top:0px;padding-top:0px;color:white;'><?php echo $LNG[recent]; ?></h2>
                      <div class='row'>";
                          include 'latest-fetcher.php';
                    echo " </div>
                  </div>
                  <div class='jumbotron' align=center style='background-color:#1C1C1C;'>
                    <h2 style='color:white;'>  <?php echo $LNG[all]; ?></h2>";
                      
                        include 'fetcher.php';
                echo "  </div>
            
              </section >";
                  }
                  ?>



  <footer class="page-footer font-small blue" >

    <div class="footer-copyright text-center py-3"><?php echo $LNG[Copy]; ?>
    </div>

  </footer>
  </body>
</html>
