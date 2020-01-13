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
    <title>gar-delete-auto3.php</title>
  </head>
  <body>
      <h1>Garage delete auto 3</h1>
      <p>
        Op kenteken gegevens zoeken uit de
        tabel auto van de database Garage
        zodat ze verwijderd kunnen worden.
      </p>
      <?php
        // gegevens uit het formulier halen -------------------
        $kenteken = $_POST["kentekenvak"];
        $verwijderen = $_POST["verwijdervak"];

        // autogegevens verwijderen --------------------------
        if ($verwijderen) {
          require_once "gar-connect.php";

          $sql = $db->prepare("
            delete from auto
            where   autokenteken = :autokenteken
          ");
          $sql->execute(["autokenteken" => $kenteken]);

          echo "<p class='echo1'>De gegevens zijn verwijderd</p>";
        }
        else {
          echo "<p class='echo1'>De gegevens zijn niet verwijderd.</p> <br />";
        }
        echo "<a href='gar-menu.php'> <p class='echo1'>Terug naar het menu.</p>";
       ?>
  </body>
</html>
