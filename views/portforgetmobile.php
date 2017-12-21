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

  <div class="container-fluid" style="margin-top:10%">
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