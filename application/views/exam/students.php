<!DOCTYPE html>
<html>
  <?php require_once('/assets/head.php'); ?>
  <body>
    <?php require_once('/assets/header.php'); ?>
    <div class="container">
      <div class="row col-md-6">
        <h1>Students</h1>
        <h2>Studenten Lijst</h2>
          <?php
            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>
              <th>Voornaam</th>
              <th>Achternaam</th>
              <th>OV-nummer</th>
            </tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach( $result as $row) {
              echo "<tr>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['ov_number']."</td>";
              echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
          ?>
           <a href="#" class="btn btn-primary" role="button">Student toevoegen</a>
       </div>
     </div>
  </body>
</html>
