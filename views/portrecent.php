
  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$rows=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]);
$row=$rows[0];

?>

<nav class="navbar navbar-default " style="background:#000033 !important">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-primary" style="font-family:Pangolin;color:#fff" href="#">Portfolio.in</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
      <ul class="nav navbar-nav">
        <li ><a href="portfolioteach_.php" style="font-family:Pangolin;color:#fff"><span class="glyphicon glyphicon-user"></span> MyPortfolio</a></li>

          <li ><a href="portupload_.php" style="font-family:Pangolin;color:#fff"><span class="glyphicon glyphicon-upload" ></span> Upload Now</a></li>
          <li class="dropdown">
        <a class="dropdown-toggle" style="font-family:Pangolin;color:#fff"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-heart"></span> College
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Students Portfolio</a></li>
          <li><a href="#">Teachers Portfolio</a></li>
        </ul>
      </li>

      <li class="active" ><a href="portrecent_.php" style="font-family:Pangolin;color:#000"><span class="glyphicon glyphicon-inbox"></span> Recent Posts</a></li>


          <li ><a href="portgallery_.php" style="font-family:Pangolin;color:#fff"><span class="glyphicon glyphicon-star"></span> Post Upcoming Events</a></li>

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

  <!--end of navigation bar-->
  <!--start of jumbotron-->
  <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" href="#home">Assignment Uploads :</a></li>
    <li class="active"><a data-toggle="tab" href="#menu1">Course Material Uploads :</a></li>
  </ul>

  <div class="container">

    <div class="tab-content">


      <div id="home" class="tab-pane fade ">
      <div class="container text-center" >

    <div class="jumbotron">

      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        <h3 style="color:#000033">Assignment Upload:</h3>
<?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  user_id=?",$_SESSION["id"]);?>

                                <?php foreach($subnames as $subname):?>
                                <?php $subs=CS50::query("SELECT * FROM teachassign WHERE subject=?",$subname["subject"]);?>
                                <br/>
                                    <div  style="border-radius:10px;padding:30px;color: #000; background-color: #fff;border:1px solid black">

        <!--this is subject injection  -->
<br/>
        <h3 style="font-family:Pangolin;color:red"><?= $subname["subject"]?></h1>
        <p>
          <table  style="font-size:20px;margin-left:50px">

            <tr>
              <td style="text-decoration:underline">
                S.No.
              </td>
              <td style="text-decoration:underline">
                Topic
              </td>
              <td style="text-decoration:underline">
                Slides/ Pdf/ Links
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
                                <?php endforeach ?>

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
                         <div class="col-xs-12">
                        <h3 style="color:#000033">Material Upload Posts:</h3>
                                   <!-- start-->
                                <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  user_id=?",$_SESSION["id"]);?>

                                <?php foreach($subnames as $subname):?>
                                <?php $subs=CS50::query("SELECT * FROM teachpost WHERE subject=?",$subname["subject"]);?>
                                <br/>
                                    <div  style="border-radius:10px;padding:30px;color: #000; background-color: #fff;border:1px solid black">

        <!--this is subject injection  -->
<br/>
        <h3 style="font-family:Pangolin;color:red"><?= $subname["subject"]?></h1>
        <p>
          <table  style="font-size:20px;margin-left:50px">

            <tr>
              <td style="text-decoration:underline">
                S.No.
              </td>
              <td style="text-decoration:underline">
                Topic
              </td>
              <td style="text-decoration:underline">
                Slides/ Pdf/ Links
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
                                <?php endforeach ?>

                    <br>
            </div>

          </div>

        </div>

        </div>

        </div>


    <!--THIRD-->



    </div>


    <footer class="text-center"><hr><center>Copyright© 2017. <a href="google.com">Bookworm-</a><a href="google.com">Privacy</a></cite></footer>

  </div>
    <!-- /.intro-header -->

   <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $('#submit1').onclick(function(){$('#caption0').val('');$('#fileToUpload0').val('');});
});
</script>
   </html>
</body>
</html>