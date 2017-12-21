 <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

<script>
    $('#h7').css({"background-color":"purple","color":"white"});
$('#marrow').css("color","white");
    $('#mback').css("color","black");
    $('#medit1').css({"background-color":"purple","color":"white"});
    $('#medit2').css("color","white");
</script>
 <?php $rows=CS50::query("SELECT * FROM userinfopersonal WHERE user_id=?",$_SESSION["id"]);
        $rows1=CS50::query("SELECT * FROM userinfocontact WHERE user_id=?",$_SESSION["id"]);
        $rows3=CS50::query("SELECT * FROM userinfolink WHERE user_id=?",$_SESSION["id"]);
        $rows4=CS50::query("SELECT * FROM useredu WHERE user_id=?",$_SESSION["id"]);

        $rows5=CS50::query("SELECT * FROM userwork WHERE user_id=?",$_SESSION["id"]);
        $rows6=CS50::query("SELECT * FROM userlang WHERE user_id=?",$_SESSION["id"]);

        $rows7=CS50::query("SELECT * FROM userhobby WHERE user_id=?",$_SESSION["id"]);

        $rows8=CS50::query("SELECT * FROM usermoto WHERE user_id=?",$_SESSION["id"]);

        $rows9=CS50::query("SELECT * FROM userprof WHERE user_id=?",$_SESSION["id"]);
        $row=$rows[0];
        $row1=$rows1[0];
        $row3=$rows3[0];
        $row8=$rows8[0];
        $row9=$rows9[0];
        ?>

  <div class="container-fluid" style="margin-top:10%">
    <div class="row">

          <div class="col-md-12" style="margin-top:6%">

          <!--start-->



          <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" style="font-size:10px">PERSONAL</a></li>
    <li ><a data-toggle="tab" href="#menu1" style="font-size:10px">CONTACT</a></li>
    <li ><a data-toggle="tab" href="#menu3" style="font-size:10px">LINKS</a></li>

    <li ><a data-toggle="tab" href="#menu4" style="font-size:10px">MOTO</a></li>
    <li ><a data-toggle="tab" href="#menu5" style="font-size:10px">EDUCATION</a></li>
    <li ><a data-toggle="tab" href="#menu6"style="font-size:10px">WORK/ INTERN/ EXPERIENCE</a></li>
    <li ><a data-toggle="tab" href="#menu7" style="font-size:10px">SOFTWARES/ LANGUAGES</a></li>
    <li ><a data-toggle="tab" href="#menu8" style="font-size:10px">TOPICS</a></li>
  </ul>


    <div class="tab-content">

      <div id="home" class="tab-pane fade in active">


    <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
         <div class="text-left">
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="portpersonal_.php" id="demo" method="post">
    <fieldset>



        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto">
                            <div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
         <input type="radio" name="reveal1" value="public" checked>Keep it Public<br>
  <input type="radio" name="reveal1" value="private"> Keep it Private<br>
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div><h4><strong style="font-family:Roboto">PERSONAL:</strong></h4></td>

                      </tr>

                      </table><br>
        <div class="form-group">
            <input autocomplete="off" required pattern="[A-Za-z]{3}" autofocus class="form-control" value="<?= strtoupper($row["firstname"]) ?>" name="firstname" placeholder="First-Name" type="text" />
        </div>
            <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" value="<?= strtoupper($row["secondname"]) ?>" name="secondname" placeholder="Second-Name" type="text" />
        </div>
            <div class="form-group" style="font-family:Pangolin">
      <label for="year" >Select year (select one):</label>
      <select  class="form-control" id="year" name="year" >
        <?php
        for($i=1;$i<=3;$i++):?>
        <?php if($i==($row["year"])):?>
        <option selected ><?= $i.' '.'Year';?></option>
        <?php else:?>
        <option><?= $i.' '.'Year';?></option>
        <?php endif?>
        <?php endfor?>
      </select>

      </div>


      <div class="form-group"><label for="Date1" >Birthday:</label><input name="Date" class="form-control" placeholder="Birthday" id="Date1" value="<?= $row["day"]?>" readonly="readonly" /></div>



        <?php if("male"==$row["Gender"]):?>

            <input class="text-left" type="radio" name="gender" value="male"checked > Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <?php else:?>
  <input class="text-left" type="radio" name="gender" value="male" > Male<br>
  <input type="radio" name="gender" value="female"checked> Female<br>
  <?php endif?>
  <div class="form-group" style="font-family:Pangolin">
      <label for="relation" >Relationship:</label>
      <select class="form-control" id="relation"name="relationship">

        <?php if("Single"==$row["relation"]):?>
        <option value="Single" selected>Single</option>
        <?php else:?>
        <option value="Single" >Single</option>
        <?php endif?>
        <?php if("In a relationship"==$row["relation"]):?>
        <option value="In a relationship" selected>In a relationship</option>
        <?php else:?>
        <option value="In a relationship" >In a relationship</option>
        <?php endif?>
        <?php if("Married"==$row["relation"]):?>
        <option value="Married" selected>Married</option>
        <?php else:?>
        <option value="Married">Married</option>
        <?php endif?>
        <?php if("Its complicated"==$row["relation"]):?>
        <option value="Its complicated" selected>Its complicated</option>
        <?php else:?>
        <option value="Its complicated">Its complicated</option>
        <?php endif?>
      </select>

      </div>
              <div class="form-group" style="font-family:Pangolin">
      <label for="year" >Nationality:</label>
      <select class="form-control" id="year" name="country">
        <option>Indian</option>
        <option>Foreign</option>

      </select>

            </select>

      </div>



         <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
        <div class="panel-footer" ><center><small style="font-family:Roboto">You can save your changes using Save.If you tired of editing ,you can click done and come back later to make more changes</small></center></div>


    </fieldset>
</form>


      </div>
      </div>
      </div>
      </div>
     </div><!--2nd-->

      <div id="menu1" class="tab-pane fade ">
        <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
         <div class="col-xs-12">
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="portcontact_.php" id="demo" method="post" class="col-md-8 col-md-offset-2">
    <fieldset>
        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
         <input type="radio" name="reveal1" value="public" checked>Keep it Public<br>
  <input type="radio" name="reveal1" value="private"> Keep it Private<br>
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div><h4><strong style="font-family:Roboto">CONTACT:</strong></h4></td>

                      </tr>

                      </table><br>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control"
      pattern="[0-9]{10}"  data-toggle="tooltip" data-placement="top" required title="Your number will be seen only to your links" value="<?= $row1["mobile"]?>"name="mobile" placeholder="MOBILE NO(10 digits)" type="text"/>
        </div>


            <div class="form-group">
         <input autocomplete="off" autofocus class="form-control" value="<?= $row1["email"]?>"name="email" placeholder="EMAIL" type="text" readonly="readonly"/>
        </div>


  <div class="form-group" style="font-family:Pangolin">
      <label for="year" >ONLINE AVAILABILITY:</label>
      <select class="form-control" id="year" name="avail">
          <?php if($row1["avail"]=="skype"):?>
        <option selected value="skype">Skype</option>
        <?php else:?>
        <option value="skype">Skype</option>
        <?php endif?>
        <?php if($row1["avail"]=="whatsapp"):?>
        <option selected value="whatsapp">Whatsapp</option>
        <?php else:?>
        <option  value="whatsapp">Whatsapp</option>
        <?php endif?>
        <?php if($row1["avail"]=="imo"):?>
        <option value="imo" selected>Imo</option>
        <?php else:?>
        <option value="imo">Imo</option>
        <?php endif?>
      </select>

            </select>

      </div>
      <div class="form-group">
         <input autocomplete="off"  pattern="[0-9]{10}"  data-toggle="tooltip" data-placement="top" required title="Your number will be seen only to your links" autofocus class="form-control" value="<?=$row1["availno"]?>"name="availno" placeholder="ONLINE AVAILABILITY NO" type="text"/>
        </div>
            <div class="form-group">
         <input autocomplete="off" required pattern="[A-Za-z]{3}" autofocus class="form-control" value="<?= strtoupper($row1["address"])?>"name="address" placeholder="CITY" type="text"/>
        </div>

         <div class="form-group" style="font-family:Pangolin">
      <label for="avai" >Prefrences (select one):</label>
      <select class="form-control" id="avai" name="pref">
          <?php if($row1["pref"]=="always available"):?>
        <option value="always available" selected>Always Available</option>
        <?php else:?>
        <option value="always available">Always Available</option>
        <?php endif?>
        <?php if($row1["pref"]=="occasionally available"):?>
        <option value="occasionally available" selected>Occasionally Available</option>
        <?php else:?>
        <option value="occasionally available">Occasionally Available</option>
        <?php endif?>

      </select>

            </select>

      </div>

         <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
        <div class="panel-footer" ><center><small style="font-family:Roboto">You can save your changes using Save.If you tired of editing ,you can click done and come back later to make more changes</small></center></div>

    </fieldset>
</form>


      </div>
      </div>
      </div>


        </div>
          <div id="menu3" class="tab-pane fade ">

            <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
         <div >
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="portlink_.php" id="demo" method="post" class="col-md-8 col-md-offset-2">
    <fieldset>
        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
         <input type="radio" name="reveal1" value="public" checked>Keep it Public<br>
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div><h4><strong style="font-family:Roboto">LINKS:</strong></h4></td>

                      </tr>

                      </table><br>
        <i style="font-size:48px" class="fa">&#xf230;</i>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" value="<?= $row3["facebook"]?>"name="facebook" placeholder="Facebook-Link" type="text"/>
        </div>

        <div class="form-group">
            <i class="fa fa-twitter text-primary" style="font-size:48px"></i><input autocomplete="off" value="<?= $row3["twitter"]?>"autofocus class="form-control" name="twitter" placeholder="Twitter-Link" type="text"/>
        </div>
        <div class="form-group">
           <i class="fa fa-linkedin" style="font-size:48px"></i><input autocomplete="off" autofocus class="form-control"value="<?= $row3["linkedin"]?>" name="linkedin" placeholder="LinkedIn-Link" type="text"/>
        </div>
         <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
        <div class="panel-footer" ><center><small style="font-family:Roboto">You can save your changes using Save.If you tired of editing ,you can click done and come back later to make more changes</small></center></div>

    </fieldset>
</form>
</div>
      </div>
      </div>

          </div>
       <div id="menu4" class="tab-pane fade ">


          <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
         <div class="col-xs-12">
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="portmoto_.php" id="usrform" method="post" class="col-md-8 col-md-offset-2">
    <fieldset>
        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div><h4><strong style="font-family:Roboto">LIFE-MOTO/MANTRA(Tell people something about yourself):</strong></h4></td>

                      </tr>

                      </table><br>
                      <textarea  required pattern="[A-Za-z]{3}"rows="4" cols="32" name="moto" form="usrform">
                        <?=$row8["moto"]?>
                      </textarea>


                        <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
        <div class="panel-footer" ><center><small style="font-family:Roboto">You can save your changes using Save.If you tired of editing ,you can click done and come back later to make more changes</small></center></div>

        </fieldset>
</form>
</div>
      </div>
      </div>

          </div>
       <div id="menu5" class="tab-pane fade ">

            <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
         <div class="col-md-12">
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="portedu_.php" id="demo" method="post" class="col-md-8 col-md-offset-2">
    <fieldset>
        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
         <input type="radio" name="reveal1" value="public" checked>Keep it Public<br>
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div><h4><strong style="font-family:Roboto">EDUCATION DETAILS:</strong></h4></td>

                      </tr>

                      </table><br>
       <?php require("../views/portedu.php"); ?>
         <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
        <div class="panel-footer" ><center><small style="font-family:Roboto">You can save your changes using Save.If you tired of editing ,you can click done and come back later to make more changes</small></center></div>

    </fieldset>
</form>
</div>
      </div>
      </div>

          </div>
           <div id="menu6" class="tab-pane fade ">

            <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
         <div >
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="portwork_.php" id="demo" method="post" class="col-md-8 col-md-offset-2">
    <fieldset>
        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
         <input type="radio" name="reveal1" value="public" checked>Keep it Public<br>
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div><h4><strong style="font-family:Roboto">WORK\ INTERN\ EXPERIENCE:</strong></h4></td>

                      </tr>

                      </table><br>

       <?php require("../views/portwork.php"); ?>
               <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
        <div class="panel-footer" ><center><small style="font-family:Roboto">You can save your changes using Save.If you tired of editing ,you can click done and come back later to make more changes</small></center></div>

    </fieldset>
</form>
</div>
      </div>
      </div>

          </div>
           <div id="menu7" class="tab-pane fade ">

            <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
         <div >
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="portlang_.php" id="demo" method="post" class="col-md-8 col-md-offset-2">
    <fieldset>
        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
         <input type="radio" name="reveal1" value="public" checked>Keep it Public<br>
        <li><a href="logout.php">Logout</a></li>
      </ul>
            </div><h4><strong style="font-family:Roboto">SOFTWARE/ LANGUAGES:</strong></h4></td>

                      </tr>

                      </table><br>


                    <?php require "../views/portlang.php" ?>


        <div class="form-group text-ce nter">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
    </fieldset>
</form>
</div>
      </div>
      </div>

          </div>
           <div id="menu8" class="tab-pane fade ">

            <div class="jumbotron" style="background:white !important;border:1px solid silver">

    <div class="row">
         <div >
      <h3  class="text-center" >MyDetails</h3>

  <h5  class="text-center text-default">Save your changes before quiting</h5>
       <form action="porthobby_.php" id="demo" method="post" class="col-md-8 col-md-offset-2">
    <fieldset>
        <table frame="below">
                      <tr style="font-family:Roboto">
                        <td style="font-family:Roboto"><div class="text-left dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="text-right" href="#" aria-label="Settings">
  <button class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
</a>
      <ul class="dropdown-menu ">
         <input type="radio" name="reveal1" value="public" checked>Keep it Public<br>
        <li><a href="logout.php">Logout</a></li>
      </ul>
          </div><h4><strong style="font-family:Roboto">TOPICS:</strong></h4></td>

                      </tr>

                      </table><br>
         <div id="education_field">
             <div class="form-group">
         <div class="input-group">
      <input type="text"class="form-control" required value="<?= strtoupper($rows7[0]["hobby"])?>"name="hobby[]"placeholder="Topics good at">

      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="education_field();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
    </div>
    </div>
         <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
                Save
            </button>
        </div>
        <div class="panel-footer" ><center><small style="font-family:Roboto">You can save your changes using Save.If you tired of editing ,you can click done and come back later to make more changes</small></center></div>

    </fieldset>
</form>
</div>
      </div>
      </div>

          </div>


      </div>
      <div class=" text-center">
            <a href="portfolio_.php">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-ok"></span>
                Done
            </button>
            </a>
        </div>
      <div class="panel-footer" ><center><small style="font-family:Roboto">We do not share personal information with companies, organizations and individuals outside of <a href="wiki/nit.com">NIT</a>-Portfolio.</small></center></div>
          <footer class="text-center"><hr><center>Copyright© 2017-18. Portfolio.in<br>  <a href="portterms_.php">Terms and Conditions </a> .  <a href="portcontactus_.php">Contact us</a> </cite></footer>


      </div>


          </div>

      </div>


 <script>
        function myfunc(){

        $("#Date1").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange:"1990:2019",
            altFormat: "dd-mm-yy"
            });
        }

$(document).ready(myfunc);


       var rooms = 1;
function education_field() {

    rooms++;
    var objTo = document.getElementById('education_field');
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+rooms);
	var rdiv = 'removeclass'+rooms;
    divtest.innerHTML = '<div class="form-group"><div class="input-group"><input type="text"  required  class="form-control" name="hobby[]"placeholder="Topics good at"><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_education_field('+ rooms +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div></div></div>';
    objTo.appendChild(divtest)
}
function remove_education_field(rid) {
	   $('.removeclass'+rid).remove();
   }</script>

    <?php $n=0;?>
<?php foreach($rows7 as $row7):?>
<?php $n++;?>
<?php if($n>1):?>
   <script>
   rooms++;
    var objTo = document.getElementById('education_field');
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+rooms);
	var rdiv = 'removeclass'+rooms;
    divtest.innerHTML ='<div class="form-group"><div class="input-group"><input  required  type="text" class="form-control" value="<?= strtoupper($row7["hobby"])?>"name="hobby[]"placeholder="Topics good at"><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_education_field('+ rooms +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div></div></div>';

    objTo.appendChild(divtest);</script>
 <?php else:?>
 <?php continue;?>
 <?php endif?>

  <?php endforeach?>