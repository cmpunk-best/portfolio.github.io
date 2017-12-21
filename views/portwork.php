


  <div id="education_fields1">


       <div class=" nopadding">
  <div class="form-group">
    <input type="text" class="form-control" required id="Schoolname" name="Schoolname[]" value="<?= strtoupper($rows5[0]["schoolname"])?>" placeholder="Institute name"data-toggle="tooltip" data-placement="top" title="Add the institution you went to complete your internship/work">
  </div>
</div>
<div class=" nopadding">
  <div class="form-group">
    <input type="text" class="form-control" required  id="Major" name="Major[]" value="<?= strtoupper($rows5[0]["major"])?>" placeholder="Major"data-toggle="tooltip" data-placement="top" title="Add the majors you did in your institution like managing,testing,project etc.">
  </div>
</div>
<div class="nopadding">
  <div class="form-group">
    <input type="text" class="form-control" required  id="Degree" name="Degree[]" value="<?= strtoupper($rows5[0]["degree"])?>" placeholder="Description of work"data-toggle="tooltip" data-placement="top" title="Add the Description of work or internship you completed in your institution ex. any research paper,project name or a little description about what you did etc.">
  </div>
</div>

<div class=" nopadding">
  <div class="form-group">
    <div class="input-group">
      <select class="form-control" id="educationDate" name="educationDate[]"data-toggle="tooltip" data-placement="top" title="Year of completion">

        <?php
        for($i=1990;$i<=2030;$i++):?>
        <?php if($i==($rows5[0]["year"])):?>
        <option  selected><?= $i?></option>
        <?php else:?>
        <option ><?= $i?></option>
        <?php endif?>
        <?php endfor?>
      </select>
      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="education_fields1();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>



</div>
       <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>

          <?php $k=0;?>


    <script>var room1 = 1;
function education_fields1() {

    room1++;
    var objTo = document.getElementById('education_fields1');
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room1);
	var rdiv = 'removeclass'+room1;
    divtest.innerHTML = '<div class=" nopadding"><div class="form-group"> <input type="text" class="form-control" required id="Schoolname" name="Schoolname[]" value="" placeholder="Institute name"></div></div><div class="nopadding"><div class="form-group"> <input type="text"  required  class="form-control" id="Major" name="Major[]" value="" placeholder="Major"></div></div><div class="nopadding"><div class="form-group"> <input type="text"  required  class="form-control" id="Degree" name="Degree[]" value="" placeholder="Description"></div></div><div class="nopadding"><div class="form-group"><div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><?php for($k=1990;$k<=2030;$k++):?><option><?= $k?></option><?php endfor?></select><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields1('+ room1 +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

    objTo.appendChild(divtest)
}
   function remove_education_fields1(rid) {
	   $('.removeclass'+rid).remove();
   }</script>
  <?php $n=0;?>
<?php foreach($rows5 as $row5):?>
<?php $n++;?>
<?php if($n>1):?>
   <script>
   room1++;
    var objTo = document.getElementById('education_fields1');
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room1);
	var rdiv = 'removeclass'+room1;
    divtest.innerHTML = '<div class=" nopadding"><div class="form-group"> <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="<?= strtoupper($row5["schoolname"])?>" placeholder="Institute name"></div></div><div class="nopadding"><div class="form-group"> <input type="text" class="form-control" id="Major" name="Major[]" value="<?= strtoupper($row5["major"])?>" placeholder="Major"></div></div><div class="nopadding"><div class="form-group"> <input type="text" class="form-control" id="Description" name="Degree[]" value="<?= strtoupper($row5["degree"])?>" placeholder="Degree"></div></div><div class="nopadding"><div class="form-group"><div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><?php for($j=1990;$j<=2030;$j++):?><?php if($j==($row5["year"])):?><option  selected><?= $j?></option><?php else:?><option ><?= $j?></option><?php endif?><?php endfor?></select><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+room1+');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

    objTo.appendChild(divtest);</script>
 <?php else:?>
 <?php continue;?>
 <?php endif?>

  <?php endforeach?>
