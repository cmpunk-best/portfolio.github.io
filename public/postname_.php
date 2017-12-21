<?php
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init(__DIR__ . "/../config.json");
      
        $result=array();
         $frows3=CS50::query("SELECT * FROM userhit WHERE plove=? AND bypost=?",1,$_POST['post_id']);
         foreach($frows3 as $frow3){
          $frow4=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=? ",$frow3['user_id']); 
         $frow5=CS50::query("SELECT * FROM userprof WHERE user_id=? ",$frow3['user_id']); 
         array_push($result,array('finame'=>$frow4[0]['firstname'],'sename'=>$frow4[0]['secondname'],'url1'=>$frow5[0]['url']));
        
         }echo json_encode(array('result'=> $result));

    
?>