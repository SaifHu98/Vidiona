<?php
session_start();
global $LNG;
require '../../lang/ar.php';
require './acc.php';
 ?>
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
 <head>
   <meta charset="utf-8">
   <link rel="icon" href="../images/favicon.png">
   <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $LNG[acc-title]; ?></title>
   <link rel="stylesheet" href="../admin-css/homepage.css" type="text/css">
   <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css" >
 </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="admin-pass.php" class="navbar-brand"> <img src="../images/logo.png" alt=""> </a>
             <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

             <ul class="navbar-nav">

               <li class="nav-item"> <a href="../dash.php" class="nav-link"><?php echo $LNG[home]; ?></a> </li>

             </ul>


         </nav>

      </header>

      <div class="container" dir="rtl">
        <?php
              include '../../dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM admin WHERE id = $id ";
              $stmt = $conn->prepare($sql); 
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $admin = $stmt->get_result();
              $result = $admin->fetch_assoc();

      echo"  <form align=right>
              <br><br>
              <label><b>الاسم الكامل : </b>".$result['name']."</label><br>
              <label><b>اسم المستخدم : </b>".$result['user']."</label><br>
              <label><b>البريد الالكتروني : </b>".$result['email']."</label>
              </form><br><br>
              <form class='' action='./update-pass.php' method='post'>
                <input type='password' class='form-control' placeholder='ادخل كلمة المرور القديمة' name='oldp' required><br>
                <input type='password' class='form-control' placeholder='ادخل كلمة المرور الجديدة' name='newp' required><br>
                <button type='submit' class='btn btn-success ' name='subpass' value='submit'>تحديث كلمة المرور</button><br>


              </form>
              ";
         ?>




      </div>

    </body>

  </html>
