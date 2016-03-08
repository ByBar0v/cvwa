
<?php
include "header.php";
include "menu-bar.php";
include "breadcrumb.php";
  $sql = "SELECT * FROM users where username='";
  $sql .= $_GET["username"]."'";
  $result = mysqli_query($sql);
  echo $result;
include "footer.php";
?>