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
    <title>gar-update-auto1.php</title>
  </head>
  <body>
    <h1>Garage update auto 1</h1>
    <p>
      Dit formulier wordt gebruikt om autogegevens te wijzigen.
    </p>
    <div class="box">
    <form action="gar-update-auto2.php" method="post">
      Welk kenteken wilt u wijzigen?
      <div class="inputbox">
      <input type="text" name="autokentekenvak"><br />
      </div>
      <input type="submit">
    </form>
  </div>
  </body>
</html>
