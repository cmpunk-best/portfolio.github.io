<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<style>
  #h2:hover,#h3:hover,#h4:hover,#h1:hover,#h6:hover,#h7:hover{
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

  $rows9=CS50::query("SELECT * FROM userupload WHERE user_id=?",$_SESSION["id"]);

    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];

?>


  <script>
    $('#h5').addClass('active');

</script>

 <ul class="nav nav-tabs" style="margin-left:10%;margin-top:10%">
    <li ><a data-toggle="tab" href="#home">Ist Year Assignments :</a></li>
    <li class="active"><a data-toggle="tab" href="#menu1">IInd Year Assignments  :</a></li>
    <li class=""><a data-toggle="tab" href="#menu2">IIIrd Year Assignments  :</a></li>
    <li class=""><a data-toggle="tab" href="#menu3">IVth Year Assignments  :</a></li>
  </ul>

  <div class="container" style="">

    <div class="tab-content">


      <div id="home" class="tab-pane fade ">
      <div class="container text-center" >

    <div class="jumbotron">

      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        <h3 style="color:#000033">Assignment Upload:</h3>
         <h4>(*Click on link to download assignment)</h4>
            <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]) ?>
        <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",1,$branch[0]["branch"])?>
  <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
      <div id="section<?= $count?>" style="border-radius:10px;padding:30px;color: #000; background-color: #fff;border:1px solid black">

        <!--this is subject injection  -->

        <h3 style="font-family:Encode Sans Condensed;color:red"><?= $subname["subject"]?></h3>
        <p>
          <table  style="font-size:20px;margin-left:50px">

            <tr>
              <td style="text-decoration:underline">
                S.No.
              </td>
              <td style="text-decoration:underline">
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>
              <td style="text-decoration:underline">
                Year
              </td>
            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>
              <td>
                <?= $j.'.' ?>
              </td>
              <td >
                <div id="wordwrapWITHWidth"><?= ucwords(strtolower($sub["topic"]))?></div>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" target="_blank" ><?= $sub["link"]?></a>
              </td>
              <td>
                <?= $sub["year"]?>
              </td>
            </tr>
            <?php endforeach ?>

          </table>
        </p>
      </div>
      <br>
      <?php endforeach ?>

                    <br>

      </div>
    </div>

    </div>

    </div>
    </div>



  <!--second tab-->

  <div id="menu1" class="tab-pane fade in active">
                  <div class="container">

                  <div class="jumbotron">


                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                        <h3 style="color:#000033">Assignments:</h3>
                                   <!-- start-->
                        <h4>(*Click on link to download assignment)</h4>

                                                    <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",2,$branch[0]["branch"])?>
  <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
      <div id="section<?= $count?>" style="border-radius:10px;padding:30px;color: #000; background-color: #fff;border:1px solid black">

        <!--this is subject injection  -->

        <h3 style="font-family:Encode Sans Condensed;color:red"><?= $subname["subject"]?></h3>
        <p>
          <table  style="font-size:20px;margin-left:50px">

            <tr>

              <td style="text-decoration:underline">
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>
              <td style="text-decoration:underline">
                Year
              </td>
            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>

              <td>
                <h4 id="wordwrapWITHWidth3"><?= $j."."." ".ucwords(strtolower($sub["topic"]))?></h4>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" target="_blank" ><?= $sub["link"]?></a>
              </td>
              <td>
                <?= $sub["year"]?>
              </td>
            </tr>
            <?php endforeach ?>

          </table>
        </p>
      </div>
      <br>
      <?php endforeach ?>



                    <br>
            </div>

          </div>

        </div>

        </div>

        </div>


    <!--THIRD-->
 <div id="menu2" class="tab-pane fade ">
      <div class="container text-center" >

    <div class="jumbotron">

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1">
         <h3 style="color:#000033">Assignments:</h3>
                                   <!-- start-->
                        <h4>(*Click on link to download assignment)</h4>

            <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",3,$branch[0]["branch"])?>
  <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
      <div id="section<?= $count?>" style="border-radius:10px;padding:30px;color: #000; background-color: #fff;border:1px solid black">

        <!--this is subject injection  -->

        <h3 style="font-family:Encode Sans Condensed;color:red"><?= $subname["subject"]?></h3>
        <p>
          <table  style="font-size:20px;margin-left:50px">

            <tr>

              <td style="text-decoration:underline">
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>
              <td style="text-decoration:underline">
                Year
              </td>
            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>

              <td>
               <div id="wordwrapWITHWidth3"><?= $j."."." ".ucwords(strtolower($sub["topic"]))?></div>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" target="_blank" ><?= $sub["link"]?></a>
              </td>
              <td>
                <?= $sub["year"]?>
              </td>
            </tr>
            <?php endforeach ?>

          </table>
        </p>
      </div>
      <br>
      <?php endforeach ?>



                    <br>

      </div>
    </div>

    </div>

    </div>
    </div>

 <div id="menu3" class="tab-pane fade ">
      <div class="container text-center" >

    <div class="jumbotron">

      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
         <h3 style="color:#000033">Assignments:</h3>
                                   <!-- start-->
                        <h4>(*Click on link to download assignment)</h4>

            <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  year=? AND branch=?",4,$branch[0]["branch"])?>
  <?php  $count=0;?>
       <?php foreach($subnames as $subname): ?>
      <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
     <?php $count++; ?>
      <div id="section<?= $count?>" style="border-radius:10px;padding:30px;color: #000; background-color: #fff;border:1px solid black">

        <!--this is subject injection  -->

        <h3 style="font-family:Encode Sans Condensed;color:red"><?= $subname["subject"]?></h3>
        <p>
          <table  style="font-size:20px;margin-left:50px">

            <tr>
              <td style="text-decoration:underline">
                S.No.
              </td>
              <td style="text-decoration:underline">
                Assignment name
              </td>
              <td style="text-decoration:underline">
                Assignment Link
              </td>
              <td style="text-decoration:underline">
                Year
              </td>
            </tr>
            <tr>
              <?php $j=0;?>
              <?php foreach($subs as $sub): ?>
              <?php $j++;?>
              <td>
                <?= $j.'.' ?>
              </td>
              <td>
                <?= ucwords(strtolower($sub["topic"]))?>
              </td>
              <td>
                <a href="/uploads/<?= $sub["link"]?>" target="_blank" ><?= $sub["link"]?></a>
              </td>
              <td>
                <?= $sub["year"]?>
              </td>
            </tr>
            <?php endforeach ?>

          </table>
        </p>
      </div>
      <br>
      <?php endforeach ?>



                    <br>


      </div>
    </div>

    </div>

    </div>
    </div>



    </div>


     <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

  </div>
