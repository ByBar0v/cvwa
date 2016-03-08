<?php
include "header.php";
include "menu-bar.php";

$Query = $_GET['cvwa'];
?>


<div class="row" style="color: aliceblue;background-color:#34495e;">
    <div class="col-md-6"  >
    <!-- Bordered panel -->

          <h4 class="text-platinium"> Command Injection<h4>
                  <form action="commandinj1.php" method="get" name="cvwa" type="text">
                        <div class="input-group">
                             <input type="text" name="cvwa" class="form-control no-right-border form-focus-warning" placeholder="input....">
											<span class="input-group-btn">
												<input id="field-cvwa" type="submit" class="btn btn-danger">Submit</input>
											</span>
                        </div>
                  </form>

<?php

if(!empty($_GET['cvwa'])) {
    $userhost=exec('whoami')."@".$_SERVER['SERVER_NAME']."~$";
echo '<pre>
<div class="window-cursor">
    <span class="i-cursor-indicator" style="color:red">'.$userhost." ".$_GET['cvwa'].'</span>
   </div><br/>';
    system($Query);
    echo '
    <br>
    <div class="window-cursor">
    <span class="i-cursor-indicator" style="color:red">'.$userhost.'</span>
    <span class="i-cursor-underscore"></span></div></pre>
    </div></div>';



}
include "footer.php";
?>
