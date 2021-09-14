<?php
include("assets/php/router.php");
ROUTE::get("/" , function() {
  include(__DIR__ . "/assets/pages/login.php");
});
ROUTE::post("/" , function() {
  include(__DIR__ . "/assets/pages/login.php");
});
ROUTE::get("/panel" , function() {
  include(__DIR__ . "/assets/pages/panel.php");
});
ROUTE::get("test" , function() {
  include(__DIR__ . "/assets/pages/test.php");
});
?>
