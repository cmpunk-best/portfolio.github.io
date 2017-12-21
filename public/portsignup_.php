 <?php
        
        
    require("../includes/config.php"); 
         if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("portsignup.php", ["title" => "Log In"]);
    }
        
        
        
        
        
        
        
        
        
        
    else if($_SERVER["REQUEST_METHOD"]=="POST"){
        

        if(!isset($_POST["firstname"]) || empty($_POST["firstname"])){
          //Change Box colour to Red and Placeholder to  Name required
        } else {
         // $firstname = mysqli_escape_string($conn,$_POST["firstname"]);
        }
        if(!isset($_POST["lastname"]) || empty($_POST["lastname"])){
          //Change Box colour to Red and Placeholder to  Name required
        } else {
          //$lastname = mysqli_escape_string($conn,$_POST["lastname"]);
        }
        if(!isset($_POST["email"]) || empty($_POST["email"])){
          //Change Box colour to Red and Placeholder to  Email required
        } else {
          //$email = mysqli_escape_string($conn,$_POST["email"]);
        }
        if(!isset($_POST["Password"]) || empty($_POST["Password"])){
          //Change Box colour to Red and Placeholder to  Password required

          if(!isset($_POST["Confirmation"]) || $_POST["Confirmation"] != $_POST["Password"]){
            //Change Box color to red and Placeholder to Passwords don't match
          } else {
          // $password = mysqli_escape_string($conn,$_POST["Password"]);
         }
        }
        if(!isset($_POST["year"]) || $_POST["year"]=="Select Year"){
          //Change Box colour to Red and Placeholder to Year required
        } else {
         // $year = mysqli_escape_string($conn,$_POST["year"]);
        }

        if(isset($_POST["email"])){
          if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $_POST["email"])){
           
           
            //Change Page to text asking user to visit email and verify account.
            $hash = md5(rand(0,1000)); //Random Hash for Verification
          } else  {
            //Make Box Red and Placeholder incorrect email
          }
$hash = md5(rand(0,1000));
          $row = CS50::query("INSERT IGNORE INTO users (email,hash) VALUES (?,?)", $_POST["email"],$hash);
          

          $to = $_POST["email"];
          $subject = 'SignUp Verification';
          $msg = '
          Thanks for signing up!
          Your account will be activated after Clicking the link below:
          http://localhost/verify.php?email='.$_POST["email"].'&hash='.$hash;
          $headers = 'From:noreply@nitandhra.com' . "\r\n"; // Set from headers
          require '../public/PHPMAIL/PHPMailerAutoload.php';
$redirectUri = 'https://ide50-ece-best.cs50.io/portsignup_.php';
$clientId = '711942325554-2ofu3ihpgs29sjno265aser6kof2amg2.apps.googleusercontent.com';
$clientSecret ='oA9H7tE1egz0NbJSNMEHIXez';
$mail = new PHPMailer();

//Enable SMTP debugging. 
$mail->SMTPDebug = 2;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = 'mail.smtp.2go.com';
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
 $mail->Username = 'vaibhavraj.v11@gmail.com';                 // SMTP username
$mail->Password = 'rFTLI2Z74GZX';                        
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = 'tls';                           
//Set TCP port to connect to 
$mail->Port = 2525;                                   

$mail->setFrom ('flipkart@gmail.com');
$mail->FromName = 'Full Name';

$mail->addAddress('vaibhavraj.v11@gmail.com', 'Recepient Name');

$mail->isHTML(true);
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
   }
    }
        ?>