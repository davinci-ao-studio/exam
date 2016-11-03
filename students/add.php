<!DOCTYPE html>
<html>
<?php
require_once ('../assets/head.php');
 ?>
  <body>
<?php
require_once ('../assets/header.php');
 ?>
 <form action='crud.php' method="post">
   <label>First name</label><input type="text" name="fname" placeholder="John" required><br>
   <label>Last name</label><input type="text" name="lname" placeholder="Doe" required><br>
   <label>OV-nummer</label><input type="text" name="ovnum" placeholder="00000000" required pattern=".{5,10}"><br>
   <input type="submit" value="Sumbit">
 </form>
  </body>
</html>
