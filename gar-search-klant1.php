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
    <title>gar-search-klant1.php</title>
  </head>
  <body>
    <h1>garage zoek op klantid 1</h1>
    <p>
      Dit formulier zoekt een klant op uit
      de tabel klanten van database garage.
    </p>
    <div class="box">
    <form action="gar-search-klant2.php" method="post">
      Welk klantid zoekt u?
      <div class="inputbox">
      <input type="text" name="klantidvak" required=""><br />
    </div>
      <input type="submit">
    </form>
  </div>
  </body>
</html>
