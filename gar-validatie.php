<?php
  session_start();

  $connect = mysqli_connect("localhost", "root", "mkoker2002", "garage");

  $name = $_POST['user'];
  $pass = $_POST['password'];
  $s = " SELECT * FROM gebruikers WHERE gebruikersnaam = '$name' AND wachtwoord = '$pass'";

  $result = mysqli_query($connect, $s);

  $num = mysqli_num_rows($result);

  if($num == 1) {
    $_SESSION['username'] = $name;
    header('location:gar-menu.php');
  }else {
    header('location:gar-login.php');
  }
 ?>
