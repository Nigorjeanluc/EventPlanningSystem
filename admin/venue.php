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
                        <h1 class="page-header text-center">Venues</h1>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        All kinds of venue
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
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
                                                                        $sqli="SELECT * FROM service WHERE Event='Venue' ORDER BY ID DESC";
                                                                        $result=mysqli_query($dbcon,$sqli);
                                                                        while ($row=mysqli_fetch_assoc($result)) {
                                                                        echo'
                                                                        <tr class="odd gradeX">
                                                                            <td>'.$row['Name'].'</td>
                                                                                <td>'.$row['Price'].'</td>
                                                                                <td>'.$row['Quality'].'</td>
                                                                                <td class="center">'.$row['CompanyName'].'<br />'.$row['Phone'].'</td>
                                                                                <td class="center">
                                                                                <div class="well">
                                                                                </div>
                                                                                '.$row['Available'].'
                                                                            </td>
                                                                        </tr>
                                                                        ';
                                                                        }
                                                                    ?>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                                <!-- /.table-responsive -->
                                                                <div align="right"><button class="btn btn-default" onClick="window.print()">Print</button></div>
                                    </div><!--panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div id="here" class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        Add new venue
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <!-- Nav tabs
                                        <ul class="nav nav-pills">
                                            <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                                            </li>
                                            <li><a href="#profile-pills" data-toggle="tab">Profile</a>
                                            </li>
                                            <li><a href="#messages-pills" data-toggle="tab">Messages</a>
                                            </li>
                                            <li><a href="#settings-pills" data-toggle="tab">Settings</a>
                                            </li>
                                        </ul>

                                         Tab panes
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="home-pills">
                                                <h4>Home Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="tab-pane fade" id="profile-pills">
                                                <h4>Profile Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="tab-pane fade" id="messages-pills">
                                                <h4>Messages Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="tab-pane fade" id="settings-pills">
                                                <h4>Settings Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>-->
                                        <?php
                                        $yes=isset($_REQUEST['yes']);
                                        if($yes){
                                        echo'
                                                        <div class="alert alert-success alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                            Venue added <a href="#" class="alert-link">More Details</a>.
                                                        </div>
                                                        ';
                                            }
                                        ?>
                                        <form role="form" method="post" action="../opera/addsomething.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name of the company or the place owner</label>
                                            <input class="form-control" type="text" name="company" placeholder="Enter the owner of the place" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone number</label>
                                            <input class="form-control" type="tel" name="phone" placeholder="Enter the owner's phone number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name of the place</label>
                                            <input class="form-control" type="text" name="item" placeholder="Venue name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" name="price" type="text" placeholder="Enter the price of your product" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Currency </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline1" value="$">Dollars
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline2" value="Rfw" checked>Rwandan Francs
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline3" value="Ugandan Shillings">Ugandan Shillings
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline3" value="Kenyan Shillings">Kenyan Shillings
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline4" value="TZ Shillings">Tanzanian Shillings
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline5" value="Burundian Francs">Burundian Francs
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Period of rent </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="period" id="optionsRadiosInline1" value="Per Hour">Per Hour
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="period" id="optionsRadiosInline2" value="Per Day" checked>Per Day
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="period" id="optionsRadiosInline3" value="Per Month">Per Month
                                            </label>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4 class="text-center">Location</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Province
                                                        </span>
                                                        <input name="province" list="pro" type="text" class="form-control">
                                                        <datalist id="pro">
                                                            <option value="Kigali">
                                                            <option value="Southern Province">
                                                            <option value="Northern Province">
                                                            <option value="Eastern Province">
                                                            <option value="Western Province">
                                                        </datalist>
                                                    </div><!-- /input-group -->
                                                </div><!-- /.col-lg-6 -->
                                                </div>
                                                <br />
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            District
                                                        </span>
                                                        <input class="form-control" list="dis" name="district" type="text" autocomplete required>
                                                        <datalist id="dis">
                                                            <option value="Kicukiro">
                                                            <option value="Gasabo">
                                                            <option value="Nyarugenge">
                                                            <option value="Burera">
                                                            <option value="Musanze">
                                                            <option value="Gicumbi">
                                                            <option value="Gakenke">
                                                            <option value="Rulindo">
                                                            <option value="Huye">
                                                            <option value="Gisagara">
                                                            <option value="Nyaruguru">
                                                            <option value="Nyamagabe">
                                                            <option value="Muhanga">
                                                            <option value="Nyanza">
                                                            <option value="Kamonyi">
                                                            <option value="Ruhango">
                                                            <option value="Karongi">
                                                            <option value="Nyabihu">
                                                            <option value="Rubavu">
                                                            <option value="Rusizi">
                                                            <option value="Nyamasheke">
                                                            <option value="Rutsiro">
                                                            <option value="Ngororero">
                                                            <option value="Rwamagana">
                                                            <option value="Nyagatare">
                                                            <option value="Kayonza">
                                                            <option value="Kirehe">
                                                            <option value="Ngoma">
                                                            <option value="Bugesera">
                                                            <option value="Gatsibo">
                                                        </datalist>
                                                    </div><!-- /input-group -->
                                                </div><!-- /.col-lg-6 -->
                                            </div><!-- row -->
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        Sector
                                                    </span>
                                                    <input type="text" name="sector" class="form-control">
                                                    </div><!-- /input-group -->
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- row -->
                                        </div><!-- /.row -->
                                        <hr>
                                        <div class="form-group">
                                            <br>
                                            <label>Select 3 pictures of your product or service...</label>
                                            <input name="picone" type="file" required>
                                            <input name="pictwo" type="file">
                                            <input name="picthree" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Quality</label>
                                            <select name="quality" class="form-control">
                                                <option>----</option>
                                                <option>Good quality</option>
                                                <option>Low quality</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Categorie</label>
                                            <select id="sindi" name="cat" class="form-control">
                                                <option>---</option>
                                                <option>Hotel</option>
                                                <option>Swimming Pool</option>
                                                <option>Garden</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>More about the place...</label>
                                            <textarea class="form-control" name="about" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button type="submit" name="yeahhh" class="btn btn-primary">Add your venue</button>
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
        $('.well').html("Available");
        $('.well').mouseleave(function(event){
            $('.well').html("Booked");
        });
        $('.well').mouseenter(function(event){
            $('.well').empty();
        });
        $("#sindi").change(function(){
            var haha = $('#sindi').val();
            switch(haha){
                case "---":
                    $("#sindi").attr('value','Other');
                    $("#sindi").nextAll().remove();
                    var txt = $('<p class="text-primary text-center">Choose if it\'s a hotel, swimming pool, a garden or other(---).</p>');
                    $("#sindi").after(txt);
                    break;
                case "Hotels":
                    $("#sindi").nextAll().remove();
                    var txt = $('<p class="text-success text-center">Hotels.</p>');
                    $("#sindi").after(txt);
                    break;
                case "Swimming Pool":
                    $("#sindi").nextAll().remove();
                    var txt = $('<p class="text-success text-center">Pool.</p>');
                    $("#sindi").after(txt);
                    break;
                case "Garden":
                    $("#sindi").nextAll().remove();
                    var txt = $('<p class="text-success text-center">Garden.</p>');
                    $("#sindi").after(txt);
                    break;
            }
            /*if(haha = "---"){
                var txt = $('<p class="text-successhelp-block">Choose if it\'s a hotel, swimming pool, a garden or other(---).</p>');
                $("#sindi").after(txt);
            }*/
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
</body>

</html>
