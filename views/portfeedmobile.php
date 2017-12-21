
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
    $('#h4').css({"background-color":"purple","color":"white"});
    $('#arr1').css("color","white");
    $('#arl1').css("color","black");
    $('#ar1').css({"background-color":"purple","color":"white"});
    $('#fri').css("color","white");
</script>

  <div class="container-fluid ">
    <div class="fullsize"  style=" background-repeat: no-repeat;margin-top:30px;margin-top:20%">
    <div class="row">

                    <div class="col-xs-11  col-sm-offset-1">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="search1"placeholder="Search  your friends porfolio.." onkeyup="showHint(this.value);doshow(this.value)" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>



            <div class="col-sm-12">

          <div class="container-fluid ">

<p style="color:purple">Suggestions: </p>
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
      <div class="row">
        <div id="waitani" style="position: fixed;top:60%;width:65px;height:35px;z-index: 999;margin-left:31%;visibility: hidden;" class="col-md-2 col-md-offset-5 col-sm-5 col-sm-offset-2"><img alt="ajax_big_indicator (3K)" src="/uploads/Rolling.gif" height="50" width="50" /></div>
      </div>
      <div id="txtHint1" class="row">
        <div class="row">
        <div id="waitani1" style="position: fixed;top:60%;width:65px;height:35px;z-index: 999;margin-left:31%;visibility: hidden;" class="col-md-2 col-md-offset-5 col-sm-5 col-sm-offset-2"><img alt="ajax_big_indicator (3K)" src="/uploads/Rolling.gif" height="50" width="50" /></div>
      </div>
      </div>
    <div id="txtHint"class="row">

      </div>
    </div>
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
        xmlhttp.open("GET", "gethint1.php?q=" + str, true);
        xmlhttp.send();
    }
}
function mycallback(ed){
  $("#txtHint1").show();$('#know1').hide();
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
        xmlhttp1.open("GET", "portfolioall2_.php?q=" + ed, true);
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
    $('#waitani').css('visibility','hidden');$('#know1').show();$('#txtHint').hide();
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

            </div>
    </div>
    </div>
    </div>



 </div>

 </body>
</html>
