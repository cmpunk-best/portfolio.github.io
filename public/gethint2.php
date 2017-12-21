


<?php
// Array with names
require "../includes/config.php";
$gallerylinkers=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND accept=?",$_SESSION["id"],1);
$gallerylinked=CS50::query("SELECT * FROM notifications WHERE reqby=? AND accept=?",$_SESSION["id"],1);

for($i=0;$i<(count($gallerylinkers)+count($gallerylinked));$i++){
if(count($gallerylinkers)){
    $userid=$gallerylinkers[$i]["reqby"];
    $users=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$userid);
    foreach($users as $user){
    $a[]=ucwords(strtolower($user["user_id"]." ".$user["firstname"]." ".$user["secondname"]." ".'('.$user['branch'].')'));
    }
    }
    if(count($gallerylinked)){
     $userid=$gallerylinked[$i]["reqfor"];
    $users=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$userid);
    foreach($users as $user){
    $a[]=ucwords(strtolower($user["user_id"]." ".$user["firstname"]." ".$user["secondname"]." ".'('.$user['branch'].')'));
    }
}

    $a[]='';

}
// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);

    foreach($a as $name) {

        if (stristr($name, $q) ){
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ",$name";
            }
        }
    }
}

$string='';$namearray=[];$flag=0;$flew=0;$pidstring='';
for($i=0;$i<strlen($hint);$i++){
    if(is_numeric($hint[$i]))
    {   $pidstring='';
        while(is_numeric($hint[$i])){
            $pidstring.=$hint[$i];
            $i++;
        }
        $pid[$flew]=$pidstring;
        $flew++;
    }
    else if(($hint[$i]==',')||($i==(strlen($hint)-1))){
        if($i==(strlen($hint)-1)){
            $string.=$hint[$i];
        }
        $namearray[$flag]=$string;
        $string='';$flag++;
    }
    else{
        $string.=$hint[$i];
    }
}


//$ids=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$pid);

// Output "no suggestion" if no hint was found or output correct values
if($hint === ""){$hint= "No Suggestions"; echo $hint;}
else{

    for($i=0;$i<count($pid);$i++){
        $images=CS50::query("SELECT * FROM userprof WHERE user_id=?",$pid[$i]);
        $links=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$pid[$i]);
        $req=CS50::query("SELECT * FROM notifications WHERE reqby=?",$_SESSION["id"]);
        echo '<div  class="col-md-4"  ><div class="thumbnail" style="background-color:white" ><img src="/uploads/'.$images[0]["url"].'" class="" alt="Lights" style="width:100%;height:230px">
        <div class="caption text-center"><p class="title"></p>
        <h4><strong  style="color:#4885ed	">'.$namearray[$i].'</strong></h4><div style="margin: 24px 0;"><a href="'.$links[0]["twitter"].'" style="margin-right:10px"><i class="fa fa-twitter"></i></a>
        <a href="'.$links[0]["linkedin"].'" style="margin-right:10px" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="'.$links[0]["facebook"].'" target="_blank" style="margin-right:10px"> <i class="fa fa-facebook"></i></a>
        </div>';

        echo '<br/><p><button onclick="mycallback('.$pid[$i].');doshow1()">Check PhotoGallery</button></p></div> </div></div>';
    }

}



?>