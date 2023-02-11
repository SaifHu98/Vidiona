<?php
session_start();
global $LNG;
require '../../lang/ar.php';
require './acc.php';
 ?>


 <html lang="ar" dir="rtl">
 <head>
   <meta charset="utf-8">
   <link rel="icon" href="../images/favicon.png">
   <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $LNG[admintitle]; ?></title>
   <link rel="stylesheet" href="../admin-css/admin.css" type="text/css">
   <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css" >
 </head>
 <body>
   <header>
     <div class="container-fluid" style=" margin-top: -20px; ">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="dash.php" class="navbar-brand"> <img src="../images/logo.png" alt=""> </a>
           <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="../dash.php" class="nav-link"> <?php echo $LNG[home]; ?> </a> </li>
             <li class="nav-item"> <a href="../logout.php" class="nav-link"> <?php echo $LNG[signout]; ?></a> </li>

           </ul>

       </nav>

       <div class="container well" style=" margin-top: -70px;  " align=center dir="rtl">
         <div class="jumbotron">
           <h3> <?php echo $LNG[userdit]; ?></h3>
           <p> <?php echo $LNG[editinfo]; ?></p>
          <?php echo include './usertable.php'; ?>
<?php
        include '../dbh.php';
        foreach($conn->query('SELECT COUNT(*) FROM user') as $row) {
          echo "<tr>";
          echo "<td>" ."$LNG[numusers]  : ". $row['COUNT(*)'] . "</td>";
          echo "</tr>";} ?>
        </div>
         </div>
 </header>
 <footer class="page-footer font-small blue">
   <div class="footer-copyright text-center py-3"><?php echo $LNG[Copy]; ?>
   </div>
 </footer>
   </body>
   
 </html>

