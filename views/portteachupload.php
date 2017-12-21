




    <script>var room = 0;
function education_fields() {

    room++;
    var objTo = document.getElementById('puthere');
    var divtest = document.createElement("table");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML ='<tr><td><div class="input-group text-center"><select class="form-control" id="subname" name="subname[]">'+
    '<?php  foreach($subnames as $subname):?><option  ><?= $subname["subject"]?></option><?php endforeach?></select></div></td>'+

    '<td><div class="input-group text-center"><input type="text"class="form-control " value="" name="caption'+room+'"data-toggle="tooltip" data-placement="auto" title="Give some topic name to your file"></div></td>'+
    '<td><div class="input-group text-center "><input type="file" class="form-control btn btn-default" name="fileToUpload'+room+'" id="fileToUpload'+room+'" data-toggle="tooltip" data-placement="left" title="Choose your file to upload by clicking on the choose file  button"></div></td>'+
    '<td><button class="btn btn-danger" type="button" onclick="remove_education_fields('+room+');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div></td></tr>';



    objTo.appendChild(divtest);
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();room--;
   }</script>


     <script>


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>




