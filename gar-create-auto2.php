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
    <title>gar-create-auto2.php</title>
  </head>
  <body>
    <h1>Garage create auto 2</h1>
    <p>
      Een auto toevoegen aan de tabel
      auto in de database garage.
    </p>
    <?php
      // autogegevens uit het formulier halen ------------------------
      $autokenteken = $_POST["autokentekenvak"];
      $automerk = $_POST["automerkvak"];
      $autotype = $_POST["autotypevak"];
      $autokmstand = $_POST["autokmstandvak"];
      $klantid = $_POST["klantidvak"];

      // autogegevens invoeren in de tabel ---------------------------
      require_once "gar-connect.php";

      $sql = $db->prepare("
                              insert into auto values
                              (
                                  :autokenteken, :automerk,
                                  :autotype, :autokmstand, :klantid
                                )
                          ");
      // manier 1 -----------------------------------------------------
      $sql->bindParam(":autokenteken", $autokenteken);
      $sql->bindParam(":automerk", $automerk);
      $sql->bindParam(":autotype", $autotype);
      $sql->bindParam(":autokmstand", $autokmstand);
      $sql->bindParam(":klantid", $klantid);

      $sql->execute();


      echo "<p class='echo1'>De auto is toegevoegd </p><br />";
      echo "<a href='gar-menu.php'><p class='echo1'> terug naar het menu </p></a>";
     ?>
  </body>
</html>
