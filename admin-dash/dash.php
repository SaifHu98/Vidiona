<?php
session_start();
global $LNG;
require '../lang/ar.php';
require './acc.php';
 ?>


 <html lang="ar" dir="rtl">
 <head>
   <meta charset="utf-8">
   <link rel="icon" href="./images/favicon.png">
   <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $LNG[dash]; ?></title>
   <link rel="stylesheet" href="./admin-css/admin.css" type="text/css">
   <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" >
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="#" class="navbar-brand"> <img src="./images/logo.png" alt=""> </a>
           <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="dash.php" class="nav-link"> <?php echo $LNG[home]; ?> </a> </li>
                          <li class="nav-item"> <a href="./setting/admin-account.php" class="nav-link"> <?php echo $LNG[adminacc]; ?> </a> </li>
             <li class="nav-item"> <a href="../homepage.php" class="nav-link"> <?php echo $LNG[adminhome]; ?> </a> </li>
             <li class="nav-item"> <a href="logout.php" class="nav-link"> <?php echo $LNG[signout]; ?></a> </li>

           </ul>

       </nav>

<div class="alert alert-success" role="alert">
<?php echo $LNG[dashwel]; ?>
</div>
       <div class="container" align=center dir="rtl">
         <div class="jumbotron">
           <h2 class="card-header"> <?php echo $LNG[dashb]; ?></h2>
          <br>
          
          <div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-header"><?php echo $LNG[allusers]; ?></h5>
      <h3 class="card-text"><br>
      <?php
        include '../dbh.php';
        foreach($conn->query('SELECT COUNT(*) FROM user') as $row) {
          echo "<tr>";
          echo "<td>" . $row['COUNT(*)'] . "</td>";
          echo "</tr>";} ?>
      </h3>
      
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-header"><?php echo $LNG[allmovies]; ?></h5>
      <h3 class="card-text"><br><?php
        include '../dbh.php';
        foreach($conn->query('SELECT COUNT(*) FROM movies') as $row) {
          echo "<tr>";
          echo "<td>" . $row['COUNT(*)'] . "</td>";
          echo "</tr>";} ?></h3>
       
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-header"><?php echo $LNG[allviews]; ?></h5>
      <h3 class="card-text"><br><?php
        include '../dbh.php';
        $query = "SELECT SUM(viewers) AS total_veiws FROM `movies` ";
        $query_result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($query_result)){
          $output = $row['total_veiws'];
        }
        echo $output;
        ?></h3>
         
    </div>
        </div>
         </div>
         <br>  <br>
           <h2 class="card-header"> <?php echo $LNG[dasha]; ?></h2>
          <br>
         
          <div class="card-group" >
  <div class="card border-primary mb-3">
    <div class="card-body">
      <h5 class="card-header"><?php echo $LNG[userset]; ?></h5>
      <p class="card-text"><?php echo $LNG[userdes]; ?></p><br>
      <a href="./setting/editusers.php" class="btn btn-primary"><?php echo $LNG[go]; ?></a>
      
    </div>

  </div>
  <div class="card border-success mb-3">
    <div class="card-body">
      <h5 class="card-header"><?php echo $LNG[movieset]; ?></h5>
      <p class="card-text"><?php echo $LNG[moviedes]; ?></p><br>
      <a href="./setting/editmovies.php" class="btn btn-primary"><?php echo $LNG[go]; ?></a>
    </div>

  </div>
  <div class="card border-danger mb-3">
    <div class="card-body">
      <h5 class="card-header"><?php echo $LNG[adminset]; ?></h5>
      <p class="card-text"><?php echo $LNG[admindes]; ?></p><br><br>
      <a href="./setting/editadmins.php" class="btn btn-primary"><?php echo $LNG[go]; ?></a>   
    </div>
    </div>
  </div>
</div>
<br>

         </div>
         </div>
 </header>
 <footer class="page-footer font-small blue">
   <div class="footer-copyright text-center py-3"><?php echo $LNG[Copy]; ?>
   </div>
 </footer>
   </body>
   
 </html>
