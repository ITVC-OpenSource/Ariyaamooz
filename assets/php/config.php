<?php
if (!isset($_SESSION)){
    session_start();
}
$dbh = "localhost";
$dbu = "root";
$dbp = "";
$dbn = "ara";
$table_prefix = "ara";
$dbc = new PDO("mysql:host = $dbh;dbname=$dbn;" , $dbu , $dbp);
$connection = $dbc;
$server = "http://localhost/aa/";
$htaccess_code_for_disable_php_flags = "php_flag display_errors off";
if (!isset($_SESSION["uname"])) {
    header("location: ../");
}else {
    $uname = $_SESSION["uname"];
    $user_res = $dbc->query("SELECT * FROM `users` WHERE uname = '$uname'");
    $user = $user_res->fetch(PDO::FETCH_ASSOC);
    if ($user['type'] = "admin") {
        include(__DIR__ . '/../pages/admin.php');
    } elseif ($user['type'] = "student") {
        include(__DIR__ . '/../pages/student.php');
    } elseif ($user['type'] = "teacher") {
        include(__DIR__ . '/../pages/teahcer.php');
    }
}
?>