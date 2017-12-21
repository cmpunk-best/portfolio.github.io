<?php

    // configuration
    require("../includes/config.php");


    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["plink"]>0){
            $check=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND reqby=?",$_POST["id1"],$_SESSION["id"]);
            if(count($check)){

            }
            else{
            CS50::query("INSERT  IGNORE INTO notifications(reqfor,reqby) VALUES(?,?)",$_POST['id1'],$_SESSION['id']);
            }
        }
        else{
        CS50::query("DELETE FROM notifications WHERE reqfor=? AND reqby=?",$_POST["id1"],$_SESSION["id"]);
        }
    }
?>