<?php
include "header.php";
include "menu-bar.php";
include "breadcrumb.php";

$query = include($_REQUEST["file"]);


include "footer.php";
?>