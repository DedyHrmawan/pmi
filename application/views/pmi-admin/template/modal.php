<!-- begin modal Tambah Jadwal -->
<div class="modal fade" tabindex="-1" id="modalTambahJadwal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="mb-3">Tambah Jadwal Mobil Donor</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Lokasi" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jadwal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="jadwal" class="form-control form-control-solid " placeholder="Pilih Jadwal" name="" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                        <input id="jambuka" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Buka" name="" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                        <!--begin::Input-->
                        <input id="jamtutup" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Tutup" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal tambah jadwal mobil donor-->

<!-- begin edit Jadwal mobil donor-->
<div class="modal fade" tabindex="-1" id="modalEditJadwal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="mb-3">Edit Jadwal Mobil Donor</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Lokasi" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jadwal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="jadwal" class="form-control form-control-solid " placeholder="Jadwal" name="" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                        <input id="jambuka" type="text" class="form-control form-control-solid" placeholder=" Jam Buka" name="" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                        <!--begin::Input-->
                        <input id="jamtutup" type="text" class="form-control form-control-solid" placeholder=" Jam Tutup" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal edit jadwal mobil donor -->

<!-- begin hapus Jadwal mobil donor-->
<div class="modal fade" tabindex="-1" id="modalHapusJadwal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="mb-3">Hapus Jadwal Mobil Donor</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus jadwal mobil donor di STIKI Malang pada tanggal 19-20-2022 ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal hapus  jadwal mobil donor -->