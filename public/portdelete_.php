<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // else render form
        if($_POST['id2']==$_SESSION["id"]){
          CS50::query("DELETE FROM userpost WHERE id=?",$_POST["id"]);
          CS50::query("DELETE FROM userhit WHERE bypost=?",$_POST["id"]);
        }
          
      
    }
    ?>