
  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">







<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar" ></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand text-primary text-center"  style="font-family:Pangolin;color:#fff;margin-left:80px !important;font-size:40px" href="#">Portfolio.in</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar" style="font-family:Pangolin">
      <ul class="nav navbar-nav">
            <a href="login.php"><button class="btn btn-primary navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-home"></span> Home|NIT-AP</button></a>

    </ul>
    <ul class="nav navbar-nav navbar-right">
        <a href="register.php"><button class="btn btn-default navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-user"></span> SignUp </button></a>
        <a href="portlogin_.php"><button class="btn btn-default navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-log-in"></span> Login </button></a>

        <a href="portloginteacher_.php"><button class="btn btn-danger navbar-btn"><span  aria-hidden="true"class="glyphicon glyphicon-log-in"></span> Login as teacher </button></a>

    </ul>


  </div>
      </div>
  </nav>




<div class="container-fluid">
    <div class="jumbotron" style="background:white !important;margin-top:-10px;border:1px solid silver">

        <!--start of news-->
        <h1 style="font-family:Pangolin" class="text-center">College Updates</h1>
        <div class="row">
       <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/uploads/bio.jpeg" alt="" style="height:150px;width:100%">
              <div class="caption">
                <h4>BIOTECHNOLOGY</h4>
                 <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'bio');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?>
            </div>
          </div>
        </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/uploads/chem.jpg" alt="" style="height:150px;width:100%">
              <div class="caption">
                <h4>CHEMICAL</h4>

                <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'che');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?> </div>
          </div>
        </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/uploads/civil.jpg" alt="" style="height:150px;width:100%">
              <div class="caption">
                <h4>CIVIL</h4>
                <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'civ');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?></div>
          </div>
        </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="https://cdn-images-1.medium.com/max/1920/1*vXjx4Y7EgQBwALkaeZJ0Cg.jpeg" alt="" style="height:150px;width:100%">
              <div class="caption">
                <h4>COMPUTER SCIENCE</h4>
                <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'cse');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?> </div></div>
          </div>
</div>
    <div class="row">
      <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/uploads/eee.jpg" alt="" style="height:150px;width:100%">
              <div class="caption">
                <h4>ELECTRICAL AND ELECTRONICS</h4>
                <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'eee');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?> </div> </div>
          </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="/uploads/ece.jpg" alt="" style="height:150px;width:100%">

              <div class="caption">
                <h4>ELECTRONICS AND COMMUNICATION</h4>
                <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'ece');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?> </div></div>
          </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="http://cdn.wallpapersafari.com/66/1/g9PoGm.jpg" alt="" style="height:150px;width:100%">
              <div class="caption">
                <h4>MECHANICAL</h4>
                <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'mec');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?> </div> </div>
          </div>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="http://www.leica-microsystems.com/uploads/tx_templavoila/metallurgy_04.jpg" alt="" style="height:150px;width:100%">
              <div class="caption">
                <h4>METALLURGY AND MATERIAL SCIENCE</h4>
                <?php $gennotify=CS50::query("SELECT * FROM updates WHERE specification=?",'mme');?>
                    <?php if(count($gennotify)):?>
                    <?php for($i=0;$i<count($gennotify);$i++):?>

                       <ul class="list-group" id="contact-list">
                        <li class="list-group-item" id= "notifyid1<?=$i?>">
                                                <div class="col-xs-1 col-sm-1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-11 col-sm-11">
                                                    <?php if($gennotify[$i]["pdf"]==''):?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.<span><br/>
                                                    <?php else:?>
                                                    <span class="name" style="font-size:15px"> <?=$gennotify[$i]["update"]?>.[<a target="_blank"href="<?=$gennotify[$i]["pdf"]?>"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>]<span><br/>

                                                    <?php endif?>
                                                     </div>

                                                <div class="clearfix"></div>
                                            </li>
                        </ul>
                        <?php endfor?>
                    <?php else: ?>
                    <h4>No college notification</h4>
                    <?php endif?> </div></div>
        </div>
    </div>

    </div>
    <!--end of jumbo-->
</div>
 <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>

    <div id="google_translate_element" class="text-center"></div>
    <script type="text/javascript">
      function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
          }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>
</div>
</body>
</html>