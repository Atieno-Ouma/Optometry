<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="optometry, mmust optometry, eye clinic, mmust eye clinic, mmust hospital">
	<meta name="description" content="Welcome to the Optometry Clinic for Masinde Muliro University of Science and Technology">
	<meta name="robots" content="noindex,nofollow">
	<title>Optometry Dashboard</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/icons/eyeglasses.svg">
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
	<!-- toast CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
	<!-- morris CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
	<!-- chartist CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/dashboard/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
	<!-- animation CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/css/animate.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/css/style.css" rel="stylesheet">
	<!-- color CSS -->
	<link href="<?php echo base_url()?>assets/dashboard/css/colors/default.css" id="theme" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
	<svg class="circular" viewBox="25 25 50 50">
		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
	</svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
	<!-- ============================================================== -->
	<!-- Topbar header - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<nav class="navbar navbar-default navbar-static-top m-b-0">
		<div class="navbar-header">
			<div class="top-left-part">
				<!-- Logo -->
				<a class="logo" href="dashboard.html">
					<!-- Logo icon image, you can use font-icon also -->
					<b>
						<img src="<?php echo base_url() ?>assets/icons/icon_logo.png" alt="home"  class="light-logo" />


					</b>

				</a>
			</div>
			<!-- /Logo -->
			<ul class="nav navbar-top-links navbar-right pull-right">
				<li>
					<a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
				</li>
				<li>
					<form role="search" class="app-search hidden-sm hidden-xs m-r-10">
						<input type="text" placeholder="Search..." class="form-control">
						<a href="">
							<i class="fa fa-search"></i>
						</a>
					</form>
				</li>
				<li>
					<a class="profile-pic" href="#"> <img src="<?php echo base_url()?>assets/dashboard/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-header -->
		<!-- /.navbar-top-links -->
		<!-- /.navbar-static-side -->
	</nav>
	<!-- End Top Navigation -->
