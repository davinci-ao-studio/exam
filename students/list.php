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

     <section>
       <table>
         <thead>
           <tr>
             <th>
               id
             </th>
             <th>
               first_name
             </th>
             <th>
               last_name
             </th>
           </tr>
         </thead>
         <tbody>
      <?php foreach ($dbh->query('SELECT * FROM student') as $student):?>
          <tr>
            <td>
              <?= $student['id']?>
            </td>
            <td>
              <?= $student['first_name']?>
            </td>
            <td>
              <?= $student['last_name']?>
            </td>
          </tr>
          <?php endforeach; ?>
         </tbody>
       </table>
       <a href="add.php">Add student</a>
     </section>
  </body>
</html>
