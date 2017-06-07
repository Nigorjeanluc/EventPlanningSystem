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

    <!-- Custom CSS -->
    <link href="dist/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="dist/awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

<body style="background-color:lightskyblue;">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="name" class="navbar-brand" href="index.php">Event Planning System.</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="font"><a href="index.php">Home</a></li>
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
                    <li class="active font"><a href="about.php">About Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div style="height:50px" class="col-lg-12"></div>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 style="font-family:cursive;font-weight:800" class="page-header text-center">
                    <small></small><span id="kbs" class="text-muted"></span>
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><a>About Us</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-6">
                <img style="width:100%;height:300px" class="img-responsive" src="assets\img\products\5 star hotel.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>About The Event Planning System</h2>
                <p>An event planning system is a web based application (website) which helps one to plan and to coordinate different kinds events easily.
                Here users or customers will navigate on more products that can be essential in their events. This application gives you all information about products and services that are available absed on the ability of the user/customer
                .</p>
                <p>As students in the University of Rwanda, we see it as a big opportunity to innovate new and easy ways of life in order to develop our african communities. </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>-->
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">Our Team</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <div align="center"><img style="position:relative;height:250px" class="img-responsive" src="assets/img/adminpic/dre.jpg" alt=""></div>
                    <div class="caption">
                        <h3>Charlotte<br>
                            <small>Director</small>
                        </h3>
                        <ul class="list-inline">
                            <li><a href="https://web.facebook.com/search/top/?q=charlotte%20umwali"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <div align="center"><img style="position:relative;height:250px" class="img-responsive"src="assets/img/adminpic/mypic.jpg" alt=""></div>
                    <div class="caption">
                        <h3>Salva<br>
                            <small>Manager</small>
                        </h3>
                        <ul class="list-inline">
                            <li><a href="https://web.facebook.com/mystica.salva.mutanguha"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <div align="center"><img style="position:relative;height:250px" class="img-responsive" src="assets/img/adminpic/tacy.jpg" alt=""></div>
                    <div class="caption">
                        <h3>Thacienne<br>
                            <small>Developer</small>
                        </h3>
                        <ul class="list-inline">
                            <li><a href="https://web.facebook.com/thacianne.tuyambaze"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">Contact Us</h2>
            </div>
            <div id="here" class="col-lg-12 form-group">
            <?php
            if(isset($_REQUEST['yes'])){
                echo'<h3 style="font-family:cursive" class="text-center">Thanks for your participation!!</h3>';
            }else{
            echo'
                <form method="post" action="opera/addsomething.php">
                    <input class="form-control" name="surnom" type="text" placeholder="Name" required/><br />
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="form-control" name="email" type="email" placeholder="Email" required/>
                        </div>
                        <div class="col-lg-6"><input class="form-control" name="phone" type="tel" placeholder="Phone Number" required/></div>
                    </div><br />
                    <textarea class="form-control" name="more" rows="5" placeholder="Enter your message here" required></textarea><br />
                    <p class="text-center"><input type="submit" name="msg" class="btn btn-success" value="Send"/> | <input type="reset" class="btn btn-default" value="Reset"/></p>
                </form>';
            }
            ?>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php
            include('footer.php');
        ?>

    </div>
    <!-- /.container -->

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
        });
    </script>
    <script src="dist/kbs.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
</body>

</html>
