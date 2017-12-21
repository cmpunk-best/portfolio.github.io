<?php

    // configuration
    require("../includes/config.php");


    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("portabout.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)


?>
