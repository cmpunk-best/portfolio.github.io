


<?php
// Array with names
require "../includes/config.php";
$users=CS50::query("SELECT * FROM userinfopersonal");
foreach($users as $user){
    if($user["user_id"]==$_SESSION["id"]){
    $a[]='';
    }
    else{
    $a[]=ucwords(strtolower($user["user_id"]." ".$user["firstname"]." ".$user["secondname"]." ".'('.$user['branch'].')'));
    }
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
echo '<ul class="list-group" id="contact-list">';
    for($i=0;$i<count($pid);$i++){
        $images=CS50::query("SELECT * FROM userprof WHERE user_id=?",$pid[$i]);
        $links=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$pid[$i]);
        $req=CS50::query("SELECT * FROM notifications WHERE reqby=? OR reqfor=?",$_SESSION["id"],$_SESSION["id"]);
          echo    '<li class="list-group-item">
                        <div class="col-xs-4 col-sm-4">
                            <img src="/uploads/'.$images[0]["url"].'" alt="Los Angeles" height="200px" width="200px" class="img-responsive img-rounded" />
                        </div>
                        <div class="col-xs-8 col-sm-8">
                            <span class="name" style="font-size:15px">'.$namearray[$i].'</span><br/>
                            <span style="font-size:20px"><a href="'.$links[0]["twitter"].'" target="_blank" style="margin-right:15px"><i class="fa fa-twitter"></i></a>
        <a href="'.$links[0]["linkedin"].'" target="_blank" style="margin-right:15px"><i class="fa fa-linkedin"></i></a> <a href="'.$links[0]["facebook"].'" target="_blank" style="margin-right:15px"> <i class="fa fa-facebook"></i></a>
        <br/>
        ';
        if(count($req)!=0){
        if($req[$i]["accept"]==NULL){
        echo '<p><button class="btn btn-primary btn-block link'.$i.'"  data-state="-1" id="link'.$i.'" data-pstate="1" data-overall="0" onclick="mycallback2('.$pid[$i].',\'link'.$i.'\',\'ltxt'.$i.'\')" style="font-size:15px"><i class="fa fa-link" aria-hidden="true"></i><span class="ltxt'.$i.'"> Requested</span></button></p>';
        }
        else if($req[$i]["accept"]==0){
        echo '<p><button class="btn btn-danger btn-block link'.$i.'"  data-state="-1" id="link'.$i.'" data-pstate="1" data-overall="0" onclick="mycallback2('.$pid[$i].',\'link'.$i.'\',\'ltxt'.$i.'\')" style="font-size:15px"><i class="fa fa-link" aria-hidden="true"></i><span class="ltxt'.$i.'"> Requested</span></button></p>';

        }
        else if($req[$i]["accept"]==1){
        echo '<p><button class="btn btn-success btn-block link'.$i.'"  data-state="1" id="link'.$i.'" data-pstate="0" data-overall="0" onclick="mycallback4()" style="font-size:15px"><i class="fa fa-check" aria-hidden="true"></i><span class="ltxt'.$i.'"> Linked</span></button></p>';

        }}
        else{
            echo '<p><button class="btn btn-danger btn-block link'.$i.'"  data-state="1" id="link'.$i.'" data-pstate="0" data-overall="0" onclick="mycallback1('.$pid[$i].',\'link'.$i.'\',\'ltxt'.$i.'\')" style="font-size:15px"><i class="fa fa-link" aria-hidden="true"></i><span class="ltxt'.$i.'"> Link</span></button></p>';

        }
        echo '

        <span style="font-size:18px"><button onclick="mycallback('.$pid[$i].');doshow1()">Check Portfolio</button></span>
        </div>

                        <div class="clearfix"></div>
                    </li>';
         }
    echo'</ul>';
}





?>
