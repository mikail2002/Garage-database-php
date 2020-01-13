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
    <title>gar-read-klant.php</title>
  </head>
  <body>
    <h1>Garage read klant</h1>
    <p>
      Dit zijn alle gegevens uit de
      tabel klanten van de database garage.
    </p>
    <table class="content1">
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
        // tabel uitlezen en netjes afdrukken ------------------------------
        require_once "gar-connect.php";

        $klanten = $db->prepare("
                                  select klantid,
                                         klantnaam,
                                         klantadres,
                                         klantpostcode,
                                         klantplaats
                                  from   klant
                                ");
        $klanten->execute();

            foreach ($klanten as $klant) {
              echo "<tbody>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $klant["klantid"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $klant["klantnaam"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $klant["klantadres"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $klant["klantpostcode"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $klant["klantplaats"] . "</td>";
              echo "</tr>";
              echo "</tbody>";
            }
        echo "<a href='gar-menu.php'><p class='echo1'> terug naar het menu </p></a>";

     ?>
   </table>
  </body>
</html>
