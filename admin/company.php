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
                        <h1 class="page-header text-center">Companies</h1>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        List of all companies
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Owner</th>
                                                <th>Company</th>
                                                <th>Contact</th>
                                                <th>Added on</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include("../connect.php");
                                            $idd=$_SESSION['id'];
                                            $sqli="SELECT * FROM company WHERE Admin_ID=$idd ORDER BY ID DESC";
                                            $result=mysqli_query($dbcon,$sqli);
                                             while ($row=mysqli_fetch_assoc($result)) {
                                                 echo'
                                                 <tr class="odd gradeX">
                                                    <td>'.$row['Owner'].'</td>
                                                    <td>'.$row['Company'].'</td>
                                                    <td class="center">'.$row['Email'].'<br />'.$row['Phone'].'</td>
                                                    <td>'.$row['Date'].'</td>
                                                 </tr>
                                                 ';
                                                 }
                                        ?>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                                <!-- /.table-responsive -->
                                    </div><!--panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div id="here" class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        Add new service
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <?php
                                        $yes=isset($_REQUEST['yes']);
                                        if($yes){
                                            echo'
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                Services added <a href="#" class="alert-link">More Details</a>.
                                            </div>
                                            ';
                                        }
                                        ?>
                                        <form role="form" method="post" action="../opera/addsomething.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name of the owner</label>
                                            <input class="form-control" type="text" name="owner" placeholder="Enter the owner" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name of company</label>
                                            <input class="form-control" type="text" name="company" placeholder="Enter the business" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone number</label>
                                            <input class="form-control" type="tel" name="phone" placeholder="Enter the owner's phone number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" placeholder="Enter the owner's email" required>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <label>Select 3 pictures of your devices...</label>
                                            <input name="picone" type="file" required>
                                            <input name="pictwo" type="file">
                                            <input name="picthree" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input class="form-control" type="text" name="category" placeholder="Enter the category" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter the password" required>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button type="submit" name="yea" class="btn btn-success">Add new company</button>
                                    </div>
                                </form>
                                    <!--</div>-->
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->
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
        $(function(){
            $("#add").on("click dblclick",function(event){
                event.preventDefault();
                var val = $("#G").val();
                if(val !==""){
                    var elem = $("<li><p></p></li>").text(val);
                    $(elem).append("  <span class='btn-xs btn-danger glyphicon glyphicon-remove-sign rem'></span>");
                    $("#mylist").append(elem);
                    $("#G").val("");
                    $(".rem").on("click dblclick",function(){
                        $(this).parent().remove();
                        var knk = $("#mylist").text();
                        $("#ollist").val(knk);
                    });
                    var knk = $("#mylist").text();
                    $("#ollist").val(knk);
                }
            });
        });

        $('.well').html("Available");
        $('.well').mouseleave(function(event){
            $('.well').html("Booked");
        });
        $('.well').mouseenter(function(event){
            $('.well').empty();
        });
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
    <script src="../dist/kbss.js"></script>
</body>

</html>

