<?php
  session_start();
  include '../../dbh.php';

if(isset($_POST['subpass'])){

    $oldpass = $_POST['oldp'];
    $newpass =  $_POST['newp'];
    $rid = $_SESSION['id'];
    $psql = "UPDATE admin SET pass = '$newpass' WHERE id='$rid' AND pass='$oldpass'";
    $stmt = $conn->prepare($psql); 
    $stmt->execute();
    $result = $stmt->get_result();
    $extra = '../logout.php';
    header("Location: $extra");
    exit;
}
?>
