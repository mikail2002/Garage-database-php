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
    <title>gar-delete-auto2.php</title>
  </head>
  <body>
      <h1>Garage delete auto 2</h1>
      <p>
        Op kenteken gegevens zoeken uit de
        tabel auto van de database Garage
        zodat ze verwijderd kunnen worden.
      </p>
      <table class="content12">
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
        // auto uit het formulier halen -------------------
        $kenteken = $_POST["kentekenvak"];

        // autogegevens uit de tabel halen ------------------
        require_once "gar-connect.php";

        $kentekens = $db->prepare("
            select autokenteken,
                   automerk,
                   autotype,
                   autokmstand,
                   klantid
            from   auto
            where  autokenteken = :autokenteken
        ");
        $kentekens->execute(["autokenteken" => $kenteken]);

        // autogegevens laten zien ---------------------------
            foreach ($kentekens as $auto) {
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
        echo "</table><br />";
        echo "<div class='box'>";
        echo "<form action='gar-delete-auto3.php' method='post'>";
        // kenteken mag niet meer gewijzigd worden
        echo "<input type='hidden' name='kentekenvak' value='$kenteken'>";
        // Waarde 0 doorgeven als er niet gecheckt wordt
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "Verwijder deze auto. <br />";
        echo "<input type='submit'>";
        echo "</form>";
        echo "</div>";
       ?>
  </body>
</html>
