<?php
include "header.php";
include "menu-bar.php";
include "breadcrumb.php";
  
  if (isset($_POST["name"])) {
    echo "Hosgeldin: ".htmlentities($_POST["name"]);
  }
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="input-group">
    <input type="text" name="name" class="form-control no-right-border form-focus-warning" placeholder="Adınız...">
											<span class="input-group-btn">
												<input id="field-cvwa" type="submit" class="btn btn-danger">Submit</input>
											</span>
  </div>
</form>
<?php
include "footer.php";
?>