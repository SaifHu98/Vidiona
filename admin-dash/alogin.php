<?php
  session_start();
  include '../dbh.php';
  require '../lang/ar.php';

    
    $user =  $_POST['usname'];
    $pass =  $_POST['pass'];



    $sql2 = "SELECT * FROM admin WHERE (user = '$user' OR email = '$user') AND pass = '$pass' ";
    $stmt = $conn->prepare($sql2); 
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result2 = $stmt->get_result();

    
    if(!$row = $result2->fetch_assoc()) {
      echo "$LNG[nopass]";
    }else {
        $_SESSION['admin'] = True; 
        $_SESSION['id'] = $row['id'];
        header ('Location: dash.php');

      }

?>
      <script>
      setTimeout(function(){window.location = 
        "./admin-login.php";}, 1000 * 60 * 60 * 24);
                </script>