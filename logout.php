<?php
  session_start();
  $_SESSION['user'] = false;
  session_destroy();
  header("Location: index.php");

?>
