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
    <title>gar-read-auto.php</title>
  </head>
  <body>
    <h1>Garage read auto</h1>
    <p>
      Dit zijn alle gegevens uit de
      tabel auto van de database garage.
    </p>
    <table class="content1">
      <thead>
        <tr>
        <th>Klantid</th>
        <th>Autokenteken</th>
        <th>Automerk</th>
        <th>Autotype</th>
        <th>Autokmstand</th>
        </tr>
      </thead>
    <?php
        // tabel uitlezen en netjes afdrukken ------------------------------
        require_once "gar-connect.php";

        $autos = $db->prepare("
                                  select klantid,
                                         autokenteken,
                                         automerk,
                                         	autotype,
                                         	autokmstand
                                  from   auto
                                ");
        $autos->execute();

            foreach ($autos as $auto) {
              echo "<tbody>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $auto["klantid"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $auto["autokenteken"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $auto["automerk"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $auto["autotype"] . "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td rowspan='7'>" . $auto["autokmstand"] . "</td>";
              echo "</tr>";
              echo "</tbody>";
            }
        echo "<a href='gar-menu.php'><p class='echo1'> terug naar het menu </p></a>";

     ?>
   </table>
  </body>
</html>
