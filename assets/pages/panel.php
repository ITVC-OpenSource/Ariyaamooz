<?php
include(__DIR__ . "/../php/config.php");
if (!isset($_SESSION["uname"])) {
  header("location: ../");
}else {
  $uname = $_SESSION["uname"];
}
$user_res = $dbc->query("SELECT * FROM `users` WHERE uname = '$uname'");
$user = $user_res->fetch(PDO::FETCH_ASSOC);
if ($user['type'] = "admin") {
  include(__DIR__ . '/../pages/admin.php');
}elseif ($user['type'] = "student") {
  include(__DIR__ . '/../pages/student.php');
}elseif ($user['type'] = "teacher") {
  include(__DIR__ . '/../pages/teahcer.php');
}
?>
