<?php
  session_start();
  session_destroy();

  header('location:gar-login.php');
 ?>
