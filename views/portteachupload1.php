


          <?php $k=0;?>


    <script>var room1 = 0;
function education_fields1() {

    room1++;
    var objTo = document.getElementById('puthere1');
    var divtest = document.createElement("table");
	divtest.setAttribute("class", "form-group removeclass"+room1);
	var rdiv = 'removeclass'+room1;
    divtest.innerHTML ='<tr><td><div class="input-group text-center"><select class="form-control" id="subname" name="subname[]">'+
    '<?php  foreach($subnames as $subname):?><option  ><?= $subname["subject"]?></option><?php endforeach?></select></div></td>'+


    '<td><div class="input-group text-center"><input type="text"class="form-control " value="" name="caption1'+room1+'"data-toggle="tooltip" data-placement="auto" title="Give some topic name to your file"></div></td>'+
    '<td><div class="input-group text-center "><input type="file" class="form-control btn btn-default" name="fileToUpload1'+room1+'" id="fileToUpload1'+room1+'" data-toggle="tooltip" data-placement="left" title="Choose your file to upload by clicking on the choose file  button"></div></td>'+
    '<td><button class="btn btn-danger" type="button" onclick="remove_education_fields1('+room1+');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div></td></tr>';



    objTo.appendChild(divtest);
}
   function remove_education_fields1(rid) {
	   $('.removeclass'+rid).remove();
	   room1--;
   }</script>


     <script>


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>





