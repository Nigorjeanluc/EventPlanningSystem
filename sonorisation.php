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
    <link href="modern-business.css" rel="stylesheet">
</head>

<body style="background-color:lightskyblue;">

    <!-- Navigation -->
    <?php include("nav.php"); ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 style="font-family:cursive;font-weight:800" class="page-header text-center">Sonorisation
                    <small>Facilities</small><span id="kbs" class="text-muted"></span>
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><a>Sonorisation</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group text-center">
                    
                    <a href="conference.php" class="list-group-item">Rooms/Salles</a>
                    <a href="weddingcars.php" class="list-group-item">Cars</a>
                    <a href="weddingclothes.php" class="list-group-item">Wedding Clothes</a>
                    <a href="catering.php" class="list-group-item">Catering</a>
                    <a href="sonorisation.php" class="list-group-item active">Sonorisation</a>
                    <a href="deco.php" class="list-group-item">Decoration</a>
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Advertiser Here</h4>
                </div>
                <div class="well">
                    <h1>Other Advertiser Here</h1>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <div class="row">
                            <?php
                                include("connect.php");
                                $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Sono' ORDER BY ID DESC LIMIT 0,3");
                                while($myrow = mysqli_fetch_array($pipsql)){
                                    echo'
                                <div class="col-md-4">
                                    <div class="panel text-center">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">'.$myrow['Name'].'</h3>
                                        </div>
                                        <div align="center"><img style="position:relative;height:200px;" class="img-responsive" src="'.$myrow['picone'].'"></div>
                                        <div class="panel-body">
                                            <span class="price"><sup>'.$myrow['Currency'].'</sup>'.$myrow['Price'].'<sup>.00</sup></span>
                                            <span class="period">'.$myrow['PeriodOfRent'].'</span>
                                        </div>
                                        <ul class="list-group">
                                            <!--<li class="list-group-item"><strong>1</strong> User</li>
                                            <li class="list-group-item"><strong>5</strong> Projects</li>
                                            <li class="list-group-item"><strong>Unlimited</strong> Email Accounts</li>-->
                                            <li class="list-group-item"><strong>More:</strong> '.$myrow['MoreAbout'].'</li>
                                            <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>
                                            <li class="list-group-item"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal">Order it!</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    ';
                                }
                            ?>
                </div><!-- ./row-->
            </div>
        </div>
        <!-- /.row -->

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
