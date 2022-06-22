<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:400,700|Crete+Round:400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/style.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/swiper.css" type="text/css" />

	<!-- Medical Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/demos/medical/medical.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/demos/medical/css/medical-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/demos/medical/fonts.css" type="text/css" />

	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="<?= base_url(); ?>assets/depan/css/colors.php?color=DE6262" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>PMI - Malang</title>
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/admin/media/ic_pmi.png" />
</head>

<body class="stretched page-transition" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='https://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='https://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">
			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto d-none d-md-flex">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#"><i class="icon-phone3"></i> 0341-364617</a></li>
								<li class="top-links-item"><a href="#" class="nott"><i class="icon-instagram"></i> @pmimalangkota</a></li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="https://s.id/fatrainingpmi" class="bg-color text-white">Pelatihan</a></li>
							</ul>
						</div><!-- .top-links end -->

					</div>
				</div>

			</div>
		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" data-menu-padding="28" data-sticky-menu-padding="8">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="<?=site_url('') ?>" class="standard-logo"><img src="<?= base_url(); ?>assets/depan/images/logo-pmi.svg" alt="Canvas Logo"></a>
							
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu style-3 menu-spacing-margin">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="#"><div>Beranda</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Tentang Kami</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div>Sejarah</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Profil</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Alamat</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Layanan</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div>Donor Darah</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Diklat</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Publikasi</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div>Berita</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div>Artikel</div></a></li>
									</ul>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->