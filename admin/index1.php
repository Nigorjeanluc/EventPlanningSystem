<?php
    session_start();
    $_SESSION['company'];
    if(!isset($_SESSION['company'])){
        echo "<meta http-equiv='refresh' content='0;url=../logadmin/index1.php'>";
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
            include('navuser1.php');
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">All about products or services</h1>
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
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity in store</th>
                                                <th>Added on</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include("../connect.php");
                                            $idd=$_SESSION['idd'];
                                            $sqli="SELECT * FROM service WHERE AdminID=$idd ORDER BY ID DESC";
                                            $result=mysqli_query($dbcon,$sqli);
                                             while ($row=mysqli_fetch_assoc($result)) {
                                                 echo'
                                                 <tr class="odd gradeX">
                                                    <td>'.$row['Name'].'</td>
                                                    <td>'.$row['Price'].' '.$row['Currency'].'</td>
                                                    <td class="center">'.$row['Quantity'].'</td>
                                                    <td>'.$row['Date'].'</td>
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
                                            <label>Name of your product or service:</label>
                                            <input class="form-control" type="text" name="item" placeholder="Name of service or product" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" name="price" type="text" placeholder="Enter the price of your product" required>
                                        </div>
                                        <div style="visibility:none" class="form-group">
                                            <label>Company</label>
                                            <?php
                                                $nname = $_SESSION['company'];
                                                $sqli="SELECT * FROM company WHERE Owner='$nname'";
                                                $result=mysqli_query($dbcon,$sqli);
                                                while ($row=mysqli_fetch_assoc($result)) {
                                                echo'<input class="form-control" name="comp" type="text" value="'.$row['Company'].'" required>';
                                                }
                                            ?>
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
                                            <label>Period of rent if any </label>
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
                                            <label>Quantity</label>
                                            <select name="quantity" class="form-control">
                                            <?php
                                                $quant=1;
                                                while($quant<=1000){
                                                    echo"<option>$quant</option>";
                                                    $quant++;
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>More about your product or service...</label>
                                            <textarea class="form-control" name="about" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button type="submit" name="yeaa" class="btn btn-primary">Add my product or service</button>
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
