
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

  $rows9=CS50::query("SELECT * FROM userupload WHERE user_id=?",$_SESSION["id"]);

    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];

?>

<script>
    $('#h5').css({"background-color":"purple","color":"white"});
    $('#arr2').css("color","white");
    $('#arl2').css("color","black");
    $('#ar2').css({"background-color":"purple","color":"white"});
    $('#fri2').css("color","white");
</script>
  <!--end of navigation bar-->
  <!--start of jumbotron-->

  <div class="container "id="contain" style="margin-top:20%;width:100%">

   <ul class="nav nav-tabs">

   <li id="add1" class="active"><a data-toggle="tab" href="#home">Ist Year Assignments :</a></li>
    <li id="add2"><a data-toggle="tab" href="#menu1">IInd Year Assignments  :</a></li>
    <li id="add3"><a data-toggle="tab" href="#menu2">IIIrd Year Assignments  :</a></li>
    <li id="add4"><a data-toggle="tab" href="#menu3">IVth Year Assignments  :</a></li>
  </ul>
            <div class="tab-content">

                  <div id="home" class="tab-pane fade in active">

                                 <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]) ?>
        <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",1,$branch[0]["branch"])?>
        <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
     <div class="jumbotron" style="background:white !important;border:1px solid black">
                        <div class="row">
                            <div class="col-sm-12">

        <!--this is subject injection  -->

        <table  frame="below">
                <tr>
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:red;font-size:20px	"> <?= $subname["subject"]?></strong></h4></td>
                </tr>
                </table>
        <p>
          <table  style="text-size:30px">

            <tr>

              <td style="text-decoration:underline" >
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>

            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>

              <td>
                 <div id="wordwrapWITHWidth2"><?= $j."."." ".ucwords(strtolower($sub["topic"]))?></div>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" id="wordwrapWITHWidth2" target="_blank" ><?= $sub["link"]?></a>
              </td>

            </tr>
            <?php endforeach ?>

          </table>

        </p>
            </div>
                        </div>
                    </div>

      <?php endforeach ?>

                    </div>
                    <div id="menu1" class="tab-pane fade in ">
                         <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]) ?>
        <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",2,$branch[0]["branch"])?>
        <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
     <div class="jumbotron" style="background:white !important;border:1px solid black">
                        <div class="row">
                            <div class="col-sm-12">

        <!--this is subject injection  -->

        <table  frame="below">
                <tr>
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:red;font-size:20px	"> <?= $subname["subject"]?></strong></h4></td>
                </tr>
                </table>
        <p>
          <table  style="text-size:30px">

            <tr>

              <td style="text-decoration:underline" >
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>

            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>

              <td>
                 <div id="wordwrapWITHWidth2"><?= $j."."." ".ucwords(strtolower($sub["topic"]))?></div>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" id="wordwrapWITHWidth2" target="_blank" ><?= $sub["link"]?></a>
              </td>

            </tr>
            <?php endforeach ?>

          </table>

        </p>
            </div>
                        </div>
                    </div>

      <?php endforeach ?>

                    </div>
                    <div id="menu2" class="tab-pane fade in ">
                         <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]) ?>
        <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",3,$branch[0]["branch"])?>
        <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
     <div class="jumbotron" style="background:white !important;border:1px solid black">
                        <div class="row">
                            <div class="col-sm-12">

        <!--this is subject injection  -->

        <table  frame="below">
                <tr>
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:red;font-size:20px	"> <?= $subname["subject"]?></strong></h4></td>
                </tr>
                </table>
        <p>
          <table  style="text-size:30px">

            <tr>

              <td style="text-decoration:underline" >
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>

            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>

              <td>
                 <div id="wordwrapWITHWidth2"><?= $j."."." ".ucwords(strtolower($sub["topic"]))?></div>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" id="wordwrapWITHWidth2" target="_blank" ><?= $sub["link"]?></a>
              </td>

            </tr>
            <?php endforeach ?>

          </table>

        </p>
            </div>
                        </div>
                    </div>

      <?php endforeach ?>

                    </div>
                    <div id="menu3" class="tab-pane fade in">
                         <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]) ?>
        <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",4,$branch[0]["branch"])?>
        <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
     <div class="jumbotron" style="background:white !important;border:1px solid black">
                        <div class="row">
                            <div class="col-sm-12">

        <!--this is subject injection  -->

        <table  frame="below">
                <tr>
                        <td style="font-family:Roboto"><h4><strong style="font-family:Roboto;color:red;font-size:20px	"> <?= $subname["subject"]?></strong></h4></td>
                </tr>
                </table>
        <p>
          <table  style="text-size:30px">

            <tr>

              <td style="text-decoration:underline" >
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>

            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>

              <td>
                 <div id="wordwrapWITHWidth2"><?= $j."."." ".ucwords(strtolower($sub["topic"]))?></div>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" id="wordwrapWITHWidth2" target="_blank" ><?= $sub["link"]?></a>
              </td>

            </tr>
            <?php endforeach ?>

          </table>

        </p>
            </div>
                        </div>
                    </div>

      <?php endforeach ?>

                    </div>
            </div>
             <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

    </div>
