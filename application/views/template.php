
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
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Sistem Informasi Pendukung Keputusan || Rekomendasi Judul Tugas Akhir </title>
		<link rel="stylesheet" href="<?php echo base_url("dark"); ?>/fonts/fonts/font-awesome.min.css">
		
		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="<?php echo base_url("dark"); ?>/css/dashboard.css" rel="stylesheet" />
		
		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url("dark"); ?>/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url("dark"); ?>/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo base_url("dark"); ?>/plugins/iconfonts/plugin.css" rel="stylesheet" />


<!-- Data table css -->
		<link href="<?php echo base_url(); ?>/dark/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

		<link href="<?php echo base_url(); ?>/dark/plugins/select2/select2.min.css" rel="stylesheet" />


		<link href="<?php echo base_url(); ?>/dark/plugins/accordion/accordion.css" rel="stylesheet" />

		<link href="<?php echo base_url(); ?>/dark/sweetalert2/sweetalert2.css" rel="stylesheet" />




		<!-- Dashboard js -->
		<script src="<?php echo base_url("dark"); ?>/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url("dark"); ?>/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url("dark"); ?>/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url("dark"); ?>/js/vendors/selectize.min.js"></script>
		<script src="<?php echo base_url("dark"); ?>/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo base_url("dark"); ?>/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo base_url("dark"); ?>/plugins/rating/jquery.rating-stars.js"></script>
		
		<!-- Custom scroll bar Js-->
		<script src="<?php echo base_url("dark"); ?>/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
		
		<!-- Custom js -->
		<script src="<?php echo base_url("dark"); ?>/js/custom.js"></script>



<!--Select2 js -->
<script src="<?php echo base_url("dark"); ?>/plugins/select2/select2.full.min.js"></script>


<!-- Data tables -->
<script src="<?php echo base_url(); ?>/dark/plugins/datatable/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url(); ?>/dark/plugins/datatable/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.js"></script>



	</head>
	<body class="">
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-main">
				<div class="header py-4">
					<div class="container">
						<div class="d-flex">
							<a class="header-brand" href="<?php echo site_url("home"); ?>">
								 SISTEM PENDUKUNG KEPUTUSAN REKOMENDASI TUGAS AKHIR
							</a>
							<div class="d-flex order-lg-2 ml-auto">
								 
								 
								<div class="dropdown">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span class="avatar avatar-md brround" style="background-image: url(assets/images/faces/female/25.jpg)"></span>
										<span class="ml-2 d-none d-lg-block">
											<span class="text-white"><?php echo $_SESSION['userdata'][0]['nim']. " -  " . $_SESSION['userdata'][0]['nama']; ?></span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="<?php echo site_url("home/gantipassword"); ?>">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Ganti password
										</a>
										
										<a class="dropdown-item" href="<?php echo site_url("login/logout") ?>">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
							</div>
							<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
							<span class="header-toggler-icon"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="vobilet-navbar" id="headerMenuCollapse">
					<div class="container">
						<ul class="nav">
							 
							<li class="nav-item">
								<a class="nav-link <?php echo ($this->controller=="home")?"active":""; ?>" href="<?php echo site_url("home"); ?>">
									<i class="fa fa-home"></i>
									<span>BERANDA </span>
								</a>
							</li>

<?php 
if($_SESSION['userdata'][0]['level'] == 1) : 
?>
							<li class="nav-item with-sub">
								<a class="nav-link <?php echo ($this->controller=="prodi" || $this->controller=="matakuliah" || $this->controller=="topik" ||$this->controller=="referensi")?"active":""; ?>" href="#"><i class="fa fa-snowflake-o"></i> <span>MASTER</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="<?php echo site_url("prodi") ?>">PROGRAM STUDI</a>
										</li>
										<li>
											<a href="<?php echo site_url("matakuliah") ?>">MATAKULIAH</a>
										</li>
										<li>
											<a href="<?php echo site_url("topik") ?>">TOPIK TUGAS AKHIR</a>
										</li>
										<li>
											<a href="<?php echo site_url("referensi") ?>">REFERENSI</a>
										</li>
										 
										 
										 
										 
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url("mahasiswa"); ?>">
									<i class="fa fa-user"></i>
									<span>MAHASISWA </span>
								</a>
							</li>
<?php endif; ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url("konsultasi"); ?>">
									<i class="fa fa-lightbulb-o"></i>
									<span>KONSULTASI </span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url("konsultasi/listview"); ?>">
									<i class="fa fa-window-restore"></i>
									<span>LIHAT DATA KONSULTASI </span>
								</a>
							</li>

							 
						</ul>
					</div>
				</div>
				<div class="my-3 my-md-5">
					<div class="container">

					<div class="card">
						<div class="card-status bg-primary br-tr-7 br-tl-7"></div>

						<div class="card-header">
										<h3 class="card-title text-white"><?php echo $title; ?></h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>




<!-- 
									<div class="card-status bg-green br-tr-7 br-tl-7"></div>
									<div class="card-header">
										<h3 class="card-title"><?php echo $title; ?></h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div> -->
									<div class="card-body" style="min-height: 300px">
										<?php echo $content; ?>
									</div>
								</div>
					    </div>
				</div>
			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Dibuat dan dipresentasikan oleh Mariana. Sebagai syarat meraih gelar sarjana Teknik. UST - Jayapura &copy 2019
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		
	</body>
</html>