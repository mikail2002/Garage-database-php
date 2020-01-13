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
    <title>gar-delete-auto1.php</title>
  </head>
  <body>
      <h1>Garage delete auto 1</h1>
      <p>
        Dit formulier zoekt een auto op uit
        de tabel auto van database garage
        om hem te kunnen verwijderen.
      </p>
      <div class="box">
      <form action="gar-delete-auto2.php" method="post">
        <div class="inputbox">
        <input type="text" name="kentekenvak"><br />
        <input type="submit">
        </div>
      </form>
    </div>
  </body>
</html>
