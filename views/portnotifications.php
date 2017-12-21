
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
</script>
<style>
  #h1:hover,#h2:hover,#h3:hover,#h4:hover,#h5:hover,#h6:hover,#h7:hover{
  background-color: purple;
}
</style>
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

  <div class="container-fluid ">

        <div class="row">
        <div class="col-md-3" >
            <div class="sidebar-nav-fixed affix" style="margin-top:5%">
                <div class="" style="width:28em">
                    <div class="col-md-10">
           <div class="thumbnail" >
              <div id="mydiv"class="item active" style="width:100%;height:300px" >
        <img  style="opacity:1" class="img-rounded" src="/uploads/<?=$row8["headurl"]?>" alt="Los Angeles" style="width:100%;height:300px;">

      </div>
        <div class="caption text-center">

        <img src="/uploads/<?=$row8["url"]?>" class="img-circle" alt="Lights" style="width:100px;height:100px;margin-top:-50px">
          <a href="portfolio_.php">
          <h5><strong style="font-family:Pangolin"><?=strtoupper($row["firstname"])?> <?=strtoupper($row["secondname"])?></strong></h5>
          </a>
          <h5 style="font-family:Pangolin">...<?=($row6["moto"])?> </h5>

          <h5 style="font-family:Pangolin">NIT-AP</h5>
        </div>

    </div>

          </div>
                </div>
                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->
        </div>

            <div class="col-md-9">

          <div class="container-fluid " style="margin-top:5%">
            <div class="jumbotron " style="background: #F6F7FA;margin-top:30px;border:1px solid silver;height:60%;margin-bottom:40% !important" >


<div class="jumbotron " style="background: #fff;margin-top:30px;border:1px solid silver;height:60%;margin-bottom:40% !important" >

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
                                                    <a href="portfeed_.php"><h4>Check his/her portfolio in friends portfolio.</h4></a>
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
                    <h4>No new notification for you</h4>
                    <?php endif?>
</div>
          <div id="txtHint"class="row">

      </div>


    </div></div>  <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>
</div>

    </div></div>





 </body>
</html>

