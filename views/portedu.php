




  <div id="education_fields">
          <?php// foreach($rows4 as $row4):?>
       <div class=" nopadding">
  <div class="form-group">
    <input type="text" class="form-control" required  id="Schoolname" name="Schoolname[]" value="<?= strtoupper($rows4[0]["schoolname"])?>" placeholder="Institute name"data-toggle="tooltip" data-placement="top" title="Add the institution you went to complete your course">
  </div>
</div>
<div class=" nopadding">
  <div class="form-group">
    <input type="text" class="form-control" required  id="Major" name="Major[]" value="<?= strtoupper($rows4[0]["major"]) ?>" placeholder="Major"data-toggle="tooltip" data-placement="top" title="Add the majors you did in your institution like engineering,board, medical,non-medical,commerce,humanities etc.">
  </div>
</div>
<div class="nopadding">
  <div class="form-group">
    <input type="text" class="form-control" required  id="Degree" name="Degree[]" value="<?= strtoupper($rows4[0]["degree"])?>" placeholder="Degree"data-toggle="tooltip" data-placement="top" title="Add the Degree you completed in your institution ex.10th,12th.B.tech,M.tech etc.">
  </div>
</div>

<div class=" nopadding">
  <div class="form-group">
    <div class="input-group">
      <select class="form-control" id="educationDate" name="educationDate[]"data-toggle="tooltip" data-placement="top" title="Year of completion(tentatively)">

        <option value="">Year of Completion</option>
        <?php
        for($i=1990;$i<=2030;$i++):?>
        <?php if($i==($rows4[0]["year"])):?>
        <option  selected><?= $i?></option>
        <?php else:?>
        <option ><?= $i?></option>
        <?php endif?>
        <?php endfor?>

      </select>
      <div class="input-group-btn">
       <button class="btn btn-success" type="button" onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>

      </div>

    </div>
  </div>
</div>
<div class="clear"></div>



</div>
       <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>

          <?php $k=0;?>


    <script>var room = 1;
function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields');
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class=" nopadding"><div class="form-group"> <input  required  type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Institute name"></div></div><div class="nopadding"><div class="form-group"> <input type="text"  required  class="form-control" id="Major" name="Major[]" value="" placeholder="Major"></div></div><div class="nopadding"><div class="form-group"> <input type="text"  required  class="form-control" id="Degree" name="Degree[]" value="" placeholder="Degree"></div></div><div class="nopadding"><div class="form-group"><div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><?php for($k=1990;$k<=2030;$k++):?><option><?= $k?></option><?php endfor?></select><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+room+');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

    objTo.appendChild(divtest);
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }</script>

     <script>var room = 1;
     </script>
     <script>


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
  <?php $n=0;?>
<?php foreach($rows4 as $row4):?>
<?php $n++;?>
<?php if($n>1):?>
   <script>
   room++;
    var objTo = document.getElementById('education_fields');
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class=" nopadding"><div class="form-group"> <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="<?= strtoupper($row4["schoolname"])?>" placeholder="Institute name"></div></div><div class="nopadding"><div class="form-group"> <input type="text" class="form-control" id="Major" name="Major[]" value="<?= strtoupper($row4["major"])?>" placeholder="Major"></div></div><div class="nopadding"><div class="form-group"> <input type="text" class="form-control" id="Degree" name="Degree[]" value="<?= strtoupper($row4["degree"])?>" placeholder="Degree"></div></div><div class="nopadding"><div class="form-group"><div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><?php for($j=1990;$j<=2030;$j++):?><?php if($j==($row4["year"])):?><option  selected><?= $j?></option><?php else:?><option ><?= $j?></option><?php endif?><?php endfor?></select><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+room+');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

    objTo.appendChild(divtest);</script>
 <?php else:?>
 <?php continue;?>
 <?php endif?>

  <?php endforeach?>
