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
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('jadwal'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Jadwal Donor Darah</a>
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
								<?php
								$link_login = site_url('login');
								$link_logout = site_url('logout');
								if (isset($_SESSION['logged_in']) == FALSE) {
									echo '											
											<a href="' . $link_login . '" class="btn btn-danger btn-color-white me-1">Sign In</a>
										';
								} else {
									$str = explode(" ", $_SESSION['name']);
									echo '
									<div class="d-flex justify-content-end ms-1 ms-lg-3 " id="kt_header_user_menu_toggle">
										<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor"/>
												<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor"/>
											</svg></span>
										</div>
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-200px" data-kt-menu="true">
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<div class="symbol symbol-50px me-5">
													<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor"/>
														<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor"/>
														</svg>
													</span>
													</div>
													<div class="d-flex flex-column">
													<b>Hi, ' . $str[0] . '&nbsp;</b>
													</div>
												</div>
											</div>
											<div class="separator my-2"></div> 
											<div class="menu-item px-5 text-center">
												<a href="" data-bs-toggle="modal" data-bs-target="#mdl_detailpendonor" data-id="" class="btn btn-sm btn-info btn-color-white">Profil</a>
												<a href="' . $link_logout . '" class="btn btn-sm  btn-danger btn-color-white me-1">Logout</a>
											</div>
										</div>
									</div>
										
										';
								};
								?>
								<!-- <a href="<?php echo site_url('signup'); ?>" class="btn btn-success btn-color-white me-1">Sign Up</a> -->
								<!-- <a href="<?php echo site_url(''); ?>" class="btn btn-danger btn-color-white me-1">Logout</a> -->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!-- begin modal detail Pendonor-->
				<div class="modal fade" tabindex="-1" id="mdl_detailpendonor">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="mb-3">Detail Pendonor</h3>

								<!--begin::Close-->
								<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
									<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
									<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
											<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
											<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
										</svg></span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Close-->
							</div>

							<div class="modal-body">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin: Pic-->
									<div class="me-7 mb-4 text-center">
										<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
											<img id="imgDetailPendonor" src="<?= base_url(); ?>assets/admin/media/avatars/blank.png" alt="image" />
											<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
										</div>
									</div>
									<!--end::Pic-->
									<!--begin::Input group-->
									<div class="row mb-5">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Nama</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span id="" class="fw-bold text-gray-800 fs-6">Dedy Hermawan</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-5">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Umur</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span id="" class="fw-bold text-gray-800 fs-6">22</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-5">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Golongan Darah</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span id="" class="fw-bold text-gray-800 fs-6">A</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-5">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Alamat</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span id="" class="fw-bold text-gray-800 fs-6">Blitar</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-5">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Nomor Telepon
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Nomor telepon harus aktif !"></i></label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 d-flex align-items-center">
											<span id="" class="fw-bold fs-6 text-gray-800 me-2">085733625278</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-5">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Donor Terakhir</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span id="" class="fw-bold text-gray-800 fs-6">09 Mei 2022</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Donor Selanjutnya</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span id="" class="fw-bold text-gray-800 fs-6">09 Oktober 2022</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Card body-->
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
				<!-- end modal detail pendonor -->