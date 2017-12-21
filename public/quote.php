 <?php
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "quote"]);
    }

else if($_SERVER["REQUEST_METHOD"]=="POST"){
    
$stock=lookup($_POST["symbol"]);
if($stock==false){
    apologize("try another stock or check yr symbol");
}
else{
    render("quote_form2.php",["symbol"=>$stock["symbol"],"price"=>$stock["price"],"name"=>$stock["name"]]);
}

}
?>