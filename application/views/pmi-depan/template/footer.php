<!--begin::Javascript-->
<script>
		var hostUrl = "<?= base_url(); ?><?= base_url(); ?>assets/admin/";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/admin/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="<?= base_url(); ?>assets/admin/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/admin/plugins/custom/typedjs/typedjs.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?= base_url(); ?>assets/admin/js/custom/landing.js"></script>
	<script src="<?= base_url(); ?>assets/admin/js/custom/pages/pricing/general.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>