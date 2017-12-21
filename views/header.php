<!DOCTYPE html>

<html>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<link rel="icon" href="../uploads/0logofinal.png"/>
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
    <head>
<meta charset="utf-8" />
<script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>


  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script rel="stylesheet" href="/bootstrap-notify-master/bootstrap-notify.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="/uploads/favicon.ico" />
        <?php if (isset($title)): ?>
            <title>Nit portfolio: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Nit portfolio</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>
    </script>
        <style>
        .jumbotron{
            margin-top:40px;
        }
        *{
            font-family:Roboto;
        }
        .error{
            color:red;
        }
        /* .jumbotron{
             background:white !important
         }*/
         table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: collapse;
    text-align: left;
    padding: 8px;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color:white !important ;

}
.navbar{
 height:70px !important;
 margin-top:-2px;
 margin-left:-2px;


}
.navbar-default{
    background:#0575E6 !important;
    padding-top:15px !important;

}

.navbar-default .navbar-nav > .active > a,

 .navbar-default .navbar-nav > .active > a:hover,
 .navbar-default .navbar-nav > .active > a:focus {
      color: #fff !important;
      background: #004e92 !important;
 }
  .navbar-default .navbar-nav  > .dropdown >a:focus {
   color: #fff !important;
      background:purple !important;
  }
/*tr:nth-child(even) {
    background-color: #dddddd;
}*/

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #000080;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#mydiv img{
    height:300px;
    width:100%;
}
.active1{
    color:red;
}
.active2{
    color:#3369e8;
}
.active3{
  color:	#999900;
}

#wordwrapWITHWidth
{
    width:400px;
    word-wrap: break-word;
}
#wordwrapWITHWidth2
{
    width:150px;

    word-wrap: break-word;
}
#wordwrapWITHWidth3
{
    width:200px;font-size:20px;

    word-wrap: break-word;
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}
.closebtn:hover {
    color: black;
}
 pre{
     cursor:pointer;
 }

 #inrow{
     display:inline-block;
     width: 45%;
    height: 45%;
    margin: 2%;
 }
 #cen{
     margin-right:20%;
     margin-left:20%;
 }
#thumbmob {
   width: 240px;
   height: 300px;
  padding:20px;
  margin-left:12%;
  }
/*body {
padding-right:0px !important;
margin-right:0px !important;
}*/
body,
html {
  margin: 0;
  font-family: arial;
  height: 100vh;
}



.nav-mobile {
  background: #4885ed;
  color: #fff;
  padding:0;
  margin: 0;
  cursor: auto;
  font-size: 18px;
  list-style-type: none;
  box-shadow: 0 5px 5px -5px #333;
  height:45px;

}
.nav-mobile:after {
  content: "";
  display: table;
  clear: both;
}
.nav-mobile svg {
  height: 45px;
  width: 65px;
  padding: 9px;
}
.nav-mobile svg path {
  fill: #fff;
}
.nav-mobile svg.icon-close {
  display: none;
  padding: 15px;
}
.nav-mobile li {
  width: 100%;
  height: 45px;
  line-height: 46px;
  text-align:center;
  float: left;
}
#top1 {
  width: 3%;
  height: 22px;
  line-height: 46px;
  margin-left:60px;
  margin-top:1%;
  text-align:center;
  float: left;
}
.nav-mobile li a {
  display: block;
  color: #333;
  width: 100%;
  height: 100%;
  text-decoration: none;
}
.nav-mobile .menu-button {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  margin: 0;
  cursor: pointer;
  display: block;
}
.nav-mobile .menu-button:after {
  opacity: 0;
  top: 45px;
  content: "";
  width: 100vw;
  display: block;
  position: fixed;
  height: 100vh;
  background: rgba(0, 0, 0, 0.5);
  pointer-events: none;
  transition: opacity 0.2s cubic-bezier(0, 0, 0.3, 1);
  transition-delay: 0.1s;
}
.nav-mobile #menu-toggle {
  display: none;
}
.nav-mobile #menu-toggle.active ~ .menu-button .icon-close, .nav-mobile #menu-toggle:checked ~ .menu-button .icon-close {
  display: block;
}
.nav-mobile #menu-toggle.active ~ .menu-button .icon-open, .nav-mobile #menu-toggle:checked ~ .menu-button .icon-open {
  display: none;
}
.nav-mobile #menu-toggle.active ~ .menu-button:after, .nav-mobile #menu-toggle:checked ~ .menu-button:after {
  opacity: 1;
  pointer-events: auto;
  transition: opacity 0.3s cubic-bezier(0, 0, 0.3, 1);
}
.nav-mobile #menu-toggle.active ~ .menu-sidebar, .nav-mobile #menu-toggle:checked ~ .menu-sidebar {
  transform: translateX(0);
  transition: transform 0.3s cubic-bezier(0, 0, 0.3, 1);
}
.nav-mobile .menu-container {
  width: 65px;
  float: left;
  cursor: pointer;
  position: absolute;
}
.nav-mobile .menu-container .menu-sidebar {
  box-shadow: 5px 0 5px -5px #333;
  display: block;
  width: 65vw;
  bottom: 0;
  background: white;
  color: #333;
  position: fixed;
  transform: translateX(-405px);
  transition: transform 0.3s cubic-bezier(0, 0, 0.3, 1);
  top: 45px;
  z-index: 2;
  list-style-type: none;
  padding: 0;
  max-width: 400px;
}
.nav-mobile .menu-container .menu-sidebar .arrow {
  position: absolute;
  line-height: 50px;
  font-size: 32px;
  color: #555;
  top: 0;
  z-index: 0;
}
.nav-mobile .menu-container .menu-sidebar .arrow.left {
  left: 25px;
}
.nav-mobile .menu-container .menu-sidebar .arrow.right {
  right: 25px;
}
.nav-mobile .menu-container .menu-sidebar li {
  height: 55px;
  line-height: 55px;
  font-size: 16px;
  text-align: left;
  position: relative;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-left: 20px;
}
.nav-mobile .menu-container .menu-sidebar li:hover {
  background: #eee;
}
.nav-mobile .menu-container .menu-sidebar li .menu-sub {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  width: 0;
  overflow: hidden;
  background: white;
  visibility: hidden;
  transition: all 0.3s cubic-bezier(0, 0, 0.3, 1);
  border-left: 1px solid #ccc;
  list-style-type: none;
  padding: 0;
  margin: 0;
  z-index: 2;
  max-width: 400px;
}
.nav-mobile .menu-container .menu-sidebar li .menu-sub li {
  overflow: hidden;
}
.nav-mobile .menu-container .menu-sidebar li .menu-sub .menu-sub-title {
  padding-left: 50px;
}
.nav-mobile .menu-container .menu-sidebar li .submenu-label {
  cursor: pointer;
  width: 100%;
  height: 100%;
  display: block;
}
.nav-mobile .menu-container .menu-sidebar li .submenu-toggle {
  display: none;
}
.nav-mobile .menu-container .menu-sidebar li .submenu-toggle.active ~ .menu-sub, .nav-mobile .menu-container .menu-sidebar li .submenu-toggle:checked ~ .menu-sub {
  width: 65vw;
  visibility: visible;
  z-index: 1;
  transition: width 0.35s cubic-bezier(0, 0, 0.3, 1);
}



#effect {
      position: relative;
  }
  .affix {
      top: 20px;
  }
  div.col-sm-9 div {

      font-size: 28px;
  }
  #section1 {color: #000; background-color:#fff;border:1px solid black;}
  #section2 {color: #fff; background-color: #1E88E5 ;}
  #section3 {color: #fff; background-color: #ff9800;}
  #section4 {color: #fff; background-color: #00bcd4;}
  #section5 {color: #fff; background-color: #009688;}
   #section6 {color: #fff; background-color: #009688;}

  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section4, #section5, #section6, #section7  {
        margin-left: 150px;
    }
  }
#search[type=text] {
 width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png');
    background-size:20px 20px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 100% */
#search[type=text]:focus {
    width: 100%;
}
#page{
    display: none;
}
#loading {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 100;
    width: 100vw;
    height: 100vh;
    background-color: #000;
    background-image: url("https://i.imgur.com/JuU08.gif");
    background-repeat: no-repeat;
    background-position: center;
}
/*!
* bootstrap-lightbox.css v0.6.1
* Copyright 2013 Jason Butz
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/

#fullsize{
 height:100%;
    width:100%;
    top:0;
    left:0;

}
#inl{
  display:inline;
}

        </style>
       <script>
function updateOnlineStatus()
{
    /*document.getElementById("status").innerHTML = "";*/
    $('#status').css('color','#00FF00');
}

function updateOfflineStatus()
{

     $('#status').css('color','red');
}

window.addEventListener('online',  updateOnlineStatus);
window.addEventListener('offline', updateOfflineStatus);
</script>
    </head>
    <body id="slow" >




                <?php if (!empty($_SESSION["id"])): ?>
                    <?php

  $rows=CS50::query("SELECT * FROM userupload WHERE user_id=?",$_SESSION["id"]);
  $rows2=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]);
  $row2=$rows2[0];

  ?>
   <?php
  require_once '../public/Mobile-Detect/Mobile_Detect.php';
    // if user reached page via GET (as by clicking a link or via redirect)

     $detect = new Mobile_Detect;
  if($detect->isMobile()): ?>
  <?php
    $rows=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]);
    $rows1=CS50::query("SELECT * FROM userinfocontact WHERE user_id=?",$_SESSION["id"]);
    $rows2=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$_SESSION["id"]);

    $rows3=CS50::query("SELECT * FROM useredu WHERE user_id=?",$_SESSION["id"]);
    $rows4=CS50::query("SELECT * FROM userwork WHERE user_id=?",$_SESSION["id"]);

    $rows5=CS50::query("SELECT * FROM userlang WHERE user_id=?",$_SESSION["id"]);
    $rows6=CS50::query("SELECT * FROM usermoto WHERE user_id=?",$_SESSION["id"]);

    $rows7=CS50::query("SELECT * FROM userhobby WHERE user_id=?",$_SESSION["id"]);
    $rows8=CS50::query("SELECT * FROM userprof WHERE user_id=?",$_SESSION["id"]);
    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];
    ?>
  <ul class="nav-mobile navbar-fixed-top">
  <li style="font-family:Pangolin;font-size:27px;padding-bottom:10px">  <img class="img-circle" src="/uploads/<?=$row8["url"]?>" alt="Los Angeles" style="height:40px;width:40px" > Portfolio.in</li>
  <li class="menu-container">
    <input id="menu-toggle" type="checkbox">
    <label for="menu-toggle" class="menu-button">
      <svg class="icon-open"  onclick="OpenNav()"viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
      <svg class="icon-close"  onclick="CloseNav()"viewBox="0 0 100 100">
        <path d="M83.288 88.13c-2.114 2.112-5.575 2.112-7.69 0L53.66 66.188c-2.113-2.112-5.572-2.112-7.686 0l-21.72 21.72c-2.114 2.113-5.572 2.113-7.687 0l-4.693-4.692c-2.114-2.114-2.114-5.573 0-7.688l21.72-21.72c2.112-2.115 2.112-5.574 0-7.687L11.87 24.4c-2.114-2.113-2.114-5.57 0-7.686l4.842-4.842c2.113-2.114 5.57-2.114 7.686 0l21.72 21.72c2.114 2.113 5.572 2.113 7.688 0l21.72-21.72c2.115-2.114 5.574-2.114 7.688 0l4.695 4.695c2.112 2.113 2.112 5.57-.002 7.686l-21.72 21.72c-2.112 2.114-2.112 5.573 0 7.686L88.13 75.6c2.112 2.11 2.112 5.572 0 7.687l-4.842 4.84z"/>
      </svg>
    </label>
    <ul class="menu-sidebar">
      <li id="h1"> <a  href="porthome_.php" id="hmobile"><span class="glyphicon glyphicon-home"></span>  Home|Feed</a></li>
      <li id="h2"><a href="portfolio_.php"id="pmobile"><span class="glyphicon glyphicon-user"></span>  MyPortfolio</a></li>
      <li id="h3"><a href="portgallery_.php" id="gmobile"><span class="glyphicon glyphicon-camera"></span>  Photogallery</a></li>

    <?php $badge=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND accept IS NULL",$_SESSION["id"])?>
      <li id="h6"><a href="portnotifications_.php" id="noti"><i class="fa fa-bell" aria-hidden="true"></i>  Notifications <span class="badge" style="background-color:red;color:white"> <?=count($badge)?> </span></a></li>
      <li id="h4">
        <input type="checkbox" id="sub-one" class="submenu-toggle">
        <label class="submenu-label" for="sub-one"><span class="glyphicon glyphicon-heart"></span> MyCollege</label>
        <div class="arrow right" id="arr1" >&#8250;</div>
        <ul class="menu-sub">
          <li class="menu-sub-title" >
            <label class="submenu-label"  id="arl1" for="sub-one">Back</label>
            <div class="arrow left">&#8249;</div>
          </li>
          <li id="colup"><a href="portcollege_.php" id="colup1"> <em>College Updates </em></a></li>
          <li  id="ar1"><a href="portfeed_.php" id="fri" > <em>Friends Portfolio</em></a></li>
          <li><a href="#" id="fac1"> <em>Faculty Portfolio</em></a></li>

        </ul>
      </li>
      <li id="h5">
        <input type="checkbox" id="sub-two" class="submenu-toggle">
        <label class="submenu-label" for="sub-two"><span class="glyphicon glyphicon-inbox"></span> MyBranchPost</label>
        <div class="arrow right" id="arr2">&#8250;</div>
        <ul class="menu-sub">
          <li class="menu-sub-title" >
            <label class="submenu-label" id="arl2" for="sub-two">Back</label>
            <div class="arrow left" >&#8249;</div>
          </li>
          <li id="ar2"><a href="portassign_.php" id="fri2"><em>Assignments</em></a></li>
          <li id="ar21"> <a href="portsem_.php" id="fac2"><em>Course Material</em></a></li>
        </ul>
      </li>
      <li id="h7">
        <input type="checkbox" id="sub-three" class="submenu-toggle">
        <label class="submenu-label" for="sub-three" > More</label>
        <div class="arrow right" id="marrow">&#8250;</div>
        <ul class="menu-sub">
          <li class="menu-sub-title" >
            <label class="submenu-label" id="mback" for="sub-three">Back</label>
            <div class="arrow left" >&#8249;</div>
          </li>
          <li id="medit1"><a href="portedit_.php" id="medit2"><i class="fa fa-pencil" aria-hidden="true"></i> <em>Edit</em></a></li>
          <li id="mlinks1"> <a href="portlinkers_.php" id="mlinks2"><i class="fa fa-link" aria-hidden="true"></i> <em>Links</em></a></li>
          <li > <a href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i> <em>Logout</em></a></li>

        </ul>
      </li>

    </ul>
  </li>
</ul>



  <?php else:?>



<?php
    $rows=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]);
    $rows1=CS50::query("SELECT * FROM userinfocontact WHERE user_id=?",$_SESSION["id"]);
    $rows2=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$_SESSION["id"]);

    $rows3=CS50::query("SELECT * FROM useredu WHERE user_id=?",$_SESSION["id"]);
    $rows4=CS50::query("SELECT * FROM userwork WHERE user_id=?",$_SESSION["id"]);

    $rows5=CS50::query("SELECT * FROM userlang WHERE user_id=?",$_SESSION["id"]);
    $rows6=CS50::query("SELECT * FROM usermoto WHERE user_id=?",$_SESSION["id"]);

    $rows7=CS50::query("SELECT * FROM userhobby WHERE user_id=?",$_SESSION["id"]);
    $rows8=CS50::query("SELECT * FROM userprof WHERE user_id=?",$_SESSION["id"]);
    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];
    ?>


        <nav class="navbar navbar-default navbar-fixed-top" id="computer">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar" style="color:white !important"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand text-primary" style="font-family:Pangolin;color:#fff;font-size:30px" href="#">Portfolio.in</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
              <ul class="nav navbar-nav">
                <li id="h1"><a href="porthome_.php" style="font-family:Encode Sans Condensed;color:#fff"><span class="glyphicon glyphicon-home"></span> Home</a></li>


                <li id="h2"><a href="portfolio_.php" style="font-family:Encode Sans Condensed;color:#fff"><span class="glyphicon glyphicon-user"></span> MyPortfolio</a></li>

                  <li id="h3" ><a href="portgallery_.php" style="font-family:Encode Sans Condensed;color:#fff"><span class="glyphicon glyphicon-camera"></span> Photogallery</a></li>
                  <li class="dropdown" id="h4">
                <a class="dropdown-toggle" style="font-family:Encode Sans Condensed;color:#fff"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-heart"></span> MyCollege
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="portcollege_.php">College Updates</a></li>
                  <li><a href="portfeed_.php">Friends Portfolio</a></li>
                  <li><a href="#">Teachers Portfolio</a></li>
                </ul>
              </li>
              <li class="dropdown"id="h5">
                <a class="dropdown-toggle" style="font-family:Encode Sans Condensed;color:#fff"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-inbox"></span> MyBranchPost
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="portassign_.php">Assignments</a></li>
                  <li><a href="portsem_.php">Course Material</a></li>
                </ul>
              </li>
                <li  id="h6"><a href="#" style="font-family:Encode Sans Condensed;color:#fff"><span class="glyphicon glyphicon-star"></span> MyCollegeFest</a></li>
                <li id="h7"><a href="#" style="font-family:Encode Sans Condensed;color:#fff"><span class="glyphicon glyphicon-send"></span> MyPlacements</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right:3%">
               <div class="dropdown" >
  <button class="btn btn-success dropdown-toggle" style="background-color:#5cb85c;padding:8px;font-size:18px;border:1px solid green" type="button" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> <?= strtoupper($row["firstname"])?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <?php $badge=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND accept IS NULL",$_SESSION["id"])?>
    <li><a href="portnotifications_.php"><i class="fa fa-bell" aria-hidden="true"></i> Notifications <span class="badge" style="background-color:red;color:white"> <?=count($badge)?> </span></a></li>
    <li><a href="portedit_.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></li>
    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
  </ul>
</div>
            </ul>

          </div>
              </div>
          </nav>
<?php endif?>

                <?php endif ?>



