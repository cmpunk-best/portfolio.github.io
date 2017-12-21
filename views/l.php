<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

<style>
    body.modal-open {
    overflow: visible !important;
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

  $rows9=CS50::query("SELECT * FROM userupload WHERE user_id=?",$_SESSION["id"]);

    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];

?>

<div class="container-fluid">

  <script>
    $('#h1').addClass('active');
    $('nav').addClass('navbar-fixed-top');
</script>





    <div class="jumbotron" style="background:white !important;border:1px solid silver;margin-top:60px;margin-right: 0!important;width:93em !important">
    <div class="row">
        <div class="alert info text-center" >
  <span class="closebtn">&times;</span>
  <strong>Info!</strong> Your post is visible to everyone in NIT-Andhra(only availabe to NIT-AP students), so just be sure what you upload..FYI: Post getting less than 50 hits will be removed after 2 days.Also,only support those posts which you think worthwhile,,don't get carried away!
        </div>
        <div class="col-md-3">
           <div class="thumbnail">
        <img style="opacity:1" class="img-rounded" src="/uploads/<?=$row8["headurl"]?>" alt="Los Angeles" height:"100px" >

        <div class="caption text-center">

        <img src="/uploads/<?=$row8["url"]?>" class="img-circle" alt="Lights" style="width:100px;height:100px;margin-top:-50px">
          <a href="portfolio_.php">
          <h5><strong style="font-family:Pangolin"><?=strtoupper($row["firstname"])?> <?=strtoupper($row["secondname"])?></strong></h5>
          </a>
          <h5 style="font-family:Pangolin">...<?=($row6["moto"])?></h5>

          <h5 style="font-family:Pangolin">NIT-AP</h5>
          <h6>Followers  |   Following</h6>
        </div>

    </div>
          <div  class="jumbotron" style="background:white !important;margin-top:-10px;border:1px solid silver">
            About.<a>Edit</a>
            <table>
              <tr>
                <td><i class="fa fa-home fw"></i> Lives in Andhra-Pradesh</td>

              </tr>
              <tr>
                <td>
                  <i class="fa fa-map-marker fw"></i> From <?=ucfirst(strtolower($row1["address"]))?></td>

                </td>
              </tr>
            </table>
          </div>
          </div>
          <div class="col-md-7 ">

            <div  class="jumbotron " style="background:white !important;margin-top:-10px;border:1px solid silver">

            <div id="post"></div>

            <blockquote>

            <table>
                <tr>
                    <td>
                        <div id="erase" type="submit" data-toggle="modal" data-target="#myModal1" onclick="erase()"><pre class="btn btn-default btn-lg" style="border-radius:100%;width:80px;height:80px;padding:15px"><img src="/uploads/text.png" style="height:40px;width:40px"></button></div>
                    </td>
                    <td>
                        <div type="submit" data-toggle="modal" data-target="#myModal1" onclick="erase1()"><pre class="btn btn-default btn-lg" style="border-radius:100%;width:80px;height:80px;padding:15px"><img src="/uploads/camera.jpg" style="height:40px;width:40px"></button></div>
                    </td>
                    <td>
                        <div type="submit" data-toggle="modal" data-target="#myModal1" onclick="erase2()"><pre class="btn btn-default btn-lg" style="border-radius:100%;width:80px;height:80px;padding:18px"><img src="/uploads/video.jpg" style="height:40px;width:40px"></button></div>
                    </td>
                    <td>
                        <div type="submit" data-toggle="modal" data-target="#myModal1" onclick="erase3()"><pre class="btn btn-default btn-lg" style="border-radius:100%;width:80px;height:80px;padding:15px"><img src="/uploads/link.png" style="height:40px;width:40px"></button></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="margin-left:22px;font-size:15px;font-family:Pangolin">Post</div>
                    </td>
                    <td>
                         <div style="margin-left:10px;font-size:15px;font-family:Pangolin">Photos/gifs</div>
                    </td>
                    <td>
                        <div style="margin-left:22px;font-size:15px;font-family:Pangolin">Videos</div>
                    </td>
                    <td>
                         <div style="margin-left:22px;font-size:15px;font-family:Pangolin">Links</div>
                    </td>
                </tr>
            </table>
            </blockquote>
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
    border-width: 1px;">
            <div id="insert"></div>
            <div id="insert2"></div>

      </div>
  </div>

</div></div></div>


</div>
 <div id="loading"></div>
<script>
var html='';
  var count=0; var increment = true;var counter=0;var c=-1,array=[],array1=[],array2=[],count1=0;
  function main(){


   done();
  }
  function erase(){
      $('#post').empty();

      $('#post').html(
  	'<div class="modal fade" id="myModal1" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title" style="font-family:Pangolin">Post your text</h4>'+' </div>'+'<div class="modal-body">'+
                '<div class="media "><div class="media-left"> <form action="porthome_.php" method="post" id="usrform" >'+

              '<div class="form-group"><strong><span class="glyphicon glyphicon-pencil" style="font-size:13px" ></span> Write your post:</strong> <input form="usrform" name="post" id="textarea1" type="text" class="form-control" name="image" placeholder="Write something" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">'+
              '</div>'+
              '<div class="text-right">'+
              '<button type="submit" id="sub1"class="btn btn-primary">POST</button>'+
              '</div>'+
              '</form><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"></h5></a>'+
               '</div>'+
               '</div>'+
               '</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>');
            $('#sub1').click(function(){$.post('porthome_.php',$("#usrform").serializeArray(),function(info){$('#insert2').css('backgroundColor', 'yellow');
$('#insert2').animate({
    'opacity': '0.5'
},1000, function () {
    $('#insert2').css({
        'backgroundColor': '#fff',
        'opacity': '1'
    });
});});

     clearInput();$("#myModal1 .close").click();

   });

   $('#usrform').submit(function(){return false;});



  }
    function erase1(){
        $('#post').empty();
      $('#post').html('<div class="modal fade" id="myModal1" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title" style="font-family:Pangolin">Post your photos</h4>'+' </div>'+'<div class="modal-body">'+
                '<div class="media "><div class="media-left"> <form action="upload1.php" method="post" id="usrform" enctype="multipart/form-data" >'+

              '<div class="input-group text-center">'+
                '<input type="file" class="form-control btn btn-default" name="fileToUpload" id="fileToUpload"data-toggle="tooltip" data-placement="left" title="Choose your video to upload by clicking on the choose file  button"></div>'+
              '<br><div class="input-group"><strong><span class="glyphicon glyphicon-pencil" style="font-size:13px" ></span> Caption:</strong> <input  name="caption" type="text" class="form-control"  placeholder="Write something" data-toggle="tooltip" data-placement="top" title="Image Caption">'+
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
    function erase2(){$('#post').empty();
      $('#post').html('<div class="modal fade" id="myModal1" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title" style="font-family:Pangolin">Post your video</h4>'+' </div>'+'<div class="modal-body">'+
                '<div class="media "><div class="media-left"> <form action="upload3.php" method="post" id="usrform" enctype="multipart/form-data">'+
              '<div class="input-group text-center ">'+
              '<input type="file" class="form-control btn btn-default" name="fileToUpload" id="fileToUpload" data-toggle="tooltip" data-placement="left" title="Choose your video to upload by clicking on the choose file  button"></div>'+
              '<br><div class="input-group"><strong><span class="glyphicon glyphicon-pencil" style="font-size:13px" ></span> Caption:</strong> <input form="usrform" id="textarea1" type="text" class="form-control" name="caption" placeholder="Write something" data-toggle="tooltip" data-placement="top" title="">'+
              '</div>'+
              '<div class="text-right">'+
              '<button type="submit" id="sub" class="btn btn-primary">POST</button>'+
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

    function erase3(){$('#post').empty();
      $('#post').html('<div class="modal fade" id="myModal1" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title" style="font-family:Pangolin">Post your link</h4>'+' </div>'+'<div class="modal-body">'+
                '<div class="media "><div class="media-left"> <form action="porthome_.php" method="post" id="usrform" >'+

              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add your link:</strong> <input form="usrform" id="textarea1" type="text" class="form-control" name="post1" placeholder="Write something" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">'+
              '</div>'+
              '<div class="form-group"><strong><span class="glyphicon glyphicon-pencil" style="font-size:13px" ></span> Add description for your link:</strong> <input form="usrform" name="post" id="textarea1" type="text" class="form-control" name="image" placeholder="Write something" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">'+
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

        $('#sub').click(function(){$.post('porthome_.php',$("#usrform").serializeArray(),function(info){$('#insert2').css('backgroundColor', 'yellow');
$('#insert2').animate({
    'opacity': '0.5'
},1000, function () {
    $('#insert2').css({
        'backgroundColor': '#fff',
        'opacity': '1'
    });
});});

     clearInput();$("#myModal1 .close").click();

   });

   $('#usrform').submit(function(){return false;});

    }
  function clearInput(){

      $('#textarea').val('');
      $('#textarea1').val('');
      $('#textarea2').val('');
  }
  function updates2(){

    $.getJSON("porthome2_.php",function(data){
      c=-1;counter=0;



          if(data.result.length!=count){
            $('#insert2').empty();
            count=data.result.length;
            var encodedMsg,encodedmsg2;
            $.each(data.result,function(){
            array=[];array1=[];array2=[];
            html='';c++;count1=0;
            encodedMsg=$('<div />').text(this["post"]).html();
            encodedmsg2=$('<div />').text(this["link"]).html();

            //even post
             $(".buttonattr").on("click",function(){

             $(this).find("span").toggleClass('active1');

             });
             $(".buttonattr1").on("click",function(){
             $(this).find("span").toggleClass('active2');

             });
             $(".buttonattr2").on("click",function(){
               $(this).find("span").toggleClass('active1');

             });
             $(".buttonattr3").on("click",function(){
               $(this).find("span").toggleClass('active2');

             });

             if(this['loved']!=''){
             $.each(data.result[counter].loved,function(){
                 array.push(this['finame']);array1.push(this['sename']);array2.push(this['url1']);
             });}


      html +='<ul class="nav navbar-nav navbar-right"><div class="text-right btn-group"><div class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span></div><ul class="dropdown-menu text-center" ><li class="text-center"> <a href="#"><span class="glyphicon glyphicon-flag"></span> Flag as inappropiate</a></li>'
        +'<li class="divider"></li><li class="text-center">';


        html+='<a id="delete" href="#" onclick="mydelete(\''+this['id']+'\',\''+this['user_id']+'\')"> <span class="fa fa-trash-o fa-fw"></span> Delete</a></li></ul></div></ul><br>'+'<div class="media-left"><img src="/uploads/'+this['url']+'" class="media-object img-rounded" style="width:60px;height:60px">';


        html+='</div><div class="media-body"><div><h4 class="media-heading" style="color:#3369e8"><a href="#">'+toTitleCase(this['fname'])+' '+toTitleCase(this['sname'])+'</a><h4></div><small style="font-size:13px"><i>Posted on: </i></small><small style="font-size:13px">'+this["time"]+'</small>'+
        '<div id="wordwrapWITHWidth" ><h4>'+encodedMsg+'</h4>';

   if(this["imgpost"]!=''){
   html+='<img src="/uploads/'+this["imgpost"]+'" height="400px" width="400px" alt="postimg">';
   }else if(this["videopost"]!=''){
      html+='<video width="320" height="240" controls>'+
  '<source src="uploads/'+this["videopost"]+'" type="video/mp4">'+
  'Your browser does not support the video tag.'+
'</video>';
   }
   else if (this["link"]!=''){
       html+='Link:<br><a target="_blank" href="'+this["link"]+'">'+encodedmsg2+'</a>'
   }

   html+='</div><br><div id="godid">';

    if(parseInt(this["plove"])){
        html +='<pre data-state="-1" id="blove'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr"style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\'blove'+c+'\');myclick()"  ><span  class="glyphicon glyphicon-heart fa-lg active1" ></span> Love</pre>';

    }
    else{
     html +='<pre data-state="1"  id="blove'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr"style="font-family:Pangolin"  onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\'blove'+c+'\');myclick()" ><span  class="glyphicon glyphicon-heart fa-lg "></span> Love</pre>';

    }
   if(parseInt(this["pcool"])){
    html +='<pre data-state="-1" id="bcool'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr1" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["cool"]+'\',\'bcool'+c+'\');myclick1()"><span  class="glyphicon glyphicon-sunglasses fa-lg active2"></span> Cool</pre>';
   }else{html +='<pre data-state="1" id="bcool'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr1" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["cool"]+'\',\'bcool'+c+'\');myclick1()"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</pre>';
   }
   if(parseInt(this["phot"])){
     html +='<pre data-state="-1" id="bhot'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr2" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["hot"]+'\',\'bhot'+c+'\');myclick2()"><span class="glyphicon glyphicon-fire active1"></span> Awesome</pre>';
   }else{ html +='<pre data-state="1" id="bhot'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr2" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["hot"]+'\',\'bhot'+c+'\');myclick2()"><span class="glyphicon glyphicon-fire"></span> Awesome</pre>';
   }
   if(parseInt(this["psupport"])){
     html +='<pre data-state="-1" id="bsup'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr3" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["support"]+'\',\'bsup'+c+'\');myclick3()"><span class="glyphicon glyphicon-hand-up active2" ></span> Support</pre>';
   }else{html +='<pre data-state="1" id="bsup'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr3" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["support"]+'\',\'bsup'+c+'\');myclick3()"><span class="glyphicon glyphicon-hand-up " ></span> Support</pre>';
   }


   if(this["loved"]==''){
   html +='<div class="jumbotron" style="margin-top:-30px;font-family:Pangolin"id="wordwrapWITHWidth2"><pre id="love"  >'+this["love"]+' students <i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i></pre ><pre id="cool">'+this["cool"]+' students <i style="color:#3369e8" class="glyphicon glyphicon-sunglasses fa-lg"></i></pre><pre id="hot">'+this["hot"]+' students <i style="color:red" class="glyphicon glyphicon-fire " ></i></pre><pre id="support">'+this["support"]+' students <right class="text-center"><span style="color:blue" class="glyphicon glyphicon-hand-up fa-lg" ></span></pre></right> '+
   '</div><hr>';
   }
   else{
       html +='<div class="jumbotron" style="margin-top:-30px;font-family:Pangolin"id="wordwrapWITHWidth2"><pre id="love" type="submit" data-toggle="modal" data-target="#myModal" onclick="mymodal(\''+array+'\',\''+array1+'\',\''+array2+'\')">'+this["love"]+' students <i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i></pre ><pre id="cool">'+this["cool"]+' students <i style="color:#3369e8" class="glyphicon glyphicon-sunglasses fa-lg"></i></pre><pre id="hot">'+this["hot"]+' students <i style="color:red" class="glyphicon glyphicon-fire " ></i></pre><pre id="support">'+this["support"]+' students <right class="text-center"><span style="color:blue" class="glyphicon glyphicon-hand-up fa-lg" ></span></pre></right> '+
   '</div><hr>';
   }
          $('#insert2').append(html);
            counter++;

             //odd post
            $(".buttonattr").on("click",function(){

            $(this).find("span").toggleClass('active1');

            });
            $(".buttonattr1").on("click",function(){
            $(this).find("span").toggleClass('active2');

            });
            $(".buttonattr2").on("click",function(){
            $(this).find("span").toggleClass('active1');

            });
            $(".buttonattr3").on("click",function(){
            $(this).find("span").toggleClass('active2');

             });

            });

          }
          else{

          }

          });

   }
   var newValue=0;
   var overall=1;var pvalue=0,oldValue=1;

   function mydelete(id1,useridpost){


       $('#delete').click($.post('portdelete_.php',{id:id1,id2:useridpost},function(){}));


    }


    function myhit(post,id,love,ev){

    //var el=ev.target;
    var el=document.getElementById(ev);
    oldValue = parseInt(love);
    toAdd =parseInt($(el).attr("data-state"));pvalue =parseInt($(el).attr("data-pstate"));overall =parseInt($(el).attr("data-overall"));
     if(toAdd>0)
    {
        newValue=oldValue+toAdd;
    }
    else
    {
        newValue= overall + toAdd;
    }
    pvalue=pvalue+toAdd;
    toAdd*=-1;
    overall=newValue;
         $(el).attr("data-state",toAdd);$(el).attr("data-pstate",pvalue);$(el).attr("data-overall",overall);

        if(ev[1]==='l'){
         postlove(post,id,newValue,pvalue);
        }
        else if(ev[1]==='c'){
            postcool(post,id,newValue,pvalue);
        }
        else if(ev[1]=='h'){
            posthot(post,id,newValue,pvalue);
        }
        else if(ev[1]=='s'){
            postsupport(post,id,newValue,pvalue);
        }


   }
   var pvalue1=1;var toAdd=0;
   function myhit1(post,id,love,ev){


    oldValue = parseInt(love);
     var el=document.getElementById(ev);
    oldValue = parseInt(love);
    toAdd =parseInt($(el).attr("data-state"));pvalue =parseInt($(el).attr("data-pstate"));overall =parseInt($(el).attr("data-overall"));


     if(toAdd<0){

       newValue=oldValue+toAdd;
     }
     else{

       newValue= overall + toAdd;
     }
     pvalue=pvalue+toAdd;
     toAdd*=-1;
    overall=newValue;

     $(el).attr("data-state",toAdd);$(el).attr("data-pstate",pvalue);$(el).attr("data-overall",overall);

    if(ev[1]==='l'){
         postlove(post,id,newValue,pvalue);
        }
        else if(ev[1]==='c'){
            postcool(post,id,newValue,pvalue);
        }
        else if(ev[1]=='h'){
            posthot(post,id,newValue,pvalue);
        }
        else if(ev[1]=='s'){
            postsupport(post,id,newValue,pvalue);
        }

   }
   function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}
    function myclick(){
    $('.buttonattr').click(function(){
    $(this).closest("#godid").find('#love').html(overall);
    $(this).closest("#godid").find('#love').append(' students <span  class="glyphicon glyphicon-heart fa-lg " style="color:red" ></span>');
    });
    }
    function myclick1(){
    $('.buttonattr1').click(function(){
    $(this).closest("#godid").find('#cool').html(overall);
    $(this).closest("#godid").find('#cool').append(' students <span  class="glyphicon glyphicon-sunglasses fa-lg " style="color:#3369e8" ></span>');
    });
    }
    function myclick2(){
    $('.buttonattr2').click(function(){
    $(this).closest("#godid").find('#hot').html(overall);
    $(this).closest("#godid").find('#hot').append(' students <span  class="glyphicon glyphicon-fire " style="color:red" ></span>');
    });
    }
    function myclick3(){
    $('.buttonattr3').click(function(){
    $(this).closest("#godid").find('#support').html(overall);
    $(this).closest("#godid").find('#support').append(' students <span  class="glyphicon glyphicon-hand-up fa-lg " style="color:#3369e8" ></span>');
    });
    }
    var list='';
    function mymodal(received,sename,url1){


                list+='<div class="modal fade" id="myModal" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title">Students who loved this post</h4>'+' </div>'+'<div class="modal-body">';

                 var  myarray=[],myarray1=[],myarray2=[]; var string='';var flag=0;
                for(var i=0;i<received.length;i++){
                if((received[i]==',')||(i==(received.length-1))){
                    if(i==(received.length-1)){
                        string+=received[i];
                    }
                     myarray[flag]=string;

                     string='';flag++;
                }
                else{
                    string+=received[i];
                }
                }flag=0;string='';
                for(var i=0;i<sename.length;i++){
                if((sename[i]==',')||(i==(sename.length-1))){
                    if(i==(sename.length-1)){
                        string+=sename[i];
                    }
                     myarray1[flag]=string;

                     string='';flag++;
                }
                else{
                    string+=sename[i];
                }
                }
                flag=0;string='';
                for(var i=0;i<url1.length;i++){
                if((url1[i]==',')||(i==(url1.length-1))){
                    if(i==(url1.length-1)){
                        string+=url1[i];
                    }
                     myarray2[flag]=string;

                     string='';flag++;
                }
                else{
                    string+=url1[i];
                }
                }




                for(var i=0;i<myarray.length;i++){
                list+='<div class="media "><div class="media-left"> <img src="/uploads/'+myarray2[i]+'" class="media-object img-circle" style="width:50px"></div><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8">'+myarray[i]+' '+myarray1[i]+'</h5></a>'+
               '</div>'+
               '</div><hr>';
                }

                list+='</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>';
                $('#insert').html(list);
                list='';



    }


  function postlove(post,id,newValue,pvalue){
      $.post('porthome4_.php',{post1:post,id1:id,love:newValue,plove:pvalue},function(info){});
  }
  function postcool(post,id,newValue,pvalue){
      $.post('porthome5_.php',{post1:post,id1:id,cool:newValue,pcool:pvalue},function(info){});
  }
  function posthot(post,id,newValue,pvalue){
      $.post('porthome3_.php',{post1:post,id1:id,hot:newValue,phot:pvalue},function(info){});
  }
  function postsupport(post,id,newValue,pvalue){
      $.post('porthome6_.php',{post1:post,id1:id,support:newValue,psupport:pvalue},function(info){});
  }

  function done(){

   setInterval(function(){updates2();

    },1000);
  }
  $(document).ready(main);

</script>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
</body>
</html>
