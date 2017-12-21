 <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<script rel="stylesheet" href="/bootstrap-notify-master/bootstrap-notify.js"></script>

<style>
  #h1:hover,#h3:hover,#h4:hover,#h5:hover,#h6:hover,#h7:hover{
  background-color: purple;
}
</style>
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
    $linkers=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND accept=?",$_SESSION["id"],1);
$linked=CS50::query("SELECT * FROM notifications WHERE reqby=? AND accept=?",$_SESSION["id"],1);

    ?>
  <script>
    $('#h2').addClass('active');
  var notify = $.notify('<strong>Saving</strong> Do not close this page...', {
	allow_dismiss: false,
	showProgressbar: true
});

setTimeout(function() {
	notify.update({'type': 'success', 'message': '<strong>Success</strong> Your page has been saved!', 'progress': 25});
}, 4500);
</script>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-3" >
            <div class="sidebar-nav-fixed affix" style="margin-top:5%">
                <div class="" style="width:28em">
                    <div class="col-md-10">
           <div class="thumbnail" >
              <div id="mydiv"class="item active" style="width:100%;height:300px" >
        <img  style="opacity:1" class="img-rounded" src="/uploads/<?=$row8["headurl"]?>" alt="Los Angeles" style="width:100%;height:300px;">

      </div>

        <div class="caption text-center">

        <img src="/uploads/<?=$row8["url"]?>" class="img-circle" alt="Lights" style="width:100px;height:100px;margin-top:-50px">
          <a href="portfolio_.php">
          <h5><strong style="font-family:Pangolin"><?=strtoupper($row["firstname"])?> <?=strtoupper($row["secondname"])?></strong></h5>
          </a>
          <h5 style="font-family:Pangolin">...<?=($row6["moto"])?> </h5>
          <h5 style="font-family:Pangolin">NIT-AP</h5>
          <div style="padding-left:80px;padding-right:80px"><table>
            <tr>
               <td>
                <h6><a href="portlinkers_.php">Linkers</a></h6>
              </td>
              <td>
                <h6  style="margin-left:10px">|</h6>
              </td>
              <td>
                <h6 style="margin-left:10px"> <a href="portlinkers_.php">Linked</a></h6>
              </td>
            </tr>
            <tr style="padding:-10%">
              <td>
                <h6 style="margin-left:15px"> <?=count($linkers)?> </h6>
              </td>
              <td>
                 <h6  style="margin-left:10px"></h6>
              </td>
              <td>
                <h6 style="margin-left:25px"> <?=count($linked)?></h6>
              </td>
            </tr>
          </table>
          </div>
        </div>

    </div>


          </div>
                </div>
                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->
        </div>


          <div class="col-md-9 col-sm-12" style="margin-top:8%">


    <div class="jumbotron" style="background:white !important;margin-top:-10px;border:1px solid silver" style="margin-top:10%">




<span> [ <a href="/portedit_.php">Edit</a> ]</span>





          <br><br/>
      <div class="row" >

          <div class="col-md-12 col-sm-12">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div id="mydiv"class="item active" style="width:100%;height:300px" >
        <img  style="opacity:1" class="img-rounded" src="/uploads/<?=$row8["headurl"]?>" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">

          <h2><?= strtoupper($row["firstname"])?></h2><h2><?= strtoupper($row["secondname"]); ?></h2>


        </div>
      </div>
      </div>
      </div>
          </div>
          <div class="col-md-6 col-sm-6">
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
                    <div style="margin-top:50px" class="col-md-12 col-sm-12">
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
                       <div style="margin-top:50px" class="col-md-12 col-sm-12">
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

    </div>
    <div class="panel-footer" ><center><small style="font-family:Roboto">We do not share personal information with companies, organizations and individuals outside of <a href="wiki/nit.com">NIT</a>-Portfolio.</small></center></div>
<footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

    </div>
    </div>

  </div>



  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

});
</script>

  </body>
  </html>