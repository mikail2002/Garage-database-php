<?php
  session_start();
  header('location:gar-login.php');

  $connect = mysqli_connect("localhost", "root", "mkoker2002", "garage");

  $name = $_POST['user'];
  $pass = $_POST['password'];
  $utype = $_POST['gebruikertype'];
  $s = " SELECT * FROM gebruikers WHERE gebruikersnaam = '$name'";

  $result = mysqli_query($connect, $s);

  $num = mysqli_num_rows($result);

  if($num == 1) {
    echo "Gebruikersnaam is al in gebruik";
  }else {
    $reg = " INSERT INTO gebruikers(gebruikersnaam , wachtwoord , gebruikertype) VALUES ('$name' , '$pass' , '$utype')";
    mysqli_query($connect, $reg);
    echo "Registratie is gelukt";
  }
 ?>
