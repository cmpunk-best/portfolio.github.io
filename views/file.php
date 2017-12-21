
<ul class="nav navbar-nav navbar-right"><div class="text-right btn-group"><a class="btn btn-default dropdown-toggle" style="height:25px" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal" title="Toggle dropdown menu"></span></a><ul class="dropdown-menu text-center" ><li class="text-center"> <a href="#"><span class="glyphicon glyphicon-flag"></span> Flag as inappropiate</a></li>'
+'</form><li class="divider"></li><li class="text-center"><a href="#"> <span class="fa fa-trash-o fa-fw"></span> Delete</a></li></ul></div></ul><br>'    +'<div class="media-left"><img src="/uploads/<?=$row8["url"]?>" class="media-object img-rounded" style="width:60px;height:60px">'+
   '</div><div class="media-body"><a href="#"><h4 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h4></a><small><i>Posted on: </i></small><small>'+this["time"]+'</small>'+
   ' <div id="wordwrapWITHWidth" ><h4>'+encodedMsg+'</h4></div><br><div id="godid"><?php  $rows10=CS50::query("SELECT * FROM userhit WHERE user_id=? AND post=? ",$_SESSION["id"],$_POST["post"]);?><?php if($rows10[0]["plove"]):?><button class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit(\''+this["post"]+'\',\''+this["love"]+'\');myclick()"><span  class="glyphicon glyphicon-heart fa-lg active1"></span> Love</button><?php else:?><button class="btn btn-default buttonattr"style="font-family:Pangolin"   onclick="myhit(\''+this["post"]+'\',\''+this["love"]+'\');myclick()"><span  class="glyphicon glyphicon-heart fa-lg "></span> Love</button><?php endif?><button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span  class="glyphicon glyphicon-sunglasses fa-lg"></span> Cool</button><button class="btn btn-default buttonattr" style="font-family:Pangolin"><span class="glyphicon glyphicon-fire"></span> Hot</button>'+
   '<button class="btn btn-default buttonattr1" style="font-family:Pangolin"><span class="glyphicon glyphicon-hand-up " ></span> Support</button>'+
   '<div class="jumbotron" style="margin-top:-30px;font-family:Pangolin"id="wordwrapWITHWidth2"><pre id="love">'+this["love"]+' students<i  class="glyphicon glyphicon-heart fa-lg" style="color:red"></i></pre><pre>'+this["cool"]+' students <i style="color:#3369e8" class="glyphicon glyphicon-sunglasses fa-lg"></i></pre><pre>'+this["hot"]+' students <i style="color:red" class="glyphicon glyphicon-fire " ></i></pre><pre>'+this["support"]+' students<right class="text-center"><span style="color:blue" class="glyphicon glyphicon-hand-up fa-lg" ></span></pre></right> '+
   '<br><div class="media"><div class="media-left"> <img src="/uploads/<?=$row8["url"]?>" class="media-object img-circle" style="width:50px"></div><div class="media-body"> <a href="#"><h5 class="media-heading" style="color:#3369e8"><?= ucfirst(strtolower($row["firstname"]))?> <?= ucfirst(strtolower($row["secondname"]))?></h5></a>'+
   ' <form action="porthome_.php" method="post" id="usrform2" ><textarea  rows="2" cols="25"  placeholder="Comments" name="post1" form="usrform2"></textarea> </div>'+
   '<div class="text-center"><button type="submit"  class="btn btn-primary">Comment</button></div></form></div>'+
   '</div></div></div></div></div><hr>










   <div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img_woods_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img_fjords_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img_mountains_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_fjords.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
    </div>
  </div>
</div>
