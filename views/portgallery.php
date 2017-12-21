
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
    $('#h3').addClass('active');
function erase1(){
        $('#post').empty();
      $('#post').html('<div class="modal fade" id="myModal1" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title" style="font-family:Pangolin">Post to photogallery(Fill both forms to upload)</h4>'+' </div>'+'<div class="modal-body">'+
                '<div class="media "><div class="media-left"> <form action="uploadprof.php" method="post" id="usrform" enctype="multipart/form-data" >'+

              '<div class="input-group text-center">'+
                '<input type="file" class="form-control btn btn-default" required name="fileToUpload" id="fileToUpload"data-toggle="tooltip" data-placement="left" title="Choose your video to upload by clicking on the choose file  button"></div>'+
              '<br><div class="input-group"><strong><span class="glyphicon glyphicon-pencil" style="font-size:13px" ></span> Caption:</strong> <input  name="caption" type="text" required class="form-control"  placeholder="Write something" data-toggle="tooltip" data-placement="top" title="Image Caption">'+
              '</div>'+
              '<div class="text-right">'+
              '<button type="submit" id="sub"class="btn btn-primary">POST</button>'+
              '</div>'+
              '</form><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"></h5></a>'+
               '</div>'+
               '</div>'+
               '</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>');
                $('#sub').click(function(){
     clearInput();$("#myModal1 .close").click();

   });



  }
   function clearInput(){

      $('#textarea').val('');
      $('#textarea1').val('');
      $('#textarea2').val('');
  }

</script>
<style>
     #h1:hover,#h2:hover,#h4:hover,#h5:hover,#h6:hover,#h7:hover{
  background-color: purple;}
</style>
<script>
    function myprofpic(en){

        var val=document.getElementById(en);
        var realval=$(val).data("value");

        $.post("portprof_.php",{propic:realval},function(info){});
        window.location = "https://ide50-ece-best.cs50.io/portgallery_.php";
    }
     function myheadpic(en){

        var val=document.getElementById(en);
        var realval=$(val).data("value");

        $.post("portprof1_.php",{propic:realval},function(info){});
        window.location = "https://ide50-ece-best.cs50.io/portgallery_.php";
    }
     function delprofpic(en){

        var val=document.getElementById(en);
        var realval=$(val).data("value");

        $.post("portdel_.php",{propic1:realval},function(info){});
        window.location = "https://ide50-ece-best.cs50.io/portgallery_.php";
    }

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

  <div class="container-fluid " >

        <div class="row" style="width:96em !important">
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


          </div>
                </div>
                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->
        </div>

            <div class="col-md-9" >

          <div class="container-fluid " style="margin-top:5%">
            <div class="jumbotron " style="background: #F6F7FA;margin-top:30px;border:1px solid silver;height:60%;margin-bottom:40% !important" >

                      <div class="input-group c-search col-md-6">
                            <input autofocus type="text" class="form-control" id= "search1"placeholder="Search  your friends gallery.." onkeyup="showHint(this.value);doshow(this.value)" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
<div id="post"></div>
<p>Galleries: </p>

    <div id="know1" style="">
<?php $checker=0;?>
        <br>
        <button class="btn btn-primary" type="submit" id="sub"  data-toggle="modal" data-target="#myModal1" onclick="erase1()"><span class="glyphicon glyphicon-plus"></span> Add more</button>
      <br/><br/><div class="row">
<?php $rows=CS50::query("SELECT * FROM userupload WHERE user_id=?",$_SESSION["id"]);?>
         <?php for($i=count($rows)-1;$i>=0;$i--):?>
<div class="col-xs-18 col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="/uploads/<?= $rows[$i]["imgurl"]?>" alt="" style="width:100%;height:300px">
              <div class="caption">
                <h4><?=ucwords(strtolower($rows[$i]["caption"]));?></h4>
                <p>

        <div class="row">
            <div class="col-sm-12">

                <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown">Use image
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="cursor:pointer"><!--TODO :cant hit set before selecting-->
       <a id="setpic<?=$checker?>" onclick="myprofpic('setpic<?=$checker?>')" data-value="<?=$rows[$i]["imgurl"]?>" ><span class="fa fa-user fa-fw"></span> Set as profile pic</a>

    </li>
    <li style="cursor:pointer"><!--TODO :cant hit set before selecting-->
       <a id="setheadpic<?=$checker?>" onclick="myheadpic('setheadpic<?=$checker?>')"  data-value="<?=$rows[$i]["imgurl"]?>"><span class="glyphicon glyphicon-th"></span> Set as head pic</a>
</li>
    <li style="cursor:pointer">
         <a id="delpic<?=$checker?>" onclick="delprofpic('delpic<?=$checker?>')"  data-value="<?=$rows[$i]["imgurl"]?>"><span class="fa fa-trash-o fa-fw"></span> Delete</a>
</li>
  </ul>
</div>

         </div>

         </div>

         </p>
            </div>
          </div>
        </div>

<?php $checker++;?>
    <?php endfor?>



      </div>


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

    </div></div>
    <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

    </div>

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
        xmlhttp.open("GET", "gethint2.php?q=" + str, true);
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
        xmlhttp1.open("GET", "portgalleryall_.php?q=" + ed, true);
        xmlhttp1.send();
    }

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

