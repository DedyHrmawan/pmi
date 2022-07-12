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

    //pendonor
    $("#add_donorTerakhir").flatpickr();
    $("#add_donorSelanjutnya").flatpickr();

    $("#edit_donorTerakhir").flatpickr();
    $("#edit_donorSelanjutnya").flatpickr();

    //berita
    $("#add_tanggalBerita").flatpickr();
    $("#edit_tanggalBerita").flatpickr();
</script>

<script>
    //Profil
    $('#dataTableProfil').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

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
                if (res[0].status == 1) {
                    $('#statusProfil_detail').html('<span class="badge badge-success" >Diunggah</span>')
                } else {
                    $('#statusProfil_detail').html('<span class="badge badge-danger" >Diarsipkan</span>')
                }
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
                tinymce.get('deskripsiProfil_edit').setContent(res[0].deskripsi)
                $('#statusProfil_edit').val(res[0].status).change()
                $('#id_edit').val(res[0].id_profil)
            }
        })
    })

    $('#dataTableProfil tbody').on('click', '.hapusProfil', function() {
        const id = $(this).data("id")
        $('#hapusProfil_id').val(id)
    })

    //Mobil Donor   
    $('#dataTableMobil').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

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
                $('#target_edit').val(res[0].target)
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
                if (res[0].status == 1) {
                    $('#statusInfo_detail').html('<span class="badge badge-success" >Diunggah</span>')
                } else {
                    $('#statusInfo_detail').html('<span class="badge badge-danger" >Diarsipkan</span>')
                }
            }
        })
    })

    $('#informasiTable').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

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
                tinymce.get('deskripsiInfo_edit').setContent(res[0].deskripsi);
                $('#statusInfo_edit').val(res[0].status).change()
                $('#idInfo_edit').val(res[0].id_informasi)
            }
        })
    })

    $('#informasiTable tbody').on('click', '.hapusInfo', function() {
        const id = $(this).data("id")
        $('#hapusInfo_id').val(id)
    })

    //Berita  
    $('#tableBerita tbody').on('click', '.detailBerita', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('berita/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_berita: id
            },
            success: res => {
                $('#judulBerita_detail').html(res[0].judul_berita)
                $('#deskripsiBerita_detail').html(res[0].deskripsi)
                $('#penulisBerita_detail').html(res[0].penulis_berita)
                $('#tanggalBerita_detail').html(res[0].tanggal_berita)
                if (res[0].status == 1) {
                    $('#statusBerita_detail').html('<span class="badge badge-success" >Diunggah</span>')
                } else {
                    $('#statusBerita_detail').html('<span class="badge badge-danger" >Diarsipkan</span>')
                }
            }
        })
    })

    $('#tableBerita tbody').on('click', '.editBerita', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('berita/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_berita: id
            },
            success: res => {
                $('#judulBerita_edit').val(res[0].judul_berita) 
                $('#penulisBerita_edit').val(res[0].penulis_berita)  
                $('#edit_tanggalBerita').val(res[0].tanggal_berita)           
                $('#statusBerita_edit').val(res[0].status).change()
                $('#idBerita_edit').val(res[0].id_berita)
            }
        })
    })

    $('#tableBerita tbody').on('click', '.hapusBerita', function() {
        const id = $(this).data("id")
        $('#hapusBerita_id').val(id)
    })

    //Agenda
    $('#tableAgenda').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

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
    $('#tableStok').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

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

    $('#id_jenis_darah_edit').change(function() {
        let idjenisdarah = $(this).val();
        let iddarah = $('#id_darah_edit').val();
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

    //Pendonor
    $('#tablePendonor').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

    //berita
    $('#tableBerita').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>

<!-- upload image di pendonor  -->
<script>
    var myDropzone = new Dropzone("#imgPendonor", {
        url: "http://localhost/pmi/images", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 1,
        maxFilesize: 2, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });

    var myDropzone = new Dropzone("#imgAgenda", {
        url: "http://localhost/pmi/", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 1,
        maxFilesize: 5, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });

    var myDropzone = new Dropzone("#editImgAgenda", {
        url: "http://localhost/pmi/", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 1,
        maxFilesize: 5, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });

    var myDropzone = new Dropzone("#imgBerita", {
        url: "http://localhost/pmi/", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 1,
        maxFilesize: 5, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });

    var myDropzone = new Dropzone("#editimgBerita", {
        url: "http://localhost/pmi/", // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFiles: 1,
        maxFilesize: 5, // MB
        addRemoveLinks: true,
        accept: function(file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });
</script>
<script>
    // add tiny informasi
    var addTiny = {
        selector: ".textTiny",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
        ]
    };

    tinymce.init(addTiny);
</script>
</body>
<!--end::Body-->

</html>