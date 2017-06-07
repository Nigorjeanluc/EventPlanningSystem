<?php
  session_start();
  include("connect.php");
  $id=$_REQUEST['SID'];
  $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE ID='$id'");
  while($myrow = mysqli_fetch_array($pipsql)){
      $product=$myrow['Name'];
      $image=$myrow['picone'];
      $price=$myrow['Price'];
      $currency=$myrow['Currency'];
      $Company=$myrow['CompanyName'];
      $pphone=$myrow['Phone'];
      $province=$myrow['Province'];
      $district=$myrow['District'];
      $sector=$myrow['Sector'];
      $more=$myrow['MoreAbout'];
  }
  $name=$_SESSION['user'];
  $pipsqli = mysqli_query($dbcon,"SELECT * FROM users WHERE Username='$name'");
  while($row = mysqli_fetch_array($pipsqli)){
      $username=$row['Username'];
      $email=$row['Email'];
      $phone=$row['Phone'];
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
    <link href="jumbotron-narrow.css" rel="stylesheet">
    <link href="mycss.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-color:lightskyblue;">

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="about.php#here">Contact Us</a></li>
        </ul>
        <h3 style="font-family:cursive" class="text-muted"><?php echo $product; ?></h3>
      </div>

      <div style="background-color:lightskyblue" class="col-lg-12 jumbotron">
          <div class="col-lg-6">
                <div class="row"><?php echo'<img style="width:100%;height:300px" class="img-responsive" src="'.$image.'" alt="">'; ?></div>
        </div>
        <div style="font-family:cursive" class="col-lg-6">
            <p>Price: <b><?php echo $price.' '.$currency; ?></b></p>
            <p>Owner: <b><?php echo $Company; ?></b></p>
            <p>Tel: <b><?php echo $pphone; ?></b></p>
            <p>Place: <b><?php echo $province.', '.$district.', '.$sector; ?></b></p>
            <p>More: <b><?php echo $more; ?></b></p>
        </div>
      </div>

      <div class="row marketing">
        <div style="background-color:lightseagreen" class="col-lg-12">
            <?php
            if(!isset($_REQUEST['yes'])){
                echo'
                <h2 style="font-family:cursive" class="text-center">Make your order here, '.$_SESSION['user'].'.</h2>
                <form method="post" action="opera/loginadmin.php">
                    <div class="form-group">
                        <textarea name="contents" class="form-control" rows="3" required></textarea><br />
                        <p class="text-center"><input type="submit" name="kbss" class="btn btn-success" value="Order" /> | <input type="reset" class="btn btn-danger" value="Reset"/></p>
                        <input style="visibility:hidden;" name="SID" class="form-control" type="text" value="'.$id.'" required />
                        <input style="visibility:hidden;" name="pro" class="form-control" type="text" value="'.$product.'" required />
                        <input style="visibility:hidden;" name="phone" class="form-control" type="text" value="'.$pphone.'" required />
                    </div>
                    </form>';
            }else{
                if($_REQUEST['yes']=1)
                echo'
                <h2 style="font-family:cursive" class="text-center">Thanks for your participation, '.$_SESSION['user'].'.</h2>';
            }
            ?>
        </div>
      </div>

      <?php include('footer.php'); ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
