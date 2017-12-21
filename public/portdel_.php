<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // else render form
     
      if ($_POST["propic1"]){
          
          CS50::query("DELETE FROM userupload WHERE imgurl=?",$_POST["propic1"]);
          
          
      }
      
      
      
      
      
      
        render("portgallery.php", ["title" => "Log In"]);
    }
    ?>