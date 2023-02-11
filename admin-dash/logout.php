<?php
  session_start();
  $_SESSION['admin'] = false;
  session_destroy();
  header("Location: admin-login.php");

?>
