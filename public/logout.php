<?php

    // configuration
    require("../includes/config.php");

    // log out current user, if any

    logout();

   apologize1("Close to Successfully logout","Confirm");
    // redirect user
    redirect("/");

?>
