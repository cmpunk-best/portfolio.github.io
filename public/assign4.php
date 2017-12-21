<?php
require("../includes/config.php");
$Success='';
$allowedExts = array("pdf","ppt","docx");
$target_dir = "uploads/";
$cnt=0;
foreach($_FILES as $eachFile)
{
     if($eachFile['size'] > 0)
        $cnt++;
}
for($i=0;$i<$cnt;$i++){

$target_file = $target_dir . basename($_FILES["fileToUpload1".$i]["name"]);
$extension = pathinfo($target_file, PATHINFO_EXTENSION);

if ((($_FILES["fileToUpload1".$i]["type"] == "application/pdf")
|| ($_FILES["fileToUpload1".$i]["type"] == "application/vnd.openxmlformats-officedocument.presentationml.presentation")
|| ($_FILES["fileToUpload1".$i]["type"] == "application/vnd.ms-powerpoint")
|| ($_FILES["fileToUpload1".$i]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))

&& ($_FILES["fileToUpload1".$i]["size"] < 20000000000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["fileToUpload1".$i]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["fileToUpload1".$i]["error"] . "<br />";
    }
  else
    {

    if (file_exists("uploads/" . $_FILES["fileToUpload1".$i]["name"]))
      {
      echo $_FILES["fileToUpload1".$i]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["fileToUpload1".$i]["tmp_name"],
      "uploads/" . $_FILES["fileToUpload1".$i]["name"]);
       CS50::query("INSERT  INTO teachassign(user_id,subject,topic,link,year) VALUES(?,?,?,?,?)",$_SESSION["id"],$_POST["subname"][$i],$_POST["caption1".$i],basename( $_FILES["fileToUpload1".$i]["name"]),2017);
        if($i==$cnt-1){
        $GLOBALS['Success']='Success';
      render("portupload.php", ["title" => "Log In"]);

      }

    }
  }
  }
else
  {
  apologize( "Incorrect file format or name of file contains abrubt characters(like #,*).Try renaming file without these characters .","portupload_.php","Error");
  }

}
?>
