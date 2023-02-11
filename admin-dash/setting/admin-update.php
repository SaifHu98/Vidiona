<?php
  session_start();
  include '../../dbh.php';
  require './acc.php';

if(isset($_POST['sub'])){

    $nam = strtolower($_POST['fname']);
    $rid = $_SESSION['id'];
    $date = $_POST['dob'];

    $nsql = "UPDATE admin SET name= '$nam', dob= '$date' WHERE id='$rid'";
    $stmt = $conn->prepare($nsql); 
    $stmt->execute();
    $result = $stmt->get_result();
    header("Location: admin-account.php");
   }
?>
