

<!--Bootstrap core CSS -->

  <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="dist/toolkit.min.js"></script>
<!-- Documentation extras -->
<link href="/assets/css/docs.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    $rows=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]);
    $rows1=CS50::query("SELECT * FROM userinfocontact WHERE user_id=?",$_SESSION["id"]);
    $rows2=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$_SESSION["id"]);

    $rows3=CS50::query("SELECT * FROM useredu WHERE user_id=?",$_SESSION["id"]);
    $rows4=CS50::query("SELECT * FROM userwork WHERE user_id=?",$_SESSION["id"]);

    $rows5=CS50::query("SELECT * FROM userlang WHERE user_id=?",$_SESSION["id"]);
    $rows6=CS50::query("SELECT * FROM usermoto WHERE user_id=?",$_SESSION["id"]);

    $rows7=CS50::query("SELECT * FROM userhobby WHERE user_id=?",$_SESSION["id"]);
    $rows8=CS50::query("SELECT * FROM userprof WHERE user_id=?",$_SESSION["id"]);
    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];
    ?>

<script>
      $('#h2').css({"background-color":"purple","color":"white"});
    $('#pmobile').css("color","white");
</script>
  <!--end of navigation bar-->
  <!--start of jumbotron-->

  <div class="container "id="contain" style="margin-top:20%;width:100%">
    <p class"text-left"> [ <a href="/portedit_.php">Edit</a> ]</p>
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">General</a></li>
    <li ><a data-toggle="tab" href="#menu1">Portfolio</a></li>
  </ul>
<div class="tab-content">

      <div id="home" class="tab-pane fade in active">

          <!-- each jumbotron for each information--><br/>
          <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/uploads/<?=$row8["url"]?>" alt="" style="height:250px;width:100%">
              <div class="caption">
                <h4><?=strtoupper($row["firstname"])?> <?=strtoupper($row["secondname"])?></h4>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">

                                                <div class="col-xs-11 col-sm-11">
                                                    ...<?=($row6["moto"])?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                       </div> </div>
          </div>

          <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                  <table  frame="below">
                <tr>
                        <td style="font-family:Roboto"><h4><span class="glyphicon glyphicon-user"></span><strong style="font-family:Roboto;color:#4885ed	"> PERSONAL:</strong></h4></td>
                </tr>
                </table>
              <table >


                      <tr >
                        <td ><strong style="font-family:Roboto">Name:</strong></td>
                        <td><?= strtoupper($row["firstname"]) ?></td>

                      </tr>
                      <tr>
                        <td></td>
                        <td><?= strtoupper($row["secondname"]) ?></td>
                      </tr>
                      <tr >
                        <td ><strong style="font-family:Roboto">Year:</strong></td>
                        <td><?= $row["year"] ?></td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Branch:</strong></td>
                        <td><?= strtoupper($row["branch"])?></td>

                      </tr>
                       <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Roll No:</strong></td>
                        <td><?= $row["rollno"]?></td>

                      </tr>
                      <tr >
                        <td ><strong style="font-family:Roboto">Gender:</strong></td>
                        <td><?= strtoupper($row["Gender"]) ?></td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Birthday:</strong></td>
                        <td><?= $row["day"]?></td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Relationship:</strong></td>
                        <td><?= $row["relation"]?></</td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Nationality:</strong></td>
                        <td><?= $row["nation"]?></</td>

                      </tr>

                    </table>


                </div>
            </div>
            </div>


            <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                  <table  frame="below">
                <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><span class="glyphicon glyphicon-earphone"></span><strong style="font-family:Roboto;color:#4885ed	"> CONTACT:</strong></h4></td>

                      </tr>
                </table>
              <table>


                      <tr >
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Mobile:</strong></td>
                        <td><?= $row1["mobile"]?></td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Home:</strong></td>
                        <td><?= $row1["home"]?></td>

                      </tr>

                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Online Availability:</strong></td>
                        <td><?= strtoupper($row1["avail"])?></td>

                      </tr><tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Online Number:</strong></td>
                        <td><?= $row1["availno"]?></td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">City:</strong></td>
                        <td><?= $row1["address"]?></td>

                      </tr>
                    </table>

                </div>
              </div>
              </div>
            <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                    <table  frame="below">
                <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	">EMAIL <h5>(click on email to mail):</h5></strong></h4></td>

                      </tr>
                </table>
                <table >
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><?= $row1["email"]?></td>

                      </tr>
                      </table>
                </div>
              </div>
              </div>
            <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                  <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	">PREFENCES:</strong></h4></td>

                      </tr>
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><?= $row1["pref"]?></td>

                      </tr>
                      </table>
                </div>
              </div>
              </div>
            <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                  <table  frame="below">
                <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	">LINKS<h5>(click on icons to visit):</h5></strong></h4></td>

                      </tr></table>
                      <table frame="below">

                      <tr style="font-family:Roboto">
                        <td><strong>Facebook Link :</strong></td>
                        <td ><a style="color:inherit" href="<?= $row2["facebook"]?>" target="_blank"><i style="font-size:48px" class="fa">&#xf230;</i></a></td>

                      </tr>

                      <tr>
                        <td><strong>Twitter Link :</strong></td>
                        <td style="font-family:Roboto"><a href="<?= $row2["twitter"]?>" target="_blank"><i class="fa fa-twitter text-primary" style="font-size:48px"></i></a><td>


                      </tr>
                      <tr>
                        <td><strong>LinkedIn Link :</strong></td>
                        <td style="font-family:Roboto"><a style="color:inherit" href="<?= $row2["linkedin"]?>"target="_blank"><i class="fa fa-linkedin" style="font-size:48px"></i></a><td>


                      </tr>


                      </table>
                </div>
              </div>
              </div>
          </div>

        <div id="menu1" class="tab-pane fade ">
          <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                   <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	"> LIFE-MOTO:</strong></h4></td>

                      </tr></table>
                      <table>
                      <tr>
                      <td><div style="margin-top:30px"class="col-md-12 text-center">
    <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>
    <p class="text-center" style="font-family:pangolin">...<?= $row6["moto"]?></p>
      </div></td>
                        </tr>
                      </table>

                </div>
            </div>
          </div>
          <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                  <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4> <strong style="font-family:Roboto;color:#4885ed	">EDUCATION:</strong></h4></td>

                      </tr></table>

        <table style="font-size:15px">

          <?php foreach($rows3 as $row3):?>

          <tr >
          <td >
            <?php if($row3["year"]<'2017'):?>
<i class="fa fa-calendar fa-fw "style="color:#4885ed	"></></i><?= $row3["year"]?>
          <?php else:?>
<i class="fa fa-calendar fa-fw "style="color:#4885ed	"></></i><?= 'Current'?>
          </td>
          <?php endif?>
            <td >
              <?= strtoupper($row3["degree"])?>
              <ul>
                <li><?= strtoupper($row3["schoolname"])?></li>
                <li><?= strtoupper($row3["major"])?></li>

              </ul>
            </td>

          </tr>

          <?php endforeach?>


        </table>
                </div>
            </div>
          </div>
          <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                  <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>    <strong style="font-family:Roboto;color:#4885ed	">  WORK/ INTERN/ EXPERIENCE:</strong></h4></td>

                      </tr></table>

        <table style="font-size:15px">
          <?php foreach($rows4 as $row4):?>

          <tr >
          <td >
            <?php if($row4["year"]<'2017'):?>
<i class="fa fa-calendar fa-fw " style="color:#4885ed	"></i><?= $row4["year"]?>
          <?php else:?>
<i class="fa fa-calendar fa-fw " style="color:#4885ed	"></></i><?= 'Current'?>
          </td>
          <?php endif?>
            <td ><?= strtoupper($row4["schoolname"])?>
              <ul>
                <li><?= ucwords(strtolower($row4["major"]))?></li>
                <li><?= ucwords(strtolower($row4["degree"]))?></li>

              </ul>
            </td>

          </tr>

          <?php endforeach?>

        </table>
                </div>
            </div>
          </div>
          <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                   <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4> <strong style="font-family:Roboto;color:#4885ed	">SOFTWARE/ LANGUAGES:</strong></h4></td>

                      </tr></table>

        <table style="font-size:15px">


          <?php foreach($rows5 as $row5):?>
          <tr >
          <td >
            <?php if($row5["lang"]=='C++'):?>
<i style="font-size:30px" class="devicon-cplusplus-plain colored"></i> <?=$row5["lang"]?>
            <?php elseif($row5["lang"]=='C#'):?>
<i style="font-size:30px" class="devicon-csharp-plain colored"></i> <?=$row5["lang"]?>
            <?php elseif(($row5["lang"]=='Matlab')||($row5["lang"]=='Pearl')||($row5["lang"]=='NI-Multisim')):?>
<i class="material-icons" style="color:#4885ed">&#xe569;</i> <?=$row5["lang"]?>

            <?php else:?>
<i style="font-size:30px" class="devicon-<?= strtolower($row5["lang"])?>-plain colored"></i> <?=$row5["lang"]?>
          <?php endif?>
          </td>



          </tr>

          <?php endforeach?>

        </table>

                </div>
            </div>
          </div>
          <div class="jumbotron">
            <div class="row">
                <div class="col-sm-12">
                  <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>

<strong style="font-family:Roboto;color:#4885ed	"> TOPICS:</strong></h4></td>

                      </tr></table>
        <?php foreach($rows7 as $row7):?>
        <table style="font-size:15px">
          <tr >
          <td >
            <ul>
              <li><?=strtoupper($row7["hobby"])?></li>
            </ul>

          </td>



          </tr>

          <?php endforeach ?>

        </table>
                </div>
            </div>
          </div>
          </div>


    </div>
    </div>
    </div>




    <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>


  </div>


    <!-- /.intro-header -->
</body>
</html>



