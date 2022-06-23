
<!--begin::Javascript-->
<script>
	var hostUrl = "<?= base_url(); ?>assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url(); ?>assets/admin/js/scripts.bundle.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/admin/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<!--end::Page Vendors Javascript-->

<!--end::Javascript-->
<script type="text/javascript">
	$("#jambuka").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
	$("#jamtutup").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
	$("#jadwal").flatpickr();
</script>
</body>
<!--end::Body-->

</html>