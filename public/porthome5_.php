 
<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
   
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
            
        CS50::query("UPDATE userpost SET cool=? WHERE id=?",$_POST['cool'],$_POST['id1']);
        CS50::query("UPDATE userhit SET pcool=? WHERE bypost=? AND user_id=?",$_POST['pcool'],intval($_POST['id1']),$_SESSION["id"]);
        
    }
?>