<?php
include 'dbh.php';


  $im = "SELECT * FROM movies" ;
  $stmt = $conn->prepare($im); 
  $stmt->execute();
  $records = $stmt->get_result();
  $count = mysqli_num_rows($records);


  $i=$count;
  $j=$count-4;
  $newim = "SELECT * FROM movies WHERE mid BETWEEN '$j' AND '$i'" ;
  $stmt = $conn->prepare($newim); 
  $stmt->bind_param("i", $mid);
  $stmt->execute();
  $newrecords = $stmt->get_result();
    while($fetchr = $newrecords->fetch_assoc()){

      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' height='250' width='200' style='margin-top: 30px;margin-left:50px;margin-right:20px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:50px;margin-right:20px;' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";


    }

    ?>
