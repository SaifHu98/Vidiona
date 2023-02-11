<?php
session_start();
global $LNG;
require 'lang/ar.php';
require './acc.php';

if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;
  $stmt = $conn->prepare($im); 
  $stmt->bind_param("s", $title);
  $stmt->execute();
  $records = $stmt->get_result();

  echo"<!DOCTYPE html>";
  echo"<html lang='ar' dir='rtl'>";
    echo"<head>";
    
      echo"<meta charset='utf-8'>";
      echo "<link rel='icon' href='./images/favicon.png'>";
      echo" <meta name='description' content='<?php echo $LNG[description]; ?>'>";
      echo"<meta name='keywords' content='<?php echo $LNG[keywords]; ?>'>";
     echo " <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='./css/movie.css'>";
      echo"<link rel='stylesheet' href='./css/bootstrap/bootstrap.css' >
      ";
    echo"</head>";
    echo"<body style='background-color:#000000;'>";

        echo"<div class='jumbotron' align=right style='background-color:#1C1C1C;'>";
        echo"<div class='container'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE admin SET mid = '$movieid' WHERE id ='$person' ";
            $nsql2 = "UPDATE user SET mid = '$movieid' WHERE id ='$person' ";
            $stmt = $conn->prepare($newsql); 
            $stmt->bind_param("i", $viewers);
            $stmt->execute();
            $updatecount = $stmt->get_result();
            $stmt = $conn->prepare($nsql); 
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $updatecount = $stmt->get_result();
            $stmt = $conn->prepare($nsql2); 
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $updatecount = $stmt->get_result();

            echo"<br>";
            echo"<a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>$LNG[backhome]</a>";
          echo "<br><br><h5 style='display: inline;color:orange;'><br>اسم الفيلم : </h5><h5 style='display: inline;color:#D8D8D8;'>".ucwords($result['name'])."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >النوع : </h5><h5 style='display: inline;color:#D8D8D8;'>".ucwords($result['genre'])."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >تاريخ الاصدار : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['rdate']."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >الوصف : </h5><h5 style='display: inline;color:#D8D8D8;'>".ucfirst($result['decription'])."</h5>";
          echo"<br><h5 style='display: inline;color:orange;' >وقت العرض : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['runtime']." mins </h5>";
          echo"<br><h5 style='display: inline;color:orange;' >المشاهدات : </h5><h5 style='display: inline;color:#D8D8D8;'>".$result['viewers']."</h5>";
          echo"<br><br><br>";
          echo"<br><h5 align=center style='display: inline;color:#D8D8D8;' >$LNG[note]</h5>";
          echo"<br><br><br>";
          echo"</div>";
          echo"<div align=center>";
          echo include './player/play.php';
          echo"</div>";
          

        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
