<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:gar-login.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Mikail Köker">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-menu.php</title>
  </head>
  <body>
    <a href="gar-loguit.php">Log uit</a>
    <h1>Garage menu <br /> Welkom <?php echo $_SESSION['username']; ?></h1>
    <h2 class="klant1">Klant</h2>

    <ul class="ul1">

      <li class="li1"><a href="gar-create-klant1.php"> Create </a></li>
      <li class="li1"><a href="gar-read-klant.php"> Read </a></li>
      <li class="li1"><a href="gar-search-klant1.php"> Zoeken op klantid </a></li>
      <li class="li1"><a href="gar-update-klant1.php"> Update </a></li>
      <li class="li1"><a href="gar-delete-klant1.php"> Delete klantid </a></li>
      <li class="li1"><a href="gar-auto-klant1.php"> Klant met Auto </a></li>

    </ul>

    <h2 class="auto1">Auto</h2>
    <ul class="ul2">

      <li class="li2"><a href="gar-create-auto1.php"> Create </a></li>
      <li class="li2"><a href="gar-read-auto.php"> Read </a></li>
      <li class="li2"><a href="gar-search-auto1.php"> Zoeken op kenteken </a></li>
      <li class="li2"><a href="gar-update-auto1.php"> Update </a></li>
      <li class="li2"><a href="gar-delete-auto1.php"> Delete met kenteken </a></li>
      <li class="li2"><a href="gar-autotype1.php"> autotype met klant </a></li>

    </ul>
  </body>
</html>
