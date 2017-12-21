<?php for($i=count($res)-2;$i>=0;$i--):?>

            <div class="media ">
    <div class="media-left">
      <img src="/uploads/<?=$row8["url"]?>" class="media-object img-rounded" style="width:60px">
    </div>
    <div class="media-body">
      <a href="#"><h4 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h4></a><small><i>Posted on: </i></small><small><?=$rows9[$i]["time"]?></small>
      <h4><?=$rows9[$i]["post"]?></h4><br>
      <a><small style="font-family:Pangolin"><button class="btn btn-default buttonattr"><i  class="glyphicon glyphicon-heart fa-lg notactive" ></i> Love</button></small></a><a><small style="font-family:Pangolin"><button class="btn btn-default"><i  class="glyphicon glyphicon-sunglasses fa-lg"></i> Cool</button></small></a><a><small style="font-family:Pangolin"><button class="btn btn-default"><span class="glyphicon glyphicon-fire" style="color:red"></span> Hot</button></small></a>
         <a><small style="font-family:Pangolin"><button class="btn btn-default"><span class="glyphicon glyphicon-hand-up " style="color:blue"></span> Suppport</button></small></a>

    <div class="panel-footer"><?php echo "11"?> students<i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i>  | <?php ?>24 students <i  class="glyphicon glyphicon-sunglasses fa-lg"></i>  | <?php ?>24 students <i  class="glyphicon glyphicon-fire " style="color:red"></i>  |  24 students<right class="text-center"><span class="glyphicon glyphicon-hand-up fa-lg" style="color:blue"></span></right>
    <br>
    <div class="media">
    <div class="media-body">
     <a href="#"><h5 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h5></a>
      <form action="porthome_.php" method="post" id="usrform2" >


              <textarea  rows="1" cols="80"  placeholder="Comments" name="post1" form="usrform2"></textarea>
                <div class="text-right">
              <button type="submit"  class="btn btn-primary">Comment</button>
              </div>
              </form>
    </div>
    <div class="media-right">
      <img src="/uploads/<?=$row8["url"]?>" class="media-object" style="width:50px">
    </div>
  </div>
    </div>

    </div>

  </div>

  <hr >

    var toAdd=1;var newValue=0;
    var overall=1;
    function myhit(post,love){

    oldValue=parseInt(love);
    if(toAdd>0){
     newValue= oldValue + toAdd;
    }
    else{
     newValue=overall+toAdd;
    }
    toAdd *= -1;
     overall=newValue;
    $.post('porthome4_.php',{post1:post,love:newValue},function(info){});
    }
    function myclick(){
    $('.buttonattr').click(function(){
    $(this).find('#love').html(overall);
    $(this).find('#love').append(' students<span  class="glyphicon glyphicon-heart fa-lg "a style="color:red" ></span>');
     });
    }




 <?php endfor ?>

              var newValue=0;
              newValue= parseInt(data2) + toAdd;
            toAdd *= -1;
            data2=newValue;
            $('#love').html(newValue);



            var data3=this["post"];
           var data2=this["love"];
          var toAdd=1;
           $('#sub2').click(function(){
             var newValue=0;
              newValue= parseInt(data2) + toAdd;
            toAdd *= -1;
            data2=newValue;
            $('#love').html(newValue);
            var data1={post1:data3,love:newValue};
            $.post('porthome4_.php',data1,function(info){});
           });




           <?php for($i=count($rows10)-1;$i>=0;$i--):?>
           <?php $rows11=CS50::query("SELECT * FROM userhit WHERE user_id=? AND  bypost=?",$_SESSION["id"],$rows10[$i]["id"]);?>
             <ul class="nav navbar-nav navbar-right"><div class="text-right btn-group"><a class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span></a><ul class="dropdown-menu text-center" ><li class="text-center"> <a href="#"><span class="glyphicon glyphicon-flag"></span> Flag as inappropiate</a></li>
</form><li class="divider"></li><li class="text-center"><a href="#"> <span class="fa fa-trash-o fa-fw"></span> Delete</a></li></ul></div></ul><br>
            <div class="media ">
    <div class="media-left">
      <img src="/uploads/<?=$row8["url"]?>" class="media-object img-rounded" style="width:60px">
    </div>
    <div class="media-body">
      <a href="#"><h4 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h4></a><small><i>Posted on: </i></small><small><?=$rows10[$i]["time"]?></small>
       <div id="wordwrapWITHWidth" ><h4><?= $rows10[$i]["post"]?></h4></div><br><div id="godid"><?php if($rows11[0]["plove"]):?><button class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit('<?=$rows10[$i]['post']?>','<?=$rows10[$i]['love']?>');myclick()"><span  class="glyphicon glyphicon-heart fa-lg active1"></span> Love</button><?php else:?><button class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit('<?=$rows10[$i]['post']?>','<?=$rows10[$i]['love']?>');myclick()"><span  class="glyphicon glyphicon-heart fa-lg "></span> Love</button><?php endif?><button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</button><button class="btn btn-default buttonattr" style="font-family:Pangolin"><span class="glyphicon glyphicon-fire"></span> Hot</button>
   <button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span class="glyphicon glyphicon-hand-up " ></span> Support</button>
<div class="jumbotron" style="margin-top:-30px;font-family:Pangolin"id="wordwrapWITHWidth2"><pre id="love"><?= $rows10[$i]["love"]?> students<i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i></pre><pre><?= $rows10[$i]["cool"]?> students <i style="color:#3369e8" class="glyphicon glyphicon-sunglasses fa-lg"></i></pre><pre><?=$rows10[$i]["hot"]?> students <i style="color:red" class="glyphicon glyphicon-fire " ></i></pre><pre><?= $rows10[$i]["support"]?> students<right class="text-center"><span style="color:blue" class="glyphicon glyphicon-hand-up fa-lg" ></span></pre></right>
   <br><div class="media"><div class="media-left"> <img src="/uploads/<?=$row8["url"]?>" class="media-object img-circle" style="width:50px"></div><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h5></a>
    <form action="porthome_.php" method="post" id="usrform2" ><textarea  rows="2" cols="25"  placeholder="Comments" name="post1" form="usrform2"></textarea> </div>
   <div class="text-center"><button type="submit"  class="btn btn-primary">Comment</button></div></form></div>
   </div></div></div></div><hr>
  <?php endfor ?>























            <div id="wordwrapWITHWidth" ><h4>'+encodedMsg+'</h4></div><br><div id="godid"><button class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit(\''+this["post"]+'\',\''+this["love"]+'\');myclick()"><span  class="glyphicon glyphicon-heart fa-lg "></span> Love</button><button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</button><button class="btn btn-default buttonattr" style="font-family:Pangolin"><span class="glyphicon glyphicon-fire"></span> Hot</button>
   <button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span class="glyphicon glyphicon-hand-up " ></span> Support</button>
<div class="jumbotron" style="margin-top:-30px;font-family:Pangolin"id="wordwrapWITHWidth2"><pre id="love">'+this["love"]+' students<i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i></pre><pre>'+this["cool"]+' students <i style="color:#3369e8" class="glyphicon glyphicon-sunglasses fa-lg"></i></pre><pre>this["hot"] students <i style="color:red" class="glyphicon glyphicon-fire " ></i></pre><pre>'+this["support"]+' students<right class="text-center"><span style="color:blue" class="glyphicon glyphicon-hand-up fa-lg" ></span></pre></right>
   <br><div class="media"><div class="media-left"> <img src="/uploads/<?=$row8["url"]?>" class="media-object img-circle" style="width:50px"></div><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h5></a>
    <form action="porthome_.php" method="post" id="usrform2" ><textarea  rows="2" cols="25"  placeholder="Comments" name="post1" form="usrform2"></textarea> </div>
   <div class="text-center"><button type="submit"  class="btn btn-primary">Comment</button></div></form></div>
   </div></div></div></div></div><hr>



           <ul class="nav navbar-nav navbar-right"><div class="text-right btn-group"><a class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span></a><ul class="dropdown-menu text-center" ><li class="text-center"> <a href="#"><span class="glyphicon glyphicon-flag"></span> Flag as inappropiate</a></li>
</form><li class="divider"></li><li class="text-center"><a href="#"> <span class="fa fa-trash-o fa-fw"></span> Delete</a></li></ul></div></ul><br>









<img src="/uploads/<?=$row8["url"]?>" class="media-object img-circle" style="width:50px">







 html +='<ul class="nav navbar-nav navbar-right"><div class="text-right btn-group"><a class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span></a><ul class="dropdown-menu text-center" ><li class="text-center"> <a href="#"><span class="glyphicon glyphicon-flag"></span> Flag as inappropiate</a></li>'
+'<li class="divider"></li><li class="text-center"><a href="#"> <span class="fa fa-trash-o fa-fw"></span> Delete</a></li></ul></div></ul><br>'+'<div class="media-left"><img src="/uploads/<?=$row8["url"]?>" class="media-object img-rounded" style="width:60px;height:60px">'+
   '</div><div class="media-body"><a href="#"><h4 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h4></a><small><i>Posted on: </i></small><small><?=$rows10[$i]["time"]?></small>'+
   '<div id="wordwrapWITHWidth" ><h4></h4></div><br><div id="godid">';

    if(this["love"]){
        html +='<button class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit();myclick()"><span  class="glyphicon glyphicon-heart fa-lg active1"></span> Love</button>';
      }
    else{
     html +='<button class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit();myclick()"><span  class="glyphicon glyphicon-heart fa-lg "></span> Love</button>';
    }
   if(this["cool"]){
    html +='<button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span  class="glyphicon glyphicon-sunglasses fa-lg active2"></span> Cool</button>';
   }else{html +='<button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</button>';
   }
   if(this["hot"]){
     html +='<button class="btn btn-default buttonattr" style="font-family:Pangolin"><span class="glyphicon glyphicon-fire active1"></span> Hot</button>';
   }else{ html +='<button class="btn btn-default buttonattr" style="font-family:Pangolin"><span class="glyphicon glyphicon-fire"></span> Hot</button>';
   }
   if(this["support"]){
     html +='<button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span class="glyphicon glyphicon-hand-up active2" ></span> Support</button>';
   }else{html +='<button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span class="glyphicon glyphicon-hand-up " ></span> Support</button>';
   }

   html +='<div class="jumbotron" style="margin-top:-30px;font-family:Pangolin"id="wordwrapWITHWidth2"><pre id="love">'+this["love"]+' students<i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i></pre><pre>'+this["cool"]+'students <i style="color:#3369e8" class="glyphicon glyphicon-sunglasses fa-lg"></i></pre><pre>'+this["hot"]+' students <i style="color:red" class="glyphicon glyphicon-fire " ></i></pre><pre>'+this["support"]+'students<right class="text-center"><span style="color:blue" class="glyphicon glyphicon-hand-up fa-lg" ></span></pre></right> '+
   '<br><div class="media"><div class="media-left"> <img src="/uploads/<?=$row8["url"]?>" class="media-object img-circle" style="width:50px"></div><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h5></a>'+
   ' <form action="porthome_.php" method="post" id="usrform2" ><textarea  rows="2" cols="25"  placeholder="Comments" name="post1" form="usrform2"></textarea> </div>'+
   '<div class="text-center"><button type="submit"  class="btn btn-primary">Comment</button></div></form></div>'+
   '</div></div></div><hr>';






     var toAdd=1;var newValue=0;
     var overall=1;var pvalue=0;
     function myhit(post,id,love){

     oldValue=parseInt(love);



     if(toAdd>0){

     newValue=oldValue+toAdd;
     }
     else{

     newValue= overall + toAdd;
     }
     pvalue=pvalue+toAdd;
     toAdd*=-1;
     overall=newValue;


     $.post('porthome4_.php',{post1:post,id1:id,love:newValue,plove:pvalue},function(info){});

     }



      $('.buttonattr').click(function(){alert("inside loop");toAdd =parseInt($(this).attr("data-state"));pvalue =parseInt($(this).attr("data-pstate"));alert(toAdd);
     if(toAdd>0)
    {
        newValue=oldValue+toAdd;
    }
    else
    {
        newValue= overall + toAdd;
    }
    pvalue=pvalue+toAdd;alert('pvalue=');alert(pvalue);
    toAdd*=-1;
    overall=newValue;
         $(this).attr("data-state",toAdd);$(this).attr("data-pstate",pvalue);alert(toAdd);
         $.post('porthome4_.php',{post1:post,id1:id,love:newValue,plove:pvalue},function(info){});

    });



            function updates2(){
            $.getJSON("porthome2_.php",function(data){
            if(data.result.length!=count){
            $('#insert2').empty();
            count=data.result.length;
            var encodedMsg;
            $.each(data.result,function(){
            html='';
            html +='<button data-state="-1" data-pstate="0" class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',this);myclick()"><span  class="glyphicon glyphicon-heart fa-lg active1"></span> Love</button>';
            $('#insert2').append(html);
            });
            }
            });
            }
            function myhit(post,id,love){
            oldValue = parseInt(love);alert("loop 1");
            toAdd =parseInt($(this).attr("data-state"));pvalue =parseInt($(this).attr("data-pstate"));alert(toAdd);
            if(toAdd>0)
            {
            newValue=oldValue+toAdd;
            }
            else
            {
            newValue= overall + toAdd;
            }
            pvalue=pvalue+toAdd;alert('pvalue=');alert(pvalue);
            toAdd*=-1;
            overall=newValue;
            $(this).attr("data-state",toAdd);$(this).attr("data-pstate",pvalue);alert(toAdd);
            $.post('porthome4_.php',{post1:post,id1:id,love:newValue,plove:pvalue},function(info){});
            }









            onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\''+this+'\');myclick()"
            onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\''+this+'\');myclick()"


            myhit(data1,data2,data3,this);$(this).closest("#godid").find('#love').html(overall);
   $(this).closest("#godid").find('#love').append(' students<span  class="glyphicon glyphicon-heart fa-lg "a style="color:red" ></span>');



   $('.buttonattr').click(function(){
   });

                  myhit(data1,data2,data3,this);$(this).closest("#godid").find('#love').html(overall);
   $(this).closest("#godid").find('#love').append(' students<span  class="glyphicon glyphicon-heart fa-lg "a style="color:red" ></span>');


               function updates(){

    $.getJSON("porthome3_.php",function(data){

        $.each(data.result2,function(){

          $("#insert").append(  '<div class="media "><div class="media-left"><img src="/uploads/<?=$row8["url"]?>" class="media-object img-rounded" style="width:60px">'+
   '</div><div class="media-body"><a href="#"><h4 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h4></a><small><i>Posted on: </i></small><small>'+this["time"]+'</small>'+
   ' <div id="wordwrapWITHWidth" ><h4>'+this["post"]+'</h4></div><br><a><small style="font-family:Pangolin"><button class="btn btn-default buttonattr"><span  class="glyphicon glyphicon-heart fa-lg notactive" ></span> Love</button></small></a><a><small style="font-family:Pangolin"><button class="btn btn-default"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</button></small></a><a><small style="font-family:Pangolin"><button class="btn btn-default"><span class="glyphicon glyphicon-fire" style="color:red"></span> Hot</button></small></a>'+
   '<a><small style="font-family:Pangolin"><button class="btn btn-default"><span class="glyphicon glyphicon-hand-up " style="color:blue"></span> Suppport</button></small></a>'+
   '<div class="jumbotron"><?php echo "11"?> students<i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i>  | <?php ?>24 students <i  class="glyphicon glyphicon-sunglasses fa-lg"></i>  | <?php ?>24 students <i  class="glyphicon glyphicon-fire " style="color:red"></i>  |  24 students<right class="text-center"><span class="glyphicon glyphicon-hand-up fa-lg" style="color:blue"></span></right> '+
   '<br><div class="media"><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h5></a>'+
   ' <form action="porthome_.php" method="post" id="usrform2" ><textarea  rows="1" cols="60"  placeholder="Comments" name="post1" form="usrform2"></textarea> '+
   '<div class="text-right"><button type="submit"  class="btn btn-primary">Comment</button></div></form></div><div class="media-right"> <img src="/uploads/<?=$row8["url"]?>" class="media-object" style="width:50px">'+
   '</div></div></div></div></div><hr>');
       $('#insert').hide().fadeIn(4000);
       $("#insert").empty();
        });
      })
   }


   $('#insert2').hide().fadeIn(2000);




var list='';
        function mymodal(id){
        $.post('postname_.php',{post_id:id},function(data1){
        $.each(data1.result,function(){
        list+='<div class="modal fade" id="myModal" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
        '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
        '<h4 class="modal-title">Students who loved your post</h4>'+' </div>'+'<div class="modal-body">';
        list+='<h4 class="text-danger">'+this["finame"]+' '+this['sename']+'</h4>';
        list+='</div>'+'<div class="modal-footer">'+
        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'</div>'+
        '</div>'+'</div>'+'</div>';
        $('#insert').append(list);}),'json'
        });
        }



        <?php
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init(__DIR__ . "/../config.json");

        $result=array();
         $frows3=mysql_query("SELECT * FROM userhit WHERE plove=? AND bypost=?",1,$_POST['post_id']);
         foreach($frows3 as $frow3){
          $frow4=mysql_query("SELECT * FROM userinfopersonal WHERE user_id=? ",$frow3['user_id']);
         $frow5=mysql_query("SELECT * FROM userprof WHERE user_id=? ",$frow3['user_id']);
         array_push($result,array('finame'=>$frow4[0]['firstname'],'sename'=>$frow4[0]['secondname'],'url1'=>$frow5[0]['url']));

         }echo json_encode(array('result'=> $result));


?>
$.post('postname_.php',{post_id:this["id"]},function(data1){
                    $.each(data1.result,function(){
                      alert('thos');
                        f1name=this['finame'];
                        s1name=this['sename'];
                })
                },'json'
                );



               <div class="col-md-5">
              <div class="form-group"><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> <strong>Add Image Link:</strong><input type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here"></div>
              </div>
              <div class="col-md-2"><strong>-OR-</strong></div>
              <div class="col-md-5">
              <div class="form-group"><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> <strong>Add Video Link:</strong><input type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here"></div>
              </div>
               $('#imgsub').click(function(){
        $('#img').html('<div class="col-md-5">'+
              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:15px" ></span> Add Image Link:</strong><input type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post."></div>'+
              '</div>'+
              '<div class="col-md-2"><strong>-OR-</strong></div>'+
              '<div class="col-md-5">'+
              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:15px" ></span>  Add Video Link:</strong><input type="text" class="form-control" name="image" style="width:220px"placeholder="paste video url here" data-toggle="tooltip" data-placement="down" title="Add the video link from youtube embedded(given in share) ,if in doubt check out our videos on how to upload youtube videos in post."></div>'+
              '</div>');
    })



    <input type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">
    <input type="text" class="form-control" name="image" style="width:220px"placeholder="paste video url here" data-toggle="tooltip" data-placement="top" title="Add the video link from youtube embedded(given in share) ,if in doubt check out our videos on how to upload youtube videos in post.">


      <div class="row" id="img">
                  <div class="col-md-5">
              <div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Image Link:</strong> <textarea  rows="2" cols="25" id="textarea1" placeholder="Add image url" name="image" form="usrform"></textarea> </div>
              </div>
              <div class="col-md-2"><strong>-OR-</strong></div>
              <div class="col-md-5">
              <div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Video Link:</strong> <textarea  rows="2" cols="25" id="textarea2" placeholder="Add video url" name="image" form="usrform"></textarea></div>
              </div>
              </div>
              <textarea  rows="2" cols="25" id="textarea1" placeholder="Add image url" name="image" form="usrform"></textarea>

<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Video Link:</strong><input  form="usrform" type="text" class="form-control" name="image1" style="width:220px"placeholder="paste video url here" data-toggle="tooltip" data-placement="top" title="Add the video link from youtube embedded(given in share) ,if in doubt check out our videos on how to upload youtube videos in post.">
              </div>



 </div>










 <form action="porthome_.php" method="post" id="usrform" >

              <button class="btn btn-default"  disabled><span class="glyphicon glyphicon-pencil" style="color:black"></span> Update Status</button><small><i>Only 255 characters</i></small><br>

              <textarea  rows="2" cols="50" id="textarea" placeholder="Say something.." name="post" form="usrform"></textarea>


              <div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Image Link:</strong> <input form="usrform" id="textarea1" type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">
              </div>
              <div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Video Link:</strong> <input  form="usrform" id="textarea2" type="text" class="form-control" name="image1" style="width:220px"placeholder="paste video url here" data-toggle="tooltip" data-placement="top" title="Add the video link from youtube embedded(given in share) ,if in doubt check out our videos on how to upload youtube videos in post.">
              </div>

              <div class="text-right">
              <button type="submit" id="sub"class="btn btn-primary">POST</button>
              <button class="btn btn-default" id="imgsub"><small><span  class="glyphicon glyphicon-plus"></span></small><span class="glyphicon glyphicon-camera"></span> Add Photo/Video</button>
              </div>
              </form>


              '<form action="porthome_.php" method="post" id="usrform" >'

              '<button class="btn btn-default"  disabled><span class="glyphicon glyphicon-pencil" style="color:black"></span> Update Status</button><small><i>Only 255 characters</i></small><br>'+

              '<textarea  rows="2" cols="50" id="textarea" placeholder="Say something.." name="post" form="usrform"></textarea>'+


              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Image Link:</strong> <input form="usrform" id="textarea1" type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">'+
              '</div>'+
              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Video Link:</strong> <input  form="usrform" id="textarea2" type="text" class="form-control" name="image1" style="width:220px"placeholder="paste video url here" data-toggle="tooltip" data-placement="top" title="Add the video link from youtube embedded(given in share) ,if in doubt check out our videos on how to upload youtube videos in post.">'+
              '</div>'+

              '<div class="text-right">'+
              '<button type="submit" id="sub"class="btn btn-primary">POST</button>'+
              '<button class="btn btn-default" id="imgsub"><small><span  class="glyphicon glyphicon-plus"></span></small><span class="glyphicon glyphicon-camera"></span> Add Photo/Video</button>'+
              '</div>'+
              '</form>'










              very imp
              <div id="erase"><button class="btn btn-primary" id="imgsub"><small><span  class="glyphicon glyphicon-plus"></span></small><span class="glyphicon glyphicon-camera"></span> Add Post/Photos/Videos</button></div>



            '<div class="modal fade" id="myModal" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title">Students who loved this post</h4>'+' </div>'+'<div class="modal-body">'+
                '<div class="media "><div class="media-left"> <img src="/uploads/'+myarray2[i]+'" class="media-object img-circle" style="width:50px"></div><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8">'+myarray[i]+' '+myarray1[i]+'</h5></a>'+
               '</div>'+
               '</div><hr>'+
               '</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>';










        $('#post').html( '<form action="porthome_.php" method="post" id="usrform" >'+

              '<div   ><div class="text-center"  style="border:1px solid #3B1261;width:50%;padding:5px;border-radius:5px;color:#551A8B"><span class="glyphicon glyphicon-pencil" style="color:#551A8B"></span> Update Status</div><small style="display:inline-block"><i>Only 255 characters</i></small><br>'+

              '<textarea  rows="2" cols="40" id="textarea" wrap="off"placeholder="Say something.." name="post" form="usrform"></textarea></div><br>'+
                '<div id="inrow"><div class="form-group text-center" style="border:1px solid #3B1261;width:60%;padding:5px;border-radius:5px;color:#551A8B"><strong><span class="glyphicon glyphicon-paperclip"  style="color:#551A8B" ></span></strong> Add Image Link:'+
              '</div>'+

                '<div class="input-group text-center " >'+
                '<input type="file" class="form-control btn btn-default" name="fileToUpload" id="fileToUpload"data-toggle="tooltip" data-placement="left" title="Choose your image to upload by clicking on the choose file  button">'+
              '</div></div>'+


              '<div class="text-right">'+
              '<button type="submit" id="sub"class="btn btn-primary">POST</button>'+
              '</div>'+
              '</form>');
        $('textarea').autoResize();





         $('[data-toggle="tooltip"]').tooltip();



        '<div class="modal fade" id="myModal" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">'+
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                '<h4 class="modal-title">Students who loved this post</h4>'+' </div>'+'<div class="modal-body">'+
                '<div class="media "><div class="media-left"> <img src="/uploads/" class="media-object img-circle" style="width:50px"></div><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"></h5></a>'+
               '</div>'+
               '</div><hr>'+
               '</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>'




                <form action="porthome_.php" method="post" id="usrform" >'+

              '<div   ><div class="text-center"  style="border:1px solid #3B1261;width:50%;padding:5px;border-radius:5px;color:#551A8B"><span class="glyphicon glyphicon-pencil" style="color:#551A8B"></span> Update Status</div><small style="display:inline-block"><i>Only 255 characters</i></small><br>'+

              '<textarea  rows="2" cols="40" id="textarea" wrap="off"placeholder="Say something.." name="post" form="usrform"></textarea></div><br>'+
                '<div id="inrow"><div class="form-group text-center" style="border:1px solid #3B1261;width:60%;padding:5px;border-radius:5px;color:#551A8B"><strong><span class="glyphicon glyphicon-paperclip"  style="color:#551A8B" ></span></strong> Add Image Link:'+
              '</div>'


              '<div class="text-right">'+
              '<button type="submit" id="sub"class="btn btn-primary">POST</button>'+
              '</div>'+
              '</form>


              '<div class="input-group text-center ">'+
                '<input type="file" class="form-control btn btn-primary" name="fileToUpload" id="fileToUpload"data-toggle="tooltip" data-placement="left" title="Choose your image to upload by clicking on the choose file  button"></div>'+





                <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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

  $rows9=CS50::query("SELECT * FROM userupload WHERE user_id=?",$_SESSION["id"]);

    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];

?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-primary" style="font-family:Pangolin;color:white" href="#">Portfolio.in</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
      <ul class="nav navbar-nav">
        <li class="active"><a href="porthome.php" style="color:inherit"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li ><a href="portfolio_.php" style="color:white"><span class="glyphicon glyphicon-user"></span> MyPortfolio</a></li>

          <li ><a href="portgallery_.php" style="color:white"><span class="glyphicon glyphicon-camera"></span> Photogallery</a></li>
          <li class="dropdown">
        <a class="dropdown-toggle" style="color:white"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-heart"></span> MyCollege
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Friends Portfolio</a></li>
          <li><a href="#">Teachers Portfolio</a></li>
        </ul>
      </li>
      <li class="dropdown"style="color:inherit">
        <a class="dropdown-toggle" style="color:white"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-inbox"></span> MyBranchPost
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Assignments</a></li>
          <li><a href="#">Course Material</a></li>
        </ul>
      </li>
          <li ><a href="portgallery_.php" style="color:white"><span class="glyphicon glyphicon-star"></span> MyCollegeFest</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <div class="btn-group">
  <a class="btn btn-danger navbar-btn"  href="portfolio_.php"><i class="fa fa-user fa-fw"></i><?= $row["firstname"]?></a>
  <a class="btn btn-danger dropdown-toggle navbar-btn" data-toggle="dropdown" href="#">
    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="portedit_.php"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
    <li class="divider"></li>
    <li><a href="logout.php"><i class="fa fa-unlock"></i> Logout</a></li>
  </ul>
</div>
    </ul>

  </div>
      </div>
  </nav>




  <div class="container-fluid">
    <div class="jumbotron" style="background:white !important;border:1px solid silver;margin-top:60px">
    <div class="row">
       <div class="alert info text-center" >
  <span class="closebtn">&times;</span>
  <strong>Info!</strong> Your post is visible to everyone in NIT-Andhra(only availabe to NIT-AP students), so just be sure what you upload..FYI: Post getting less than 50 hits will be removed after 2 days.Also,only support those posts which you think worthwhile,,don't get carried away!
</div>
        <div class="col-md-3">
           <div class="thumbnail" >
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
            <div id="erase"><button class="btn btn-primary" id="imgsub"><small><span  class="glyphicon glyphicon-plus"></span></small><span class="glyphicon glyphicon-camera"></span> Add Post/Photos/Videos</button></div>


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
<script>
var html='';
  var count=0; var increment = true;var counter=0;var c=-1,array=[],array1=[],array2=[],count1=0;
  function main(){
     $('#erase').click(function(){
         $('#erase').empty();$('[data-toggle="tooltip"]').tooltip();
        $('#post').html( '<form action="porthome_.php" method="post" id="usrform" >'+

              '<button class="btn btn-default"  disabled><span class="glyphicon glyphicon-pencil" style="color:black"></span> Update Status</button><small><i>Only 255 characters</i></small><br>'+

              '<textarea  rows="2" cols="50" id="textarea" placeholder="Say something.." name="post" form="usrform"></textarea>'+


              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Image Link:</strong> <input form="usrform" id="textarea1" type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">'+
              '</div>'+
              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Video Link:</strong> <input  form="usrform" id="textarea2" type="text" class="form-control" name="image1" style="width:220px"placeholder="paste video url here" data-toggle="tooltip" data-placement="top" title="Add the video link from youtube embedded(given in share) ,if in doubt check out our videos on how to upload youtube videos in post.">'+
              '</div>'+

              '<div class="text-right">'+
              '<button type="submit" id="sub"class="btn btn-primary">POST</button>'+
              '</div>'+
              '</form>');

   $('#sub').click(function(){$.post('porthome_.php',$("#usrform").serializeArray(),function(info){$('#insert2').css('backgroundColor', 'yellow');
$('#insert2').animate({
    'opacity': '0.5'
}, 1000, function () {
    $('#insert2').css({
        'backgroundColor': '#fff',
        'opacity': '1'
    });
});});

     clearInput();
   });


   $("#usrform").submit(function(){
     return false;
   });
    });





   done();






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
            var encodedMsg;
            $.each(data.result,function(){
            array=[];array1=[];array2=[];
            html='';c++;count1=0;
            encodedMsg=$('<div />').text(this["post"]).html();

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

      html +='<ul class="nav navbar-nav navbar-right"><div class="text-right btn-group"><a class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span></a><ul class="dropdown-menu text-center" ><li class="text-center"> <a href="#"><span class="glyphicon glyphicon-flag"></span> Flag as inappropiate</a></li>'
+'<li class="divider"></li><li class="text-center"><a href="#"> <span class="fa fa-trash-o fa-fw"></span> Delete</a></li></ul></div></ul><br>'+'<div class="media-left"><img src="/uploads/'+this['url']+'" class="media-object img-rounded" style="width:60px;height:60px">'+
   '</div><div class="media-body"><a href="#"><h4 class="media-heading" style="color:#3369e8">'+toTitleCase(this['fname'])+' '+toTitleCase(this['sname'])+'<h4></a><small style="font-size:13px"><i>Posted on: </i></small><small style="font-size:13px">'+this["time"]+'</small>'+
   '<div id="wordwrapWITHWidth" ><h4>'+encodedMsg+'</h4>';

   if(this["imgpost"]!=''){
   html+='<img src="'+this["imgpost"]+'" height="400px" width="400px" alt="postimg">';
   }else{
     html+=this["videopost"];
   }


   html+='</div><br><div id="godid">';

    if(parseInt(this["plove"])){
        html +='<button data-state="-1" id="blove'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr"style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\'blove'+c+'\');myclick()"  ><span  class="glyphicon glyphicon-heart fa-lg active1" ></span> Love</button>';

    }
    else{
     html +='<button data-state="1"  id="blove'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr"style="font-family:Pangolin"  onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\'blove'+c+'\');myclick()" ><span  class="glyphicon glyphicon-heart fa-lg "></span> Love</button>';

    }
   if(parseInt(this["pcool"])){
    html +='<button data-state="-1" id="bcool'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr1" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["cool"]+'\',\'bcool'+c+'\');myclick1()"><span  class="glyphicon glyphicon-sunglasses fa-lg active2"></span> Cool</button>';
   }else{html +='<button data-state="1" id="bcool'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr1" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["cool"]+'\',\'bcool'+c+'\');myclick1()"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</button>';
   }
   if(parseInt(this["phot"])){
     html +='<button data-state="-1" id="bhot'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr2" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["hot"]+'\',\'bhot'+c+'\');myclick2()"><span class="glyphicon glyphicon-fire active1"></span> Hot</button>';
   }else{ html +='<button data-state="1" id="bhot'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr2" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["hot"]+'\',\'bhot'+c+'\');myclick2()"><span class="glyphicon glyphicon-fire"></span> Hot</button>';
   }
   if(parseInt(this["psupport"])){
     html +='<button data-state="-1" id="bsup'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr3" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["support"]+'\',\'bsup'+c+'\');myclick3()"><span class="glyphicon glyphicon-hand-up active2" ></span> Support</button>';
   }else{html +='<button data-state="1" id="bsup'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr3" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["support"]+'\',\'bsup'+c+'\');myclick3()"><span class="glyphicon glyphicon-hand-up " ></span> Support</button>';
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

    },2000);
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


       }
       <div class="modal fade" id="myModal1" role="dialog">'+'<div class="modal-dialog">'+'<div class="modal-content">
                '<div class="modal-header">'+'<button type="button" class="close" data-dismiss="modal">&times;</button>
                '<h4 class="modal-title" style="font-family:Pangolin">Post your photos</h4>'+' </div>'+'<div class="modal-body">
                '<div class="media "><div class="media-left">
              '</form><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"></h5></a>'+
               '</div>'+
               '</div>'+
               '</div>'+'<div class="modal-footer">'+
                '<button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>'+'</div>'+
                '</div>'+'</div>'+'</div>





             $('#sub1').click(function(){$.post('porthome_.php',$("#usrform").serializeArray(),function(info){

                clearInput();$("#myModal1 .close").click();

               });});

               $('#usrform').submit(function(){return false;});




<?php
     require("../includes/config.php");

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submitfile"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            //apologize( "File is an image - " . $check["mime"] . ".","portimage_.php","Error");
            $uploadOk = 1;
        } else {
            apologize( "File is not an image.","portimage_.php","Error");
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        apologize( "Sorry, file already exists.Try changing the name of your image file.","portgallery_.php","Error");
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        apologize( "Sorry, your file is too large.","portimage_.php","Error");
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        apologize( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.","portimage_.php","Error");
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        apologize( "Sorry, your file was not uploaded.","portimage_.php","Error");
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


        apologize( "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.","porthome_.php","Success");

        } else {
            apologize( "Sorry, there was an error uploading your file.","portimage_.php","Error");
        }
    }
?>
\\
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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

  $rows9=CS50::query("SELECT * FROM userupload WHERE user_id=?",$_SESSION["id"]);

    $row6=$rows6[0];
    $row=$rows[0];
    $row1=$rows1[0];
    $row2=$rows2[0];
    $row8=$rows8[0];

?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-primary" style="font-family:Pangolin;color:white" href="#">Portfolio.in</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
      <ul class="nav navbar-nav">
        <li class="active"><a href="porthome.php" style="color:inherit"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li ><a href="portfolio_.php" style="color:white"><span class="glyphicon glyphicon-user"></span> MyPortfolio</a></li>

          <li ><a href="portgallery_.php" style="color:white"><span class="glyphicon glyphicon-camera"></span> Photogallery</a></li>
          <li class="dropdown">
        <a class="dropdown-toggle" style="color:white"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-heart"></span> MyCollege
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Friends Portfolio</a></li>
          <li><a href="#">Teachers Portfolio</a></li>
        </ul>
      </li>
      <li class="dropdown"style="color:inherit">
        <a class="dropdown-toggle" style="color:white"data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-inbox"></span> MyBranchPost
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Assignments</a></li>
          <li><a href="#">Course Material</a></li>
        </ul>
      </li>
          <li ><a href="portgallery_.php" style="color:white"><span class="glyphicon glyphicon-star"></span> MyCollegeFest</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <div class="btn-group">
  <a class="btn btn-danger navbar-btn"  href="portfolio_.php"><i class="fa fa-user fa-fw"></i><?= $row["firstname"]?></a>
  <a class="btn btn-danger dropdown-toggle navbar-btn" data-toggle="dropdown" href="#">
    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="portedit_.php"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
    <li class="divider"></li>
    <li><a href="logout.php"><i class="fa fa-unlock"></i> Logout</a></li>
  </ul>
</div>
    </ul>

  </div>
      </div>
  </nav>




  <div class="container-fluid">
    <div class="jumbotron" style="background:white !important;border:1px solid silver;margin-top:60px">
    <div class="row">
       <div class="alert info text-center" >
  <span class="closebtn">&times;</span>
  <strong>Info!</strong> Your post is visible to everyone in NIT-Andhra(only availabe to NIT-AP students), so just be sure what you upload..FYI: Post getting less than 50 hits will be removed after 2 days.Also,only support those posts which you think worthwhile,,don't get carried away!
</div>
        <div class="col-md-3">
           <div class="thumbnail" >
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
            <div id="erase"><button class="btn btn-primary" id="imgsub"><small><span  class="glyphicon glyphicon-plus"></span></small><span class="glyphicon glyphicon-camera"></span> Add Post/Photos/Videos</button></div>


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
<script>
var html='';
  var count=0; var increment = true;var counter=0;var c=-1,array=[],array1=[],array2=[],count1=0;
  function main(){
     $('#erase').click(function(){
         $('#erase').empty();$('[data-toggle="tooltip"]').tooltip();
        $('#post').html( '<form action="porthome_.php" method="post" id="usrform" >'+

              '<button class="btn btn-default"  disabled><span class="glyphicon glyphicon-pencil" style="color:black"></span> Update Status</button><small><i>Only 255 characters</i></small><br>'+

              '<textarea  rows="2" cols="50" id="textarea" placeholder="Say something.." name="post" form="usrform"></textarea>'+


              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Image Link:</strong> <input form="usrform" id="textarea1" type="text" class="form-control" name="image" style="width:220px"placeholder="paste image url here" data-toggle="tooltip" data-placement="top" title="Add the image link from any site,if in doubt check out our videos on how to upload images in post.">'+
              '</div>'+
              '<div class="form-group"><strong><span class="glyphicon glyphicon-paperclip" style="font-size:13px" ></span> Add Video Link:</strong> <input  form="usrform" id="textarea2" type="text" class="form-control" name="image1" style="width:220px"placeholder="paste video url here" data-toggle="tooltip" data-placement="top" title="Add the video link from youtube embedded(given in share) ,if in doubt check out our videos on how to upload youtube videos in post.">'+
              '</div>'+

              '<div class="text-right">'+
              '<button type="submit" id="sub"class="btn btn-primary">POST</button>'+
              '</div>'+
              '</form>');

   $('#sub').click(function(){$.post('porthome_.php',$("#usrform").serializeArray(),function(info){$('#insert2').css('backgroundColor', 'yellow');
$('#insert2').animate({
    'opacity': '0.5'
}, 1000, function () {
    $('#insert2').css({
        'backgroundColor': '#fff',
        'opacity': '1'
    });
});});

     clearInput();
   });


   $("#usrform").submit(function(){
     return false;
   });
    });





   done();






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
            var encodedMsg;
            $.each(data.result,function(){
            array=[];array1=[];array2=[];
            html='';c++;count1=0;
            encodedMsg=$('<div />').text(this["post"]).html();

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

      html +='<ul class="nav navbar-nav navbar-right"><div class="text-right btn-group"><a class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span></a><ul class="dropdown-menu text-center" ><li class="text-center"> <a href="#"><span class="glyphicon glyphicon-flag"></span> Flag as inappropiate</a></li>'
+'<li class="divider"></li><li class="text-center"><a href="#"> <span class="fa fa-trash-o fa-fw"></span> Delete</a></li></ul></div></ul><br>'+'<div class="media-left"><img src="/uploads/'+this['url']+'" class="media-object img-rounded" style="width:60px;height:60px">'+
   '</div><div class="media-body"><a href="#"><h4 class="media-heading" style="color:#3369e8">'+toTitleCase(this['fname'])+' '+toTitleCase(this['sname'])+'<h4></a><small style="font-size:13px"><i>Posted on: </i></small><small style="font-size:13px">'+this["time"]+'</small>'+
   '<div id="wordwrapWITHWidth" ><h4>'+encodedMsg+'</h4>';

   if(this["imgpost"]!=''){
   html+='<img src="'+this["imgpost"]+'" height="400px" width="400px" alt="postimg">';
   }else{
     html+=this["videopost"];
   }


   html+='</div><br><div id="godid">';

    if(parseInt(this["plove"])){
        html +='<button data-state="-1" id="blove'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr"style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\'blove'+c+'\');myclick()"  ><span  class="glyphicon glyphicon-heart fa-lg active1" ></span> Love</button>';

    }
    else{
     html +='<button data-state="1"  id="blove'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr"style="font-family:Pangolin"  onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["love"]+'\',\'blove'+c+'\');myclick()" ><span  class="glyphicon glyphicon-heart fa-lg "></span> Love</button>';

    }
   if(parseInt(this["pcool"])){
    html +='<button data-state="-1" id="bcool'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr1" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["cool"]+'\',\'bcool'+c+'\');myclick1()"><span  class="glyphicon glyphicon-sunglasses fa-lg active2"></span> Cool</button>';
   }else{html +='<button data-state="1" id="bcool'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr1" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["cool"]+'\',\'bcool'+c+'\');myclick1()"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</button>';
   }
   if(parseInt(this["phot"])){
     html +='<button data-state="-1" id="bhot'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr2" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["hot"]+'\',\'bhot'+c+'\');myclick2()"><span class="glyphicon glyphicon-fire active1"></span> Hot</button>';
   }else{ html +='<button data-state="1" id="bhot'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr2" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["hot"]+'\',\'bhot'+c+'\');myclick2()"><span class="glyphicon glyphicon-fire"></span> Hot</button>';
   }
   if(parseInt(this["psupport"])){
     html +='<button data-state="-1" id="bsup'+c+'" data-pstate="1" data-overall="0" class="btn btn-default buttonattr3" style="font-family:Pangolin" onclick="myhit1(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["support"]+'\',\'bsup'+c+'\');myclick3()"><span class="glyphicon glyphicon-hand-up active2" ></span> Support</button>';
   }else{html +='<button data-state="1" id="bsup'+c+'" data-pstate="0" data-overall="0" class="btn btn-default buttonattr3" style="font-family:Pangolin" onclick="myhit(\''+this["post"]+'\',\''+this["id"]+'\',\''+this["support"]+'\',\'bsup'+c+'\');myclick3()"><span class="glyphicon glyphicon-hand-up " ></span> Support</button>';
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

    },2000);
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




//very imp
<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Transport Phenomenon <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>
          </ul>
        </li>



         //very imp
         <div id="section2" style="border-radius:10px;padding:30px">
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section3">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41">
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section42">
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>



      //this is very imp


      if(this.responseText=='no suggestion'){
                document.getElementById("txtHint").innerHTML=this.responseText;
              }else{

                for(var i=0;i<this.responseText.length;i++){
                if((this.responseText[i]==',')||(i==(this.responseText.length-1))){
                    if(i==(this.responseText.length-1)){
                        string+=this.responseText[i];
                    }
                     myarray1[flag]=string;

                     string='';flag++;
                }
                else{
                    string+=this.responseText[i];
                }
                }

                for(var i=0;i<myarray1.length;i++){
                list+='<div class="thumbnail" ><img src="/uploads/1.jpg" class="img-circle" alt="Lights" style="width:200px;height:200px">'+
                '<div class="caption text-center"><a href="portfolio_.php"><h5>NIT-AP</h5></a><p class="title"></p>'+
                '<h4><strong  style="color:#4885ed	">'+myarray1[i]+'</strong></h4><div style="margin: 24px 0;"><a href="<?= $row3["twitter"]?>"><i class="fa fa-twitter"></i></a> '+
                ' <a href="<?= $row3["linkedin"]?>"><i class="fa fa-linkedin"></i></a> <a href="<?= $row3["facebook"]?>"> <i class="fa fa-facebook"></i></a>'+
                '</div><p><button >Check Portfolio</button></p></div> </div>';
              }
              document.getElementById("txtHint").innerHTML =list;
              }





this is portgallery






             <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css" rel="stylesheet">


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



  <!--end of navigation bar-->
  <!--start of jumbotron-->
      <div class="container">
        <br>
        <a href="portimage_.php"><button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus"></span> Add more</button></a>





    <div class="jumbotron">
      <div class="row">

         <?php foreach($rows as $row):?>



  <div class="col-md-4">

    <div class="thumbnail">

         <ul class="nav navbar-nav navbar-left">
     <div class="text-left btn-group">
   <a class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#">
    <span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu text-center" >
    <form method="post" action="portprof_.php"><!--TODO :cant hit set before selecting-->
       <li class="text-center"> <button style="font-family:Pangolin" class="btn btn-default" type="submit"value="<?=$row["imgurl"]?>"name="propic"><span class="fa fa-user fa-fw"></span> Set as profile pic</button></li>

    </form><li class="divider"></li>
    <form method="post"  action="portprof1_.php"><!--TODO :cant hit set before selecting-->
       <li class="text-center"> <button class="btn btn-default" style="font-family:Pangolin"type="submit" value="<?=$row["imgurl"]?>"name="propic"><span class="glyphicon glyphicon-th"></span> Set as head pic</button></li>

    </form>
        <li class="divider"></li>

        <form method="post"  action="portdel_.php">
         <li class="text-center"> <button class="btn btn-danger" style="font-family:Pangolin"type="submit"value="<?=$row["imgurl"]?>"name="propic1"><span class="fa fa-trash-o fa-fw"></span> Delete</button></li>

         </form>
  </ul>
     </div></ul><br><br>

      <a href="/uploads/<?= $row["imgurl"]?>" data-toggle="lightbox"  data-title="<?=$row["caption"]?>" data-footer="">
        <img src="/uploads/<?= $row["imgurl"]?>" alt="Lights" style="width:100%;height:200px" class="img-fluid"></a>
        <div class="caption">
          <p><?=$row["caption"]?></p>
        </div>

    </div>
  </div>

    <?php endforeach?>



      </div>




        </div>


       </div>
    <footer class="text-center"><hr><center>Copyright© 2017. <a href="google.com">Bookworm-</a><a href="google.com">Privacy</a></cite></footer>
  </div>



  <script>
    $('#h3').addClass('active');

</script>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>

        <!-- for documentation only -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/anchor-js/3.2.1/anchor.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
						onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
						}
                    });
                });

                //Programmatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

				// navigateTo
                $(document).on('click', '[data-toggle="lightbox"][data-gallery="navigateTo"]', function(event) {
                    event.preventDefault();

                    return $(this).ekkoLightbox({
                        onShown: function() {

							this.modal().on('click', '.modal-footer a', function(e) {

								e.preventDefault();
								this.navigateTo(2);

                            }.bind(this));

                        }
                    });
                });


                /**
                 * Documentation specific - ignore this
                 */

            });
        </script>
    </body>
    </html>













