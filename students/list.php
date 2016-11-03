<!DOCTYPE html>
<html>
<?php
require_once('../assets/head.php');
require_once('../connection.php');
$student_list = $dbh->query('SELECT * FROM student')
 ?>
  <body>
    <?php require_once('../assets/header.php'); ?>
    <div class="container">
      <div class="row col-md-6">
        <h1>Students</h1>
        <h2>Studenten Lijst</h2>
        <div class='table-responsive'>
           <table class="table">
             <thead>
               <tr>
                 <th>Voornaam</th>
                 <th>Achternaam</th>
                 <th>OV-nummer</th>
               </tr>
             </thead>

             <tbody>
               <?php foreach ($dbh->query('SELECT * FROM student') as $student):?>
              <tr>
                <td><?= $student['first_name']?></td>
                <td><?= $student['last_name']?></td>
                <td><?= $student['ov_number']?></td>
              </tr>
              <?php endforeach; ?>
             </tbody>
           </table>
         </div>
           <a href="add.php" class="btn btn-primary" role="button">Student toevoegen</a>
       </div>
     </div>
  </body>
</html>
