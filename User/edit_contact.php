<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('config.php'); ?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_validation :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="basic_table.php" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<!-- <div class="top-nav clearfix"> -->
    <!--search & user info start-->
    <!-- <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
    </ul> -->
    <!--search & user info end-->
<!-- </div> -->
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <!-- <li>
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Admin</span>
                    </a>
                </li> -->
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Add Data</span>
                    </a><ul class="sub">
                        <li><a href="menu.php">Menu</a></li>
                        
                    </ul>
                    <a class="active" href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a class="active" href="basic_table.php">Booking Table</a></li>
                        <li><a href="responsive_table.php">Feedback Table</a></li>
                        <li><a href="menu_table.php">Menu Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.php">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">


           <!-- UPDATE BOOKING -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                       Edit Booking
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">    

                                <?php
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM contact WHERE id=$id";
                                        $query = mysqli_query($kon, $sql);
                                        $row = mysqli_fetch_assoc($query);

                                        if (mysqli_num_rows($query) <1) {
                                            die("data not found");
                                         }
                                 ?>                           

                                <form class="cmxform form-horizontal " id="commentForm" method="POST" action="update_contact.php">
                                    <div class="form-group ">
                                        <label  class="control-label col-lg-3">ID</label>
                                        <div class="col-lg-6">
                                            <input name="id" class=" form-control" value="<?php echo $row['id'];?>"  type="text" disabled>
                                            <input name="id" class=" form-control" value="<?php echo $row['id'];?>"  type="hidden" enabled>
                                        </div>
                                    </div>                                                                                                                    
                                    <div class="form-group ">
                                        <label  class="control-label col-lg-3">Nama</label>
                                        <div class="col-lg-6">
                                            <input name="name" class=" form-control" type="text" value="<?php echo $row['name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label  class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input name="email" class=" form-control" type="text" value="<?php echo $row['email'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label  class="control-label col-lg-3">Subject</label>
                                        <div class="col-lg-6">
                                            <input name="subject" class=" form-control appointment_date" type="text" value="<?php echo $row['subject'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label  class="control-label col-lg-3">Pesan</label>
                                        <div class="col-lg-6">
                                            <input name="pesan" class=" form-control appointment_time"  type="text" value="<?php echo $row['pesan'];?>">
                                        </div>
                                    </div>                                                                
                                    
                                     
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" name="updatecontact" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
