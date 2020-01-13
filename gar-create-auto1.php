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
    <title>gar-create-auto1.php</title>
  </head>
  <body>
    <h1>Garage create auto</h1>
  <div class="box">
    <form action="gar-create-auto2.php" method="post">
      <div class="inputbox">
      <input type="text" name="autokentekenvak" required="">
      <label>Autokenteken</label>
      </div>
      <div class="inputbox">
      <input type="text" name="automerkvak" required="">
      <label>Automerk</label>
      </div>
      <div class="inputbox">
      <input type="text" name="autotypevak" required="">
      <label>Autotype</label>
      </div>
      <div class="inputbox">
      <input type="text" name="autokmstandvak" required="">
      <label>Autokmstand</label>
      </div>
      <div class="inputbox">
      <input type="text" name="klantidvak" required="">
      <label>Klantid</label>
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
