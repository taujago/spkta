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
		<link rel="icon" href="<?php echo base_url("dark"); ?>/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("dark"); ?>/favicon.ico" />


		<!-- Title -->
		<title>Sistem Pendukung keputusan || Rekomendasi Judul Tugas Akhir </title>
		<link rel="stylesheet" href="<?php echo base_url("dark"); ?>/fonts/fonts/font-awesome.min.css">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="<?php echo base_url("dark"); ?>/css/dashboard.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url("dark"); ?>/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo base_url("dark"); ?>/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

		 
		<!-- select2 Plugin -->
		<link href="<?php echo base_url("dark"); ?>/plugins/select2/select2.min.css" rel="stylesheet" />

		 

	 

		<!---Font icons-->
		<link href="<?php echo base_url("dark"); ?>/plugins/iconfonts/plugin.css" rel="stylesheet" />


		<!-- Data table css -->
		<link href="<?php echo base_url(); ?>/dark/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

		<link href="<?php echo base_url(); ?>/dark/plugins/select2/select2.min.css" rel="stylesheet" />


		<link href="<?php echo base_url(); ?>/dark/plugins/accordion/accordion.css" rel="stylesheet" />

		<link href="<?php echo base_url(); ?>/dark/sweetalert2/sweetalert2.css" rel="stylesheet" />


<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
	

		<!-- Dashboard Css -->
		


<script src="<?php echo base_url("dark"); ?>/js/vendors/jquery-3.2.1.min.js"></script>


<script src="<?php echo base_url("dark"); ?>/js/vendors/bootstrap.bundle.min.js"></script>
 
		
<!-- Custom scroll bar Js-->
<script src="<?php echo base_url("dark"); ?>/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Select2 js -->
<script src="<?php echo base_url("dark"); ?>/plugins/select2/select2.full.min.js"></script>


<!-- Data tables -->
<script src="<?php echo base_url(); ?>/dark/plugins/datatable/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url(); ?>/dark/plugins/datatable/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.js"></script>

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
							<a class="header-brand" href="<?php echo site_url("home") ?>">
								<img alt="vobilet logo" class="header-brand-img" src="<?php echo base_url("dark"); ?>/images/logo.png">
							</a>
							<!-- Sidebar toggle button-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-flex order-lg-2 ml-auto">
							  
								 
								 
								 
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url("dark") ?>/images/faces/female/25.jpg)"></span>
										<span class="ml-2 d-none d-lg-block">
											<span class="text-white"><?php echo $_SESSION['userdata'][0]['nama']; ?></span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-account-outline"></i> Ganti password</a>
										 
										<a class="dropdown-item" href="<?php echo site_url("login/logout") ?>"><i class="dropdown-icon mdi mdi-logout-variant"></i> Keluar</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					 
					<ul class="side-menu">
						 
						<li>
							<a class="side-menu__item <?php echo ($this->controller=="home")?"active":""; ?>" href="<?php echo site_url("home"); ?>"><i class="side-menu__icon fa fa-home"></i><span class="side-menu__label">BERANDA </span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item <?php echo ($this->controller=="gejala" || $this->controller=="penyakit" || $this->controller=="pengetahuan")?"active":""; ?>" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-area-chart"></i><span class="side-menu__label">MASTER</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">

								<li>
									<a href="<?php echo site_url("prodi") ?>" class="slide-item">PROGRAM STUDI</a>
								</li>

								<li>
									<a href="<?php echo site_url("matakuliah") ?>" class="slide-item">MATAKULIAH</a>
								</li>
								<li>
									<a href="<?php echo site_url("topik") ?>" class="slide-item">TOPIK TUGAS AKHIR</a>
								</li>

								<li>
									<a href="<?php echo site_url("referensi") ?>" class="slide-item">REFERENSI </a>
								</li>
								<!-- <li>
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
								</li> -->
								<!-- <li>
									<a href="<?php echo site_url("kemiripan") ?>" class="slide-item">KEMIRIPAN GEJALA</a>
								</li> -->
								 
							</ul>
						</li>


						 
						<li>
							<a class="side-menu__item <?php echo ($this->controller=="mahasiswa")?"active":""; ?>" href="<?php echo site_url("mahasiswa"); ?>"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">DATA MAHASISWA</span></a>
						</li>
						<!-- <li>
							<a class="side-menu__item <?php echo ($this->controller=="laporan")?"active":""; ?>" href="<?php echo site_url("konsultasi/laporan"); ?>"><i class="side-menu__icon fa fa-file"></i><span class="side-menu__label">REKAP HASIL KONSULTASI</span></a>
						</li> -->
						<li>
							<a class="side-menu__item <?php echo ($this->controller=="konsultasi")?"active":""; ?>" href="<?php echo site_url("konsultasi"); ?>"><i class="side-menu__icon fa fa-lightbulb-o"></i><span class="side-menu__label">KONSULTASI</span></a>
						</li>

						<li>
							<a class="side-menu__item <?php echo ($this->controller=="konsultasi")?"active":""; ?>" href="<?php echo site_url("konsultasi/listview"); ?>"><i class="side-menu__icon fa fa-window-restore"></i><span class="side-menu__label">LIHAT DATA KONSULTASI</span></a>
						</li>
					</ul>
				</aside>
				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							 
						</div>
						 
					<div class="row">
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

					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
									Dibuat oleh Aras sebagai Syarat untuk gelar Sarjana Teknik. USTJ - Jayapura &copy; 2019 
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

		


<!-- Side menu js -->
		<script src="<?php echo base_url("dark"); ?>/plugins/toggle-sidebar/js/sidemenu.js"></script>


<!-- Custom js -->
		<script src="<?php echo base_url("dark"); ?>/js/custom.js"></script>

