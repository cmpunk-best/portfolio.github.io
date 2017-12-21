
 <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<script>
function myaccept(ev,id,req){

    var el=document.getElementById(id);
    el.style.visibility="hidden";
$.post("portaccept_.php",{aorr:ev,id1:req},function(info){});

}
 $('#h6').css({"background-color":"purple","color":"white"});
$('#noti').css("color","white");
</script>
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
$linkers=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND accept=?",$_SESSION["id"],1);
$linked=CS50::query("SELECT * FROM notifications WHERE reqby=? AND accept=?",$_SESSION["id"],1);

?>

  <div class="container-fluid " style="margin-top:10%">

        <div class="row">

            <div class="col-md-12">



<div class="full-size " style="background: #fff;margin-top:30px" >

<h2 class="text-center" style="font-family:Pangolin">NOTIFICATIONS: </h2>
<hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;"><br/>
<?php $notify=CS50::query("SELECT * FROM notifications WHERE reqfor=? AND accept IS NULL",$_SESSION["id"]);?>
                    <?php if(count($notify)):?>
                    <?php for($i=0;$i<count($notify);$i++):?>
                     <?php $images=CS50::query("SELECT * FROM userprof WHERE user_id=?",$notify[$i]["reqby"]);
        $links=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$notify[$i]["reqby"]);
        $name=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$notify[$i]["reqby"]);?>
                        <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid<?=$i?>">
                                                <div class="col-xs-3 col-sm-3">
                                                    <img src="/uploads/<?=$images[0]["url"]?>" alt="Los Angeles" height="100px" width="100px" class="img-responsive img-rounded" />
                                                </div>
                                                <div class="col-xs-9 col-sm-9">
                                                    <span class="name" style="font-size:15px"><?=ucwords(strtolower($name[0]["firstname"])); ?> <?=ucwords(strtolower($name[0]["secondname"]));?> wants to link with you on Portfolio.in</span><br/>
                                                    <span style="font-size:20px"><a href="<?=$links[0]["twitter"]?>" target="_blank" style="margin-right:15px"><i class="fa fa-twitter"></i></a>
                                <a href="<?=$links[0]["linkedin"]?>" target="_blank" style="margin-right:15px"><i class="fa fa-linkedin"></i></a> <a href="<?=$links[0]["facebook"]?>" target="_blank" style="margin-right:15px"> <i class="fa fa-facebook"></i></a>
                                <br/><br/><span style="font-size:18px"><button class="btn btn-success" onclick="myaccept(1,'notifyid<?=$i?>',<?= $notify[$i]["reqby"] ?>);document.location.reload(true);
"><i class="fa fa-link" aria-hidden="true"></i> Accept</button><span> </span><button class="btn btn-danger"onclick="myaccept(0,'notifyid<?=$i?>',<?= $notify[$i]["reqby"] ?>)"><i class="fa fa-chain-broken" aria-hidden="true"></i> Decline</button></span>
                                </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No new notifications for you</h4>
                    <?php endif?>
</div>
          <div id="txtHint"class="row">

      </div>


</div>

    </div></div>





 </body>
</html>

