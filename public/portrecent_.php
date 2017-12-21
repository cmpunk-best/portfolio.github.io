<?php

    // configuration
    require("../includes/config.php");




    // render portfolio
    if($_SERVER["REQUEST_METHOD"] == "GET"){
    render("portrecent.php", ["title" => "Portfolio"]);
    }


?>

