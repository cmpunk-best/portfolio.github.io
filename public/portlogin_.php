


    <?php
    // configuration


    require("../includes/config.php");
    require_once '../public/Mobile-Detect/Mobile_Detect.php';
    // if user reached page via GET (as by clicking a link or via redirect)

     $detect = new Mobile_Detect;


    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        if ( $detect->isMobile() ) {
            render("portloginmobile.php", ["title" => "Log In"]);
        }
        else{
        render("portlogin.php", ["title" => "Log In"]);
        }
    }
    else if($_SERVER["REQUEST_METHOD"]=="POST"){


       $rows = CS50::query("SELECT * FROM users WHERE email = ?", $_POST["email"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // remember that user's now logged in by storing user's ID in session
                if(empty($_SESSION["id"])){

                $_SESSION["id"] = $row["id"];
                }
        }
    else{
        if($_POST["email"]==''){

        }
        else{
        $adduser=CS50::query("INSERT IGNORE INTO users(email,hash) VALUES(?,?)",$_POST["email"],password_hash($_POST["password"],PASSWORD_DEFAULT));
        $row=CS50::query("SELECT LAST_INSERT_ID() AS id");

               $id=$row[0]["id"];
               $_SESSION["id"]=$id;

       if(count($adduser)){
          $rows = CS50::query("SELECT * FROM intermusers WHERE email = ?", $_POST["email"]);

        // if we found user, check password
        if (count($rows))
        {
            // first (and only) row
            $row = $rows[count($rows)-1];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $row["hash"]))
            {


                $headurl="blackwall.jpg";
                if($row["gender"]=='male'){
                    $url="defaultuser.jpg";
                }
                else{
                    $url="placeholderfemale.jpg";
                }

                // remember that user's now logged in by storing user's ID in session
                CS50::query("INSERT IGNORE INTO userprof(user_id,headurl,url) VALUES(?,?,?)",$_SESSION["id"],$headurl,$url);
                CS50::query("INSERT IGNORE INTO userinfopersonal(user_id,firstname,secondname,branch,year,gender,rollno) VALUES(?,?,?,?,?,?,?)",$_SESSION["id"],$row["fname"],$row["sname"],$row["branch"],$row["year"],$row["gender"],$row["rollno"]);

                CS50::query("INSERT IGNORE INTO userinfocontact(user_id,email) VALUES(?,?) ",$_SESSION["id"],$row["email"]);
                CS50::query("INSERT IGNORE INTO userinfolink(user_id) VALUES(?) ",$_SESSION["id"]);
                CS50::query("INSERT IGNORE INTO usermoto(user_id) VALUES(?) ",$_SESSION["id"]);
                CS50::query("INSERT IGNORE INTO useredu(user_id) VALUES(?) ",$_SESSION["id"]);
                CS50::query("INSERT IGNORE INTO userwork(user_id) VALUES(?) ",$_SESSION["id"]);
                 CS50::query("INSERT IGNORE INTO userlang(user_id) VALUES(?) ",$_SESSION["id"]);
                 CS50::query("INSERT IGNORE INTO userhobby(user_id) VALUES(?) ",$_SESSION["id"]);
                //for home
                $posts=CS50::query("SELECT * FROM userpost");
                if(count($posts)){
                foreach($posts as $post)
                {
                    CS50::query("INSERT IGNORE  INTO  userhit(user_id,post,bypost) VALUES(?,?,?)",$_SESSION["id"],$post["post"],$post["id"]);
                }
                }



            }
        }


       }
    }
}

}

    ?>