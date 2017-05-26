<?php
    session_start();
    $_SESSION['admin'];
    if(!isset($_SESSION['admin'])){
        echo "<meta http-equiv='refresh' content='0;url=../operations/login.php?no=0'>";
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

    <title>Admin-EventPlanningSystem.</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <?php
            include('navuser.php');
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">Talk to Seller</h1>
                            <div class="chat-panel panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-comments fa-fw"></i> Chat
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu slidedown">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-refresh fa-fw"></i> Refresh
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-check-circle fa-fw"></i> Available
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-times fa-fw"></i> Busy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-clock-o fa-fw"></i> Away
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <ul class="chat">
                                <?php
                                include('../connect.php');
                                $adminn=$_REQUEST['user'];
                                $sqli="SELECT * FROM users WHERE Username='$adminn' ORDER BY ID DESC";
                                $resulttt=mysqli_query($dbcon,$sqli);
                                while ($rrow=mysqli_fetch_assoc($resulttt)) {
                                    $rrrow = $rrow['Username'];
                                }
                                $adminnn=$_SESSION['admin'];
                                $sqliii="SELECT * FROM Admin WHERE ID=1 ORDER BY ID DESC";
                                $resultttt=mysqli_query($dbcon,$sqliii);
                                while ($rroww=mysqli_fetch_assoc($resultttt)) {
                                    $rrroww = $rroww['Name'];
                                }
                                $sqliiii="SELECT User,Toooo,Content,Date FROM MessageToUser WHERE Toooo='$rrrow' UNION ALL SELECT User,NULL,Content,Date FROM MessageToAdmin WHERE User='$rrrow' ORDER BY Date ASC";
                                $resulttttt=mysqli_query($dbcon,$sqliiii);
                                while($jayrow=mysqli_fetch_array($resulttttt)){
                                if(!(isset($jayrow['Toooo']))){
                                    echo'
                                        <li class="left clearfix">
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">'.$rrrow.'</strong>
                                                    <small class="pull-right text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> '.$jayrow['Date'].'
                                                    </small>
                                                </div>
                                                <p class="text-center">
                                                    '.$jayrow['Content'].'
                                                </p>
                                            </div>
                                        </li>';
                                }else{
                                        echo'
                                        <li class="right clearfix">
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <small class=" text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> '.$jayrow['Date'].'</small>
                                                    <strong class="pull-right primary-font">'.$rrroww.'</strong>
                                                </div>
                                                <p class="text-center">
                                                    '.$jayrow['Content'].'
                                                </p>
                                            </div>
                                        </li>';
                                    }
                                }
                                ?>
                               <li id="here"></li> 
                                </ul>
                            </div>
                            <!-- /.panel-body -->
                            <div class="panel-footer">
                            <form action="../opera/chat.php" method="post">
                                <?php
                                    $myuse=$_SESSION['admin'];
                                    echo'
                                    <input style="visibility:hidden" name="user" type="text" class="form-control input-sm" value="'.$myuse.'" />
                                    <input style="visibility:hidden" name="to" type="text" class="form-control input-sm" value="'.$_REQUEST['user'].'" />';
                                ?>
                                <div class="input-group">
                                    <input id="btn-input" name="content" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                    <span class="input-group-btn">
                                        <button name="toadminn" type="submit" class="btn btn-warning btn-sm" id="btn-chat">
                                            Send
                                        </button>
                                    </span>
                                </div>
                            </form>
                            </div>
                            <!-- /.panel-footer -->
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
