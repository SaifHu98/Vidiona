<?php

include "../../dbh.php"; // Using database connection file here
require './acc.php';

$mid = $_GET['mid']; // get id through query string

$del = mysqli_query($conn,"DELETE from movies where mid = '$mid'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location: editmovies.php"); // redirects to all records page
    exit;	
}
else
{
    echo "خطأ في حذف الفيلم"; // display error message if not delete
}
?>