<?php
    session_start();
    if(!isset($_SESSION['user'])){
        echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_SESSION['user']; ?> | EventPlanningSystem.</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('navuser1.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Chat with the admin here</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php
                if(isset($_REQUEST['yes'])){
                    echo'
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <span class="text-center"><i class="fa fa-info-circle"></i>  <strong>Message sent!</strong></span>
                        </div>
                    </div>
                </div>
                    ';
                }
                ?>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><i class="fa fa-clock-o fa-fw"></i> All messages</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <?php
                                include('../connect.php');
                                $user= $_SESSION['user'];
                                $sqli="SELECT * FROM users WHERE Username='$user' ORDER BY ID DESC";
                                $resulttt=mysqli_query($dbcon,$sqli);
                                while ($rrow=mysqli_fetch_assoc($resulttt)) {
                                    $sellerId= $rrow['ID'];
                                    $rrrow = $rrow['Username'];
                                    $phone = $rrow['Phone'];
                                }
                                $sqliii="SELECT * FROM admin WHERE ID=1 ORDER BY ID DESC";
                                $resultttt=mysqli_query($dbcon,$sqliii);
                                while ($rroww=mysqli_fetch_assoc($resultttt)) {
                                    $rrroww = $rroww['Name'];
                                }
                                $sqliiii="SELECT User,Toooo,Content,Date FROM MessageToUser WHERE Toooo='$rrrow' UNION ALL SELECT User,NULL,Content,Date FROM MessageToAdmin WHERE User='$rrrow' ORDER BY Date ASC";
                                $resulttttt=mysqli_query($dbcon,$sqliiii);
                                while($jayrow=mysqli_fetch_array($resulttttt)){
                                    if(isset($jayrow['Toooo'])){
                                        echo'
                                        <a href="#" class="list-group-item text-center">
                                            <div style="padding:5px 5px 5px 5px" class="row">
                                            <span class="badge pull-right">'.$jayrow['Date'].'</span>
                                            <span class="pull-left"><i class="fa fa-fw fa-comment"></i> <b>'.$rrroww.'</b></span>
                                            '.$jayrow['Content'].'
                                            </div>
                                        </a>
                                        ';
                                    }
                                    else{
                                        echo'
                                        <a href="#" class="list-group-item text-center">
                                            <div style="padding:5px 5px 5px 5px" class="row">
                                            <span class="badge pull-left">'.$jayrow['Date'].'</span>
                                            <span class="pull-right"><i class="fa fa-fw fa-user"></i> <b>'.$rrrow.'<b></span>
                                            '.$jayrow['Content'].'
                                            </div>
                                        </a>
                                        ';
                                    }
                                }
                                ?>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                    <form method="post" action="../opera/chat.php">
                                        <div class="col-lg-10 form-group">
                                            <textarea class="form-control" name="content" placeholder="type your message here" rows="3"></textarea>
                                            <?php echo'<input style="visibility:hidden" type="text" name="user" value="'.$_SESSION['user'].'" />'; ?>
                                        </div>
                                        <div class="col-lg-2 form-group">
                                            <input type="submit" name="toadmin" class="btn btn-success" value="Send"/>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
