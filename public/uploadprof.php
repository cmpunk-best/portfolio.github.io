<?php
 require("../includes/config.php");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submitfile"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //apologize( "File is an image - " . $check["mime"] . ".","portimage_.php","Error");
        $uploadOk = 1;
    } else {
        apologize( "File is not an image.","portimage_.php","Error");
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    apologize( "Sorry, file already exists.Try changing the name of your image file.","portgallery_.php","Error");
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    apologize( "Sorry, your file is too large.","portimage_.php","Error");
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    apologize( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.","portimage_.php","Error");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    apologize( "Sorry, your file was not uploaded.","portimage_.php","Error");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       CS50::query("INSERT  INTO userupload(user_id,imgurl,caption) VALUES(?,?,?)",$_SESSION["id"],basename( $_FILES["fileToUpload"]["name"]),$_POST["caption"]);
       //TODO :every user to be incorporated


    apologize( "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.","portgallery_.php","Success");

    } else {
        apologize( "Sorry, there was an error uploading your file.","portgallery_.php","Error");
    }
}
?>