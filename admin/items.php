<?php
    session_start();
    $_SESSION['admin'];
    if(!isset($_SESSION['admin'])){
        echo "<meta http-equiv='refresh' content='0;url=../logadmin/'>";
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

    <title>Admin--EventPlanningSystem.</title>

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
                        <h1 class="page-header text-center">All items</h1>
                        <?php
                            if(isset($_REQUEST['yes'])){
                                echo '
                                    <div class="alert alert-warning alert-dismissable text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Item deleted.
                            </div>
                                ';
                            }
                        ?>
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Product</th>
                                                                            <th>Price</th>
                                                                            <th>Qualities</th>
                                                                            <th>Owner&Phone</th>
                                                                            <th>In store?</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                        include("../connect.php");
                                                                        $sqli="SELECT * FROM service ORDER BY ID DESC";
                                                                        $result=mysqli_query($dbcon,$sqli);
                                                                        while ($row=mysqli_fetch_assoc($result)) {
                                                                        echo'
                                                                        <tr class="odd gradeX">
                                                                            <td>'.$row['Name'].'</td>
                                                                            <td>'.$row['Price'].'</td>
                                                                            <td>'.$row['Quality'].'</td>
                                                                            <td class="center">'.$row['CompanyName'].'<br />'.$row['Phone'].'</td>
                                                                            <td class="center">
                                                                                <p><a href="../opera/delete.php?del='.$row['ID'].'" class="btn btn-danger">Delete</a> | <a href="edit.php?ed='.$row['ID'].'" class="btn btn-info">Edit</a></p>
                                                                            </td>
                                                                        </tr>
                                                                        ';
                                                                        }
                                                                    ?>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                                <!-- /.table-responsive -->
                        </div>
                        <!-- /.table-responsive -->
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

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        /*$('.well').html("Available");
        $('.well').mouseleave(function(event){
            $('.well').html("Booked");
        });
        $('.well').mouseenter(function(event){
            $('.well').html("Available");
        });*/
        $('#dataTables-example').DataTable({
            responsive: true
        });
        $('#dataTables-example1').DataTable({
            responsive: true
        });
        $('#dataTables-example2').DataTable({
            responsive: true
        });
        $('#dataTables-example3').DataTable({
            responsive: true
        });
        $('#dataTables-example4').DataTable({
            responsive: true
        });
        $('#dataTables-example5').DataTable({
            responsive: true
        });
        $('#dataTables-example6').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
