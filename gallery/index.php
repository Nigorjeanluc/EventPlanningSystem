<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery | EventPlanningSytem</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body style="background-color:lightskyblue">
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <div class="box_wrapper">
    <header id="header">
      <div class="header_bottom">
        <div class="logo_area"><a class="logo" href="../index.php"><b>E</b>ventPlanningSystem <span>An Event Organizing Helper</span></a></div>
        <!--<div class="top_addarea"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>-->
      </div>
    </header>
    <?php
        include("../connect.php");
                    $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Wedding&clothes','Venue','Deco','Catering','Owner') ORDER BY ID DESC LIMIT 0,100");
                    $id= array('','','','','','','','','');
                    $pic = array('','','','','','','','','');
                    $title = array('','','','','','','','','');
                    $date = array('','','','','','','','','');
                    $i = 0;
                    while($myrow = mysqli_fetch_array($pipsql)){
                      $id[$i] = $myrow['ID'];
                      $pic[$i] = $myrow['picone'];
                      $title[$i] = $myrow['Name'];
                      $date[$i] = $myrow['Date'];
                      $i++;
                    }
      ?>
    <div class="latest_newsarea"> <span>Latest Items</span>
      <ul id="ticker01" class="news_sticker">
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[0].'">'.ucfirst($title[0]).'</a>';}else{echo'<a href="#">'.ucfirst($title[0]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[1].'">'.ucfirst($title[1]).'</a>';}else{echo'<a href="#">'.ucfirst($title[1]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[2].'">'.ucfirst($title[2]).'</a>';}else{echo'<a href="#">'.ucfirst($title[2]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[3].'">'.ucfirst($title[3]).'</a>';}else{echo'<a href="#">'.ucfirst($title[3]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[4].'">'.ucfirst($title[4]).'</a>';}else{echo'<a href="#">'.ucfirst($title[4]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[5].'">'.ucfirst($title[5]).'</a>';}else{echo'<a href="#">'.ucfirst($title[5]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[6].'">'.ucfirst($title[6]).'</a>';}else{echo'<a href="#">'.ucfirst($title[6]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[7].'">'.ucfirst($title[7]).'</a>';}else{echo'<a href="#">'.ucfirst($title[7]).'</a>';}?></li>
        <li><?php if(isset($_SESSION['user'])){echo'<a href="../order.php?SID='.$id[8].'">'.ucfirst($title[8]).'</a>';}else{echo'<a href="#">'.ucfirst($title[8]).'</a>';}?></li>
      </ul>
    </div>
    <div class="thumbnail_slider_area">
      <div class="owl-carousel">
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[0].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[0]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[0].'">'.$title[0].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[0].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[1].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[1]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[1].'">'.$title[1].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[1].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[2].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[2]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[2].'">'.$title[2].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[2].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[3].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[3]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[3].'">'.$title[3].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[3].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[4].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[4]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[4].'">'.$title[4].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[4].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[5].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[5]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[5].'">'.$title[5].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[5].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[6].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[6]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[6].'">'.$title[6].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[6].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[7].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[7]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[7].'">'.$title[7].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[7].'</a>';} ?>
        </div>
        <div style="font-family:cursive;" class="signle_iteam"> <?php echo'<div align="center"><img style="position:relative;height:396px" src="../'.$pic[8].'" alt=""></div>';?>
          <div class="sing_commentbox slider_comntbox">
            <p><i class="fa fa-calendar"></i><?php echo $date[8]; ?><!--19 Nov 2045--></p>
            <a href="#"><!--<i class="fa fa-comments"></i>20 Comments--></a>
          </div>
          <?php if(isset($_SESSION['user'])){echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="../order.php?SID='.$id[8].'">'.$title[8].'</a>';}else{echo '<a style="color:brown;text-shadow:2px 2px 2px white;text-shadow:2px 2px 2px white" class="slider_tittle" href="#">'.$title[8].'</a>';} ?>
        </div>
      </div>
    </div>
    <section id="contentbody">
      <div class="row">
        <!--<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="row">
            <div class="left_bar">
              <div class="single_leftbar">
                <h2><span>Recent Post</span></h2>
                <div class="singleleft_inner">
                  <ul class="recentpost_nav wow fadeInDown">
                    <li><a href="#"><img src="images/150x80.jpg" alt=""></a> <a class="recent_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a></li>
                    <li><a href="#"><img src="images/150x80.jpg" alt=""></a> <a class="recent_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a></li>
                    <li><a href="#"><img src="images/150x80.jpg" alt=""></a> <a class="recent_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a></li>
                  </ul>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Add</span></h2>
                <div class="singleleft_inner"> <a href="#"><img src="images/150x600.jpg" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <!--<div class="middle_bar">
              <div class="featured_sliderarea">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="item active"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 1</a></h1>
                      </div>
                    </div>
                    <div class="item"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 2</a></h1>
                      </div>
                    </div>
                    <div class="item"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 3</a></h1>
                      </div>
                    </div>
                    <div class="item"> <img src="images/668x328.jpg" alt="">
                      <div class="carousel-caption">
                        <h1><a href="#"> Aliquam malesuada diam eget turpis varius 4</a></h1>
                      </div>
                    </div>
                  </div>
                  <a class="left left_slide" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> </a> <a class="right right_slide" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> </a></div>
              </div>-->
              <?php
                include("../connect.php");
                            $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Wedding&clothes') ORDER BY ID DESC LIMIT 0,100");
                            $id= array('','','','','','','','','');
                            $pic = array('','','','','','','','','');
                            $title = array('','','','','','','','','');
                            $company = array('','','','','','','','','');
                            $date = array('','','','','','','','','');
                            $i = 0;
                            while($myrow = mysqli_fetch_array($pipsql)){
                              $id[$i] = $myrow['ID'];
                              $pic[$i] = $myrow['picone'];
                              $title[$i] = $myrow['Name'];
                              $company[$i] = $myrow['CompanyName'];
                              $date[$i] = $myrow['Date'];
                              $i++;
                            }
              ?>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="#">Clothes</a></div>
                <div class="single_category_inner">
                  <div class="catg_nav">
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[0].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[0].'">'.ucfirst($title[0]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[0]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[0]; ?></p>
                        <a href="#"><?php echo $company[0]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[1].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[1].'">'.ucfirst($title[1]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[1]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[1]; ?></p>
                        <a href="#"><?php echo $company[1]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[2].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[2].'">'.ucfirst($title[2]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[2]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[2]; ?></p>
                        <a href="#"><?php echo $company[2]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[3].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[3].'">'.ucfirst($title[3]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[3]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[3]; ?></p>
                        <a href="#"><?php echo $company[3]; ?></a></div>
                   </div>
                   <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[4].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[4].'">'.ucfirst($title[4]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[4]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[4]; ?></p>
                        <a href="#"><?php echo $company[4]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[5].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[5].'">'.ucfirst($title[5]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[5]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[5]; ?></p>
                        <a href="#"><?php echo $company[5]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[6].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[6].'">'.ucfirst($title[6]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[6]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[6]; ?></p>
                        <a href="#"><?php echo $company[6]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[7].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[7].'">'.ucfirst($title[7]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[7]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[7]; ?></p>
                        <a href="#"><?php echo $company[7]; ?></a></div>
                   </div>
                  </div>
                </div>
              </div>
              <?php
                include("../connect.php");
                            $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Car') ORDER BY ID DESC LIMIT 0,100");
                            $id= array('','','','','','','','','');
                            $pic = array('','','','','','','','','');
                            $title = array('','','','','','','','','');
                            $company = array('','','','','','','','','');
                            $date = array('','','','','','','','','');
                            $i = 0;
                            while($myrow = mysqli_fetch_array($pipsql)){
                              $id[$i] = $myrow['ID'];
                              $pic[$i] = $myrow['picone'];
                              $title[$i] = $myrow['Name'];
                              $company[$i] = $myrow['CompanyName'];
                              $date[$i] = $myrow['Date'];
                              $i++;
                            }
              ?>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="#">Car</a></div>
                <div class="single_category_inner">
                  <div class="catg_nav">
                     <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[0].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[0].'">'.ucfirst($title[0]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[0]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[0]; ?></p>
                        <a href="#"><?php echo $company[0]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[1].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[1].'">'.ucfirst($title[1]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[1]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[1]; ?></p>
                        <a href="#"><?php echo $company[1]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[2].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[2].'">'.ucfirst($title[2]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[2]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[2]; ?></p>
                        <a href="#"><?php echo $company[2]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[3].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[3].'">'.ucfirst($title[3]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[3]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[3]; ?></p>
                        <a href="#"><?php echo $company[3]; ?></a></div>
                   </div>
                  </div>
                </div>
              </div>
              <?php
                include("../connect.php");
                            $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Cake') ORDER BY ID DESC LIMIT 0,100");
                            $id= array('','','','','','','','','');
                            $pic = array('','','','','','','','','');
                            $title = array('','','','','','','','','');
                            $company = array('','','','','','','','','');
                            $date = array('','','','','','','','','');
                            $i = 0;
                            while($myrow = mysqli_fetch_array($pipsql)){
                              $id[$i] = $myrow['ID'];
                              $pic[$i] = $myrow['picone'];
                              $title[$i] = $myrow['Name'];
                              $company[$i] = $myrow['CompanyName'];
                              $date[$i] = $myrow['Date'];
                              $i++;
                            }
              ?>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="#">Cakes</a></div>
                <div class="single_category_inner">
                  <div class="catg_nav">
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[0].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[0].'">'.ucfirst($title[0]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[0]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[0]; ?></p>
                        <a href="#"><?php echo $company[0]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[1].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[1].'">'.ucfirst($title[1]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[1]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[1]; ?></p>
                        <a href="#"><?php echo $company[1]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[2].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[2].'">'.ucfirst($title[2]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[2]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[2]; ?></p>
                        <a href="#"><?php echo $company[2]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[3].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[3].'">'.ucfirst($title[3]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[3]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[3]; ?></p>
                        <a href="#"><?php echo $company[3]; ?></a></div>
                   </div>
                  </div>
                </div>
              </div>
              <?php
                include("../connect.php");
                            $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Venue') ORDER BY ID DESC LIMIT 0,100");
                            $id= array('','','','','','','','','');
                            $pic = array('','','','','','','','','');
                            $title = array('','','','','','','','','');
                            $company = array('','','','','','','','','');
                            $date = array('','','','','','','','','');
                            $i = 0;
                            while($myrow = mysqli_fetch_array($pipsql)){
                              $id[$i] = $myrow['ID'];
                              $pic[$i] = $myrow['picone'];
                              $title[$i] = $myrow['Name'];
                              $company[$i] = $myrow['CompanyName'];
                              $date[$i] = $myrow['Date'];
                              $i++;
                            }
              ?>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="#">Places</a></div>
                <div class="single_category_inner">
                  <div class="catg_nav">
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[0].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[0].'">'.ucfirst($title[0]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[0]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[0]; ?></p>
                        <a href="#"><?php echo $company[0]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[1].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[1].'">'.ucfirst($title[1]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[1]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[1]; ?></p>
                        <a href="#"><?php echo $company[1]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[2].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[2].'">'.ucfirst($title[2]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[2]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[2]; ?></p>
                        <a href="#"><?php echo $company[2]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[3].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[3].'">'.ucfirst($title[3]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[3]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[3]; ?></p>
                        <a href="#"><?php echo $company[3]; ?></a></div>
                   </div>
                  </div>
                </div>
              </div>
              <?php
                include("../connect.php");
                            $pipsql = mysqli_query($dbcon,"SELECT * FROM service WHERE Available= 1 AND Event IN ('Owner') ORDER BY ID DESC LIMIT 0,100");
                            $id= array('','','','','','','','','');
                            $pic = array('','','','','','','','','');
                            $title = array('','','','','','','','','');
                            $company = array('','','','','','','','','');
                            $date = array('','','','','','','','','');
                            $i = 0;
                            while($myrow = mysqli_fetch_array($pipsql)){
                              $id[$i] = $myrow['ID'];
                              $pic[$i] = $myrow['picone'];
                              $title[$i] = $myrow['Name'];
                              $company[$i] = $myrow['CompanyName'];
                              $date[$i] = $myrow['Date'];
                              $i++;
                            }
              ?>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="#">Other Companies</a></div>
                <div class="single_category_inner">
                  <div class="catg_nav">
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[0].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[0].'">'.ucfirst($title[0]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[0]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[0]; ?></p>
                        <a href="#"><?php echo $company[0]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[1].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[1].'">'.ucfirst($title[1]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[1]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[1]; ?></p>
                        <a href="#"><?php echo $company[1]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[2].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[2].'">'.ucfirst($title[2]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[2]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[2]; ?></p>
                        <a href="#"><?php echo $company[2]; ?></a></div>
                   </div>
                    <div class="col-md-3">
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <?php echo'<div align="center"><img style="position:relative;" src="../'.$pic[3].'" alt=""></div>';?> </a></div>
                      <?php if(isset($_SESSION['user'])){echo'<a class="catg_title" href="../order.php?SID='.$id[3].'">'.ucfirst($title[3]).'</a>';}else{echo'<a class="catg_title" href="#">'.ucfirst($title[3]).'</a>';} ?>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i><?php echo ' '.$date[3]; ?></p>
                        <a href="#"><?php echo $company[3]; ?></a></div>
                   </div>
                  </div>
                </div>
              </div>
              <!--<div class="single_category  wow fadeInDown">
                <div class="category_title"> <a href="pages/category-archive.html">Category 2</a></div>
                <div class="single_category_inner">
                  <ul class="catg_nav catg_nav2">
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x300.jpg" alt=""> </a></div>
                      <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i></p>
                        <a href="#"></a></div>
                      <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
                   </li>
                    <li>
                      <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x300.jpg" alt=""> </a></div>
                      <a class="catg_title" href="#">Fusce eu nulla semper porttitor felis sit amet</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i></p>
                        <a href="#"></a></div>
                      <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
                   </li>
                  </ul>
                </div>
              </div>
              <div class="category_three_fourarea  wow fadeInDown">
                <div class="category_three">
                  <div class="single_category">
                    <div class="category_title"> <a href="#">Category 3</a></div>
                    <div class="single_category_inner">
                      <ul class="catg_nav catg_nav3">
                        <li>
                          <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/292x150.jpg" alt=""> </a></div>
                          <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i>></p>
                            <a href="#"></a></div>
                          <p class="post-summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                       </li>
                      </ul>
                      <div class="catg3_bottompost wow fadeInDown">
                        <ul class="catg3_snav">
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="category_four wow fadeInDown">
                  <div class="single_category">
                    <div class="category_title"> <a href="#">Category 4</a></div>
                    <div class="single_category_inner">
                      <ul class="catg_nav catg_nav3">
                        <li>
                          <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/292x150.jpg" alt=""> </a></div>
                          <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i></p>
                            <a href="#"></a></div>
                          <p class="post-summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                       </li>
                      </ul>
                      <div class="catg3_bottompost wow fadeInDown">
                        <ul class="catg3_snav">
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                          <li>
                            <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                              <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                                <div class="sing_commentbox">
                                  <p><i class="fa fa-calendar"></i></p>
                                  <a href="#"></a></div>
                              </div>
                            </div>
                         </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="#">Category 5</a></div>
                <div class="single_category_inner">
                  <ul class="catg3_snav catg5_nav">
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i></p>
                            <a href="#"></a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i></p>
                            <a href="#"></a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i></p>
                            <a href="#"></a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i></p>
                            <a href="#"></a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i></p>
                            <a href="#"></a></div>
                        </div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                          <div class="sing_commentbox">
                            <p><i class="fa fa-calendar"></i></p>
                            <a href="#"></a></div>
                        </div>
                      </div>
                   </li>
                  </ul>
                </div>
              </div>-->
            </div>
          </div>
        </div>
        <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="row">
            <div class="right_bar">
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Popular Post</span></h2>
                <div class="singleleft_inner">
                  <ul class="catg3_snav ppost_nav wow fadeInDown">
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                    <li>
                      <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a></div>
                      </div>
                   </li>
                  </ul>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Ad</span></h2>
                <div class="singleleft_inner"> <a href="#"><img alt="" src="images/262x218.jpg"></a></div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <ul class="nav nav-tabs custom-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Most Popular</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Reader</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Recent Comment</a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                    </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="profile">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                    </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="messages">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                      <li>
                        <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                          <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                     </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Blog Archive</span></h2>
                <div class="singleleft_inner">
                  <div class="blog_archive">
                    <form action="#">
                      <select>
                        <option value="">Blog Archive</option>
                        <option value="">October(20)</option>
                      </select>
                    </form>
                  </div>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Labels</span></h2>
                <div class="singleleft_inner">
                  <ul class="label_nav">
                    <li><a href="#">Arts</a></li>
                    <li><a href="#">Cinema</a></li>
                    <li><a href="#">Comedy</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Tourism</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Nature</a></li>
                  </ul>
                </div>
              </div>
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Links</span></h2>
                <div class="singleleft_inner">
                  <ul class="link_nav">
                    <li><a href="#">Blog Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Error Page</a></li>
                    <li><a href="#">Wpfreeware</a></li>
                    <li><a href="#">Facebook Account</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </section>
    <footer id="footer">
      <!--<div class="footer_top">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Follow By Email</h2>
            <div class="subscribe_area">
              <p>"Subscribe here to get our newsletter, it is safe just Put your Email and click subscribe"</p>
              <form action="#">
                <div class="subscribe_mail">
                  <input class="form-control" type="email" placeholder="Email Address">
                  <i class="fa fa-envelope"></i></div>
                <input class="submit_btn" type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Popular Post</h2>
            <ul class="catg3_snav ppost_nav">
              <li>
                <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                </div>
             </li>
              <li>
                <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                </div>
             </li>
              <li>
                <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a></div>
                </div>
             </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInRight">
            <h2>Labels</h2>
            <ul class="footer_labels">
              <li><a href="#">Comedy</a></li>
              <li><a href="#">Arts</a></li>
              <li><a href="#">Cinema</a></li>
              <li><a href="#">Nature</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Tourism</a></li>
              <li><a href="#">Videos</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInRight">
            <h2>Contact Form</h2>
            <form action="#" class="contact_form">
              <label>Name</label>
              <input class="form-control" type="text">
              <label>Email*</label>
              <input class="form-control" type="email">
              <label>Message*</label>
              <textarea class="form-control" cols="30" rows="10"></textarea>
              <input class="send_btn" type="submit" value="Send">
            </form>
          </div>
        </div>
      </div>-->
      <div class="footer_bottom">
        <div class="footer_bottom_left">
          <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; EventPlanningSystem 2017, Inc. &middot;<span id="solow"></span> <a href="../logadmin/index.php" target="__blank">Admin</a> &middot;</p>
        </div>
        <div class="footer_bottom_right">
          <ul>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Googel+" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Rss" href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>