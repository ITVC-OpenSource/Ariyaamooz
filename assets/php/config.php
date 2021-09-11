<?php
$dbh = "localhost";
$dbu = "root";
$dbp = "";
$dbn = "ara";
$table_prefix = "ara";
$pdo = new PDO("mysql:host = $dbh;dbname=$dbn;" , $dbu , $dbp);
$connection = $pdo;
$server = "http://localhost/aa/";
?>
