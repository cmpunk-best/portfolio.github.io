<?php

    // configuration
    require("../includes/config.php");


    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        CS50::query("UPDATE userpost SET love=? WHERE id=?",$_POST['love'],$_POST['id1']);
        CS50::query("UPDATE userhit SET plove=? WHERE bypost=? AND user_id=?",$_POST['plove'],$_POST['id1'],$_SESSION["id"]);

    }
?>