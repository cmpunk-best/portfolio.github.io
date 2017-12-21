<?php

$fnameErr='';$snameErr='';$emailErr='';$passwordErr='';$Err='';$rollErr='';$maxid='';
require("../includes/config.php");
       require_once '../public/Mobile-Detect/Mobile_Detect.php';
    // if user reached page via GET (as by clicking a link or via redirect)

     $detect = new Mobile_Detect;

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        if( $detect->isMobile() ){
        render("portregistermobile.php", ["title" => "Log In"]);}
        else{
        render("portregisterform.php",["title"=>"Register"]);
        }
    }
    else if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



            //first name
            if(is_string($_POST["fname"])){
                if(strlen($_POST["fname"])<3){
                    $GLOBALS['fnameErr']='Name should of atleast 3 letters';
                    if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUps"]);}
                }
            }
            else{
                 $GLOBALS['fnameErr']='Name should be string';
                 if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUp"]);}

            }
            //secondname
            if(!is_string($_POST["sname"])){
                $GLOBALS['$sname']="Second Name should be string";
                    if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUp"]);}
            }
            //email and password
                           if (empty($_POST["email"])) {
                $GLOBALS['emailErr'] = "* Email is required";
                $GLOBALS['Err']="*Empty fields not allowed";

              }
              else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $GLOBALS['emailErr'] = "*Invalid email format";
                  $GLOBALS['Err']="*Invalid fields not allowed";
                    if(empty($_POST['password'])){
                        $GLOBALS['passwordErr']="*Password is required";
                        $GLOBALS['Err']="*Empty fields not allowed";
                    }
                    if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUp"]);}
                }
              }
$roll=test_input($_POST["roll"]);
if (!(filter_var($roll, FILTER_VALIDATE_INT))) {
    $GLOBALS['rollErr']="* Roll number should be integer";
    $GLOBALS['Err'] = "* Error in submitting";
        if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUp"]);}
}

else{
    $num_length = strlen((string)$roll);
    if ( $num_length==6) {

    } else {
        $GLOBALS['rollErr']="* Roll number should be of 6 digits";
        $GLOBALS['Err'] = "* Error in submitting";
       if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUp"]);}
    }


}

$branch=CS50::query("SELECT * FROM nitandhra WHERE rollno=? and email=?",$_POST["roll"],$_POST["email"]);

if(count($branch)){
$year=$branch[0]["year"];
    $bran=$_POST["roll"][0];
    if($bran==1){
        $branchuser='bio';
    }
    else if($bran==2){
        $branchuser='che';
    }

    else if($bran==3){
        $branchuser='civ';
    }

    else if($bran==4){
        $branchuser='cse';
    }

    else if($bran==5){
        $branchuser='eee';
    }

    else if($bran==6){
        $branchuser='ece';
    }

    else if($bran==7){
        $branchuser='mec';
    }

    else if($bran==8){
        $branchuser='mme';
    }
}
else{
$GLOBALS['Err']='* This email and roll no combination was not linked during verification.Go to link below to link';
  if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUp"]);}
}




                    $checkuser=CS50::query("SELECT * FROM users WHERE email=? AND hash=?",$_POST["email"],password_hash($_POST["password"],PASSWORD_DEFAULT));

                if(count($checkuser)!=0){
                    $GLOBALS['Err']="* User already exists";
                     if ( $detect->isMobile() ) {
                        render("portregistermobile.php", ["title" => "SignUp"]);
                    }
                    else{
                   render("portregisterform.php", ["title" => "SignUp"]);}
                }
                $rows=CS50::query("INSERT IGNORE INTO intermusers(email,password,hash,fname,sname,rollno,gender,branch,year,verify) VALUES (?,?,?,?,?,?,?,?,?,?)",$_POST["email"],$_POST["password"],password_hash($_POST["password"],PASSWORD_DEFAULT),$_POST["fname"],$_POST["sname"],$_POST["roll"],$_POST["underwear"],$branchuser,$year,0);

                $row=CS50::query("SELECT LAST_INSERT_ID() AS id");

               $id=$row[0]["id"];
               $_SESSION["maxid"]=$id;
                 if($detect->isMobile()){
                    redirect("/portemail_safe=active&dcr=0&ei=jRk4WqqmBcGi8AWJ-a6gCg&q=portfolio&oq=portfolio&gs_l=psy.php");
                }
                else{
                redirect("/portemail_safe=active&dcr=0&ei=jRk4WqqmBcGi8AWJ-a6gCg&q=portfolio&oq=portfolio&gs_l=psy.php");}
    }

?>



