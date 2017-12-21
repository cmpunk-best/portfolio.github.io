 <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<?php
    $id1=$GLOBALS["id1"];
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
    ?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-primary" style="font-family:Pangolin;color:#000" href="#">Portfolio.in</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
      <ul class="nav navbar-nav">
        <li ><a href="porthome_.php" style="font-family:Pangolin;color:#000"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="active"><a href="portfolio_.php" style="font-family:Pangolin;color:blue"><span class="glyphicon glyphicon-user"></span> MyPortfolio</a></li>

          <li ><a href="portgallery_.php" style="font-family:Pangolin;color:#000"><span class="glyphicon glyphicon-camera"></span> Photogallery</a></li>
          <li class="dropdown">
        <a class="dropdown-toggle" style="font-family:Pangolin;color:#000"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-heart"></span> MyCollege
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="portfeed_.php">Friends Portfolio</a></li>
          <li><a href="#">Teachers Portfolio</a></li>
        </ul>
      </li>
      <li class="dropdown"style="color:inherit">
        <a class="dropdown-toggle" style="font-family:Pangolin;color:#000"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-inbox"></span> MyBranchPost
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="portassign_.php">Assignments</a></li>
          <li><a href="portsem_.php">Course Material</a></li>
        </ul>
      </li>
          <li ><a href="portgallery_.php" style="font-family:Pangolin;color:#000"><span class="glyphicon glyphicon-star"></span> MyCollegeFest</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <div class="btn-group">
  <a class="btn btn-danger navbar-btn" href="portfolio_.php"><i class="fa fa-user fa-fw"></i> <?= $row["firstname"]?></a>
  <a class="btn btn-danger dropdown-toggle navbar-btn" data-toggle="dropdown" href="#">
    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="portedit_.php"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
    <li class="divider"></li>
    <li><a href="logout.php"><i class="fa fa-unlock"></i> Logout</a></li>
  </ul>
</div>
    </ul>

  </div>
      </div>
  </nav>

  <div class="container-fluid">
    <div class="jumbotron"  style="background:white !important;margin-top:-10px;border:1px solid white">
    <div class="row">
        <div class="col-md-3">
           <div class="thumbnail" >
      <img style="opacity:1" class="img-rounded" src="/uploads/<?=$row8["headurl"]?>" alt="Los Angeles" height:"100px" >

        <div class="caption text-center">

        <img src="/uploads/<?=$row8["url"]?>" class="img-circle" alt="Lights" style="width:100px;height:100px;margin-top:-50px">
          <a href="portfolio_.php">
          <h5><strong style="font-family:Pangolin"><?=strtoupper($row["firstname"])?> <?=strtoupper($row["secondname"])?></strong></h5>
          </a>
          <h5 style="font-family:Pangolin">...<?=($row6["moto"])?></h5>

          <h5 style="font-family:Pangolin">NIT-AP</h5>
          <h6>Followers  |   Following</h6>
        </div>

    </div>
          <div  class="jumbotron" style="background:white !important;margin-top:-10px;border:1px solid silver">
            About.<a>Edit</a>
            <table>
              <tr>
                <td><i class="fa fa-home fw"></i> Lives in Andhra-Pradesh</td>

              </tr>
              <tr>
                <td>
                  <i class="fa fa-map-marker fw"></i> From <?=ucfirst(strtolower($row1["address"]))?></td>

                </td>
              </tr>
            </table>
          </div>
          </div>

          <div class="col-md-9">


    <div class="jumbotron" style="background:white !important;margin-top:-10px;border:1px solid silver">




      <div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><span class="glyphicon glyphicon-option-horizontal" ></span></button>
</a>
      <ul class="dropdown-menu ">
        <li><a href="portgallery_.php">Change your head image</a></li>
        <li><a href="portgallery_.php">Change your profile pic</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div>





          <br>
      <div class="row" >

          <div class="col-md-12">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div id="mydiv"class="item active" style="width:100%;height:300px" >
        <img  style="opacity:.8" class="img-rounded" src="/uploads/<?=$row8["headurl"]?>" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">

          <h2><?= strtoupper($row["firstname"])?></h2><h2><?= strtoupper($row["secondname"]); ?></h2>


        </div>
      </div>
      </div>
      </div>
          </div>
          <div class="col-md-6">
        <div class="jumbotron" style="margin-top:-.5px">
          <div class="row" style="padding:2px">
            <?php ?>
            <div class="text-center">
            <img src="/uploads/<?=$row8["url"]?>" alt="itsme"class="img-circle" align="center" width="200px" height="200px">
            </div>
            <?php ?>
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
                      <tr >
                        <td ><strong style="font-family:Roboto">Gender:</strong></td>
                        <td><?= strtoupper($row["Gender"]) ?></td>

                      </tr>
                      <tr>
                        <td style="font-family:Roboto"><strong style="font-family:Roboto">Birthday:</strong></td>
                        <td><?= $row["day"]?> <?=strtoupper($row["birthdaymonth"])?></td>

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
                      <div style="margin-top:50px" class="col-md-12">
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
              <div style="margin-top:50px" class="col-md-12">
              <table  frame="below">
                <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:#4885ed	">EMAIL:</strong></h4></td>

                      </tr>
                </table>
              <table >
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><?= $row1["email"]?></td>

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
                        <td style="font-family:Roboto"><?= $row1["pref"]?></td>

                      </tr>
                      </table>
                      </div>
                       <div style="margin-top:50px" class="col-md-12">
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
                         <td><strong>Instagram Link :</strong></td>
                        <td ><a href="<?= $row2["instagram"]?>" target="_blank"><i class="fa fa-instagram" style="font-size:48px;color:red"></i></a></td>


                      </tr>
                      <tr>
                        <td><strong>Snapchat Link :</strong></td>
                        <td style="font-family:Roboto"><a style="color:inherit"href="<?= $row2["snapchat"]?>" target="_blank"><i class="fa fa-snapchat" style="font-size:48px;color:yellow"></i></a><td>


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



        <div class="col-md-6">
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

        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4><span class="glyphicon glyphicon-paperclip" style="font-size:22px" ></span> <strong style="font-family:Roboto;color:#4885ed	">EDUCATION:</strong></h4></td>

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



        <?php //foreach $ as $ :?>

        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>
<span class="glyphicon glyphicon-briefcase" style="font-size:23px"></span>     <strong style="font-family:Roboto;color:#4885ed	">  WORK/ INTERN/ EXPERIENCE:</strong></h4></td>

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

        <br>












        <?php //endif ?>
         <?php //foreach $ as $ :?>

        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>
<i style="font-size:30px" class="devicon-devicon-plain " ></i> <strong style="font-family:Roboto;color:#4885ed	">SOFTWARE/ LANGUAGES:</strong></h4></td>

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
          <td><div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-black" style="width:90%"><?= $row5["percentage"] ?>%</div>
          </div></td>


          </tr>

          <?php endforeach?>

        </table>
        <br>
        <?php //endif ?>
         <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><h4>

<span class="glyphicon glyphicon-book" style="font-size:22px"></span><strong style="font-family:Roboto;color:#4885ed	"> TOPICS:</strong></h4></td>

                      </tr></table>
        <?php foreach($rows7 as $row7):?>
        <table style="font-size:15px">
          <tr >
          <td >
<i class="material-icons" style="color:#4885ed">&#xe569;</i><?=strtoupper($row7["hobby"])?>

          </td>



          </tr>

          <?php endforeach ?>

        </table>

        <?php //endif ?>

        </div>





      </div>
      <div class="panel-footer" ><center><small style="font-family:Roboto">You can add or share this portfolio of yours anywhere for your internship,job or recommendations</small></center></div>

    </div>
    </div>
    </div>
    </div>
    <div class="panel-footer" ><center><small style="font-family:Roboto">We do not share personal information with companies, organizations and individuals outside of <a href="wiki/nit.com">NIT</a>-Portfolio.</small></center></div>
          <footer class="text-center"><hr><center>Copyright© 2017. <a href="google.com">Bookworm-</a><a href="google.com">Privacy</a></cite></footer>

  </div>


  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

});
</script>

  </body>
  </html>