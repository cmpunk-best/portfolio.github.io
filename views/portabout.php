

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

<div onkeypress="CloseNav()">
<ul class="nav-mobile navbar-fixed-top" >
  <li style="font-family:Pangolin;font-size:27px;padding-bottom:10px">Portfolio.in</li>
  <li class="menu-container">
    <input id="menu-toggle" type="checkbox">
    <label for="menu-toggle" class="menu-button">
      <svg class="icon-open"  viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
      <svg class="icon-close"  viewBox="0 0 100 100">
        <path d="M83.288 88.13c-2.114 2.112-5.575 2.112-7.69 0L53.66 66.188c-2.113-2.112-5.572-2.112-7.686 0l-21.72 21.72c-2.114 2.113-5.572 2.113-7.687 0l-4.693-4.692c-2.114-2.114-2.114-5.573 0-7.688l21.72-21.72c2.112-2.115 2.112-5.574 0-7.687L11.87 24.4c-2.114-2.113-2.114-5.57 0-7.686l4.842-4.842c2.113-2.114 5.57-2.114 7.686 0l21.72 21.72c2.114 2.113 5.572 2.113 7.688 0l21.72-21.72c2.115-2.114 5.574-2.114 7.688 0l4.695 4.695c2.112 2.113 2.112 5.57-.002 7.686l-21.72 21.72c-2.112 2.114-2.112 5.573 0 7.686L88.13 75.6c2.112 2.11 2.112 5.572 0 7.687l-4.842 4.84z"/>
      </svg>
    </label>
    <ul class="menu-sidebar">
      <li><a href="login.php">Updates|NIT-AP</a></li>
      <li><a href="portabout_.php">About Us</a></li>
      <li><a href="register.php">SignUp</a></li>
      <li>
        <input type="checkbox" id="sub-one" class="submenu-toggle">
        <label class="submenu-label" for="sub-one">Login</label>
        <div class="arrow right">&#8250;</div>
        <ul class="menu-sub">
          <li class="menu-sub-title">
            <label class="submenu-label" for="sub-one">Back</label>
            <div class="arrow left">&#8249;</div>
          </li>
          <li><a href="portlogin_.php">Login as <em>student</em></a></li>
          <li><a href="#">Login as <em>faculty</em></a></li>

        </ul>
      </li>

    </ul>
  </li>
</ul>

  <!--end of navigation bar-->
  <!--start of jumbotron-->
  <div class="container "id="contain" style="margin-top:10%;width:100%">
  <div class="jumbotron" style="background:#EBEEF4 !important;width:100% !important">

            <div class="row">

<div class="col-md-12 col-xs-12">
            <h1 style="font-family:Pangolin" class="text-center" >Portfolio.in</h1>
            <p >
                Welcome to Portfolio.in,
                </p>
                <p style="font-family:Roboto;font-size:17px" class="text-left">
                    Portfolio is an online directory where you can see what's the current updates in your college or school.
                </p>
            <p style="font-family:Roboto;font-size:17px" class="text-left">
            We have opened up Portfolio for popular consumption at <strong>NIT-Andhra.</strong>
                    </p>
            <p style="font-family:Roboto;font-size:20px" class="text-left">You can use portfolio to:</p>
            <ul style="font-size:17px">
                <li class="text-left">
                    Check your friends portfolio.
                </li>
                <li class="text-left">
                    Look up for your course material and assignments uploaded by your teachers.
                </li>
                <li class="text-left">
                    Manage your fests and events efficiently.
                </li>
                <li class="text-left">
                    Support your demands in portfolio feed.
                </li>
            </ul>
        </div>

    </div>

    </div>

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

     <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

  </div>
</div>
<script>
function OpenNav() {
    document.getElementById("myemail").style.zIndex = "-1";
    document.getElementById("mypass").style.zIndex = "-1";
}

function CloseNav() {
     document.getElementById("contain").style.visibility = "visible";
      document.getElementById("myemail").style.zIndex = "1";
       document.getElementById("mypass").style.zIndex = "1";
}
</script>
    <!-- /.intro-header -->
</body>
</html>



