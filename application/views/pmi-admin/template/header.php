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
	<script>
		$.fn.modal.Constructor.prototype.enforceFocus = function() {};
	</script>
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?= base_url(); ?>assets/admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/admin/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->

	<!-- tinymce -->
	<script src="<?= base_url(); ?>assets/admin/plugins/custom/tinymce/tinymce.bundle.js"></script>
	<style>
		/* #message-profil {
			position: relative;
			padding: 0.75rem 1rem;
			margin-top: 0.1rem;
			font-size: 1rem;
			color: black;
			background-color: white;
			border-radius: 0.475rem;
			box-shadow: 0  0 3px ; 
			margin-top: 10px;
		} */
		#message-profil {
			width: 260px;
			height: 40px;
			color: #000;
			padding: 10px;
			position: relative;
			margin-top: 10px;
			float: left;
			font-size: 1rem;
			border-radius: 0.475rem;
			border: 1px solid #000;
			box-sizing: border-box;
		}

		#message-profil {
			margin-top: 20px;
		}

		#message-profil:after {
			content: " ";
			position: absolute;
			width: 20px;
			height: 20px;
			border-top: 1px solid #000;
			border-left:1px solid #000;
			border-right:0px solid #000;
			border-bottom:0px solid #000;
			bottom: 100%;
			left: 10%;
			margin-right: -9px;	
			transform: rotate(45deg);
			margin-bottom: -9px;
			background: #FFF;
			
		}

		#message-berita {
			width: 260px;
			height: 40px;
			color: #000;
			padding: 10px;
			position: relative;
			margin-top: 10px;
			float: left;
			font-size: 1rem;
			border-radius: 0.475rem;
			border: 1px solid #000;
			box-sizing: border-box;
		}

		#message-berita {
			margin-top: 20px;
		}

		#message-berita:after {
			content: " ";
			position: absolute;
			width: 20px;
			height: 20px;
			border-top: 1px solid #000;
			border-left:1px solid #000;
			border-right:0px solid #000;
			border-bottom:0px solid #000;
			bottom: 100%;
			left: 10%;
			margin-right: -9px;	
			transform: rotate(45deg);
			margin-bottom: -9px;
			background: #FFF;
		}
		#message-informasi {
			width: 260px;
			height: 40px;
			color: #000;
			padding: 10px;
			position: relative;
			margin-top: 10px;
			float: left;
			font-size: 1rem;
			border-radius: 0.475rem;
			border: 1px solid #000;
			box-sizing: border-box;
		}

		#message-informasi {
			margin-top: 20px;
		}

		#message-informasi:after {
			content: " ";
			position: absolute;
			width: 20px;
			height: 20px;
			border-top: 1px solid #000;
			border-left:1px solid #000;
			border-right:0px solid #000;
			border-bottom:0px solid #000;
			bottom: 100%;
			left: 10%;
			margin-right: -9px;	
			transform: rotate(45deg);
			margin-bottom: -9px;
			background: #FFF;
		}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->