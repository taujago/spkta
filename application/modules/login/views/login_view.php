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
		<title>SISTEM PENDUKUNG KEPUTUSAN</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fonts/font-awesome.min.css">
		
		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		
		<!-- Dashboard Css -->
		<link href="<?php echo base_url(); ?>/assets/css/dashboard.css" rel="stylesheet" />
		
		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url(); ?>/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />
		
		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url(); ?>/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />
		
		<!---Font icons-->
		<link href="<?php echo base_url(); ?>/assets/plugins/iconfonts/plugin.css" rel="stylesheet" />

		<link href="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.css" rel="stylesheet" />

<style type="text/css">
html {
  background: url(<?php echo base_url("landing/img/header-bg.jpg") ?>);
  background-repeat: no-repeat;
  background-size: auto;
}
</style>
	
  </head>
	<body class="login-img">
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col col-login mx-auto">
							<div class="text-center mb-6">
								<!-- <img src="<?php echo base_url(); ?>/assets/images/brand/logo.png" class="h-6" alt=""> -->
							</div>
							<form id="frmlogin" class="card" method="post">
								<div class="card-body p-6">
									<div class="card-title text-center">Silahkan login</div>
									<div class="form-group">
										<label for="username" class="form-label">Nama pengguna</label>
										<input type="text" class="form-control" id="username" name="username"  placeholder="Nama penggguna">
									</div>
									<div class="form-group">
										<label for="password" class="form-label">Kata sandi
											<a href="<?php echo site_url("login/lupapassword"); ?>" class="float-right small">Lupa password</a>
										</label>
										<input type="password" class="form-control" id="password"  name="password" placeholder="Kata sandi">
									</div>
									<div class="form-group">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" />
											<span class="custom-control-label">Ingat saya </span>
										</label>
									</div>
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-check"></i> Masuk </button>
									</div>
									<div class="text-center text-muted mt-3">
										Belum terdaftar ?  <a href="<?php echo site_url("login/daftar"); ?>">Daftar di sini </a>
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Dashboard js -->
		<script src="<?php echo base_url(); ?>/assets/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/vendors/selectize.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/plugins/rating/jquery.rating-stars.js"></script>
		<!-- Custom scroll bar Js-->
		<script src="<?php echo base_url(); ?>/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
		
		<!-- Custom Js-->
		<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

<script src="<?php echo base_url(); ?>/assets/sweetalert2/sweetalert2.js"></script>
<script type="text/javascript">
	
$(document).ready(function(){


	$("#frmlogin").submit(function(){
		$.ajax({
			url : '<?php echo site_url("login/ceklogin"); ?>',
			data : $(this).serialize(),
			type : 'post',
			dataType : 'json',
			success : function(obj){
				if(obj.error==false) {
					
					swal.fire('Info',obj.message,'success').then((result) => {

						location.href='<?php echo site_url("home"); ?>';

					});

					
				}
				else {
					swal.fire('Error','Nama pengguna tidak dikenal','error');

				}
			}
		});

		return false;
	});




});	

</script>
	</body>
</html>
 