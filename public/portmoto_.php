<?php
require "../includes/config.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
        /*CS50::query("INSERT IGNORE INTO userinfopersonal(user_id,firstname,secondname,year,day,birthdaymonth,Gender,relation,nation) VALUES(?,?,?
        ,?,?,?,?,?,?) ",$_SESSION["id"],$_POST["firstname"],$_POST["secondname"],$_POST["year"],$_POST["day"],$_POST["birthday"],$_POST["gender"],$_POST["relationship"],
        $_POST["country"]);*/
        
        
        
        
        CS50::query("UPDATE usermoto SET moto=? WHERE user_id=?",$_POST["moto"],$_SESSION["id"]);
        
        apologize("Your profile moto have been saved","portedit_.php","Saved");

        
        
        
        
        
    }


?>