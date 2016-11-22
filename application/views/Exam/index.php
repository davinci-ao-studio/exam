<!DOCTYPE html>
<html>
  <?php require_once('assets/head.php'); ?>
  <body>
    <?php require_once('assets/header.php'); ?>
    <div class="container">
      <div class="row col-md-6">
        <main>
          <h1>Home</h1>
          <article class="todays_exams">
            <h2>Opkomende Examens</h2>
            <?php
              echo "<div class='table-responsive'>";
              echo "<table class='table'>";
              echo "<thead>";
              echo "<tr>
                <th>Naam</th>
                <th>Examinatoren</th>
                <th>Datum</th>
                <th>Tijd</th>
              </tr>";
              echo "</thead>";
              echo "<tbody>";
              foreach( $result as $row) {
                echo "<tr>";
                  echo "<td>".$row['student_first_name']."&nbsp;".$row['student_last_name']."</td>";
                  echo "<td>".$row['docent1']."<span> & </span>".$row['docent2']."</td>";
                  echo "<td>".$row['date']."</td>";
                  echo "<td>".$row['time']."</td>";
                echo "</tr>";
              }
              echo "</tbody>";
              echo "</table>";
              echo "</div>";
            ?>
          </article>
        </main>
      </div>
    </div>
  </body>
</html>
