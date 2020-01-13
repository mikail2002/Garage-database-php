<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:gar-login.php');
  }
 ?>
<?php

    $connect = mysqli_connect("localhost", "root", "mkoker2002", "Garage");

    $sql =  "SELECT * FROM klant INNER JOIN auto ON klant.klantid = auto.klantid";
    $result = mysqli_query($connect, $sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="author" content="Mikail Köker">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/garage.css">
    <title>gar-autotype1.php</title>
  </head>
  <body>
    <h1>Garage read autotype met klant</h1>
    <p>
      Dit menu laat je alle klanten
      met hun autotypes zien.
    </p>
    <br />
    <table class="content1">
      <thead>
      <tr>
        <th>Autotype</th>
        <th>Klantnaam</th>
        <th>Klantadres</th>
        <th>Klantpostcode</th>
        <th>Klantplaats</th>
      </tr>
    </thead>
    <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td><?php echo $row["autotype"]; ?></td>
            <td><?php echo $row["klantnaam"]; ?></td>
            <td><?php echo $row["klantadres"]; ?></td>
            <td><?php echo $row["klantpostcode"]; ?><br />
            <td><?php echo $row["klantplaats"]; ?></td></td>
          </tr>
        <?php
        }
      }
      echo "<a href='gar-menu.php'><p class='echo1'> terug naar het menu </p></a>";
     ?>
     </table>
  </body>
</html>
