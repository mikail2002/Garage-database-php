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
    <title>gar-create-klant2.php</title>
  </head>
  <body>
    <h1>Garage create klant 2</h1>
    <p>
      Een klant toevoegen aan de tabel
      klant in de database garage.
    </p>
    <?php
      // klantgegevens uit het formulier halen ------------------------
      $klantid = NULL; // komt niet uit het formulier (autoincrement)
      $klantnaam = $_POST["klantnaamvak"];
      $klantadres = $_POST["klantadresvak"];
      $klantpostcode = $_POST["klantpostcodevak"];
      $klantplaats = $_POST["klantplaatsvak"];

      // klantgegevens invoeren in de tabel ---------------------------
      require_once "gar-connect.php";

      $sql = $db->prepare("
                              insert into klant values
                              (
                                  :klantid, :klantnaam, :klantadres,
                                  :klantpostcode, :klantplaats
                                )
                          ");
      // manier 1 -----------------------------------------------------
      $sql->bindParam(":klantid", $klantid);
      $sql->bindParam(":klantnaam", $klantnaam);
      $sql->bindParam(":klantadres", $klantadres);
      $sql->bindParam(":klantpostcode", $klantpostcode);
      $sql->bindParam(":klantplaats", $klantplaats);

      $sql->execute();


      echo "<p class='echo1'>De klant is toegevoegd </p><br />";
      echo "<a href='gar-menu.php'><p class='echo1'> terug naar het menu </p></a>";
     ?>
  </body>
</html>
