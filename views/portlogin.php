

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
   function toggleSignIn() {
      if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        // [END signout]
      } else {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        if (email.length < 4) {
          alert('Please enter an email address.');
          return;
        }
        if (password.length < 4) {
          alert('Please enter a password.');
          return;
        }
        // Sign in with email and pass.
        // [START authwithemail]
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // [START_EXCLUDE]
          if (errorCode === 'auth/wrong-password') {
            alert('Wrong password.');
          } else {
            alert(errorMessage);
          }
          console.log(error);
          document.getElementById('quickstart-sign-in').disabled = false;
          // [END_EXCLUDE]
        });

        // [END authwithemail]
      }
      document.getElementById('quickstart-sign-in').disabled = true;
    }
    /**
     * Handles the sign up button press.
     */

    /**
     * Sends an email verification to the user.
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
              alert("You need to verify your email to activate your account");
              document.getElementById('quickstart-sign-in').disabled=true;
          }
          else{
          var email1=document.getElementById('email').value;
          var pass1=document.getElementById('password').value;
          document.getElementById('quickstart-sign-in').disabled=true;
          if(email1==''){

          }else{
          $.post("portlogin_.php",{email:email1,password:pass1},function(info){window.location = "https://ide50-ece-best.cs50.io/portfolio_.php";});
          }

          }

          // [END_EXCLUDE]
        } else {
          // User is signed out.
          // [START_EXCLUDE]

                      // [END_EXCLUDE]
        }
        // [START_EXCLUDE silent]
        document.getElementById('quickstart-sign-in').disabled = false;
        // [END_EXCLUDE]
      });
      // [END authstatelistener]
      document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
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
            <a href="login.php"><button class="btn btn-primary navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-home"></span> Home|NIT-AP</button></a>

    </ul>
    <ul class="nav navbar-nav navbar-right">
        <a href="register.php"><button class="btn btn-default navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-user"></span> SignUp </button></a>
        <a href="portloginteacher_.php"><button class="btn btn-danger navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-log-in"></span> Login as Teacher </button></a>

    </ul>


  </div>
      </div>
  </nav>
  <!--end of navigation bar-->
  <!--start of jumbotron-->
  <div class="container" style="margin-top:-15px !important">
  <div class="jumbotron" style="background:#EBEEF4 !important">
    <div class="row">

        <div class="col-md-6">
            <h1 style="font-family:Pangolin" class="text-center" >Portfolio.in</h1>
            <p >
                Welcome to Portfolio.in,
                </p>
                <p style="font-family:Arial;font-size:15px" class="text-left">
                    Portfolio is an online directory where you can see what's the current updates in your college or school.
                </p>
            <p style="font-family:Arial;font-size:15px" class="text-left">
            We have opened up Portfolio for popular consumption at <strong>NIT-Andhra.</strong>
                    </p>
            <p style="font-family:Arial;font-size:15px" class="text-left">You can use portfolio to:</p>
            <ul>
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

                <div class="col-xs-6 col-md-6" style="top:30px !important">
    <div style="font-family:Pangolin" class="text-center" style="height:50px;width:50px"><img src="../uploads/logofinal.png" class="img-rounded"style="height:100px;width:100px" /></div>
    <br/>

    <fieldset>
     <div class="row" style="top:40px !important">
      <div class="col-md-8 col-md-offset-2">
        <div class="input-group margin-bottom-sm">

        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
        <input class="form-control" type="text" placeholder="Email address" data-toggle="tooltip" data-placement="left" title="Enter email which is registered with college" id="email" name="email">
        </div><br/>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input class="form-control" type="password" placeholder="Password"  id="password" name="password" data-toggle="tooltip" data-placement="left" title="Enter password given during email verification">
        </div><br></br>
        <div class="form-group text-center">
            <button  class="btn btn-danger"  id="quickstart-sign-in"name="signin" >
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Log In
            </button>
        </div>
        </div>
        </div>
    </fieldset>
<div class="container" id="error">


  </div>

<div style="font-family:Pangolin"class="text-center">
    or <a href="portsignup_.php">sign-up</a> for an account
</div>
<div style="font-family:Pangolin"class="text-center">
    or  <a href="portforget_.php">forgot password?</a>
</div>
      </div>

    </div>

    </div>



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