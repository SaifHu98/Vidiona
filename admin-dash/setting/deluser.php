<?php

include "../../dbh.php"; // Using database connection file here
require './acc.php';

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE from user where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location: editusers.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>