<?php
// Array with names
require "../includes/config.php";
$id1= $_REQUEST["q"];
$rows=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$id1);
    $rows1=CS50::query("SELECT * FROM userinfocontact WHERE user_id=?",$id1);
    $rows2=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$id1);

    $rows3=CS50::query("SELECT * FROM useredu WHERE user_id=?",$id1);
    $rows4=CS50::query("SELECT * FROM userwork WHERE user_id=?",$id1);

    $rows5=CS50::query("SELECT * FROM userlang WHERE user_id=?",$id1);
    $rows6=CS50::query("SELECT * FROM usermoto WHERE user_id=?",$id1);

    $rows7=CS50::query("SELECT * FROM userhobby WHERE user_id=?",$id1);
    $rows8=CS50::query("SELECT * FROM userprof WHERE user_id=?",$id1);
    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];



                        echo '<div class="container-fluid">';
echo '
        <br>';


echo '<p>'.strtoupper($row["firstname"]).' '.strtoupper($row["secondname"]).' \'s Gallery</p>';


    echo '
      <div class="row">';
$rows=CS50::query("SELECT * FROM userupload WHERE user_id=?",$id1);
         for($i=count($rows)-1;$i>=0;$i--){



  echo '<div class="col-xs-18 col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="/uploads/'.$rows[$i]["imgurl"].'" alt="" style="width:100%;height:300px">
              <div class="caption">
                <h4>'.ucwords(strtolower($rows[$i]["caption"])).'</h4>
                <p>



         </p>
            </div>
          </div>
        </div>';

         }



     echo '
       </div>';









?>