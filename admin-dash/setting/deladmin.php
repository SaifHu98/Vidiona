<?php

include "../../dbh.php"; // Using database connection file here
require './acc.php';

$id = $_GET['id']; // get id through query string

if($id == 1){
    echo "لا تستطيع حذف الادمن الرئيسي سيتم تحويلك للصفحة بعد 3 ثواني "; // display error message if not delete
}
else
{
    $del = mysqli_query($conn,"DELETE from admin where id = '$id'"); // delete query
    mysqli_close($conn); // Close connection
    header("location: editadmins.php"); // redirects to all records page
    exit;	
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
      <script>
      setTimeout(function(){window.location = 
        "editadmins.php";}, 3000);
                </script>