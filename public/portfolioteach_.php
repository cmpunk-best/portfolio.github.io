<?php

require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via rdirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("portfolioteach.php", ["title" => "Log In"]);
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST"){
        /*CS50::query("INSERT IGNORE INTO userinfopersonal(user_id,firstname,secondname,year,day,birthdaymonth,Gender,relation,nation) VALUES(?,?,?
        ,?,?,?,?,?,?) ",$_SESSION["id"],$_POST["firstname"],$_POST["secondname"],$_POST["year"],$_POST["day"],$_POST["birthday"],$_POST["gender"],$_POST["relationship"],
        $_POST["country"]);*/

        render("portfolioteach.php",["title"=>"Home"]);







        render("portfolio.php");
    }



?>