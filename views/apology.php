



<form action="<?= htmlspecialchars($path)?>" method="get" id="form1">
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title"><?= htmlspecialchars($message2) ?><h4>
        </div>
        <div class="modal-body text-danger">
          <p><?= htmlspecialchars($message) ?>.</p>
        </div>

        <div class="modal-footer">
          <button  class="btn btn-default" type="submit" id="quickstart-sign-in" name="signin">Close</button>
        </div>

      </div>

    </div>
  </div>
  </div>
  </form>
  <script>
      $(document).ready(function(){

         $('#myModal').modal('show');

      });
  </script>
  </body>
  </html>
