
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

          <li class="active"><a href="portupload_.php" style="font-family:Pangolin;color:#000"><span class="glyphicon glyphicon-upload" ></span> Upload Now</a></li>
          <li class="dropdown">
        <a class="dropdown-toggle" style="font-family:Pangolin;color:#fff"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-heart"></span> College
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Students Portfolio</a></li>
          <li><a href="#">Teachers Portfolio</a></li>
        </ul>
      </li>

      <li ><a href="portrecent_.php" style="font-family:Pangolin;color:#fff"><span class="glyphicon glyphicon-inbox"></span> Recent Posts</a></li>


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
        <?php if($GLOBALS['Success']=='Success'):?>
                      <br/>
                      <div class="btn btn-success">Upload Successful :))</div>
                      <?php else:?>

                      <?php endif?>
    <div class="jumbotron">

      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        <h3 style="color:#000033">Assignment Upload:</h3>
                                   <h5 style="color:#000033">(*Accepted format : docx,pdf,ppt)</h5>
             <form action="assign4.php" method="post" enctype="multipart/form-data">


                                <table>
                                    <tr>
                                        <td  class="text-left" style="text-decoration:underline;font-size:18px"><strong>Subject Name</strong></td>
                                        <td  class="text-left" style="text-decoration:underline;font-size:18px"><strong>Assignment name</strong></td>
                                        <td class="text-left" style="text-decoration:underline;font-size:18px"><strong>Choose File</strong></td>
                                        <td></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td><br/>
                                            <div class="input-group text-center">
                                              <select class="form-control" id="subname" name="subname[]">


                                                <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  user_id=?",$_SESSION["id"]);?>
                                                <?php  foreach($subnames as $subname):?>

                                                <option  ><?= $subname["subject"]?></option>



                                                <?php endforeach?>

                                              </select>


                                            </div>
                                          </td>
                                        <td>
                                            <br/>
                                            <div class="input-group text-center">
                            <input type="text"class="form-control " value="" id="caption10" name="caption10"data-toggle="tooltip" data-placement="auto" title="Give some topic name to your file">
                            </div>
                                        </td>
                                        <td>
                                            <br/>
                                            <div class="input-group text-center ">
                                            <input type="file" class="form-control btn btn-default" name="fileToUpload10" id="fileToUpload10"data-toggle="tooltip" data-placement="left" title="Choose your file to upload by clicking on the choose file  button">
                                            </div>
                                        </td>
                                        <td><br/><div id="education_fields1">
                      <?php// foreach($rows4 as $row4):?>


            <div class=" nopadding" style="margin-top:10px">
              <div class="form-group">
                <div class="input-group">

                  <div class="input-group-btn">
                   <button class="btn btn-success" type="button" onclick="education_fields1();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
            </div></td>
                 </tr>

                                </table><?php require("../views/portteachupload1.php"); ?>
                <table id="puthere1"></table>

                             <br/>



                        <br/>
                                <div class="input-group text-center" style="margin-left:45%">
                 <input type="submit"class="form-control btn btn-default" style="background-color:#000033;color:#fff"value="Upload File" name="submitfile">
                </div>
                <br/>
                <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field </small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field </small></div>
            </form>


      </div>
    </div>

    </div>

    </div>
    </div>



  <!--second tab-->

  <div id="menu1" class="tab-pane fade in active">
                  <div class="container">
                      <?php if($GLOBALS['Success']=='Success'):?>
                      <br/>
                      <div class="btn btn-success">Upload Successful :))</div>
                      <?php else:?>

                      <?php endif?>
                  <div class="jumbotron">


                    <div class="row">
                         <div class="col-xs-12">
                        <h3 style="color:#000033">Material Upload:</h3>
                                   <!-- start-->
                                   <h5 style="color:#000033">(*Accepted format : docx,pdf,ppt)</h5>
                  <form action="upload4.php" method="post" enctype="multipart/form-data">

                <div class="row">
                <div class="col-md-10 col-md-offset-1">
                                <table>
                                    <tr>
                                        <td  class="text-left" style="text-decoration:underline;font-size:18px"><strong>Subject Name</strong></td>
                                        <td  class="text-left" style="text-decoration:underline;font-size:18px"><strong>Topic name</strong></td>
                                        <td class="text-left" style="text-decoration:underline;font-size:18px"><strong>Choose File</strong></td>
                                        <td></td>
                                    </tr>
                                    <br>
                                    <tr>

                                        <td><br/>
                                            <div class="input-group text-center">
                                              <select class="form-control" id="subname" name="subname[]">


                                                <?php   $subnames=CS50::query("SELECT * FROM subjects WHERE  user_id=?",$_SESSION["id"]);?>
                                                <?php  foreach($subnames as $subname):?>

                                                <option  ><?= $subname["subject"]?></option>



                                                <?php endforeach?>

                                              </select>


                                            </div>
                                          </td>
                                        <td>

                                            <br/>
                                            <div class="input-group text-center">
                            <input type="text"class="form-control " value="" id="caption0" name="caption0">
                            </div>
                                        </td>
                                        <td>
                                            <br/>
                                            <div class="input-group text-center ">
                                            <input type="file" class="form-control btn btn-default" name="fileToUpload0" id="fileToUpload0">
                                            </div>
                                        </td>


                                        <td><br/><div id="education_fields">
                      <?php// foreach($rows4 as $row4):?>


            <div class=" nopadding" style="margin-top:10px">
              <div class="form-group">
                <div class="input-group">

                  <div class="input-group-btn">
                   <button class="btn btn-success" type="button" onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
            </div></td>
                 </tr>

                                </table><?php require("../views/portteachupload.php"); ?>
                <table id="puthere"></table>

                             <br/>
                        <br/>
                                <div class="input-group text-center" style="margin-left:45%">
                 <input type="submit"class="form-control btn btn-default" style="background-color:#000033;color:#fff"value="Upload File" name="submitfile">
                </div>
                <br/>
                <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field </small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field </small></div>

                </div>
                  </div>

            </form>
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