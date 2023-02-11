<?php
  session_start();
  include 'dbh.php';
  require './acc.php';

if(isset($_POST['subpass'])){

    $oldpass = $_POST['oldp'];
    $newpass =  $_POST['newp'];
    $rid = $_SESSION['id'];

    $psql = "UPDATE user SET passwd = '$newpass' WHERE id='$rid' AND passwd='$oldpass'";
    $stmt = $conn->prepare($psql); 
    $stmt->execute();
    $result = $stmt->get_result();
    header("Location: ulogout.php");
    exit;
}
?>
