<?php
    // configuration

$emailErr='';
        $passwordErr='';
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("portloginteacher.php", ["title" => "Log In"]);
    }

    else if($_SERVER["REQUEST_METHOD"]=="POST"){

        function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


        if (empty($_POST["email"])) {
    $GLOBALS['emailErr'] = "Email is required";

  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $GLOBALS['emailErr'] = "Invalid email format";
        if(empty($_POST['password'])){
            $GLOBALS['passwordErr']="Password is required";
        }
       render("portloginteacher.php", ["title" => "Log In"]);
    }
  }
  if(empty($_POST["password"])){
    $GLOBALS['passwordErr']="Password is required";

        render("portloginteacher.php", ["title" => "Log In"]);
  }

        // query database for user
        $rows = CS50::query("SELECT * FROM teachers WHERE email = ?", $_POST["email"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $row["hash"]))
            {
                // remember that user's now logged in by storing user's ID in session
                if(empty($_SESSION["id"])){

                $_SESSION["id"] = $row["id"];

                }
                CS50::query("INSERT IGNORE INTO userinfopersonal(user_id) VALUES(?) ",$_SESSION["id"]);
                CS50::query("INSERT IGNORE INTO userinfocontact(user_id) VALUES(?) ",$_SESSION["id"]);
                CS50::query("INSERT IGNORE INTO userinfolink(user_id) VALUES(?) ",$_SESSION["id"]);
                CS50::query("INSERT IGNORE INTO usermoto(user_id) VALUES(?) ",$_SESSION["id"]);


                $rows=CS50::query("SELECT * FROM useredu WHERE user_id=?",$_SESSION["id"]);
                if(!count($rows)){

                CS50::query("INSERT IGNORE INTO useredu(user_id) VALUES(?) ",$_SESSION["id"]);
                }
                $rows=CS50::query("SELECT * FROM userwork WHERE user_id=?",$_SESSION["id"]);
                if(!count($rows)){
                CS50::query("INSERT IGNORE INTO userwork(user_id) VALUES(?) ",$_SESSION["id"]);
                }
                $rows=CS50::query("SELECT * FROM userlang WHERE user_id=?",$_SESSION["id"]);
                if(!count($rows)){
                CS50::query("INSERT IGNORE INTO userlang(user_id) VALUES(?) ",$_SESSION["id"]);
                }
                 $rows=CS50::query("SELECT * FROM userhobby WHERE user_id=?",$_SESSION["id"]);
                if(!count($rows)){

                CS50::query("INSERT IGNORE INTO userhobby(user_id) VALUES(?) ",$_SESSION["id"]);
                }

                // redirect to portfolio
                redirect("/portfolioteach_.php");
            }

        }


       apologize("Invalid email(use the one registered with college) or password","portlogin_.php","Error");

        // else apologize
    }



    ?>