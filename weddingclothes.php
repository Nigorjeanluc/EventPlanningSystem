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
    <link href="modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script>
</head>

<body style="background-color:lightskyblue;">

    <?php
        include('nav.php');
    ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div style="margin-top:50px" class="col-lg-12">
                <h1 style="font-family:cursive;font-weight:800" class="page-header text-center">Wedding
                    <small>Facilities</small><span id="kbs" class="text-muted"></span>
                </h1>

                <p style="margin-bottom:8px" class="text-center"><a href="weddingclothes1.php" class="btn btn-primary">Civil Wedding's items</a></p>
                
                <?php
                    if(!(isset($_REQUEST['nonono']))){
                        echo'
                        <ol class="breadcrumb">
                            <li class="active"><a href="wedding.php">Wedding Event</a>
                            </li>
                            <li class="active">Clothes</li>
                            <li class="active">Male</li>
                            <li><a>Normal Wedding</a></li>
                        </ol>
                        ';
                    }elseif($_REQUEST['nonono']==1){
                        echo'
                        <ol class="breadcrumb">
                            <li class="active"><a href="wedding.php">Wedding Event</a>
                            </li>
                            <li class="active">Clothes</li>
                            <li class="active">Female</li>
                            <li><a>Normal Wedding</a></li>
                        </ol>
                        ';
                    }elseif($_REQUEST['nonono']==2){
                        echo'
                        <ol class="breadcrumb">
                            <li class="active"><a href="wedding.php">Wedding Event</a>
                            </li>
                            <li class="active">Clothes</li>
                            <li class="active">Inkoni</li>
                            <li><a>Normal Wedding</a></li>
                        </ol>
                        ';
                    }elseif($_REQUEST['nonono']==3){
                        echo'
                        <ol class="breadcrumb">
                            <li class="active"><a href="wedding.php">Wedding Event</a>
                            </li>
                            <li class="active">Clothes</li>
                            <li class="active">Ingofero</li>
                            <li><a>Normal Wedding</a></li>
                        </ol>
                        ';
                    }
                ?>
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
                    <a href="weddingclothes.php" class="list-group-item active">Wedding Clothes</a>
                    <a href="catering.php" class="list-group-item">Catering</a>
                    <a href="sonorisation.php" class="list-group-item">Sonorisation</a>
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
                <div style="background:none" class="row">
                    <div style="background:none" class="col-md-12">
                    <?php
                                include("connect.php");
                            if(isset($_REQUEST['nonono'])){
                                if($_REQUEST['nonono']==1){
                                    echo'<h2 style="font-family:cursive" class="text-center">Shoes</h2><hr><div class="row">';
                                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Wedding&clothes' AND Categorie='Shoes' AND Sex='Female' AND Types='Wedding' ORDER BY ID DESC LIMIT 0,6");
                                    while($myrow = mysqli_fetch_array($pipsql)){
                                        echo'
                                    <div class="col-md-4">
                                        <div class="panel panel-default text-center">
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
                                                <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>';
                                            if(isset($_SESSION['user'])){
                                                echo '<li class="list-group-item"><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></li>';
                                            }else{
                                                echo' ';
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                                    ';
                                    }
                                    echo'
                                    </div><!-- /.row -->';
                                    //Dresses
                                    echo'<h2 style="font-family:cursive" class="text-center">Dresses</h2><hr><div class="row">';
                                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Wedding&clothes' AND Categorie='Dress' AND Sex='Female' AND Types='Wedding' ORDER BY ID DESC LIMIT 0,6");
                                    while($myrow = mysqli_fetch_array($pipsql)){
                                        echo'
                                    <div class="col-md-4">
                                        <div class="panel panel-default text-center">
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
                                                <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>';
                                            if(isset($_SESSION['user'])){
                                                echo '<li class="list-group-item"><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></li>';
                                            }else{
                                                echo' ';
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                                    ';
                                    }
                                    echo'
                                    </div><!-- /.row -->';
                                }elseif($_REQUEST['nonono']==2){
                                    echo'<h2 style="font-family:cursive" class="text-center">Inkoni</h2><hr><div class="row">';
                                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Wedding&clothes' AND Categorie='Inkoni' ORDER BY ID DESC LIMIT 0,6");
                                    while($myrow = mysqli_fetch_array($pipsql)){
                                        echo'
                                    <div class="col-md-4">
                                        <div class="panel panel-default text-center">
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
                                                <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>';
                                            if(isset($_SESSION['user'])){
                                                echo '<li class="list-group-item"><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></li>';
                                            }else{
                                                echo' ';
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                                    ';
                                    }
                                    echo'
                                    </div><!-- /.row -->';
                                }elseif($_REQUEST['nonono']==3){
                                    echo'<h2 style="font-family:cursive" class="text-center">Ingofero</h2><hr><div class="row">';
                                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Wedding&clothes' AND Categorie='Ingofero' ORDER BY ID DESC LIMIT 0,6");
                                    while($myrow = mysqli_fetch_array($pipsql)){
                                        echo'
                                    <div class="col-md-4">
                                        <div class="panel panel-default text-center">
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
                                                <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>';
                                            if(isset($_SESSION['user'])){
                                                echo '<li class="list-group-item"><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></li>';
                                            }else{
                                                echo' ';
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                                    ';
                                    }
                                    echo'
                                    </div><!-- /.row -->';
                                }
                            }else{
                                echo'<h2 style="font-family:cursive" class="text-center">Shoes</h2><hr><div class="row">';
                                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Wedding&clothes' AND Categorie='Shoes' AND Sex='Male' AND Types='Wedding' ORDER BY ID DESC LIMIT 0,6");
                                    while($myrow = mysqli_fetch_array($pipsql)){
                                        echo'
                                    <div class="col-md-4">
                                        <div class="panel panel-default text-center">
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
                                                <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>';
                                            if(isset($_SESSION['user'])){
                                                echo '<li class="list-group-item"><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></li>';
                                            }else{
                                                echo' ';
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                                    ';
                                    }
                                    echo'
                                    </div><!-- /.row -->';
                                    //Suits
                                    echo'<h2 style="font-family:cursive" class="text-center">Suits</h2><hr><div class="row">';
                                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Wedding&clothes' AND Categorie='Suit' AND Sex='Male' AND Types='Wedding' ORDER BY ID DESC LIMIT 0,6");
                                    while($myrow = mysqli_fetch_array($pipsql)){
                                        echo'
                                    <div class="col-md-4">
                                        <div class="panel panel-default text-center">
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
                                                <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>';
                                            if(isset($_SESSION['user'])){
                                                echo '<li class="list-group-item"><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></li>';
                                            }else{
                                                echo' ';
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                                    ';
                                    }
                                    echo'
                                    </div><!-- /.row -->';
                                    //Ties
                                    echo'<h2 style="font-family:cursive" class="text-center">Ties</h2><hr><div class="row">';
                                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event='Wedding&clothes' AND Categorie='Tie' AND Sex='Male' AND Types='Wedding' ORDER BY ID DESC LIMIT 0,6");
                                    while($myrow = mysqli_fetch_array($pipsql)){
                                        echo'
                                    <div class="col-md-4">
                                        <div class="panel panel-default text-center">
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
                                                <li class="list-group-item"><strong>Company or owner:</strong> '.$myrow['CompanyName'].'</li>';
                                            if(isset($_SESSION['user'])){
                                                echo '<li class="list-group-item"><a href="order.php?SID='.$myrow['ID'].'" class="btn btn-info">Order it!</a></li>';
                                            }else{
                                                echo' ';
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                                    ';
                                    }
                                    echo'
                                    </div><!-- /.row -->';
                            }
                            ?>
                    </div>
                    <div class="col-md-12">
                        <nav class="cd-stretchy-nav add-content">
                            <a class="cd-nav-trigger" href="#0">
                                <span aria-hidden="true"></span>
                            </a>

                            <ul>
                                <li><a href="weddingclothes.php"><span>Male</span></a></li>
                                <li><a href="weddingclothes.php?nonono=1"><span>Female</span></a></li>
                                <li><a href="weddingclothes1.php?nonono=2"><span>Inkoni</span></a></li>
                                <li><a href="weddingclothes1.php?nonono=3"><span>Ingofero</span></a></li>
                            </ul>

                            <span aria-hidden="true" class="stretchy-nav-bg"></span>
                        </nav>
                    </div>
                </div>
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
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/main.js"></script> 
</body>

</html>
