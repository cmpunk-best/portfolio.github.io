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

$target_file = $target_dir . basename($_FILES["fileToUpload".$i]["name"]);
$extension = pathinfo($target_file, PATHINFO_EXTENSION);

if ((($_FILES["fileToUpload".$i]["type"] == "application/pdf")
|| ($_FILES["fileToUpload".$i]["type"] == "application/vnd.openxmlformats-officedocument.presentationml.presentation")
|| ($_FILES["fileToUpload".$i]["type"] == "application/vnd.ms-powerpoint")
|| ($_FILES["fileToUpload".$i]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))

&& ($_FILES["fileToUpload".$i]["size"] < 20000000000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["fileToUpload".$i]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["fileToUpload".$i]["error"] . "<br />";
    }
  else
    {

    if (file_exists("uploads/" . $_FILES["fileToUpload".$i]["name"]))
      {
      echo $_FILES["fileToUpload".$i]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["fileToUpload".$i]["tmp_name"],
      "uploads/" . $_FILES["fileToUpload".$i]["name"]);
       CS50::query("INSERT  INTO teachpost(user_id,subject,topic,link,year) VALUES(?,?,?,?,?)",$_SESSION["id"],$_POST["subname"][$i],$_POST["caption".$i],basename( $_FILES["fileToUpload".$i]["name"]),2017);
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
