<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="<?= base_url(); ?>">
	<title>PMI - UDD Kota Malang</title>
	<meta charset="utf-8" />
	<meta name="description" content="Palang Merah Indonesia Kota Malang" />
	<meta name="keywords" content="PMI, Palang Merah Indonesia, Malang, Stok Darah" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="PMI - Malang" />
	<meta property="og:site_name" content="PMI | Malang" />
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/admin/media/ic_pmi.png" />
	<!-- <meta property="og:url" content="https://keenthemes.com/metronic" /> -->
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?= base_url(); ?>assets/admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/admin/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="beranda" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="position-relative">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Header Section-->
		<div class="mb-0" id="home">
			<!--begin::Wrapper-->
			<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom">
				<!--begin::Header-->
				<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container ">
						<!--begin::Wrapper-->
						<div class="d-flex align-items-center justify-content-between">
							<!--begin::Logo-->
							<div class="d-flex align-items-center flex-equal">
								<!--begin::Mobile menu toggle-->
								<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Mobile menu toggle-->
								<!--begin::Logo image-->
								<a href="">
									<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/logo-pmi-black.svg" class="logo-default h-50px h-lg-60px" />
									<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/logo-pmi-black.svg" class="logo-sticky h-40px h-lg-50px" />
								</a>
								<!--end::Logo image-->
							</div>
							<!--end::Logo-->
							<!--begin::Menu wrapper-->
							<div class="d-lg-block" id="kt_header_nav_wrapper">
								<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
									<!--begin::Menu-->
									<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('beranda'); ?> " data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('profile'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Profil</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('informasi-pmi'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Informasi</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('stokdarah-pmi'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Stok Darah</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('jadwal'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Jadwal Mobil Donor</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('news'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Toolbar-->
							<div class="flex-equal text-end ms-1">
								<a href="<?php echo site_url('login'); ?>" class="btn btn-danger btn-color-white">Sign In</a>
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->