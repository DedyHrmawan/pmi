<!-- begin modal Tambah profil -->
<div class="modal fade" tabindex="-1" id="mdl_addprofil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Profil PMI</h3>

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
            <form action="<?= site_url('profil/store') ?>" method="post">                
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul" name="judul_profil" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" placeholder="Masukan Deskripsi" type="text" name="deskripsi" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>            
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah profil-->

<!-- begin modal Edit profil -->
<div class="modal fade" tabindex="-1" id="editProfil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Profil PMI</h3>

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
            <form action="<?= site_url('profil/edit') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" id="judulProfil_edit" name="judul_profil" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" type="text" name="deskripsi" id="deskripsi_edit" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="id_edit" name="id_profil" class="form-control">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal Edit profil-->

<!-- begin hapus Profil-->
<div class="modal fade" tabindex="-1" id="hapusProfil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Profil</h3>

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
            <form action="<?= site_url('profil/delete') ?>" method="post">
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Profil tersebut ?</p>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="hapusProfil_id" name="id_profil">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal hapus profil -->

<!-- begin modal Tambah Jadwal mobil donor -->
<div class="modal fade" tabindex="-1" id="mdl_addjadwal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Jadwal Mobil Donor</h3>

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
            <form action="<?= site_url('mobildonor/store') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Lokasi" name="lokasi" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jadwal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="add_jadwal" class="form-control form-control-solid " placeholder="Pilih Jadwal" name="jadwal" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                        <input id="add_jambuka" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Buka" name="jam_buka" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                        <!--begin::Input-->
                        <input id="add_jamtutup" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Tutup" name="jam_tutup" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- end modal tambah jadwal mobil donor-->

<!-- begin edit Jadwal mobil donor-->
<div class="modal fade" tabindex="-1" id="editJadwal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Jadwal Mobil Donor</h3>

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
            <form action="<?= site_url('mobildonor/edit') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" id="lokasi_edit" name="lokasi" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jadwal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="edit_jadwal" class="form-control form-control-solid " name="jadwal" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                        <input id="edit_jambuka" type="text" class="form-control form-control-solid" name="jam_buka" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                        <!--begin::Input-->
                        <input id="edit_jamtutup" type="text" class="form-control form-control-solid" name="jam_tutup"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="editmobil_id" name="id_mobil">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- end modal edit jadwal mobil donor -->

<!-- begin hapus Jadwal mobil donor-->
<div class="modal fade" tabindex="-1" id="hapusJadwal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Jadwal Mobil Donor</h3>

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
            <form action="<?= site_url('mobildonor/delete') ?>" method="post">
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus jadwal mobil donor di <b><span id="lokasi_text"></span></b> pada tanggal <b><span id="jadwal_text"></span></b> ?</p>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="hapusmobil_id" name="id_mobil">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal hapus  jadwal mobil donor -->

<!-- begin modal Tambah Informasi -->
<div class="modal fade" tabindex="-1" id="mdl_addinfo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Informasi PMI</h3>

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
            <form action="<?= site_url('informasi/store') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul" name="judul_informasi" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" placeholder="Masukan Deskripsi" type="text" name="deskripsi" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah Informasi-->

<!-- begin modal Edit Informasi -->
<div class="modal fade" tabindex="-1" id="editInfo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Profil PMI</h3>

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
            <form action="<?= site_url('informasi/edit') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" name="judul_informasi" id="judul_edit"/>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" type="text" name="deskripsi" id="deskripsiInfo_edit" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="idInfo_edit" name="id_informasi">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal Edit Informasi-->

<!-- begin modal hapus Informasi-->
<div class="modal fade" tabindex="-1" id="hapusInfo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Informasi</h3>

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
            <form action="<?= site_url('informasi/delete') ?>" method="post">
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Informasi tersebut ?</p>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="hapusInfo_id" name="id_informasi">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal hapus Informasi -->

<!-- begin modal detail Informasi-->
<div class="modal fade" tabindex="-1" id="detailInfo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Informasi</h3>

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
                    <h6>Judul</h6>
                    <p><span id="detail_judul"></span></p>
                </div>
                <div class="form-group">
                    <h6>Deskripsi</h6>
                    <p><span id="detail_deskripsi"></span></p>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal detail Informasi -->

<!-- begin modal detail Informasi-->
<div class="modal fade" tabindex="-1" id="mdl_detailProfil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Profil</h3>

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
                    <h6>Judul</h6>
                    <p><span id="judul_profil"></p>
                </div>
                <div class="form-group">
                    <h6>Deskripsi</h6>
                    <p><span id="deskripsi"></p>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal detail Informasi -->

<!-- begin modal Tambah Agenda -->
<div class="modal fade" tabindex="-1" id="mdl_addagenda">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Agenda</h3>
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
            <form action="<?= site_url('agenda/store') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul Agenda</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul Agenda" name="nama_agenda" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Lokasi Agenda" name="lokasi_agenda" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Tanggal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="add_tanggal" class="form-control form-control-solid " placeholder="Pilih Tanggal" name="tgl_agenda" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Mulai</label>
                        <input id="add_jammulai" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Buka" name="jam_buka" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Selesai</label>
                        <!--begin::Input-->
                        <input id="add_jamselesai" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Tutup" name="jam_tutup" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah Agenda-->

<!-- begin edit Agenda-->
<div class="modal fade" tabindex="-1" id="editAgenda">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Agenda</h3>

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
            <form action="<?= site_url('agenda/edit') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul Agenda</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" name="nama_agenda" id="namaAgenda_edit"/>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" name="lokasi_agenda" id="lokasiAgenda_edit"/>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Tanggal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="edit_tanggal" class="form-control form-control-solid " name="tgl_agenda"/>
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Mulai</label>
                        <input id="edit_jammulai" type="text" class="form-control form-control-solid" name="jam_buka" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Selesai</label>
                        <!--begin::Input-->
                        <input id="edit_jamselesai" type="text" class="form-control form-control-solid" name="jam_tutup"/>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="editAgenda_id" name="id_agenda">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal edit Agenda -->

<!-- begin hapus Agenda-->
<div class="modal fade" tabindex="-1" id="hapusAgenda">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Agenda</h3>

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
            <form action="<?= site_url('agenda/delete') ?>" method="post">
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Agenda tersebut ?</p>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="hapusAgenda_id" name="id_agenda">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal Agenda -->