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


	
  </head>
	<body class="login-img">
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col col-md-6 mx-auto">
							<div class="text-center mb-6">
								<!-- <img src="<?php echo base_url(); ?>/assets/images/brand/logo.png" class="h-6" alt=""> -->
							</div>
							<form id="frmlogin" class="card" method="post">
								<div class="card-body">
									<div class="card-title text-center">Pendaftaran Pasien</div>
									<div class="row">
										
									<div class="col-md-12">
										<div class="form-group">
										<label for="username" class="form-label">Nama pengguna</label>
										<input type="text" class="form-control" id="username" name="username"  placeholder="Nama penggguna">
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="password" class="form-label">Kata sandi
											 
										</label>
										<input type="password" class="form-control" id="password"  name="password" placeholder="Kata sandi">
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="password2" class="form-label">Ulangi Kata sandi
											 
										</label>
										<input type="password" class="form-control" id="password2"  name="password2" placeholder="Kata sandi">
									</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
										<label for="username" class="form-label">Nama lengkap</label>
										<input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama lengkap">
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="jk" class="form-label">JK</label>
										<?php 
										$arr = array("L"=>"Laki laki ","P"=>"Perempuan");
										echo form_dropdown("jk",$arr,'','class="form-control" id="jk"');
										?>
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="umur" class="form-label">Umur</label>
										<input type="number" class="form-control" id="umur" name="umur"  placeholder="Umur">
									</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
										<label for="hp" class="form-label">Nomor HP</label>
										<input type="text" class="form-control" id="hp" name="hp"  placeholder="Nomor HP">
									</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
										<label for="alamat" class="form-label">Alamat</label>
										<input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat lengkap">
									</div>
									</div>
									

									<!-- 
									

									

									

									 -->
									 </div>
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-check"></i> DAFTAR </button>
									</div>
									<div class="text-center text-muted mt-3">
										Sudah  terdaftar ?  <a href="<?php echo site_url("login"); ?>">Login di sini </a>
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
			url : '<?php echo site_url("login/savedaftar"); ?>',
			data : $(this).serialize(),
			type : 'post',
			dataType : 'json',
			success : function(obj){
				if(obj.error==false) {
					
					swal.fire('Info',obj.message,'success').then((result) => {

						location.href='<?php echo base_url(); ?>';

					});

					
				}
				else {
					swal.fire('Error',obj.message,'error');

				}
			}
		});

		return false;
	});




});	

</script>
	</body>
</html>
 