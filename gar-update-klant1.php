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
    <title>gar-update-klant1.php</title>
  </head>
  <body>
    <h1>Garage update klant 1</h1>
    <p>
      Dit formulier wordt gebruikt om klantgegevens te wijzigen.
    </p>
    <div class="box">
    <form action="gar-update-klant2.php" method="post">
      Welk klantid wilt u wijzigen?
      <div class="inputbox">
      <input type="text" name="klantidvak"><br />
      </div>
      <input type="submit">
    </form>
    </div>
  </body>
</html>
