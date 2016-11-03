<!DOCTYPE html>
<html>
<?php
require_once('../assets/head.php');
require_once('../connection.php');
$student_list = $dbh->query('SELECT * FROM student')
 ?>
  <body>
    <?php
    require_once('../assets/header.php');
     ?>

     <article class="students">
       <table>
         <thead>
           <tr>
             <th>
               Voornaam
             </th>
             <th>
               Achternaam
             </th>
             <th>
               OV-nummer
             </th>
           </tr>
         </thead>
         <tbody>
      <?php foreach ($dbh->query('SELECT * FROM student') as $student):?>
          <tr>
            <td>
              <?= $student['first_name']?>
            </td>
            <td>
              <?= $student['last_name']?>
            </td>
            <td>
              <?= $student['ov_number']?>
            </td>
          </tr>
          <?php endforeach; ?>
         </tbody>
       </table>
       <a href="add.php">Student toevoegen</a>
     </article>
  </body>
</html>
