<?php
include("assets/php/router.php");
ROUTE::get("/" , function() {
  include(__DIR__ . "/assets/pages/index.php");
});
ROUTE::get("/a" , function() {
  include(__DIR__ . "/assets/pages/a.php");
});
?>
