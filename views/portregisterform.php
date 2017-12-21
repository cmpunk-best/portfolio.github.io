  <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="dist/toolkit.min.js"></script>
<!-- Documentation extras -->
<link href="/assets/css/docs.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <nav class="navbar navbar-default ">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar" ></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
               <a class="navbar-brand text-primary text-center"  style="font-family:Pangolin;color:#fff;margin-left:80px !important;font-size:40px" href="#">Portfolio.in</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
              <ul class="nav navbar-nav">
                    <a href="login.php"><button class="btn btn-primary navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-home"></span> Home|NIT-AP</button></a>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="portlogin_.php"><button class="btn btn-default navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-log-in"></span> Login </button></a>
                <a href="portloginteacher_.php"><button class="btn btn-danger navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-log-in"></span> Login as Teacher </button></a>

            </ul>


          </div>
              </div>
          </nav>
  <!--end of navigation bar-->
  <!--start of jumbotron-->
  <div class="panel-footer" ><center><small style="font-family:Roboto">We do not share personal information with companies, organizations and individuals outside of NIT-Portfolio.</small></center></div>

  <div class="container-fluid" style="margin-top:-15px !important">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
  <div class="jumbotron" style="background:white !important;border:1px solid silver">
    <div class="row">



                <div class="col-xs-12 col-md-6 col-md-offset-3" style="top:30px !important">
    <div style="font-family:Pangolin" class="text-center" style="height:50px;width:50px"><img src="../uploads/logofinal.png" class="img-rounded"style="height:100px;width:100px" /></div>
    <br/>
    <h2 style="font-family:Pangolin">SignUp</h2>
    <span class="error" > <?php echo $GLOBALS['Err'];?></span>
    <form data-toggle="validator" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="validator"role="form">
        <fieldset>
              <div class="form-group">
                <label for="inputName" class="control-label">Name</label><span class="error" > <?php echo $GLOBALS['fnameErr'];?></span>
                <input type="text" class="form-control" id="inputName" name="fname"placeholder="Jafferin" required>
              </div>
              <div class="form-group">
                <label for="inputName" class="control-label">Last Name(if you have one)</label><?php echo $GLOBALS['snameErr'];?></span>
                <input type="text" class="form-control" id="inputName" name="sname"placeholder="Cina" >
                <span class="error" >
              </div>

              <div class="form-group">
                <label for="inputEmail" class="control-label">Email</label><span class="error" > <?php echo $GLOBALS['emailErr'];?></span>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email(during email and Roll no. linking)" data-error="Bruh, that email address is invalid" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group ">
                  <label for="inputPassword" class="control-label">Roll No.</label><?php echo $GLOBALS['rollErr'];?></span>
                    <input type=""  data-minlength="6" class="form-control" name="roll" id="inputPassword1" placeholder="XXXXXX" required>
                    <div class="help-block">6 digit Roll No</div>
                  </div>
              <div class="form-group">
                <label for="inputPassword" class="control-label">Password</label><?php echo $GLOBALS['passwordErr'];?></span>
                <div class="form-inline row">
                  <div class="form-group col-sm-6">
                    <input type="password" data-minlength="6" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
                    <div class="help-block">Minimum of 6 characters</div>
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="password" class="form-control" id="inputPasswordConfirm" name="confirmation" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio"value="male" name="underwear" required>
                    Male
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio"value="female" name="underwear" required>
                    Female
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="terms" data-error="Tick to agree with Terms and Condition" required>
                    By clicking Create an account, you agree to our<a> Terms and Conditions.</a>
                  </label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Account</button>
              </div>
                </fieldset>
</form>
 <div class="panel-footer" ><center><small style="font-family:Roboto">If you did not link your email and password during linking you can do hereby.<a target="_blank" href="https://nitandhra.tk">Link my email</a></small></center></div>

<div class="container" id="error">


  </div>



      </div>

    </div>

    </div>
</div></div>


    <!--<script>
        var form=document.getElementById("validator");
        form.onsubmit=function(){

                return false;


             if((form.password.value)==''){
                var list='<div class="modal fade" id="myModal" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title">Error</h4>'+' </div>'+'<div class="modal-body">'+
                '<p class="text-danger">Email or Password Required</p>'+'</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>';
                document.getElementById("error").innerHTML=list;


                return false;


            }
            return true;
        }
    </script>
-->

 <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

  </div>
     <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

    <!-- /.intro-header -->
</body>
</html>