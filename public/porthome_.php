<?php

    // configuration
    require("../includes/config.php");
     require_once '../public/Mobile-Detect/Mobile_Detect.php';
    // if user reached page via GET (as by clicking a link or via redirect)

     $detect = new Mobile_Detect;
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        if( $detect->isMobile() ){
        render("porthomemobile.php", ["title" => "Log In"]);}
        else{
        render("porthome.php", ["title" => "Log In"]);
        }
    }
    else if ($_SERVER["REQUEST_METHOD"]=="POST"){

        CS50::query("INSERT  INTO userpost(user_id,post,link) VALUES(?,?,?)",$_SESSION["id"],$_POST["post"],$_POST["post1"]);
      $row2=CS50::query("SELECT LAST_INSERT_ID() AS id");
       //TODO :every user to be incorporated
       $rows=CS50::query("SELECT * FROM users");
       foreach($rows as $row){
        CS50::query("INSERT  INTO userhit(user_id,post,bypost) VALUES(?,?,?)",$row["id"],$_POST["post"],$row2[0]["id"]);
       }

    }
?>