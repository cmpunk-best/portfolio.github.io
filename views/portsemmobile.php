
    <body id="effect" data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

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
    $('#ar21').css({"background-color":"purple","color":"white"});
    $('#fac2').css("color","white");
</script>
  <div class="container-fluid" style="margin-top:18%" >
<?php $i=0?>
        <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]) ?>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->


      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      <div id="mydiv"class="item active" style="width:100%;height:220px" >
          <?php if($branch[0]["branch"]=='mme'):?>
          <img   style="opacity:1" class="img-rounded" src="http://www.leica-microsystems.com/uploads/tx_templavoila/metallurgy_04.jpg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1    style="font-family:Pangolin;color:#fff;font-size:20px" ><b><b>Metallurgy and Materials Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</b></b></h1>
          </div>
          <?php elseif($branch[0]["branch"]=='eee'):?>
          <img  style="opacity:.9" class="" src="/uploads/eee.jpg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1 style="font-family:Pangolin;color:#fff">Electrical and Electronics Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</h1>
          </div>
          <?php elseif($branch[0]["branch"]=='ece'):?>
          <img   style="opacity:1" class="img-rounded" src="/uploads/ece.jpg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1    style="font-family:Pangolin;color:#fff;font-size:20px"><b><b>Electronics and Communication Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</b></b></h1>
         </div>
          <?php elseif($branch[0]["branch"]=='cse'):?>
           <img   style="opacity:1" class="img-rounded" src="https://cdn-images-1.medium.com/max/1920/1*vXjx4Y7EgQBwALkaeZJ0Cg.jpeg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1    style="font-family:Pangolin;color:#fff;font-size:20px"><b><b>Computer Science Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</b></b></h1>
          </div>
          <?php elseif($branch[0]["branch"]=='bio'):?>
          <img   style="opacity:1" class="img-responsive img-rounded" src="/uploads/bio.jpeg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1    style="font-family:Pangolin;color:#fff;font-size:20px"><b><b>Biotechnology Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</b></b></h1>
          </div>
          <?php elseif($branch[0]["branch"]=='che'):?>

          <img   style="opacity:1" class="img-rounded" src="/uploads/chem.jpg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1    style="font-family:Pangolin;color:#fff;font-size:20px"><b><b>Chemical Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</b></b></h1>
        </div>
          <?php elseif($branch[0]["branch"]=='mec'):?>
           <img  style="opacity:0.9" class="img-rounded" src="http://cdn.wallpapersafari.com/66/1/g9PoGm.jpg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1 style="font-family:Pangolin;color:#fff;font-size:25px">Mechanical Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</h1>
          </div>
          <?php elseif($branch[0]["branch"]=='civ'):?>
          <img   style="opacity:1" class="img-rounded" src="/uploads/civil.jpg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption text-center" style="font-family:Pangolin">
          <h1    style="font-family:Pangolin;color:#fff;font-size:25px"><b><b>Civil Engineering(<?= strtoupper($branch[0]["branch"]) ?>)</b></b></h1>
        </div>
          <?php endif?>

        </div>
      </div>
      </div>
      </div>
<br/>
<div class="container "id="contain" style="width:100%">

   <ul class="nav nav-tabs">

   <li id="add1" class="active"><a data-toggle="tab" href="#home">Ist Year:</a></li>
    <li id="add2"><a data-toggle="tab" href="#menu1">IInd Year:</a></li>
    <li id="add3"><a data-toggle="tab" href="#menu2">IIIrd Year:</a></li>
    <li id="add4"><a data-toggle="tab" href="#menu3">IVth Year:</a></li>
  </ul>
            <div class="tab-content">

                  <div id="home" class="tab-pane fade in active">

                                 <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]) ?>
        <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",1,$branch[0]["branch"])?>
        <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
    <?php $subs=CS50::query("SELECT * FROM teachpost WHERE subject=?",$subname["subject"]);?>
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
                Topic name
              </td>
              <td style="text-decoration:underline">
                 Link
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
    <?php $subs=CS50::query("SELECT * FROM teachpost WHERE subject=?",$subname["subject"]);?>
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
                Topic name
              </td>
              <td style="text-decoration:underline">
               Link
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
<?php $subs=CS50::query("SELECT * FROM teachpost WHERE subject=?",$subname["subject"]);?>
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
                Topic name
              </td>
              <td style="text-decoration:underline">
                Link
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
    <?php $subs=CS50::query("SELECT * FROM teachpost WHERE subject=?",$subname["subject"]);?>
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
               Topic name
              </td>
              <td style="text-decoration:underline">
               Link
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
    </div>
  <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>
