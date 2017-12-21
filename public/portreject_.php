<?php

    // configuration
    require("../includes/config.php");


    if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["aorr"]){
                CS50::query("DELETE FROM notifications WHERE reqfor=? AND reqby=?",$_SESSION["id"],$_POST["id1"]);
            }
            else{
                CS50::query("DELETE FROM notifications WHERE reqby=? AND reqfor=?",$_SESSION["id"],$_POST["id1"]);
            }

    }
?>