<?php
require "../includes/config.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
   
   $news=CS50::query("SELECT * FROM userlang WHERE user_id=?",$_SESSION["id"]);
        
          
         
        $n=count($_POST["lang1"]);
        if($n<(count($news))){
         
        $lostlang=0;$j=0;$flag="false";
        foreach($news as $new){
        
        for($i=0;$i<($n);$i++)
        {
         if($new["lang"]==$_POST["lang1"][$i]){
          break;
          
         }
         else{
          $flag='true';
         }
         
        }
        
        if($flag=='true'){
         $lostlang++;
         $lang[$lostlang]=$new["lang"];
        }
        }
        for($j=1;$j<=$lostlang;$j++){
        CS50::query("DELETE FROM userlang WHERE lang=?",$lang[$j]);
        }
        
        }
    
       /* $percentage=[];
        CS50::query("DELETE FROM userlang WHERE lang IS NULL");
        
        foreach($_POST["percent"] as $val){
            if($val==''){
                
            }
            else{
            array_push($percentage,$val);
            }
        }*/
        
        CS50::query("DELETE FROM useredu WHERE degree IS NULL");
        CS50::query("DELETE FROM userwork WHERE degree IS NULL");
        
        CS50::query("DELETE FROM userlang WHERE lang IS NULL");
        CS50::query("DELETE FROM userhobby WHERE hobby IS NULL");
       
        for($i=0;$i<$n;$i++){
        CS50::query("INSERT IGNORE  INTO userlang(user_id,lang) VALUES(?,?)",$_SESSION["id"],$_POST["lang1"][$i]);
        }
        
        
        $rows=CS50::query("SELECT * FROM userlang WHERE user_id=? ",$_SESSION["id"]);
        for($i=0;$i<$n;$i++){
         $row=$rows[$i];
        CS50::query("UPDATE userlang SET percentage=? WHERE user_id=? AND lang=?",$_POST["percent"][$row["lang"]],$_SESSION["id"],$row["lang"]);
       
        }
        
         apologize("Your softwares/languages details have been saved","portedit_.php","Saved");

    
}

?>