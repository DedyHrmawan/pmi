
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
	// Jadwal mobil donor 
	$("#add_jadwal").flatpickr();

	$("#add_jambuka").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
	$("#add_jamtutup").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});

	$("#edit_jadwal").flatpickr();

	$("#edit_jambuka").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
	$("#edit_jamtutup").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});

	// agenda
	$("#add_tanggal").flatpickr();

	$("#add_jammulai").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
	$("#add_jamselesai").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});

	$("#edit_tanggal").flatpickr();

	$("#edit_jammulai").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
	$("#edit_jamselesai").flatpickr({
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	}); 
	
</script>

<script>
	//Profil
    $('#dataTableProfil tbody').on('click', '.mdl_detailProfil', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('profil/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_profil: id
            },
            success: res => {
                $('#judul_profil').html(res[0].judul_profil)
                $('#deskripsi').html(res[0].deskripsi)
            }
        })
    })

	$('#dataTableProfil tbody').on('click', '.editProfil', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('profil/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_profil: id
            },
            success: res => {
                $('#judulProfil_edit').val(res[0].judul_profil)
                $('#deskripsi_edit').val(res[0].deskripsi)
                $('#id_edit').val(res[0].id_profil)
            }
        })
    })

	$('#dataTableProfil tbody').on('click', '.hapusProfil', function() {
        const id = $(this).data("id")
        $('#hapusProfil_id').val(id)
    })

	//Mobil Donor   
	$('#dataTableMobil tbody').on('click', '.editJadwal', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('mobildonor/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_mobil: id
            },
            success: res => {
                $('#lokasi_edit').val(res[0].lokasi)
                $('#edit_jadwal').val(res[0].jadwal)
                $('#edit_jambuka').val(res[0].jambuka)
                $('#edit_jamtutup').val(res[0].jamtutup)
                $('#editmobil_id').val(res[0].id_mobil)
            }
        })
    })

	$('#dataTableMobil tbody').on('click', '.hapusJadwal', function() {
        const id = $(this).data("id")
		const name = $(this).data("name")
		const jadwal = $(this).data("jadwal")
        $('#lokasi_text').html(name)
        $('#jadwal_text').html(jadwal)
        $('#hapusmobil_id').val(id)
    })

    //Informasi  
    $('#informasiTable tbody').on('click', '.detailInfo', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('informasi/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_informasi: id
            },
            success: res => {
                $('#detail_judul').html(res[0].judul_informasi)
                $('#detail_deskripsi').html(res[0].deskripsi)
            }
        })
    })

	$('#informasiTable tbody').on('click', '.editInfo', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('informasi/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_informasi: id
            },
            success: res => {                
                $('#judul_edit').val(res[0].judul_informasi)
                $('#deskripsiInfo_edit').val(res[0].deskripsi)
                $('#idInfo_edit').val(res[0].id_informasi)
            }
        })
    })

	$('#informasiTable tbody').on('click', '.hapusInfo', function() {
        const id = $(this).data("id")
        $('#hapusInfo_id').val(id)
    })

    //Agenda
	$('#tableAgenda tbody').on('click', '.editAgenda', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('agenda/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_agenda: id
            },
            success: res => {
                $('#lokasiAgenda_edit').val(res[0].lokasi_agenda)
                $('#namaAgenda_edit').val(res[0].nama_agenda)
                $('#edit_tanggal').val(res[0].tgl_agenda)
                $('#edit_jammulai').val(res[0].jambuka)
                $('#edit_jamselesai').val(res[0].jamtutup)
                $('#editAgenda_id').val(res[0].id_agenda)
            }
        })
    })

	$('#tableAgenda tbody').on('click', '.hapusAgenda', function() {
        const id = $(this).data("id")
        $('#hapusAgenda_id').val(id)
    })

    //Stok darah
    $('#tableStok tbody').on('click', '.hapusStok', function() {
        const id = $(this).data("id")
        $('#hapusStok_id').val(id)
    })

    $('#tableStok tbody').on('click', '.editStok', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('stokdarah/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_darah: id
            },
            success: res => {
                $('#id_darah_edit').val(res[0].id_darah).change()
                $('#stok_edit').val(res[0].stok)
                $('#edit_darah').val(res[0].id_darah)
            }
        })
    })

    $('#id_jenis_darah_edit').change(function(){
        let idjenisdarah=$(this).val();
        let iddarah=$('#id_darah_edit').val();
        $.ajax({
            url: "<?= site_url('stokdarah/getStock') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_darah: iddarah,
                id_jenis_darah: idjenisdarah
            },
            success: res => {
                $('#stok_edit').val(res[0].stok)
            }
        });
    });

    $('#edit_tutup').click(function() {
        $('#id_jenis_darah_edit').val(1).change()
    });

</script>
</body>
<!--end::Body-->

</html>