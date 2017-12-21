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
        render("portnotificationsmobile.php", ["title" => "Log In"]);}
        else{
        render("portnotifications.php", ["title" => "Log In"]);
    }
    }
    ?>