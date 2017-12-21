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
      }       document.getElementById('quickstart-sign-in').disabled = true;
    }
    /**
     * Handles the sign up button press.
     */

    /**
     * Sends an email verification to the user.
     */


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
          else{


          }

          // [END_EXCLUDE]
        } else {
          // User is signed out.
          // [START_EXCLUDE]
            window.location = "https://ide50-ece-best.cs50.io/login.php";
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




<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title"><?= htmlspecialchars($message2) ?><h4>
        </div>
        <div class="modal-body text-danger">
          <p><?= htmlspecialchars($message) ?>.</p>
        </div>

        <div class="modal-footer">
          <button  class="btn btn-default" type="submit" id="quickstart-sign-in" name="signin">Close</button>
        </div>

      </div>

    </div>
  </div>
  </div>
  <script>
      $(document).ready(function(){

         $('#myModal').modal('show');

      });
  </script>
  </body>
  </html>
