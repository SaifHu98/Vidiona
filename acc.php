<?php
  session_start();

  if (!isset($_SESSION['user']) && !isset($_SESSION['admin']))
        {

                 header('Location: user-login.php');
            }  

?>
