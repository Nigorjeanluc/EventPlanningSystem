<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <?php
                        echo 'Welcome '.$_SESSION['admin'];
                    ?>
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                    <?php
                    include('../connect.php');
                    $sqli="SELECT * FROM messages ORDER BY Date DESC LIMIT 0,4";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                        $text=substr($row['Content'],0,15).'...';
                        echo'
                        <li>
                            <a href="#">
                                <div>
                                    <strong>'.$row['Name'].'</strong>
                                    <span class="pull-right text-muted">
                                        <em>'.$row['Date'].'</em>
                                    </span>
                                </div>
                                <div>'.$text.'</div>
                            </a>
                        </li>
                        <li class="divider"></li>';
                        }
                    ?>
                        <li>
                            <a class="text-center" href="messages.php">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    /.dropdown-alerts
                </li>-->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="editadmin.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logadmin/index.php?no=1"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>-->
                            <!--/input-group -->
                        <!--</li>-->
                        <li>
                            <div class="row text-center">
                            <?php
                            include('../connect.php');
                            $adminn=$_SESSION['admin'];
                            $sqli="SELECT * FROM admin WHERE Name='$adminn' ORDER BY ID DESC";
                            $result=mysqli_query($dbcon,$sqli);
                            while ($row=mysqli_fetch_assoc($result)) {
                            $_SESSION['id']=$row['ID'];
                            echo'
                                <br />
                                <img style="width:100px;height:100px" class="img-circle" src="../'.$row['picone'].'">
                                <br />
                                <h4>Your profile picture</h4>';
                            }
                            ?>
                            </div>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-heart-o fa-fw"></i> Wedding<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="clothes.php">Clothes</a>
                                </li>
                                <li>
                                    <a href="cars.php">Cars</a>
                                </li>
                                <li>
                                    <a href="venue.php">Venues(Salles)</a>
                                </li>
                                <li>
                                    <a href="sono.php">Sonorisation</a>
                                </li>
                                <li>
                                    <a href="deco.php">Decoration</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li><a href="company.php"><i class="fa fa-users fa-fw"></i> Companies</a></li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> House parties & Birthdays<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cake.php">Cakes</a>
                                </li>
                                <li>
                                    <a href="cars.php">Cars</a>
                                </li>
                                <li>
                                    <a href="venue.php">Venues(Salles)</a>
                                </li>
                                <li>
                                    <a href="sono.php">Sonorisation</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="catering.php"><i class="fa fa-cutlery fa-fw"></i> Outside Catering</a>
                        </li>
                        <li>
                            <a href="items.php"><i class="fa fa-tasks fa-fw"></i> View all items</a>
                        </li>
                        <li>
                            <a href="messages.php"><i class="fa fa-comments fa-fw"></i> View all messages</a>
                        </li>
                        <li>
                            <a href="allorders.php"><i class="fa fa-tasks fa-fw"></i> View all orders</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>