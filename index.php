<?php
include("assets/php/router.php");
ROUTE::get("/" , function() {
  include(__DIR__ . "/assets/pages/index.php");
});
ROUTE::post("/" , function() {
  include(__DIR__ . "/assets/pages/index.php");
});
ROUTE::get("/panel" , function() {
  include(__DIR__ . "/assets/pages/panel.php");
});
?>
