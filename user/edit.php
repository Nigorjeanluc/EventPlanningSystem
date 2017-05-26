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
        <?php
            include('navuser1.php');
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">Edit your profile</h1>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                Edit your admin profile...
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <?php
                                include('../connect.php');
                                $user=$_SESSION['user'];
                                $sqli="SELECT * FROM users WHERE Username='$user' ORDER BY ID DESC";
                                $result=mysqli_query($dbcon,$sqli);
                                while ($row=mysqli_fetch_assoc($result)) {
                                echo'
                                    <form role="form" action="#" method="post" enctype="multipart/form-data">
                                    
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                Name and Password
                                            </div>
                                            <div class="panel-body">
                                                <h1>Lastly Updated on <small>'.$row['Date'].'</small></h1>
                                                <div class="form-group">
                                                    <label>Edit your name</label>
                                                    <input class="form-control" name="admin" type="text" value="'.$row['Username'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label>Change your password</label>
                                                    <input class="form-control" name="password" type="text" value="'.$row['Password'].'">
                                                </div>
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <div class="panel-footer text-center">
                                <button type="submit" name="edit" class="btn btn-primary">Save</button>
                            </div>
                            </form>';
                        }
                        ?>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
