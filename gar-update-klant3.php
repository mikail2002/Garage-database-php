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
    <title>gar-update-klant3.php</title>
  </head>
  <body>
    <h1>Garage update klant 3</h1>
    <p>
      klantgegevens wijzigen in de tabel
      klant van de database garage.
    </p>
    <?php
      // klantgegevens uit het formulier halen -----------------
      $klantid = $_POST["klantidvak"];
      $klantnaam = $_POST["klantnaamvak"];
      $klantadres = $_POST["klantadresvak"];
      $klantpostcode = $_POST["klantpostcodevak"];
      $klantplaats = $_POST["klantplaatsvak"];

      // updaten klantgegevens ---------------------------------
      require_once "gar-connect.php";

      $sql = $db->prepare("
          update klant set    klantnaam = :klantnaam,
                              klantadres = :klantadres,
                              klantpostcode = :klantpostcode,
                              klantplaats = :klantplaats
                              where   klantid = :klantid
      ");

      $sql->execute([
        "klantid" => $klantid,
        "klantnaam" => $klantnaam,
        "klantadres" => $klantadres,
        "klantpostcode" => $klantpostcode,
        "klantplaats" => $klantplaats
      ]);

          echo "<p class='echo1'>De klant is gewijzigd. </p><br />";
          echo "<a href='gar-menu.php'> <p class='echo1'>terug naar het menu </p></a>";
     ?>
  </body>
</html>
