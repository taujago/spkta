<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<title> <?php echo $title; ?> || Sistem Pendukung Keputusan</title>

		<!-- Title -->
		<title>Vobilet - a responsive, flat and full featured admin template</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/dark/fonts/fonts/font-awesome.min.css">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="<?php echo base_url(); ?>/dark/css/dashboard.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url(); ?>/dark/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo base_url(); ?>/dark/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url(); ?>/dark/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo base_url(); ?>/dark/plugins/iconfonts/plugin.css" rel="stylesheet" />

		<link href="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.css" rel="stylesheet" />

		<!-- Data table css -->
		<link href="<?php echo base_url(); ?>/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		

		<link href="<?php echo base_url(); ?>/assets/plugins/select2/select2.min.css" rel="stylesheet" />


		<link href="<?php echo base_url(); ?>/assets/plugins/accordion/accordion.css" rel="stylesheet" />




<!-- Dashboard js -->
		<script src="<?php echo base_url(); ?>/dark/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>/dark/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>/dark/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>/dark/js/vendors/selectize.min.js"></script>
		<script src="<?php echo base_url(); ?>/dark/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo base_url(); ?>/dark/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo base_url(); ?>/dark/plugins/rating/jquery.rating-stars.js"></script>
		<!-- Side menu js -->
		<script src="<?php echo base_url(); ?>/dark/plugins/toggle-sidebar/js/sidemenu.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo base_url(); ?>/dark/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<script src="<?php echo base_url(); ?>/assets/plugins/select2/select2.full.min.js"></script>

		 
		 <!---Accordion Js-->
		<script src="<?php echo base_url(); ?>/assets/plugins/accordion/accordion.min.js"></script>



		<!-- Custom js -->
		<script src="<?php echo base_url(); ?>/dark/js/custom.js"></script>

		

	</head>
	<body class="app sidebar-mini rtl">
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-main">
				<!-- Navbar-->
				<header class="app-header header">

					<!-- Navbar Right Menu-->
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img alt="vobilet logo" class="header-brand-img" src="<?php echo base_url(); ?>/dark/images/brand/logo.png">
							</a>
							<!-- Sidebar toggle button-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="">
									<form class="input-icon mt-2 mr-2">
										<input class="form-control header-search" placeholder="Search&hellip;" tabindex="1" type="search">
										<div class="input-icon-addon">
											<i class="fe fe-search"></i>
										</div>
									</form>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-user-o"></i>
										<span class="nav-unread bg-green"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/male/4.jpg)"></span>
											<div>
												<strong>Madeleine Scott</strong> Sent you add request
												<div class="small text-muted">
													view profile
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/female/14.jpg)"></span>
											<div>
												<strong>rebica</strong> Suggestions for you
												<div class="small text-muted">
													view profile
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/male/1.jpg)"></span>
											<div>
												<strong>Devid robott</strong> sent you add request
												<div class="small text-muted">
													view profile
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div><a class="dropdown-item text-center text-muted-dark" href="#">View all contact list</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										<span class="nav-unread bg-danger"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>Someone likes our posts.</strong>
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="notifyimg">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong>3 New Comments</strong>
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="notifyimg">
												<i class="fa fa-cogs"></i>
											</div>
											<div>
												<strong>Server Rebooted.</strong>
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item text-center text-muted-dark" href="#">View all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown"><i class="fa fa-envelope-o"></i> <span class=" nav-unread badge badge-info badge-pill">2</span></a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item text-center text-white" href="#">2 New Messages</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/male/41.jpg)"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/female/1.jpg)"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/female/18.jpg)"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item text-center text-muted-dark" href="#">See all Messages</a>
									</div>
								</div>
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url(); ?>/dark/images/faces/female/25.jpg)"></span>
										<span class="ml-2 d-none d-lg-block">
											<span class="text-white">Simon Russell</span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-account-outline"></i> Profile</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-settings"></i> Settings</a>
										<a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon mdi mdi-message-outline"></i> Inbox</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?</a>
										<a class="dropdown-item" href="login.html"><i class="dropdown-icon mdi mdi-logout-variant"></i> Sign out</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown">
							<a class="nav-link p-0 leading-none d-flex" data-toggle="dropdown" href="#">
								<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url(); ?>/dark/images/faces/female/25.jpg)"></span>
								<span class="ml-2 "><span class="text-white app-sidebar__user-name font-weight-semibold">Simon Russell</span><br>
									<span class="text-muted app-sidebar__user-name text-sm"> Ui Designer</span>
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
								<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-account-outline"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-settings"></i> Settings</a>
								<a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon mdi mdi-message-outline"></i> Inbox</a>
								<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?</a>
								<a class="dropdown-item" href="login.html"><i class="dropdown-icon mdi mdi-logout-variant"></i> Sign out</a>
							</div>
						</div>
					</div>
					<ul class="side-menu">

						<li>
							<a class="side-menu__item <?php echo ($this->controller=="home")?"active":""; ?>" href="<?php echo site_url("home"); ?>"><i class="side-menu__icon fa fa-window-restore"></i><span class="side-menu__label">DASHBOARD</span></a>
						</li>


						<li class="slide">
							<a class="side-menu__item <?php echo ($this->controller=="gejala" || $this->controller=="penyakit" || $this->controller=="pengetahuan")?"active":""; ?>" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-area-chart"></i><span class="side-menu__label">MASTER</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo site_url("gejala") ?>" class="slide-item">GEJALA</a>
								</li>
								<li>
									<a href="<?php echo site_url("penyakit") ?>" class="slide-item">PENYAKIT </a>
								</li>
								<li>
									<a href="<?php echo site_url("penyakit/pengetahuan") ?>" class="slide-item">PENGETAHUAN</a>
								</li>
								<li>
									<a href="<?php echo site_url("referensi") ?>" class="slide-item">REFERENSI</a>
								</li>
								<li>
									<a href="<?php echo site_url("kemiripan") ?>" class="slide-item">KEMIRIPAN GEJALA</a>
								</li>
								 
							</ul>
						</li>

						<li>
							<a class="side-menu__item <?php echo ($this->controller=="konsumen")?"active":""; ?>" href="<?php echo site_url("konsumen"); ?>"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">DATA PASIEN</span></a>
						</li>
						<li>
							<a class="side-menu__item <?php echo ($this->controller=="laporan")?"active":""; ?>" href="<?php echo site_url("konsultasi/laporan"); ?>"><i class="side-menu__icon fa fa-file"></i><span class="side-menu__label">REKAP HASIL KONSULTASI</span></a>
						</li>
						<li>
							<a class="side-menu__item <?php echo ($this->controller=="konsultasi")?"active":""; ?>" href="<?php echo site_url("konsultasi"); ?>"><i class="side-menu__icon fa fa-lightbulb-o"></i><span class="side-menu__label">KONSULTASI</span></a>
						</li>

						<li>
							<a class="side-menu__item <?php echo ($this->controller=="konsultasi")?"active":""; ?>" href="<?php echo site_url("konsultasi/listview"); ?>"><i class="side-menu__icon fa fa-window-restore"></i><span class="side-menu__label">LIHAT DATA KONSULTASI</span></a>
						</li>



						 
						 
					</ul>
				</aside>
				<div class="app-content my-3 my-md-5">
					<div class="side-app">
						<!--Dummy Div for your data-->
						<div class="mt-lg-5" style="min-height:500px;">
							

							<div class="card">
									<div class="card-status bg-green br-tr-7 br-tl-7"></div>
									<div class="card-header">
										<h3 class="card-title"><?php echo $title; ?></h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body" style="min-height: 300px">
										<?php echo $content; ?>
									</div>
								</div>


						</div>
						<!--/Dummy Div for your data-->
					</div>
					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
									Copyright © 2018 <a href="#">Vobilet</a>. Designed by <a href="#">Spruko</a> All rights reserved.
								</div>
							</div>
						</div>
					</footer>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		
		
	</body>
</html>