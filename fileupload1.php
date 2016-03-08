<?php
include "header.php";
include "menu-bar.php";
include "breadcrumb.php";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "<br/>File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<br/>File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<br/>Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<br/>Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != ".htaccess") {
    echo "<br/>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br/>Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br/>Success!<br/>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "<br/>Sorry, there was an error uploading your file.";
    }
}
?>
<form action="fileupload1.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label class="col-sm-2 control-label" for="field-4">Select image to upload:</label>

        <div class="col-sm-10">
            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
        </div>
    </div>
    <input type="submit"  class="btn btn-secondary" value="Upload Image" name="submit">
</form>

<?php
include "footer.php";
?>