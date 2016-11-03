<?php

require_once('../connection.php');

$dbh->query('INSERT INTO student () VALUES (0,\'' . $_POST['fname'] . '\', \'' . $_POST['lname'] . '\', \'' . $_POST['ovnum'] . '\')');

header('Location: list.php');
