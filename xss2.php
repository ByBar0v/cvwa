<?php
include "header.php";
include "menu-bar.php";
include "breadcrumb.php";

if (preg_match('/script/i', $_GET["cvwa"])) {
  die("error");
}
 echo $_GET["cvwa"];

include "footer.php";

?>
