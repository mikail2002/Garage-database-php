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
    <title>gar-delete-klant2.php</title>
  </head>
  <body>
      <h1>Garage delete klant 2</h1>
      <p>
        Op klantid gegevens zoeken uit de
        tabel klanten van de database Garage
        zodat ze verwijderd kunnen worden.
      </p>
      <table class="content12">
      <thead>
        <tr>
          <th>Klantid</th>
          <th>Klantnaam</th>
          <th>Klantadres</th>
          <th>Klantpostcode</th>
          <th>Klantplaats</th>
        </tr>
      </thead>
      <?php
        // klantid uit het formulier halen -------------------
        $klantid = $_POST["klantidvak"];

        // klantgegevens uit de tabel halen ------------------
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

        // klantgegevens laten zien ---------------------------
            foreach ($klanten as $klant) {
              echo "<tr>";
              echo "<td>" . $klant["klantid"] . "</td>";
              echo "<td>" . $klant["klantnaam"] . "</td>";
              echo "<td>" . $klant["klantadres"] . "</td>";
              echo "<td>" . $klant["klantpostcode"] . "</td>";
              echo "<td>" . $klant["klantplaats"] . "</td>";
              echo "</tr>";
            }
        echo "</table><br />";

        echo "<div class='box'>";
        echo "<form action='gar-delete-klant3.php' method='post'>";
        // klantid mag niet meer gewijzigd worden
        echo "<input type='hidden' name='klantidvak' value='$klantid'>";
        // Waarde 0 doorgeven als er niet gecheckt wordt
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "Verwijder deze klant. <br />";
        echo "<input type='submit'>";
        echo "</form>";
        echo "</div>";
       ?>
  </body>
</html>
