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
    <title>gar-delete-klant1.php</title>
  </head>
  <body>
      <h1>Garage delete klant 1</h1>
      <p>
        Dit formulier zoekt een klant op uit
        de tabel klanten van database garage
        om hem te kunnen verwijderen.
      </p>
      <div class="box">
      <form action="gar-delete-klant2.php" method="post">
        <div class="inputbox">
        <input type="text" name="klantidvak"><br />
        </div>
        <input type="submit">
      </form>
      </div>
  </body>
</html>
