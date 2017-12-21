<?php

require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via rdirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("portfoliomobile.php", ["title" => "Log In"]);
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST"){
        /*CS50::query("INSERT IGNORE INTO userinfopersonal(user_id,firstname,secondname,year,day,birthdaymonth,Gender,relation,nation) VALUES(?,?,?
        ,?,?,?,?,?,?) ",$_SESSION["id"],$_POST["firstname"],$_POST["secondname"],$_POST["year"],$_POST["day"],$_POST["birthday"],$_POST["gender"],$_POST["relationship"],
        $_POST["country"]);*/
        CS50::query("UPDATE userinfopersonal SET firstname=? WHERE user_id=?",$_POST["firstname"],$_SESSION["id"]);
        CS50::query("UPDATE userinfopersonal SET secondname=? WHERE user_id=?",$_POST["secondname"],$_SESSION["id"]);
        CS50::query("UPDATE userinfopersonal SET year=? WHERE user_id=?",$_POST["year"],$_SESSION["id"]);
        CS50::query("UPDATE userinfopersonal SET day=? WHERE user_id=?",$_POST["day"],$_SESSION["id"]);
        CS50::query("UPDATE userinfopersonal SET birthdaymonth=? WHERE user_id=?",$_POST["birthday"],$_SESSION["id"]);
        CS50::query("UPDATE userinfopersonal SET Gender=? WHERE user_id=?",$_POST["gender"],$_SESSION["id"]);
        CS50::query("UPDATE userinfopersonal SET relation=? WHERE user_id=?",$_POST["relationship"],$_SESSION["id"]);
        CS50::query("UPDATE userinfopersonal SET nation=? WHERE user_id=?",$_POST["country"],$_SESSION["id"]);







        render("portfolio.php");
    }



?>