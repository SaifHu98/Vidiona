<?php
  session_start();
  include '../../dbh.php';
  require './acc.php';
    $fname = strtolower($_POST['fname']);
    $lname =  strtolower($_POST['lname']);
    $name = $fname." ".$lname;
    $username =  $_POST['usname'];
    $email =  $_POST['email'];
    $password =  $_POST['pass'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $date."/".$month."/".$year;


    $sql = "INSERT INTO admin(user, pass, name, email, dob)
    values(?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssss", $username, $password, $name, $email, $dob);
  
    $stmt->execute();
    header("Location: editadmins.php");
?>
