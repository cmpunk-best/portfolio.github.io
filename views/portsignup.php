<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-primary" style="font-family:Pangolin" href="#"><button class="btn btn-primary text-primary">Portfolio.in</button></a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="nav navbar-nav">
        <li ><a href="login.php"><button class="btn btn-info" ><span class="glyphicon glyphicon-home"></span> Home</button></a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.php"><button class="btn btn-danger "><i class="fa fa-user fa-fw"></i>Sign-Up</button></a></li>
        <li ><a href="portlogin_.php"><button class="btn btn-danger "><span  aria-hidden="true"class="glyphicon glyphicon-log-in"></span> Log In</button></a></li>

      </ul>

    </div>
  </div>
</nav>
<!--end of navigation bar-->
<!--start of jumbotron-->
<div class="container" >
  <div class="jumbotron">
    <div class="row">
      <div class="col-xs-12">
        <h1 style="font-family:Pangolin" class="text-center" >NIT-Portfolio</h1>

        <h4 style="font-family:Pangolin" class="text-center text-default"><em>Create your account to see magic....</em></h4>

       

        <form action="portsignup_.php" id="demo" method="post" class="col-md-8 col-md-offset-2">
          <fieldset>
            <div class="form-group">
              <input autocomplete="off" autofocus class="form-control" name="firstname" placeholder="First-Name" type="text"/>
            </div>
            <div class="form-group">
              <input autocomplete="off" autofocus class="form-control" name="lastname" placeholder="Second-Name" type="text"/>
            </div>
            <div class="form-group" style="font-family:Pangolin">
              <label for="year" >Select year (select one):</label>
              <select class="form-control" id="year" name="year">
                <option>Select Year</option>
                <option>1st Year</option>
                <option>2nd Year</option>
                <option>3rd Year</option>
                <option>4th Year</option>
              </select>

            </div>
            <div class="form-group">
              <input autocomplete="off" autofocus class="form-control" name="email" placeholder="Email" type="text"/>
            </div>
            <div class="form-group">
              <input class="form-control" name="password" placeholder="Password" type="password"/>
            </div>
            <div class="form-group">
              <input class="form-control" name="confirmation" placeholder="Confirmation" type="password"/>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="fa fa-paper-plane"></span>
                REGISTER
              </button>
            </div>
          </fieldset>
        </form>

      </div>
    </div>

  </div>

  <footer class="text-center"><hr><center>Written and coded by Bookworm</cite></footer>
  </div>
  <!-- /.intro-header -->
</body>
