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
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBA_4TrA-N25-j9Tf177fZL1IBJDFn8XWk",
    authDomain: "portfolio-b95be.firebaseapp.com",
    databaseURL: "https://portfolio-b95be.firebaseio.com",
    projectId: "portfolio-b95be",
    storageBucket: "portfolio-b95be.appspot.com",
    messagingSenderId: "415186152036"
  };
  firebase.initializeApp(config);
</script>
  <!-- Material Design Theming -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

  <link rel="stylesheet" href="main.css">

  <!-- Import and configure the Firebase SDK -->
  <!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
  <!-- If you do not serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->
  <script src="/__/firebase/4.0.0/firebase-app.js"></script>
  <script src="/__/firebase/4.0.0/firebase-auth.js"></script>
  <script src="/__/firebase/init.js"></script>





 <script type="text/javascript">
    /**
     * Handles the sign in button press.
     */

    /**
     * Handles the sign up button press.
     */
    function sendPasswordReset() {
      var email = document.getElementById('email').value;
      // [START sendpasswordemail]
      firebase.auth().sendPasswordResetEmail(email).then(function() {
        // Password Reset Email Sent!
        // [START_EXCLUDE]
        alert('Password Reset Email Sent!');
        // [END_EXCLUDE]
      }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/invalid-email') {
          alert(errorMessage);
        } else if (errorCode == 'auth/user-not-found') {
          alert(errorMessage);
        }
        console.log(error);
        // [END_EXCLUDE]
      });
      // [END sendpasswordemail];
    }
    /**
     * initApp handles setting up UI event listeners and registering Firebase auth listeners:
     *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
     *    out, and that is where we update the UI.
     */
    function initApp() {
      // Listening for auth state changes.
      // [START authstatelistener]
      firebase.auth().onAuthStateChanged(function(user) {
        // [START_EXCLUDE silent]
        // [END_EXCLUDE]
        if (user) {
          // User is signed in.
          var displayName = user.displayName;
          var email = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          // [START_EXCLUDE]

          if (!emailVerified) {

          }
          // [END_EXCLUDE]
        } else {
          // User is signed out.
          // [START_EXCLUDE]
          // [END_EXCLUDE]

          // [END_EXCLUDE]
        }
        // [START_EXCLUDE silent]

        // [END_EXCLUDE]
      });
      // [END authstatelistener]
        document.getElementById('quickstart-password-reset').addEventListener('click', sendPasswordReset, false);

    }
    window.onload = function() {
      initApp();
    };
  </script>

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
                    <a href="public/nitaphome_.php"><button class="btn btn-primary navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-home"></span> Home|NIT-AP</button></a>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="portlogin_.php"><button class="btn btn-default navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-log-in"></span> Login </button></a>

            </ul>


          </div>
              </div>
          </nav>
  <!--end of navigation bar-->
  <!--start of jumbotron-->

  <div class="container-fluid" style="margin-top:-15px !important">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
  <div class="jumbotron" style="background:white !important;border:1px solid silver">
<h4 style="font-family:Pangolin">Reset Password</h4>
            <div class="form-group" id="veriemail">
                <label for="inputEmail" class="control-label">Email</label><span class="error" >
                <input type="email" class="form-control" id="email" name="email"value="" placeholder="" autofocus="on">
                <div class="help-block with-errors"></div>
             </div>

          &nbsp;&nbsp;&nbsp;
            <button  class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-password-reset" name="verify-email">Send Password Reset Link</button>


    </div>
</div></div>


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
     <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
$('#pass').hide();

</script>

    <!-- /.intro-header -->
</body>
</html>