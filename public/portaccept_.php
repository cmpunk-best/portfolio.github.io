<?php

    // configuration
    require("../includes/config.php");


    if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["aorr"]>0){
                CS50::query("UPDATE notifications SET accept=? WHERE reqfor=? AND reqby=?",$_POST["aorr"],$_SESSION["id"],$_POST["id1"]);
            }
            else{
                 CS50::query("DELETE FROM notifications WHERE reqfor=? AND reqby=?",$_SESSION["id"],$_POST["id1"]);
            }
    }

?>