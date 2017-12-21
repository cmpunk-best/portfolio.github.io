<?php
require "../includes/config.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
        /*CS50::query("INSERT IGNORE INTO userinfopersonal(user_id,firstname,secondname,year,day,birthdaymonth,Gender,relation,nation) VALUES(?,?,?
        ,?,?,?,?,?,?) ",$_SESSION["id"],$_POST["firstname"],$_POST["secondname"],$_POST["year"],$_POST["day"],$_POST["birthday"],$_POST["gender"],$_POST["relationship"],
        $_POST["country"]);*/
        CS50::query("UPDATE userinfocontact SET mobile=?  WHERE user_id=?",$_POST["mobile"],$_SESSION["id"]);
        CS50::query("UPDATE userinfocontact SET home=? WHERE user_id=?",$_POST["home"],$_SESSION["id"]);
        CS50::query("UPDATE userinfocontact SET email=? WHERE user_id=?",$_POST["email"],$_SESSION["id"]);
        CS50::query("UPDATE userinfocontact SET availno=? WHERE user_id=?",$_POST["availno"],$_SESSION["id"]);
        CS50::query("UPDATE userinfocontact SET avail=? WHERE user_id=?",$_POST["avail"],$_SESSION["id"]);
        CS50::query("UPDATE userinfocontact SET address=? WHERE user_id=?",$_POST["address"],$_SESSION["id"]);
        CS50::query("UPDATE userinfocontact SET pref=? WHERE user_id=?",$_POST["pref"],$_SESSION["id"]);
        
        apologize("Your contact details have been saved","portedit_.php","Saved");

        
        
        
        
        
    }


?>