
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
 <script>
    $('#h4').css({"background-color":"purple","color":"white"});
    $('#arr1').css("color","white");
    $('#arl1').css("color","black");
    $('#colup').css({"background-color":"purple","color":"white"});
    $('#colup1').css("color","white");
</script>
  <div class="container-fluid " style="margin-top:20%">




<div class="row">
<div class="col-md-12">
<div class="full-size " style="background: #fff;margin-top:30px;height:60%" >

<h2 class="text-center" style="font-family:Pangolin">General Updates: </h2>
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
    <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'general');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>
                     <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                   <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>  </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?>
</div>
</div>
<div class="col-md-12">
<div class="full-size" style="background: #fff;margin-top:30px;height:60%;margin-bottom:40% !important" >

<h2 class="text-center" style="font-family:Pangolin">Branch Updates: </h2>
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
    <?php $branch=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]); ?>

    <?php $branchnotify=CS50::query("SELECT * FROM updates WHERE specification=?",$branch[0]["branch"]);?>
     <?php if(count($branchnotify)):?>
                    <?php for($i=0;$i<count($branchnotify);$i++):?>

                        <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <div class="col-xs-11 col-sm-11">
                                                    <?php if($branchnotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$branchnotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$branchnotify[$i]["update"]?>.[<a target="_blank"href="<?=$branchnotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div> </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No <?= $branch[0]["branch"]?> updates</h4>
                    <?php endif?>
</div>
</div>
</div>

      <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>


    </div>





 </body>
</html>
<script>
    function myreject(ev,id,req){
         var el=document.getElementById(id);
    el.style.visibility="hidden";
$.post("portreject_.php",{aorr:ev,id1:req},function(info){});

    }
</script>
