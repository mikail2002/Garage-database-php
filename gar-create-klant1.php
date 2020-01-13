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
    <title>gar-create-klant1.php</title>
  </head>
  <body>
    <h1>Garage create klant</h1>
    <div class="box">
    <form action="gar-create-klant2.php" method="post" required="">
      <div class="inputbox">
      <input type="text" name="klantnaamvak" required="">
      <label>Klantnaam</label>
      </div>
      <div class="inputbox">
      <input type="text" name="klantadresvak" required="">
      <label>Klantadres</label>
      </div>
      <div class="inputbox">
      <input type="text" name="klantpostcodevak" required="">
      <label>Klantpostcode</label>
      </div>
      <div class="inputbox">
      <input type="text" name="klantplaatsvak" required="">
      <label>Klantplaats</label>
      </div>
      <input type="submit">
    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p>
      Dit formulier wordt gebruikt om autogegevens in te voeren.
    </p>
  </body>
</html>
