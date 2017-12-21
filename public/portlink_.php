<?php
require "../includes/config.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
        /*CS50::query("INSERT IGNORE INTO userinfopersonal(user_id,firstname,secondname,year,day,birthdaymonth,Gender,relation,nation) VALUES(?,?,?
        ,?,?,?,?,?,?) ",$_SESSION["id"],$_POST["firstname"],$_POST["secondname"],$_POST["year"],$_POST["day"],$_POST["birthday"],$_POST["gender"],$_POST["relationship"],
        $_POST["country"]);*/
        CS50::query("UPDATE userinfolink SET facebook=? WHERE user_id=?",$_POST["facebook"],$_SESSION["id"]);
        CS50::query("UPDATE userinfolink SET twitter=? WHERE user_id=?",$_POST["twitter"],$_SESSION["id"]);
        CS50::query("UPDATE userinfolink SET instagram=? WHERE user_id=?",$_POST["instagram"],$_SESSION["id"]);
        CS50::query("UPDATE userinfolink SET linkedin=? WHERE user_id=?",$_POST["linkedin"],$_SESSION["id"]);
        CS50::query("UPDATE userinfolink SET snapchat=? WHERE user_id=?",$_POST["snapchat"],$_SESSION["id"]);
        
        apologize("Your link details have been saved","portedit_.php","Saved");

        
        
        
        
        
    }


?>