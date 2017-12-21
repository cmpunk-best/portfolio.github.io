 <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="dist/toolkit.min.js"></script>
<!-- Documentation extras -->
<link href="/assets/css/docs.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<ul class="nav-mobile navbar-fixed-top">
  <li style="font-family:Pangolin;font-size:27px;padding-bottom:10px">Portfolio.in</li>
  <li class="menu-container">
    <input id="menu-toggle" type="checkbox">
    <label for="menu-toggle" class="menu-button">
      <svg class="icon-open"  viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
      <svg class="icon-close"  viewBox="0 0 100 100">
        <path d="M83.288 88.13c-2.114 2.112-5.575 2.112-7.69 0L53.66 66.188c-2.113-2.112-5.572-2.112-7.686 0l-21.72 21.72c-2.114 2.113-5.572 2.113-7.687 0l-4.693-4.692c-2.114-2.114-2.114-5.573 0-7.688l21.72-21.72c2.112-2.115 2.112-5.574 0-7.687L11.87 24.4c-2.114-2.113-2.114-5.57 0-7.686l4.842-4.842c2.113-2.114 5.57-2.114 7.686 0l21.72 21.72c2.114 2.113 5.572 2.113 7.688 0l21.72-21.72c2.115-2.114 5.574-2.114 7.688 0l4.695 4.695c2.112 2.113 2.112 5.57-.002 7.686l-21.72 21.72c-2.112 2.114-2.112 5.573 0 7.686L88.13 75.6c2.112 2.11 2.112 5.572 0 7.687l-4.842 4.84z"/>
      </svg>
    </label>
    <ul class="menu-sidebar">
      <li><a href="login.php">Updates|NIT-AP</a></li>
      <li><a href="portabout_.php">About Us</a></li>
      <li><a href="register.php">SignUp</a></li>
      <li>
        <input type="checkbox" id="sub-one" class="submenu-toggle">
        <label class="submenu-label" for="sub-one">Login</label>
        <div class="arrow right">&#8250;</div>
        <ul class="menu-sub">
          <li class="menu-sub-title">
            <label class="submenu-label" for="sub-one">Back</label>
            <div class="arrow left">&#8249;</div>
          </li>
          <li><a href="portlogin_.php">Login as <em>student</em></a></li>
          <li><a href="portloginteacher_.php">Login as <em>faculty</em></a></li>

        </ul>
      </li>

    </ul>
  </li>
</ul>
<div class="container-fluid" style="margin-top:10%">

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
            <img src="/uploads/mme.jpg" alt="" style="height:150px;width:100%">
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