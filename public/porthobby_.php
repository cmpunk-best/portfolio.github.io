<?php
require "../includes/config.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
       
        
        //no matter what happens hobby should not be empty
        //make sure that hobby is not empty also
        $n=count($_POST["hobby"]);
        
       /* $news=CS50::query("SELECT * FROM userhobby WHERE user_id=?",$_SESSION["id"]);
        
          
         
        
        if($n<(count($news))){
         
        $losthobby=0;$j=0;$flag="false";
        foreach($news as $new){
        
        for($i=0;$i<($n);$i++)
        {
         if($new["hobby"]==$_POST["hobby"][$i]){
          break;
          
         }
         else{
          $flag='true';
         }
         
        }
        
        if($flag=='true'){
         $losthobby++;
         $hobby[$losthobby]=$new["hobby"];
        }
        }
        for($j=1;$j<=$losthobby;$j++){
        CS50::query("DELETE FROM userhobby WHERE hobby=?",$hobby[$j]);
        }
        
        }
        */
        //once per session of user
         CS50::query("DELETE FROM useredu WHERE degree IS NULL");
        CS50::query("DELETE FROM userwork WHERE degree IS NULL");
        
        CS50::query("DELETE FROM userlang WHERE lang IS NULL");
        CS50::query("DELETE FROM userhobby WHERE hobby IS NULL");
         CS50::query("DELETE FROM userhobby WHERE user_id=?",$_SESSION["id"]);
       
        
        
         for($i=0;$i<$n;$i++){
        CS50::query("INSERT IGNORE  INTO userhobby(user_id,hobby) VALUES(?,?)",$_SESSION["id"],$_POST["hobby"][$i]);
        }
        
        
        /*$rows=CS50::query("SELECT * FROM userhobby WHERE user_id=? ",$_SESSION["id"]);
        for($i=0;$i<$n;$i++){
         $row=$rows[$i];
        CS50::query("UPDATE userhobby SET hobby=? WHERE user_id=?",$_POST["hobby"][$i],$_SESSION["id"]);
       
        }*/
       
        
         apologize("Your topics have been saved","portedit_.php","Saved");

        
        
    }


?>