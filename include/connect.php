<?php

$dbuser = 'root';
$dbpass = '';
$dbname = 'teamtech';
$dbserver = 'localhost';

$connect = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die(mysqli_error());

?>