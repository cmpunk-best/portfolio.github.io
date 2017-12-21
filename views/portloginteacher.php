

<!--Bootstrap core CSS -->

  <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="dist/toolkit.min.js"></script>
<!-- Documentation extras -->
<link href="/assets/css/docs.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar navbar-default ">
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
            <a href="login.php"><button class="btn btn-primary navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-home"></span> Home|NIT-AP</button></a>

    </ul>
    <ul class="nav navbar-nav navbar-right">
        <a href="portlogin_.php"><button class="btn btn-danger navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-user"></span> Student-Login </button></a>

    </ul>


  </div>
      </div>
  </nav>
  <!--end of navigation bar-->
  <!--start of jumbotron-->
  <div class="container" >
       <div class="fb-like" data-href="https://www.facebook.com/nitandhrapradesh1/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
  <div class="jumbotron" style="background:#000033 !important">
    <div class="row">
        <div class="col-xs-12">
  <h1 style="font-family:Pangolin;color:#fff" class="text-center" >NIT-Portfolio</h1>
  <h4 style="font-family:Pangolin;color:#fff" class="text-center text-default"><em>Welcome to <b>Faculty Portal</b> ....</em></h4>
         <h5><span class="error">* required field.</span></h5>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="login1" method="post">
    <fieldset>
     <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="input-group margin-bottom-sm">

        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
        <input class="form-control" type="text" placeholder="Email address" data-toggle="tooltip" data-placement="left" title="Enter email registered with college" name="email">
        </div><div class="container"><span class="error">* <?php echo $GLOBALS['emailErr'];?></span></div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input class="form-control" type="password" placeholder="Password" name="password"data-toggle="tooltip" data-placement="left" title="Enter password given by college">
        </div><span class="error">* <?php echo $GLOBALS['passwordErr'];?></span><br></br>
        <div class="form-group text-center">
            <button class="btn btn-danger"  type="submit"data-toggle="modal" data-target="#myModal">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Log In
            </button>
        </div>
        </div>
        </div>
    </fieldset>
</form>
<div class="container" id="error">


  </div>


<div style="font-family:Pangolin;color:#fff"class="text-center">
    or  <a href="portsignup.php">forgot password?</a>
</div>
      </div>

    </div>

    </div>
    <div class="fb-follow" data-href="https://www.facebook.com/nitandhrapradesh1/" data-layout="standard" data-size="small" data-show-faces="true"></div>

    <!--<script>
        var form=document.getElementById("login1");
        form.onsubmit=function(){
            if((form.email.value)==''){
                var list='<div class="modal fade" id="myModal" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title">Error</h4>'+' </div>'+'<div class="modal-body">'+
                '<p class="text-danger"> Email or Password Required</p>'+'</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>';
                document.getElementById("error").innerHTML=list;


                return false;

            }
             else if((form.password.value)==''){
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

    <footer class="text-center"><hr><center>Copyright© 2017. Bookworm</cite></footer>

  </div>
     <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

    <!-- /.intro-header -->
</body>
</html>