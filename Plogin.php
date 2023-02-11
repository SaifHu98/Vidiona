<?php
  session_start();
  include 'dbh.php';
  require './lang/ar.php';


    
    $username =  $_POST['usname'];
    $password =  $_POST['pass'];



    $sql = "SELECT * FROM user WHERE (username = '$username' OR email = '$username') AND passwd = '$password' ";
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if(!$row = $result->fetch_assoc()) {
      echo "$LNG[nopass]";
        }else {  
        $_SESSION['user'] = True; 
        $_SESSION['id'] = $row['id'];
        header("Location: homepage.php");
      }

?>
      <script>
      setTimeout(function(){window.location = 
        "./user-login.php";}, 1000 * 60 * 60 * 3);
                </script>