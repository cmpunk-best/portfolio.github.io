<?php

require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"]=="GET")
{
        render("buy_form.php",["title"=>"buy"]);
}
else if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(preg_match("/^\d+$/", $_POST["buyno"])){
        $price=lookup($_POST["buyname"]);
        if($price==false){
            apologize("No stock matches the symbol");
        }
        $rows=CS50::query("SELECT * FROM users WHERE id=?",$_SESSION["id"]);
        if(($rows[0]["cash"]-($_POST["buyno"]*$price["price"]))>=0){
            $check=CS50::query("SELECT * FROM table2 WHERE user_id=? AND symbol=?",$_SESSION["id"],$_POST["buyname"]);
            if(!$check){
                CS50::query("INSERT INTO table2 (user_id,symbol,shares) VALUES(?,?,?)",$_SESSION["id"],$_POST["buyname"],$_POST["buyno"]);
                
            }
            else{
                CS50::query("UPDATE table2 SET shares=shares+{$_POST["buyno"]} WHERE id=?",$_SESSION["id"]);
            }
            
             CS50::query("UPDATE users SET cash=cash-{$_POST["buyno"]}*{$price["price"]} WHERE id=?",$_SESSION["id"]);
            
            CS50::query("INSERT INTO history (user_id,price,shares,symbol,sellbuy) VALUES (?,?,?,?,?)",$_SESSION["id"],
                $price["price"],$_POST["buyno"],$_POST["buyname"],'BUY');
                render("buy_form2.php",["stock"=>$_POST["buyname"],"title"=>"buy","name"=>$price["name"]]);
        }
        else{
            apologize("not enough money ,bro");
        }
    }
    else{
        apologize("please India needs u ,just think how can u buy such shares");
    }
}







?>