<?php
require "../includes/config.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
       
        
        //no matter what happens degree should not be empty
        //make sure that degree is not empty also
        
        
       
          
         
        $n=count($_POST["Schoolname"]);
        
        //once per session of user
         CS50::query("DELETE FROM useredu WHERE degree IS NULL");
        CS50::query("DELETE FROM userwork WHERE degree IS NULL");
        
        CS50::query("DELETE FROM userlang WHERE lang IS NULL");
        CS50::query("DELETE FROM userhobby WHERE hobby IS NULL");
        CS50::query("DELETE FROM userwork WHERE user_id=?",$_SESSION["id"]);
        
         for($i=0;$i<$n;$i++){
        CS50::query("INSERT IGNORE  INTO userwork(user_id,schoolname,major,degree,year) VALUES(?,?,?,?,?)",$_SESSION["id"],$_POST["Schoolname"][$i],$_POST["Major"][$i],$_POST["Degree"][$i],$_POST["educationDate"][$i]);
        }
        
        
       
        
         apologize("Your work/intern/experience details have been saved","portedit_.php","Saved");

        
        
    }


?>