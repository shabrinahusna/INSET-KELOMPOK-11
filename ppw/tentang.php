<?php


  session_start();
  if($_SESSION['status']!="login")
  {
    header("location:login.php?peringatan=silahkanlogindulu");
  }

 

?>


<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">
  <link rel="icon" type="image/jpeg" sizes="16x16" href="images/canva.jpeg" />
  <title>Tentang</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/jpeg" href="/images/canva.jpeg" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- w3schools cdn -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- cdnchartsjs -->
     <link href="plugins/chartist/dist/chartist.min.css" rel="stylesheet" />
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <link href="plugins/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

<header>

	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.php">
			  	<img src="images/inset.jpeg" width="150px" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Halaman Utama</a>
			  </li>
			    <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aset <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="kelolabarangaset.php">Kelola Barang Aset</a></li>
						<li><a class="dropdown-item" href="tampilkb.php">Kendaraan Bermotor</a></li>
						<li><a class="dropdown-item" href="tampilfurnitur.php">Furnitur</a></li>
						<li><a class="dropdown-item" href="tampilelektronik.php">Elektronik</a></li>
					</ul>
</li>
          <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cetak Laporan<i class="icofont-thin-down"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown02">
            
						<li><a class="dropdown-item" target="_blank" href="cetak_kendaraanbermotor.php">Cetak Kendaraan Bermotor</a></li>
						<li><a class="dropdown-item" target="_blank" href="cetak_furnitur.php">Cetak Furnitur</a></li>
						<li><a class="dropdown-item" target="_blank" href="cetak_elektronik.php">Cetak Elektronik</a></li>
					</ul>
</li>
			   <li class="nav-item"><a class="nav-link" target="_blank" href="panduan.php">Panduan</a></li>
         <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
			   <li class="nav-item"><a class="nav-link" href="bantuan.php">Bantuan</a></li>
			   <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
			</ul>
		  </div>
		</div>
	</nav>
		<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Kecamatan Medan Perjuangan</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>SISTEM INVENTARIS ASSET DIGITAL</h2>
					<div class="divider mx-auto my-4"></div>
					<p>INSET (Inventaris Asset Digital) adalah sebuah sistem aplikasi web untuk mengelola 
						barang aset yang di dalam nya ada ,kendaraan bermotor,furnitur dan elektronik.
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-people text-lg"></i>
						<h4 class="mt-3 mb-3">Pembuat Projek</h4>
					</div>

					<div class="content">
						<p class="mb-4">Sandy, Shabrina<br>Vijay, Tasya, Timotius</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-teacher text-lg"></i>
						<h4 class="mt-3 mb-3">Ketua Prodi</h4>
					</div>
					<div class="content">
						<p class="mb-4">Said Iskandar Al Idrus, S.Si., M.Si<br>NIP:197703182005011001</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-teacher text-lg"></i>
						<h4 class="mt-3 mb-3">Dosen Pengampu</h4>
					</div>
					<div class="content">
						<p class="mb-4">Adidtya Perdana S.T., M.Kom<br>NIP:197xxxxxxxxxxxxxxx</p>
					</div>
				</div>
			</div>


			<div class="col-lg-12 col-md-12 col-sm-12 w3-center">
				<div class="service-item mb-12 ">
					<div class="icon d-flex align-items ">
						<i class="icofont-ui-clip-board text-lg "></i>
						<h4 class="mt-6 mb-6">Projek PPW</h4>
					</div>

					<div class="content">
						<p class="mb-4">Projek PPW Kelompok 11</p>
					</div>
				</div>
			</div>

			
			
			
		</div>
	</div>
</section>



<footer>
	<div
         style="background-color: #003366;
                position:fixed;
                bottom: 0;
                width:100%;"
         >
      
    </div>
</footer>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>
   