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
   <label>First name</label><input type="text" name="fname" placeholder="John"><br>
   <label>Last name</label><input type="text" name="lname" placeholder="Doe"><br>
   <input type="submit" value="Sumbit">
 </form>
  </body>
</html>
