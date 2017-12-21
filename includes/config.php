<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Configures app.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // CS50 Library
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init(__DIR__ . "/../config.json");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php, /logout.php, and /register.php
    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/index.php","/logout.php", "/register.php","/portlogin_.php","/portsignup_.php","/portlogin1_.php","/portloginteacher_.php","/portabout_.php","/portemail_.php","/portemail_safe=active&dcr=0&ei=jRk4WqqmBcGi8AWJ-a6gCg&q=portfolio&oq=portfolio&gs_l=psy.php","/portterms_.php","/portcontactus_.php","/portforget_.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("portlogin_.php");
        }

    }

    if(in_array($_SERVER["PHP_SELF"], ["/portemail_safe=active&dcr=0&ei=jRk4WqqmBcGi8AWJ-a6gCg&q=portfolio&oq=portfolio&gs_l=psy.php"])){
    if(empty($_SESSION["maxid"])){
        redirect('login.php');
    }
    }

    if(!empty($_SESSION["id"])){
            if (in_array($_SERVER["PHP_SELF"], ["/login.php", "/register.php","/index.php","/portlogin_.php","/portsignup_.php","/portlogin1_.php","/portloginteacher_.php","/portabout_.php","/portforget_.php"]))
            {
                logout();
                apologize("Logged you out","portlogin_.php","Confirm");
            }
    }
?>
