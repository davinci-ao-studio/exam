<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=exam', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
