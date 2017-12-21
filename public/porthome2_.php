
 <?php
 session_start();
 require("../vendor/library50-php-5/CS50/CS50.php");

    CS50::init(__DIR__ . "/../config.json");
 $result=array();$result2=array();
        $frow=CS50::query("SELECT * FROM userpost");
         for($i=count($frow)-1;$i>=0;$i--){
          $rows11=CS50::query("SELECT * FROM userhit WHERE user_id=? AND bypost=?",$_SESSION["id"],$frow[$i]["id"]);
          $frow1=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$frow[$i]['user_id']);
         $frow2=CS50::query("SELECT * FROM userprof WHERE user_id=? ",$frow[$i]['user_id']);
          $frows3=CS50::query("SELECT * FROM userhit WHERE plove=? AND bypost=?",1,$frow[$i]['id']);
          $frows4=CS50::query("SELECT * FROM userhit WHERE pcool=? AND bypost=?",1,$frow[$i]['id']);
          $frows5=CS50::query("SELECT * FROM userhit WHERE phot=? AND bypost=?",1,$frow[$i]['id']);
          $frows6=CS50::query("SELECT * FROM userhit WHERE psupport=? AND bypost=?",1,$frow[$i]['id']);
          $result2=[];  $result3=[];  $result4=[];  $result5=[];
        foreach($frows3 as $frow3){
          $frow4=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=? ",$frow3['user_id']);
         $frow5=CS50::query("SELECT * FROM userprof WHERE user_id=? ",$frow3['user_id']);
         array_push($result2,array('finame'=>$frow4[0]['firstname'],'sename'=>$frow4[0]['secondname'],'url1'=>$frow5[0]['url']));

         }
         foreach($frows4 as $frow3){
          $frow4=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=? ",$frow3['user_id']);
         $frow5=CS50::query("SELECT * FROM userprof WHERE user_id=? ",$frow3['user_id']);
         array_push($result3,array('finame'=>$frow4[0]['firstname'],'sename'=>$frow4[0]['secondname'],'url1'=>$frow5[0]['url']));

         }
         foreach($frows5 as $frow3){
          $frow4=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=? ",$frow3['user_id']);
         $frow5=CS50::query("SELECT * FROM userprof WHERE user_id=? ",$frow3['user_id']);
         array_push($result4,array('finame'=>$frow4[0]['firstname'],'sename'=>$frow4[0]['secondname'],'url1'=>$frow5[0]['url']));

         }
         foreach($frows6 as $frow3){
          $frow4=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=? ",$frow3['user_id']);
         $frow5=CS50::query("SELECT * FROM userprof WHERE user_id=? ",$frow3['user_id']);
         array_push($result5,array('finame'=>$frow4[0]['firstname'],'sename'=>$frow4[0]['secondname'],'url1'=>$frow5[0]['url']));

         }
     array_push($result,array('id'=>$frow[$i]["id"],'user_id'=>$frow[$i]["user_id"],'imgpost'=>$frow[$i]['imgposturl'],'videopost'=>$frow[$i]['videopost'],'post'=>$frow[$i]["post"],'time'=>$frow[$i]["time"],'love'=>$frow[$i]["love"],'cool'=>$frow[$i]["cool"],'hot'=>$frow[$i]["hot"],'support'=>$frow[$i]["support"]
     ,'ppost'=>$rows11[$i]["post"],'plove'=>intval($rows11[0]["plove"]),'pcool'=>intval($rows11[0]["pcool"]),'phot'=>intval($rows11[0]["phot"]),'psupport'=>intval($rows11[0]["psupport"]),'fname'=>$frow1[0]['firstname'],'sname'=>$frow1[0]['secondname'],'url'=>$frow2[0]['url'],
      'link'=>$frow[$i]["link"],'loved'=>$result2 ,'cooled'=>$result3,'angryed'=>$result4,'smiled'=>$result5));


          }

            echo json_encode(array('result'=> $result));

?>