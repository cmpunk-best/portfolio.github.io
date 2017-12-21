<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"]=="GET"){
    render("sell_form.php",["title"=>"sell"]);
}
else if($_SERVER["REQUEST_METHOD"]=="POST"){
    $rows=CS50::query("SELECT * FROM table2 WHERE user_id=? AND symbol=? ",$_SESSION["id"],$_POST["sellname"]);
    if(count($rows)==1){
        if($rows[0]["shares"]>=$_POST["sellno"]){
            
        
        
           
                $price=lookup($_POST["sellname"]);
            CS50::query("UPDATE table2 SET shares=shares-{$_POST["sellno"]} WHERE user_id=? AND symbol=?",$_SESSION["id"],$_POST["sellname"]);
            CS50::query("UPDATE users SET cash=cash+{$_POST["sellno"]}*{$price["price"]} WHERE id=?",$_SESSION["id"]);
            CS50::query("INSERT INTO history (user_id,price,shares,symbol,sellbuy) VALUES (?,?,?,?,?)",$_SESSION["id"],
                $price["price"],$_POST["sellno"],$_POST["sellname"],'SELL');
            render("sell_form2.php",["value"=>$_POST["sellno"],"title"=>"sell","name"=>$price["name"]]);
        }
        else{
            apologize("you dont have enough shares to sell");
        }
    }
    else{
        apologize("U DON'T HAVE ANY SHARE OF {$_POST["sellname"]}.");
    }
    
    
    
   
    
}


?>