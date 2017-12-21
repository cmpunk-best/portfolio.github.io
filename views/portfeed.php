
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
    $('#h4').addClass('active');

</script>
<style>
    #h2:hover,#h3:hover,#h1:hover,#h5:hover,#h6:hover,#h7:hover{
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
          <div style="padding-left:80px;padding-right:80px"><table>
            <tr>
              <td>
                <h6><a href="portlinkers_.php">Linkers</a></h6>
              </td>
              <td>
                <h6  style="margin-left:10px">|</h6>
              </td>
              <td>
                <h6 style="margin-left:10px"> <a href="portlinkers_.php">Linked</a></h6>
              </td>

            </tr>
            <tr style="padding:-10%">
              <td>
                <h6 style="margin-left:15px"> <?=count($linkers)?> </h6>
              </td>
              <td>
                 <h6  style="margin-left:10px"></h6>
              </td>
              <td>
                <h6 style="margin-left:25px"> <?=count($linked)?></h6>
              </td>
            </tr>
          </table>
          </div>
        </div>

    </div>
          <div  class="jumbotron" style="background:white !important;margin-top:-10px;border:1px solid silver">
            About.<a>Edit</a>
            <table>
              <tr>
                <td><i class="fa fa-home fw"></i> Lives in GURGAON</td>
              </tr>
              <tr>
                <td>

                </td>
              </tr>
            </table>
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

                        <div class="input-group c-search col-md-6">
                            <input autofocus type="text" class="form-control" id= "search1"placeholder="Search  your friends porfolio.." onkeyup="showHint(this.value);doshow(this.value)" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>

<p>Suggestions: </p>
          <div class="" style="margin-top:-10px">

    <div id="know1" class="row">
        <?php $valid=CS50::query("SELECT * FROM users");
            if(count($valid)<=9 && count($valid)>1):?>
                 <?php function randomGen($min, $max, $quantity) {
                        $numbers = range($min, $max);
                        shuffle($numbers);
                        return array_slice($numbers, 0, $quantity);
                    }

                   $arrays=randomGen(1,count($valid),count($valid)-1);?>

                   <?php for($i=0;$i<count($valid)-1;$i++):?>
                               <?php if(($arrays[$i]==$_SESSION["id"])):?>

                                <?php else:?>


                             <?php foreach($valid as $validuser):?>
                               <?php if($validuser["id"]==$arrays[$i]):?>
                                    <?php        $userexist=true;?>
                                <?php else:?>
                                <?php $uservalid=false;?>
                                <?php endif?>
                        <?php endforeach?>

                          <?php if($uservalid==true):?>
                                    <?php $images=CS50::query("SELECT * FROM userprof WHERE user_id=?",$arrays[$i]);
                    $links=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$arrays[$i]);
                    $name=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$arrays[$i]);

                    $req=CS50::query("SELECT * FROM notifications WHERE reqby=?",$_SESSION["id"]);?>
                                    <ul class="list-group" id="contact-list">
                                    <li class="list-group-item">
                                                            <div class="col-xs-4 col-sm-4">
                                                                <img src="/uploads/<?=$images[0]["url"]?>" alt="Los Angeles" height="200px" width="200px" class="img-responsive img-rounded" />
                                                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <span class="name" style="font-size:20px"><?=ucwords(strtolower($name[0]["firstname"])); ?> <?=ucwords(strtolower($name[0]["secondname"]));?></span><br/>
                                <span style="font-size:20px"><a href="<?=$links[0]["twitter"]?>" target="_blank" style="margin-right:15px"><i class="fa fa-twitter"></i></a>
            <a href="<?=$links[0]["linkedin"]?>" target="_blank" style="margin-right:15px"><i class="fa fa-linkedin"></i></a> <a href="<?=$links[0]["facebook"]?>" target="_blank" style="margin-right:15px"> <i class="fa fa-facebook"></i></a>
            <br/><br/>


                                            <?php if(count($req)!=0):?>
                                            <?php if($req[$i]["accept"]==NULL):?>
                                            <p><button class="btn btn-primary btn-lg link<?=$i?>"  data-state="-1"  id="link<?=$i?>" data-pstate="1" data-overall="0" onclick="mycallback2(<?=$arrays[$i]?>,'link<?=$i?>','ltxt<?=$i?>')" style="font-size:20px"><i class="fa fa-link" aria-hidden="true"></i><span class="ltxt<?=$i?>"> Requested</span></button></p>

                                           <?php elseif($req[$i]["accept"]==0):?>
                                                <p><button class="btn btn-danger btn-lg link<?=$i?>"  data-state="-1" id="link<?=$i?>"  data-pstate="1" data-overall="0" onclick="mycallback2(<?=$arrays[$i]?>,'link<?=$i?>','ltxt<?=$i?>')" style="font-size:20px"><i class="fa fa-link" aria-hidden="true"></i><span class="ltxt<?=$i?>"> Link</span></button></p>


                                            <?php elseif($req[$i]["accept"]==1):?>
                                            <p><button class="btn btn-success btn-lg link<?=$i?>"  data-state="1" id="link<?=$i?>" data-pstate="0" data-overall="0" onclick="mycallback4()" style="font-size:20px"><i class="fa fa-check" aria-hidden="true"></i><span class="ltxt<?=$i?>"> Linked</span></button></p>

                                            <?php endif?>
                                            <?php else:?>
                                                <p><button class="btn btn-danger btn-lg link<?=$i?>"  data-state="1"  id="link<?=$i?>" data-pstate="0" data-overall="0" onclick="mycallback1(<?=$arrays[$i]?>,'link<?=$i?>','ltxt<?=$i?>')" style="font-size:20px"><i class="fa fa-link" aria-hidden="true"></i><span class="ltxt<?=$i?>"> Link</span></button></p>

                                            <?php endif?>


                                            <span style="font-size:18px"><button onclick="mycallback(<?=$arrays[$i]?>);doshow1()">Check Portfolio</button></span>
                                            </div>

                                                            <div class="clearfix"></div>
                                                        </li>
                                    </ul>
                            <?php else:?>
                            <?php endif?>
                        <?php endif?>
                   <?php endfor?>

            <?php elseif( count($valid)>9 && count($valid)>1):?>

                    <?php function randomGen($min, $max, $quantity) {
                        $numbers = range($min, $max);
                        shuffle($numbers);
                        return array_slice($numbers, 0, $quantity);
                    }

                   $arrays=randomGen(1,count($valid),9);?>

                   <?php for($i=0;$i<9;$i++):?>
                   <?php if($arrays[$i]==$_SESSION["id"]):?>

                        <?php else:?>
                        <?php foreach($valid as $validuser):?>
                               <?php if($validuser["id"]==$arrays[$i]):?>
                                    <?php        $userexist=true;?>
                                <?php else:?>
                                <?php $uservalid=false;?>
                                <?php endif?>
                        <?php endforeach?>

                          <?php if($uservalid==true):?>
                        <?php $images=CS50::query("SELECT * FROM userprof WHERE user_id=?",$arrays[$i]);
        $links=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$arrays[$i]);
        $name=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$arrays[$i]);?>
                        <ul class="list-group" id="contact-list">'
                        <li class="list-group-item">
                                                <div class="col-xs-4 col-sm-4">
                                                    <img src="/uploads/<?=$images[0]["url"]?>" alt="Los Angeles" height="200px" width="200px" class="img-responsive img-rounded" />
                                                </div>
                                                <div class="col-xs-8 col-sm-8">
                                                    <span class="name" style="font-size:20px"><?=ucwords(strtolower($name[0]["firstname"])); ?> <?=ucwords(strtolower($name[0]["secondname"]));?></span><br/>
                                                    <span style="font-size:20px"><a href="<?=$links[0]["twitter"]?>" target="_blank" style="margin-right:15px"><i class="fa fa-twitter"></i></a>
                                <a href="<?=$links[0]["linkedin"]?>" target="_blank" style="margin-right:15px"><i class="fa fa-linkedin"></i></a> <a href="<?=$links[0]["facebook"]?>" target="_blank" style="margin-right:15px"> <i class="fa fa-facebook"></i></a>
                                <br/><br/><span style="font-size:18px"><button onclick="mycallback(<?=$arrays[$i]?>);doshow1()">Check Portfolio</button></span>
                                </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php else:?>
                            <?php endif?>
                        <?php endif?>
                   <?php endfor?>
                <?php endif?>


        </div>
          <div id="txtHint"class="row">

      </div>
      <div class="row">
        <div id="waitani" style="position: absolute;top:170px;width:88px;height:85px;z-index: 999;visibility: hidden;" class="col-md-2 col-md-offset-5"><img alt="ajax_big_indicator (3K)" src="/uploads/Rolling.gif" height="80" width="80" /></div>
      </div>
      <div id="txtHint1" class="row">
        <div class="row">
        <div id="waitani1" style="position: absolute;top:170px;width:88px;height:85px;z-index: 999;visibility: hidden;" class="col-md-2 col-md-offset-5"><img alt="ajax_big_indicator (3K)" src="/uploads/Rolling.gif" height="80" width="80" /></div>
      </div>
      </div>

    </div></div></div>
     <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

    </div></div></div>
            <script>
             $("#search1").focus(function(){$("#txtHint1").hide();});
            function dostop(){
               $('#waitani').css('visibility','hidden');
            }
            function dostop1(){
               $('#waitani1').css('visibility','hidden');
            }
            var  myarray1=[]; var string='';var flag=0,list='';
function showHint(str) {
  $("#txtHint").show();$("#know1").hide();
  $("#search1").focus(function(){$("#txtHint1").hide();});
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        dostop();
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("txtHint").innerHTML=this.responseText;
                dostop();
              }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
function mycallback(ed){
  $("#txtHint1").show();$("#know1").hide();
  $('#txtHint').hide();
  if (ed.length == 0) {
        document.getElementById("txtHint1").innerHTML = "";
        return;
    } else {
        var xmlhttp1 = new XMLHttpRequest();
        xmlhttp1.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("txtHint1").innerHTML=this.responseText;
                dostop1();
              }
        };
        xmlhttp1.open("GET", "portfolioall_.php?q=" + ed, true);
        xmlhttp1.send();
    }

}
   var newValue=0;
   var overall=1;var pvalue=0,oldValue=0;var toAdd=0;
function mycallback1(ed,ev,es){
 var nel=document.getElementsByClassName(ev);
var el=document.getElementById(ev);
var esd=document.getElementsByClassName(es);
    toAdd =parseInt($(el).attr("data-state"));pvalue =parseInt($(el).attr("data-pstate"));overall =parseInt($(el).attr("data-overall"));

     if(toAdd>0)
    {
        newValue=oldValue+toAdd;

         for(var i=0;i<nel.length;i++){
        nel[i].classList.remove('btn-danger');

        nel[i].classList.add('btn-primary');
        esd[i].innerHTML=" Requested";

       }
    }
    else
    {
        newValue= overall + toAdd;
        for(var i=0;i<nel.length;i++){
               nel[i].classList.remove('btn-primary');
        nel[i].classList.add('btn-danger');
        esd[i].innerHTML=" Link";
        }
    }
    pvalue=pvalue+toAdd;
    toAdd*=-1;
    overall=newValue;

         $(el).attr("data-state",toAdd);$(el).attr("data-pstate",pvalue);$(el).attr("data-overall",overall);
    postlink(ed,pvalue);

}
function mycallback2(ed,ev,es){

var el=document.getElementById(ev);
     var nel=document.getElementsByClassName(ev);
var esd=document.getElementsByClassName(es);
    toAdd =parseInt($(el).attr("data-state"));pvalue =parseInt($(el).attr("data-pstate"));overall =parseInt($(el).attr("data-overall"));


     if(toAdd<0){

       newValue=oldValue+toAdd;
       for(var i=0;i<nel.length;i++){
        nel[i].classList.remove('btn-primary');

        nel[i].classList.add('btn-danger');
        esd[i].innerHTML=" Link";

       }
     }
     else{

       newValue= overall + toAdd;
        for(var i=0;i<nel.length;i++){
               nel[i].classList.remove('btn-danger');
        nel[i].classList.add('btn-primary');
        esd[i].innerHTML=" Requested";
        }
     }
     pvalue=pvalue+toAdd;
     toAdd*=-1;
    overall=newValue;

     $(el).attr("data-state",toAdd);$(el).attr("data-pstate",pvalue);$(el).attr("data-overall",overall);

         postlink2(ed,pvalue);



   }
function mycallback4(){
    alert("If you want to end this link please go to your linked connections.")
}
function postlink(ed,pvalue){
     $.post('portnotification_.php',{id1:parseInt(ed),plink:pvalue},function(info){});
  }
function postlink2(ed,pvalue){
    $.post('portnotification2_.php',{id1:parseInt(ed),plink:pvalue},function(info){});
}
function doshow(str){
  if(str.length==0){
    $('#waitani').css('visibility','hidden');$("#know1").show();$('#txtHint').hide();
  }
  else{
  $('#waitani').css('visibility','visible');
  }
}
function doshow1(){
  $('#waitani1').css('visibility','visible');
}
function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('page', true);
    show('loading', false);
});
</script>





 </body>
</html>

