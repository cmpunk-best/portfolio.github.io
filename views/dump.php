<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css" rel="stylesheet">






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


</div>
 <div id="loading"></div>
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
