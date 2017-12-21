<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // else render form
      if($_POST["propic"]){

          CS50::query("INSERT IGNORE INTO userprof(user_id,headurl) VALUES(?,?)",$_SESSION["id"],$_POST["propic"]);
          CS50::query("UPDATE userprof SET headurl=? WHERE user_id=?",$_POST["propic"],$_SESSION["id"]);


      }






    }
    ?>