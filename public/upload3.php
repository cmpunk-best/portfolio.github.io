<?php
require("../includes/config.php");
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$extension = pathinfo($target_file, PATHINFO_EXTENSION);

if ((($_FILES["fileToUpload"]["type"] == "video/mp4")
|| ($_FILES["fileToUpload"]["type"] == "audio/mp3")
|| ($_FILES["fileToUpload"]["type"] == "audio/wma")
|| ($_FILES["fileToUpload"]["type"] == "image/pjpeg")
|| ($_FILES["fileToUpload"]["type"] == "image/gif")
|| ($_FILES["fileToUpload"]["type"] == "image/jpeg"))

&& ($_FILES["fileToUpload"]["size"] < 20000000000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["fileToUpload"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br />";
    echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br />";
    echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["fileToUpload"]["tmp_name"] . "<br />";

    if (file_exists("uploads/" . $_FILES["fileToUpload"]["name"]))
      {
      echo $_FILES["fileToUpload"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
      "uploads/" . $_FILES["fileToUpload"]["name"]);
       CS50::query("INSERT  INTO userpost(user_id,post,videopost) VALUES(?,?,?)",$_SESSION["id"],$_POST["caption"],basename( $_FILES["fileToUpload"]["name"]));
      $row2=CS50::query("SELECT LAST_INSERT_ID() AS id");
       //TODO :every user to be incorporated
       $rows=CS50::query("SELECT * FROM users");
       foreach($rows as $row){
        CS50::query("INSERT  INTO userhit(user_id,post,bypost) VALUES(?,?,?)",$row["id"],$_POST["caption"],$row2[0]["id"]);
       }
       apologize( "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.","porthome_.php","Success");
      }
    }
  }
else
  {
  apologize( "File is not an image.","porthome_.php","Error");
  }
?>
