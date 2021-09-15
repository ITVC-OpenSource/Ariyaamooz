<?php
include(__DIR__ . "/../php/config.php");
if ($user['type'] = "admin") {
    include(__DIR__ . '/../pages/admin.php');
} elseif ($user['type'] = "student") {
    include(__DIR__ . '/../pages/student.php');
} elseif ($user['type'] = "teacher") {
    include(__DIR__ . '/../pages/teahcer.php');
}
?>
