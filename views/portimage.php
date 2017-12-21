
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

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-primary" style="font-family:Pangolin;color:white" href="#">Portfolio.in</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
      <ul class="nav navbar-nav">
        <li ><a href="portfeed_.php" style="color:white"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="active"><a href="portfolio_.php" style="color:inherit"><span class="glyphicon glyphicon-upload"></span> Uploads</a></li>
        
        
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
    <li ><a data-toggle="tab" href="#home">STEPS :</a></li>
    <li class="active"><a data-toggle="tab" href="#menu1">Upload your image:</a></li>
  </ul>
  
  <div class="container">
  
    <div class="tab-content">
      
      
      <div id="home" class="tab-pane fade ">
      <div class="container text-center" >
    <div class="jumbotron">
      
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4">
        <h3>STEPS:</h3>
        <ol class="text-center">
          <li><h4>Upload your image to flaunt.</h4></li>
          <li><h4>Fill your educational qualifictions.</h4> </li>
          <li><h4>Ready to see the magic....</h4></li>
        </ol>
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
                      
                  <h1 style="font-family:Pangolin" class="text-center" >NIT-Portfolio</h1>
                  <h4 style="font-family:Pangolin" class="text-center text-default"><em>Upload Your images here ....</em></h4>
                                   <!-- start-->
                  <form action="upload.php" method="post" enctype="multipart/form-data">
                    
                   
                    
                     <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="input-group text-center ">
                      
                    
                <input type="file" class="form-control btn btn-primary" name="fileToUpload" id="fileToUpload"data-toggle="tooltip" data-placement="left" title="Choose your image to upload by clicking on the choose file  button"></div>
                <br>
                <div class="input-group text-center">
                <strong>Caption:</strong><input type="text"class="form-control " value="" name="caption"data-toggle="tooltip" data-placement="auto" title="Give some caption to your image">
                </div>
                <br>
                 <div class="input-group text-center">
                <input type="submit"class="form-control btn btn-primary" value="Upload Image" name="submitfile"data-toggle="tooltip" data-placement="auto" title="Click on upload button to finish your image uploading">
                </div>
                  
                </div>
                  </div>
            </form>
                    <br>
  <div class="panel-footer" ><small style="font-family:Roboto">We do not share personal information with companies, organizations and individuals outside of <a href="wiki/nit.com">NIT</a>-Portfolio.</small></div>
            </div>
          
          </div>
          
        </div>
         
        </div>
       
        </div>
        
    
    <!--THIRD-->
    
               <ul class="pager">
    <li><a href="portgallery_.php">Finish</a></li>
  </ul>
    
    </div>
    
    
    <footer class="text-center"><hr><center>Copyright© 2017. <a href="google.com">Bookworm-</a><a href="google.com">Privacy</a></cite></footer>
  
  </div>
    <!-- /.intro-header -->

   <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
   </html>
</body>
</html>