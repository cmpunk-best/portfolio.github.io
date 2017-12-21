
<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)

    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        CS50::query("UPDATE userpost SET hot=? WHERE id=? ",$_POST['hot'],$_POST['id1']);
        CS50::query("UPDATE userhit SET phot=? WHERE bypost=? AND user_id=?",$_POST['phot'],intval($_POST['id1']),$_SESSION["id"]);

    }
?>