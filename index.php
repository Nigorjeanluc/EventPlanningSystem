<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>EventPlanningSystem</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="mycss.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-color:lightskyblue;">
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a style="font-weight:400;font-family:cursive" class="navbar-brand" href="#">EventPlanningSystem.</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                    <li class="active font"><a href="index.php">Home</a></li>
                    <li class="font"><a href="conference.php">Conferences</a></li>
                    <li class="font"><a href="wedding.php">Weddings</a></li>
                    <li class="font"><a href="birth.php">Parties & Birthdays Events</a></li>
                    <li class="font"><a href="catering.php">Outside Catering</a></li>
                    <li class="dropdown font">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Places <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="font"><a href="hotels.php">Hotels</a></li>
                            <li class="font"><a href="pools.php">Swimming Pools</a></li>
                            <li class="font"><a href="garden.php">Gardens</a></li>
                            <!--<li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>-->
                        </ul>
                    </li>
                    <li class="font"><a href="gallery/index.php">Gallery</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <?php 
        ?>
        <div class="item active">
          <img src="assets/img/products/g.jpg" alt="First slide">
          <!--<div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>-->
        </div>
        <div class="item">
          <img src="assets/img/products/gg.jpg" alt="Second slide">
          <!--<div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>-->
        </div>
        <div class="item">
          <img src="assets/img/products/ggg.jpg" alt="Third slide">
          <!--<div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>-->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <?php
      if(isset($_SESSION['user'])){
          echo '<div id="hh" class="row">
                  <h2 style="font-family:cursive;margin-top:10px" class="featurette-heading text-center">Hi '.$_SESSION['user'].'.Welcome to the Event Planning System. <span id="kbs" class="text-muted"></span></h2>
                  <div class="col-lg-12">
                    <p class="text-center"><a href="user/index.php" class="btn btn-info" role="button">Get in touch! &raquo;</a> | <a href="opera/logout.php" class="btn btn-warning" role="button">Log Out &raquo;</a></p>
                  </div>
                  <hr class="featurette-divider">
                </div>';
      }
      elseif(isset($_REQUEST['yes'])){
        if($_REQUEST['yes']==2){
          echo '<div id="hh" class="row">
                  <div class="col-lg-12">
                  <form method="post" action="opera/addsomething.php"><h1 style="color:seagreen;font-family:cursive;text-shadow:5px 5px 5px gray" class="text-center">Register!</h1><br /><div class="col-lg-6 col-lg-offset-3 form-group"><input type="text" name="surnom" class="form-control" placeholder="Username" required/><br /><div class="row form-group"><div class="col-lg-6"><input type="email" name="email" class="form-control" placeholder="Email" required/></div><div class="col-lg-6"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required/></div></div><br /><input type="password" id="pass1" name="pass1" class="form-control" placeholder="Password" required/><br/><input type="password" id="pass2" name="pass2" class="form-control" placeholder="Password" required/><br /><p style="color:red" class="text-center">Passwords does not match</p><br /><p class="text-center"><input type="submit" class="btn btn-info" name="freeee" value="Register"/> | <a href="index.php" class="btn btn-warning">Back</a> | <input type="reset" class="btn btn-danger" value="Reset"/></p></div></form><br /><br />
                  </div>
                </div>';
        }
        if($_REQUEST['yes']==0){
          echo '<div id="hh" class="row">
                  <div class="col-lg-12">
                  <form method="post" action="opera/loginadmin.php"><h1 style="color:red;font-family:cursive;text-shadow:5px 5px 5px gray" class="text-center">Wrong password or username!</h1><br /><div class="col-lg-6 col-lg-offset-3 form-group"><input type="text" name="name" class="form-control" placeholder="Username" required/><br /><input type="password" name="password" class="form-control" placeholder="Password" required/><br /><p class="text-center"><input type="submit" class="btn btn-info" name="freee" value="Login"/> | <a href="index.php" class="btn btn-warning">Back</a> | <input type="reset" class="btn btn-danger" value="Reset"/></p></div></form><br /><br />
                  </div>
                </div>';
        }
        if($_REQUEST['yes']==3){
          echo '<div class="row">
                    <h2 style="font-family:cursive;margin-top:10px" class="featurette-heading text-center">Your are already registered in the Event Planning System. <span id="kbs" class="text-muted"></span></h2>
                    <hr class="featurette-divider">
                <div id="here" class="col-lg-12">
                  <h1 style="color:seagreen;font-family:cursive;text-shadow:5px 5px 5px gray" class="text-center">Stay in touch!</h1><br />
                  <p class="text-center"><a class="btn btn-success" id="login" role="button">Login &raquo;</a></p>
                  <hr class="featurette-divider">
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->';
        }
      }else{
        echo'
        <div class="row">
              <h2 style="font-family:cursive;margin-top:10px" class="featurette-heading text-center">Welcome to the Event Planning System. <span id="kbs" class="text-muted"></span></h2>
              <hr class="featurette-divider">
          <div id="here" class="col-lg-12">
            <h1 style="color:seagreen;font-family:cursive;text-shadow:5px 5px 5px gray" class="text-center">Stay in touch!</h1><br />
            <p class="text-center"><a class="btn btn-success" id="login" role="button">Login &raquo;</a> | <a class="btn btn-primary" id="register" role="button">Register &raquo;</a></p>
            <hr class="featurette-divider">
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->';
      }
      ?>

      <!-- Projects Row -->
        <div class="row">
            <div class="row">
                <h3 style="font-family:cursive" class="text-center">Wedding Facilities</h3><br />
                 <?php
                    include("connect.php");
                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN('Wedding&clothes') ORDER BY ID DESC LIMIT 0,8");
                    while($myrow = mysqli_fetch_array($pipsql)){
                        echo'
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">'.$myrow['Name'].'</div>
                                <div align="center"><img style="position:relative;height:200px;" class="img-responsive" src="'.$myrow['picone'].'"></div>
                                <div class="panel-body">
                                    <h4>'.$myrow['Currency'].' '.$myrow['Price'].' '.$myrow['PeriodOfRent'].'</h4>
                                    <p><b>Owner: </b>'.$myrow['CompanyName'].'<br/><b>Tel:</b>'.$myrow['Phone'].'</p>
                                    <!--<p class="text-center"><b>More</b><br />'.$myrow['MoreAbout'].'</p>
                                    <p class="text-center"><b>Place</b><br />'.$myrow['District'].', '.$myrow['Sector'].', '.$myrow['Province'].'</p>-->
                                    ';
                                    if(isset($_SESSION['user'])){
                                      echo '<p><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></p>';
                                    }else{
                                      echo' ';
                                    }
                        echo'
                                </div>
                            </div>
                        </div>
                                ';
                    }
                ?>
            </div>

            <div class="row">
                <h3 style="font-family:cursive" class="text-center">Birthdays & Formal Parties Facilities</h3><br />
                <?php
                    include("connect.php");
                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Cake','Deco','Sono') ORDER BY ID DESC LIMIT 0,4");
                    while($myrow = mysqli_fetch_array($pipsql)){
                        echo'
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">'.$myrow['MoreAbout'].'</div>
                                <div align="center"><img style="position:relative;height:200px" class="img-responsive" src="'.$myrow['picone'].'" /></div>
                                <div class="panel-body">
                                    <h4>'.$myrow['Currency'].' '.$myrow['Price'].' '.$myrow['PeriodOfRent'].'</h4>
                                    <p><b>Owner: </b>'.$myrow['CompanyName'].'<br/><b>Tel:</b>'.$myrow['Phone'].'</p>
                                    <p class="text-center"><b>Compounds:</b><br />'.$myrow['Name'].'</p>
                                    <!--<p class="text-center"><b>Place</b><br />'.$myrow['District'].', '.$myrow['Sector'].', '.$myrow['Province'].'</p>-->
                                    ';
                                    if(isset($_SESSION['user'])){
                                      echo '<p><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></p>';
                                    }else{
                                      echo' ';
                                    }
                        echo'
                                </div>
                            </div>
                        </div>
                                ';
                    }
                ?>
            </div>

            <div class="row">
                <h3 style="font-family:cursive" class="text-center">Conference Rooms</h3><br />
                <?php
                    include("connect.php");
                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Venue','Deco','Catering') ORDER BY ID DESC LIMIT 0,8");
                    while($myrow = mysqli_fetch_array($pipsql)){
                        echo'
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">'.$myrow['Name'].'</div>
                                <div align="center"><img style="position:relative;height:200px" class="img-responsive" src="'.$myrow['picone'].'" /></div>
                                <div class="panel-body">
                                    <h4>'.$myrow['Currency'].' '.$myrow['Price'].' '.$myrow['PeriodOfRent'].'</h4>
                                    <p><b>Owner: </b>'.$myrow['CompanyName'].'<br/><b>Tel:</b>'.$myrow['Phone'].'</p>
                                    <!--<p class="text-center"><b>More</b><br />'.$myrow['MoreAbout'].'</p>
                                    <p class="text-center"><b>Place</b><br />'.$myrow['District'].', '.$myrow['Sector'].', '.$myrow['Province'].'</p>-->
                                    ';
                                    if(isset($_SESSION['user'])){
                                      echo '<p><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></p>';
                                    }else{
                                      echo' ';
                                    }
                        echo'
                                </div>
                            </div>
                        </div>
                                ';
                    }
                ?>
        </div>
        <div class="row">
                <h3 style="font-family:cursive" class="text-center">Other Company</h3><br />
                <?php
                    include("connect.php");
                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Event IN ('Owner') ORDER BY ID DESC LIMIT 0,8");
                    while($myrow = mysqli_fetch_array($pipsql)){
                        echo'
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">'.$myrow['MoreAbout'].'</div>
                                <div align="center"><img style="position:relative;height:200px" class="img-responsive" src="'.$myrow['picone'].'" /></div>
                                <div class="panel-body">
                                    <h4>'.$myrow['Currency'].' '.$myrow['Price'].'</h4>
                                    <p class="text-center"><b>More</b><br />'.$myrow['MoreAbout'].'</p>
                                    <p class="text-center"><b>Place</b><br />'.$myrow['District'].', '.$myrow['Sector'].', '.$myrow['Province'].'</p>
                                    ';
                                    if(isset($_SESSION['user'])){
                                      echo '<p><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></p>';
                                    }else{
                                      echo' ';
                                    }
                        echo'
                                </div>
                            </div>
                        </div>
                                ';
                    }
                ?>
        </div>
        <!-- /.row -->

      <!-- /END THE FEATURETTES -->
      <hr class="featurette-divider">

      <!-- FOOTER -->
      <?php
        include('footer.php');
      ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $(".panel").mouseenter(function(){
                $(this).addClass("panel-primary");
                $(".panel").mouseleave(function(){
                    $(this).removeClass("panel-primary");
                });
            });
            $("#login").click(function(){
              $("#here").empty();
              $("#here").append('<form method="post" action="opera/loginadmin.php"><h1 style="color:seagreen;font-family:cursive;text-shadow:5px 5px 5px gray" class="text-center">Login!</h1><br /><div class="col-lg-6 col-lg-offset-3 form-group"><input type="text" name="name" class="form-control" placeholder="Username" required/><br /><input type="password" name="password" class="form-control" placeholder="Password" required/><br /><p class="text-center"><input type="submit" class="btn btn-info" name="freee" value="Login"/> | <a href="index.php" class="btn btn-warning">Back</a> | <input type="reset" class="btn btn-danger" value="Reset"/></p></div></form><br /><br />');
            });
            $("#register").click(function(){
              $("#here").empty();
              $("#here").append('<form method="post" action="opera/addsomething.php"><h1 style="color:seagreen;font-family:cursive;text-shadow:5px 5px 5px gray" class="text-center">Register!</h1><br /><div class="col-lg-6 col-lg-offset-3 form-group"><input type="text" name="surnom" class="form-control" placeholder="Username" required/><br /><div class="row form-group"><div class="col-lg-6"><input type="email" name="email" class="form-control" placeholder="Email" required/></div><div class="col-lg-6"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required/></div></div><br /><input type="password" id="pass1" name="pass1" class="form-control" placeholder="Password" required/><br/><input type="password" id="pass2" name="pass2" class="form-control" placeholder="Password" required/><br /><p class="text-center"><input type="submit" class="btn btn-info" name="freeee" value="Register"/> | <a href="index.php" class="btn btn-warning">Back</a> | <input type="reset" class="btn btn-danger" value="Reset"/></p></div></form><br /><br />');
            });
        });
    </script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <script src="dist/kbs.js"></script>
  </body>
</html>
