


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

$linkers=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND reqby=?  AND accept=?",$_SESSION["id"],$id1,1);
$linked=CS50::query("SELECT * FROM notifications WHERE reqby=? AND reqfor=? AND accept=?",$_SESSION["id"],$id1,1);







       echo  '<div class="jumbotron" style="background:white !important;margin-top:-10px;border:1px solid silver">

          <br>
      <div class="row" >

          <div class="col-md-12">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div id="mydiv"class="item active" style="width:100%;height:300px" >
        <img  style="opacity:.8" class="img-rounded" src="/uploads/'.$row8["headurl"].'" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">

          <h2>'.strtoupper($row["firstname"]).'</h2><h2>'.strtoupper($row["secondname"]).'</h2>


        </div>
      </div>
      </div>
      </div>
          </div>
          <div class="col-md-6">
        <div class="jumbotron" style="margin-top:-.5px">
          <div class="row" style="padding:2px">

            <div class="text-center">
            <img src="/uploads/'.$row8["url"].'" alt="itsme" class="img-circle" align="center" width="200px" height="200px">
            </div>

            <br>
              <div style="margin-top:50px" class="col-md-12">
              <table  frame="below">
                <tr>
                        <td style="font-family:Roboto"><h4><span class="glyphicon glyphicon-user"></span><strong style="font-family:Roboto;color:#4885ed	"> PERSONAL:</strong></h4></td>
                </tr>
                </table>
              <table >


                      <tr >
                        <td ><strong style="font-family:Roboto">Name:</strong></td>
                        <td>'. strtoupper($row["firstname"]) .'</td>

                      </tr>
                      <tr>
                        <td></td>
                        <td>'. strtoupper($row["secondname"]) .'</td>
                      </tr>
                      <tr >
                        <td ><strong style="font-family:Roboto">Year:</strong></td>
                        <td>'. $row["year"] .'</td>

                      </tr>
                      <tr >
                        <td ><strong style="font-family:Roboto">Gender:</strong></td>
                        <td>'. strtoupper($row["Gender"]) .'</td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Branch:</strong></td>
                        <td>'.strtoupper($row["branch"]).'</td>

                      </tr>
                       <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Roll No:</strong></td>
                        <td>'. $row["rollno"].'</td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Birthday:</strong></td>
                        <td>'. $row["day"].'</td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Relationship:</strong></td>
                        <td>'. $row["relation"].'</</td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Nationality:</strong></td>
                        <td>'. $row["nation"].'</td>

                      </tr>

                    </table>


              </div>
                      <div style="margin-top:50px" class="col-md-12">
              <table  frame="below">
                <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><span class="glyphicon glyphicon-earphone"></span><strong style="font-family:Roboto;color:#4885ed	"> CONTACT:</strong></h4></td>

                      </tr>
                </table>
              <table>';
              if((count($linkers)>0) || (count($linkers)>0)){
                if(($id1==$linkers[0]["reqby"])||($id1==$linked[0]["reqfor"])){
                  echo'    <tr >
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Mobile:</strong></td>
                        <td>'. $row1["mobile"].'</td>

                      </tr>


                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Online Availability:</strong></td>
                        <td>'. strtoupper($row1["avail"]).'</td>

                      </tr><tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Online Number:</strong></td>
                        <td>'. $row1["availno"].'</td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">City:</strong></td>
                        <td>'. $row1["address"].'</td>

                      </tr>
                    </table>';

                }}
                else{
                    echo 'Permission Required(Link to see contact)';
                }


             echo' </div>
              <div style="margin-top:50px" class="col-md-12">
              <table  frame="below">
                <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	">EMAIL:</strong></h4></td>

                      </tr>
                </table>
              <table >
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto">'. $row1["email"].'</td>

                      </tr>
                      </table>
                      </div>
                    <div style="margin-top:50px" class="col-md-12">
              <table  frame="below">
                <tr>
                  <td>      </td>
                </tr>
                </table>
              <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	">PREFENCES:</strong></h4></td>

                      </tr>
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto">'. $row1["pref"].'</td>

                      </tr>
                      </table>
                      </div>
                       <div style="margin-top:50px" class="col-md-12">
              <table  frame="below">
                <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	">LINKS<h5>(click on icons to visit):</h5><h6>{You will be redirected back if link is not provided}</h6></strong></h4></td>

                      </tr></table>
              <table frame="below">

                      <tr style="font-family:Roboto">
                        <td><strong>Facebook Link :</strong></td>
                        <td ><a style="color:inherit" href="'. $row2["facebook"].'" target="_blank"><i style="font-size:48px" class="fa">&#xf230;</i></a></td>

                      </tr>

                      <tr>
                        <td><strong>Twitter Link :</strong></td>
                        <td style="font-family:Roboto"><a href="'. $row2["twitter"].'" target="_blank"><i class="fa fa-twitter text-primary" style="font-size:48px"></i></a><td>


                      </tr>
                      <tr>
                        <td><strong>LinkedIn Link :</strong></td>
                        <td style="font-family:Roboto"><a style="color:inherit" href="'. $row2["linkedin"].'"target="_blank"><i class="fa fa-linkedin" style="font-size:48px"></i></a><td>


                      </tr>


                      </table>
                      </div>
        </div>

        </div>
        </div>

        <div class="col-md-5">
              <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	"> LIFE-MOTO:</strong></h4></td>

                      </tr></table>
                      <table>
                      <tr>
                      <td><div style="margin-top:30px"class="col-md-12 text-center">
    <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>
    <p class="text-center" style="font-family:pangolin">...'. $row6["moto"].'</p>
      </div></td>
                        </tr>
                      </table>

        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><span class="glyphicon glyphicon-paperclip" style="font-size:22px" ></span> <strong style="font-family:Roboto;color:#4885ed	">EDUCATION:</strong></h4></td>

                      </tr></table>

        <table style="font-size:15px">';

           foreach($rows3 as $row3){

          echo '<tr >
          <td >';
          if($row3["year"]<2017){
echo '<i class="fa fa-calendar fa-fw "style="color:#4885ed	"></></i>'. $row3["year"].'';
         } else{
echo '<i class="fa fa-calendar fa-fw "style="color:#4885ed	"></></i>'."Current".'
          </td>';
         }
            echo '<td >
              '. strtoupper($row3["degree"]).'
              <ul>
                <li>'. strtoupper($row3["schoolname"]).'</li>
                <li>'. strtoupper($row3["major"]).'</li>

              </ul>
            </td>

          </tr>';

          }


    echo    '</table>





        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>
<span class="glyphicon glyphicon-briefcase" style="font-size:23px"></span>     <strong style="font-family:Roboto;color:#4885ed	">  WORK/ INTERN/ EXPERIENCE:</strong></h4></td>

                      </tr></table>

        <table style="font-size:15px">';
           foreach($rows4 as $row4){

          echo '<tr >
          <td >';
             if($row4["year"]<2017){
echo '<i class="fa fa-calendar fa-fw " style="color:#4885ed	"></i>'. $row4["year"].'';
          } else{
echo '<i class="fa fa-calendar fa-fw " style="color:#4885ed	"></i>'. '."Current".'.'
          </td>';
          }
           echo '<td >'. strtoupper($row4["schoolname"]).'
              <ul>
                <li>'. ucwords(strtolower($row4["major"])).'</li>
                <li>'. ucwords(strtolower($row4["degree"])).'</li>

              </ul>
            </td>

          </tr>';

           }

        echo '</table>

        <br>


        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>
<i style="font-size:30px" class="devicon-devicon-plain " ></i> <strong style="font-family:Roboto;color:#4885ed	">SOFTWARE/ LANGUAGES:</strong></h4></td>

                      </tr></table>

        <table style="font-size:15px">';


           foreach($rows5 as $row5){
           echo ' <tr >
          <td >';
             if($row5["lang"]=='."C++".'){
echo '<i style="font-size:30px" class="devicon-cplusplus-plain colored"></i> '.$row5["lang"].'';
            } elseif($row5["lang"]=='."C#".'){
echo '<i style="font-size:30px" class="devicon-csharp-plain colored"></i> '.$row5["lang"].'';
            } elseif(($row5["lang"]=='."Matlab".')||($row5["lang"]=='."Pearl".')||($row5["lang"]=='."NI-Multisim".')){
echo '<i class="material-icons" style="color:#4885ed">&xe569</i> '.$row5["lang"].'';

            } else{
echo '<i style="font-size:30px" class="devicon-'. strtolower($row5["lang"]).'-plain colored"></i> '.$row5["lang"].'';
          }
         echo' </td>
          <td><div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-black" style="width:90%">'. $row5["percentage"] .'</div>
          </div></td>


          </tr>';

    }

       echo ' </table>
        <br>

         <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>

<span class="glyphicon glyphicon-book" style="font-size:22px"></span><strong style="font-family:Roboto;color:#4885ed	"> TOPICS:</strong></h4></td>

                      </tr></table>';
         foreach($rows7 as $row7){
        echo '<table style="font-size:15px">
          <tr >
          <td >
<i class="material-icons" style="color:#4885ed">&#xe569;</i>'.strtoupper($row7["hobby"]).'

          </td>



          </tr>';

          }

        echo '</table>



        </div>';
        ?>