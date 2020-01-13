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
    <title>gar-update-klant2.php</title>
  </head>
  <body>
    <h1>Garage update klant 2</h1>
    <p>
      Dit formulier wordt gebruikt om klantgegevens te wijzigen
      in de tabel klant van de database garage.
    </p>
    <?php
        // klantid uit het formulier halen -------------------------
        $klantid = $_POST["klantidvak"];

        // klantgegevens uit de tabel halen -------------------------
        require_once "gar-connect.php";

        $klanten = $db->prepare("
                                  select klantid,
                                         klantnaam,
                                         klantadres,
                                         klantpostcode,
                                         klantplaats
                                  from   klant
                                  where  klantid = :klantid
                              ");
        $klanten->execute(["klantid" => $klantid]);

        // klantgegevens in een nieuw formulier laten zien --------------
        echo "<form action='gar-update-klant3.php' method='post'>";
          foreach ($klanten as $klant) {
            // klantid mag niet gewijzigd worden
            echo "<div class='box'>";
            echo " klantid: " . $klant["klantid"] . "<br />";
            echo " <input type='hidden' name='klantidvak' ";
            echo " value=' " . $klant["klantid"] . " '> <br />";

            echo "<div class='inputbox'>";
            echo " klantnaam: <input type='text' ";
            echo " name = 'klantnaamvak' ";
            echo " value=' " . $klant["klantnaam"] . "' ";
            echo "> <br />";

            echo "<div class='inputbox'>";
            echo " klantadres: <input type='text' ";
            echo " name = 'klantadresvak' ";
            echo " value=' " . $klant["klantadres"] . "' ";
            echo "> <br />";

            echo "<div class='inputbox'>";
            echo " klantpostcode: <input type='text' ";
            echo " name = 'klantpostcodevak' ";
            echo " value=' " . $klant["klantpostcode"] . "' ";
            echo "> <br />";

            echo "<div class='inputbox'>";
            echo " klantplaatsvak: <input type='text' ";
            echo " name = 'klantplaatsvak' ";
            echo " value=' " . $klant["klantplaats"] . "' ";
            echo "> <br />";
          }
          echo "<input type='submit'>";
          echo "</form>";
          echo "</div>";

     ?>
  </body>
</html>
