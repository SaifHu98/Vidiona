<?php
session_start();
global $LNG;
require 'lang/ar.php';
require './acc.php';
 ?>
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
 <head>
   <meta charset="utf-8">
   <link rel="icon" href="./images/favicon.png">
   <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $LNG[acctitle]; ?></title>
   <link rel="stylesheet" href="./css/homepage.css" type="text/css">
   <link rel="stylesheet" href="./css/bootstrap/bootstrap.css" >
 </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
             <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

             <ul class="navbar-nav">

               <li class="nav-item"> <a href="homepage.php" class="nav-link"><?php echo $LNG[home]; ?></a> </li>

               <li class="nav-item"> <a href="logout.php" class="nav-link"><?php echo $LNG[signout]; ?></a> </li>
             </ul>


         </nav>

      </header>

      <div class="container" align=right>
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user WHERE id = $id "; 
              $stmt = $conn->prepare($sql); 
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $user = $stmt->get_result();
              $result = $user->fetch_assoc(); 

      echo"  <form  action='update.php' method='POST' align=right>
      <br><br>
      <label><b>الاسم الظاهر :</label>
          <br><br><input type='text' class='form-control' placeholder='ادخل اسمك الكامل' name='fname' value='".ucwords($result['name'])."'>
          <br><br>
          <label><b>اسم المستخدم الخاص بك : </b>".$result['username']."</label>
          <br><br>
          <label ><b>تاريخ الميلاد : </b></label>
          <input type='text' class='from-control' placeholder='ادخل تاريخ ميلادك' name='dob' value='".$result['dob']."'><br>

              <div class='signupbutton' align=center>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>تحديث البيانات</button>

              </div>
              </form>


              <br><br>
              <label><b>معرف البريد الالكتروني : </b>".$result['email']."</label>
              <br><br>
              <a href='accountp.php'>تغيير كلمة المرور</a>



              ";
         ?>




      </div>

    </body>

  </html>
