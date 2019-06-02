<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Pendukung Keputusan </title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url("landing"); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url("landing"); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url("landing"); ?>/css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>   -->

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        
        <div class="intro-heading text-uppercase">SELAMAT DATANG</div>
        <div class="intro-lead-in">Sistem Pakar Diagnosa Panyakit Infeksi Saluran Pernafasan</div>
        <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="<?php echo site_url("login"); ?>">Login</a>
         <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="<?php echo site_url("login/daftar"); ?>">Daftar</a>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Info Penyakit</a>
      </div>
    </div>
  </header>

   
<section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">INFORMASI PENYAKIT</h2>
          <h3 class="section-subheading text-muted">Informasi penyakit dan pengobatannya</h3>
        </div>
      </div>
     
        
        <?php foreach($rec_penyakit->result() as $row  ) : ?>  
        <div class="row">
         
          <div class="col-md-12">
            <h4><?php echo $row->kode." ".$row->penyakit ?></h4><br />
            <strong>Keterangan : </strong><br />
            <?php echo $row->keterangan; ?> <br />
            <strong> Pengobatan : </strong><br />
            <?php echo  $row->pengobatan; ?>
            </div>

      </div><hr />
        <?php endforeach; ?>

      
    </div>
  </section>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("landing"); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url("landing"); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url("landing"); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url("landing"); ?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url("landing"); ?>/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url("landing"); ?>/js/agency.min.js"></script>

</body>

</html>
