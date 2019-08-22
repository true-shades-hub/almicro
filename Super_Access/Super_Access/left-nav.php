
<?php require_once('class.php') ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Almicro Admin Panel | Super Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 

 <!-- jquery   -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Almicro<span class="dashboard_text">Design dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="index.html">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Category</span>
                <small class="label pull-right label-primary1">
                  <?php $nav = new Select; 
                   echo $nav->Category()->num_rows;
                    ?></small>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_cate.php"><i class="fa fa-angle-right"></i>New Category</a></li>
                  <li><a href="show_cate.php"><i class="fa fa-angle-right"></i>All Category</a></li>
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-wrench"></i>
                <span>Sub Category</span> 
                <small class="label pull-right label-info1">
                  <?php 
                   
                   echo $nav->Subcategory()->num_rows;
                    ?></small>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_subcate.php"><i class="fa fa-angle-right"></i>New Sub-Category</a></li>
                  <li><a href="show_subcate.php"><i class="fa fa-angle-right"></i>All Sub-Category</a></li>
                  </ul>
              </li>
			  <li>
        <li class="treeview">
                <a href="#">
                <i class="fa fa-inbox"></i>
                <span>Products</span> 
                <small class="label pull-right label-info1">
                  <?php 
                 
                   echo $nav->Product()->num_rows;
                    ?></small>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="addproduct.php"><i class="fa fa-angle-right"></i>New Product</a></li>
                  <li><a href="showproducts.php"><i class="fa fa-angle-right"></i>All Product</a></li>
                  </ul>
              </li>
			  <li>
                <a href="banner.php">
                <i class="fa fa-th"></i> <span>Site Banners</span>
                <small class="label pull-right label-primary1">
                  <?php 
                  
                   echo $nav->Banner()->num_rows;
                    ?></small>
                <small class="label pull-right label-info"></small>
                </a>
              </li>
              <li>
                <a href="gallery.php">
                <i class="fa fa-picture-o"></i> <span>Site Gallery</span>
                <small class="label pull-right label-info1">
                  <?php 
                 
                   echo $nav->Gallery()->num_rows;
                    ?></small>
                <small class="label pull-right label-info"></small>
                </a>
              </li>
       
     
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		