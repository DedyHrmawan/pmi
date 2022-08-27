<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <div class="card card-xl-stretch mt-n15 ">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Laporan Keluar</span>
                                        <span class="text-muted fw-bold fs-7">Berdasarkan Jenis Golongan Darah</span>
                                    </h3>
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar" data-kt-buttons="true">
                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Tahun">
                                            <option></option>
                                            <option value="1">2021</option>
                                            <option value="2">2022</option>
                                        </select>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <div class="py-5">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-body">
                                            <canvas id="laporankeluar" class="mh-400px"></canvas>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Charts Widget 2-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <div class="card card-xl-stretch mb-5 mb-xl-8 mt-n21">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Daftar Laporan Darah Keluar</span>
                                        <!-- <span class="text-muted fw-bold fs-7">Laporan Darah Keluar</span> -->
                                    </h3>
                                </div>
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableLaporanKeluar">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-120px">Tipe</th>
                                                    <th class="min-w-120px">Jenis Golongan Darah</th>
                                                    <th class="min-w-120px">Nama</th>
                                                    <th class="min-w-120px">Tanggal</th>
                                                    <th class="min-w-120px">Lokasi Donor</th>
                                                    <th class="min-w-150px">Aksi</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                    PCR
                                                </td>
                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                    A
                                                </td>
                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                    Dedy Hermawan
                                                </td>
                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                    10 Agustus 2022
                                                </td>
                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                    UDD PMI KOTA MALANG
                                                </td>
                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                    <a href="" title="Detail Laporan" data-bs-toggle="modal" data-bs-target="#dtl_laporankeluar" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm dtl_laporankeluar me-1">
                                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen045.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                            </svg></span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="" title="Edit Laporan" data-bs-toggle="modal" data-bs-target="#edit_laporankeluar" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm edit_laporankeluar me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="#" title="Hapus Laporan" data-bs-toggle="modal" data-bs-target="#del_laporankeluar" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary del_laporankeluar btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                            </div>
                            <!--end::Charts Widget 2-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!-- begin modal Edit Laporan Keluar -->
    <div class="modal fade" id="edit_laporankeluar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Edit Laporan Keluar PMI</h3>

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
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tipe Golongan Darah</span>
                            </label>
                            <!--end::Label-->
                            <select name="" class="form-select form-select-sm form-select-solid">
                                <option value="1">AHF</option>
                                <option value="2">FFP</option>
                                <option value="3">PCR</option>
                                <option value="4">Plasma Konvalesen</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jenis Golongan Darah</span>
                            </label>
                            <!--end::Label-->
                            <select name="" class="form-select form-select-sm form-select-solid">
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">AB</option>
                                <option value="4">O</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"  name="" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Alamat</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"  name="" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Instansi</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"  name="" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nomor Telepon</span>
                            </label>
                            <!--end::Label-->
                            <input type="number" class="form-control form-control-solid"  name="" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tanggal</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" id="edit_datelaporankeluar" name="" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Lokasi Donor</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"  name="" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="" name="" class="form-control">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="submitprofil" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal Edit Laporan Keluar-->

    <!-- begin hapus Laporan Keluar-->
    <div class="modal fade" id="del_laporankeluar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Hapus Laporan Keluar</h3>
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
                <form action="" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus Laporan Keluar tersebut ?</p>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="" name="">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal hapus Laporan Keluar -->

    <!-- begin modal detail Laporan Keluar-->
    <div class="modal fade" id="dtl_laporankeluar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Detail Laporan Keluar</h3>

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
                    <div class="form-group">
                        <h6>Tipe Darah</h6>
                        <p><span >PCR</p>
                    </div>
                    <div class="form-group">
                        <h6>Jenis Golongan Darah</h6>
                        <p><span >A</p>
                    </div>
                    <div class="form-group">
                        <h6>Nama</h6>
                        <p >Dedy Hermawan</p>
                    </div>
                    <div class="form-group">
                        <h6>Alamat</h6>
                        <p><span >Blitar</p>
                    </div>
                    <div class="form-group">
                        <h6>Instansi</h6>
                        <p><span >STIKI Malang</p>
                    </div>
                    <div class="form-group">
                        <h6>Nomor Telepon</h6>
                        <p >08573526527</p>
                    </div>
                    <div class="form-group">
                        <h6>Tanggal</h6>
                        <p><span >20 Agustus 2022</p>
                    </div>
                    <div class="form-group">
                        <h6>Lokasi Donor</h6>
                        <p >UDD PMI Kota Malang</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal detail laporan keluar -->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
</body>
<!--end::Body-->

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
<script type="text/javascript">
    
    //chart laporan keluar
    "use strict";
    var KTGeneralChartJS = (function() {
        function a(a = 1, e = 100) {
            return Math.floor(Math.random() * (e - a) + a);
        }

        function e(e = 1, t = 100, s = 10) {
            for (var r = [], l = 0; l < s; l++) r.push(a(e, t));
            return r;
        }
        return {
            init: function() {
                (Chart.defaults.font.size = 13),
                (Chart.defaults.font.family = KTUtil.getCssVariableValue(
                    "--bs-font-sans-serif"
                )),
                (function() {
                    var a = document.getElementById("laporankeluar"),
                        t = KTUtil.getCssVariableValue("--bs-primary"),
                        s = KTUtil.getCssVariableValue("--bs-danger"),
                        r = KTUtil.getCssVariableValue("--bs-success"),
                        v = KTUtil.getCssVariableValue("--bs-yellow");
                    KTUtil.getCssVariableValue("--bs-font-sans-serif");
                    const l = {
                        labels: [
                            "Januari",
                            "Februari",
                            "Maret",
                            "April",
                            "Mei",
                            "Juni",
                            "Juli",
                            "Agustus",
                            "September",
                            "Oktober",
                            "November",
                            "Desember",
                        ],
                        datasets: [{
                                label: "A",
                                data: e(1, 100, 12),
                                backgroundColor: t,
                                stack: "Stack 0",
                            },
                            {
                                label: "B",
                                data: e(1, 100, 12),
                                backgroundColor: s,
                                stack: "Stack 1",
                            },
                            {
                                label: "AB",
                                data: e(1, 100, 12),
                                backgroundColor: r,
                                stack: "Stack 2",
                            },
                            {
                                label: "O",
                                data: e(1, 100, 12),
                                backgroundColor: v,
                                stack: "Stack 3",
                            },
                        ],
                    };
                    new Chart(a, {
                        type: "bar",
                        data: l,
                        options: {
                            plugins: {
                                title: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            interaction: {
                                intersect: !1
                            },
                            scales: {
                                x: {
                                    stacked: !0
                                },
                                y: {
                                    stacked: !0
                                }
                            },
                        },
                    });
                })();
            },
        };
    })();
    KTUtil.onDOMContentLoaded(function() {
        KTGeneralChartJS.init();
    });

    //datatable laporan
    $('#dataTableLaporanKeluar').dataTable({
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

    $("#edit_datelaporankeluar").flatpickr();
</script>