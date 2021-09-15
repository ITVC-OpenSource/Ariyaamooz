<?php
session_start();
$dbh = "localhost";
$dbu = "root";
$dbp = "";
$dbn = "ara";
$table_prefix = "ara";
$dbc = new PDO("mysql:host = $dbh;dbname=$dbn;" , $dbu , $dbp);
$connection = $dbc;
$server = "http://localhost/aa/";
$htaccess_code_for_disable_php_flags = "php_flag display_errors off";
?>
