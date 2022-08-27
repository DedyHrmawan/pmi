<!-- begin modal Tambah profil -->
<div class="modal fade" id="mdl_addprofil">
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
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul" name="judul_profil" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Deskripsi</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid tox-target textTiny" id="tinyprofil" placeholder="Masukan Deskripsi" type="text" name="deskripsi" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" name="status" required>
                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
            </div>
            <!--end::Label-->

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="submitprofil" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah profil-->

<!-- begin modal Edit profil -->
<div class="modal fade" id="editProfil">
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
                        <textarea class="form-control form-control-solid textTiny" type="text" name="deskripsi" cols="30" rows="10" id="deskripsiProfil_edit"></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" id="statusProfil_edit" name="status">
                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="id_edit" name="id_profil" class="form-control">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitprofil" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal Edit profil-->

<!-- begin hapus Profil-->
<div class="modal fade" id="hapusProfil">
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

<!-- begin modal detail Profil-->
<div class="modal fade" id="mdl_detailProfil">
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
                <div class="form-group">
                    <h6>Status</h6>
                    <p id="statusProfil_detail"></p>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal detail Profil -->

<!-- begin modal Tambah Informasi -->
<div class="modal fade" id="mdl_addinfo">
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
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul" name="judul_informasi" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Deskripsi</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid tox-target textTiny" placeholder="Masukan Deskripsi" id="tinyinformasi" type="text" name="deskripsi" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" name="status" required>
                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitinformasi" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah Informasi-->

<!-- begin modal Edit Informasi -->
<div class="modal fade" id="editInfo">
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
                        <input type="text" class="form-control form-control-solid" name="judul_informasi" id="judul_edit" />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Deskripsi</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid textTiny" type="text" name="deskripsi" id="deskripsiInfo_edit" cols="30" rows="10"></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" name="status" id="statusInfo_edit">
                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="idInfo_edit" name="id_informasi">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitinformasi" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal Edit Informasi-->

<!-- begin modal hapus Informasi-->
<div class="modal fade" id="hapusInfo">
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
<div class="modal fade" id="detailInfo">
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
                <div class="form-group">
                    <h6>Status</h6>
                    <p id="statusInfo_detail"><span class="badge badge-success">Tampil</span></p>
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
<div class="modal fade" id="mdl_addagenda">
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
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul Agenda" name="nama_agenda" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Lokasi</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Lokasi Agenda" name="lokasi_agenda" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Datepicker-->
                            <input id="add_tanggal" class="form-control form-control-solid " placeholder="Pilih Tanggal" name="tgl_agenda" required />
                            <!--end::Datepicker-->
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Link Agenda</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Link Agenda" name="lokasi_agenda" required />
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                            <input id="add_jammulai" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Buka" name="jam_buka" required />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                            <!--begin::Input-->
                            <input id="add_jamselesai" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Tutup" name="jam_tutup" required />
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Poster</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="imgAgenda">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Letakkan file di sini atau klik untuk mengunggah.</h3>
                                    <span class="fs-7 fw-bold text-gray-400">Unggah poster Anda di bawah 5 Mb</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
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
<div class="modal fade" id="editAgenda">
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
                        <input type="text" class="form-control form-control-solid" name="nama_agenda" id="namaAgenda_edit" />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Lokasi</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" name="lokasi_agenda" id="lokasiAgenda_edit" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Link Agenda</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" value="Link" name="" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Datepicker-->
                            <input id="edit_tanggal" class="form-control form-control-solid " name="tgl_agenda" />
                            <!--end::Datepicker-->
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                            <input id="edit_jammulai" type="text" class="form-control form-control-solid" name="jam_buka" />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                            <!--begin::Input-->
                            <input id="edit_jamselesai" type="text" class="form-control form-control-solid" name="jam_tutup" />
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Poster</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="editImgAgenda">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Letakkan file di sini atau klik untuk mengunggah.</h3>
                                    <span class="fs-7 fw-bold text-gray-400">Unggah poster Anda di bawah 5 Mb</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
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
<div class="modal fade" id="hapusAgenda">
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

<!-- begin modal Tambah Berita -->
<div class="modal fade" id="mdl_addBerita">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Berita PMI</h3>

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
            <form action="<?= site_url('berita/store') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Judul Berita</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul Berita" name="judul_berita" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Penulis</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama Penulis" name="penulis_berita" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Datepicker-->
                            <input id="add_tanggalBerita" class="form-control form-control-solid " placeholder="Pilih Tanggal" name="tanggal_berita" required />
                            <!--end::Datepicker-->
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Isi Berita</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid tox-target textTiny" placeholder="Masukan Isi Berita" id="tinyberita" name="deskripsi" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span class="required">Gambar</span>
                        </label>
                        <!--end::Label-->
                        <!-- wadah preview -->
                        <img class="m-3 mx-auto rounded" id="prevAddBerita" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <!-- end preview  -->
                        <input type="file" class="form-control form-control-solid" name="file" id="addImgBerita" onchange="previewAddBerita();" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" name="status">
                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="imageBerita" name="link">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitberita" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah Berita-->

<!-- begin modal Edit Berita -->
<div class="modal fade" id="editBerita">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Berita PMI</h3>

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
            <form action="<?= site_url('berita/edit') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Judul Berita</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" id="judulBerita_edit" placeholder="Judul Berita" name="judul_berita" />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Penulis</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" id="penulisBerita_edit" placeholder="Nama Penulis" name="penulis_berita" />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Datepicker-->
                            <input id="edit_tanggalBerita" class="form-control form-control-solid " placeholder="Pilih Tanggal" name="tanggal_berita" />
                            <!--end::Datepicker-->
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Isi Berita</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid textTiny" id="deskripsiBerita_edit" name="deskripsi" cols="30" rows="10"></textarea>
                    </div>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span>Gambar</span>
                        </label>
                        <!--end::Label-->
                        <!-- wadah preview -->
                        <img class="m-3 mx-auto rounded" id="prevEditBerita" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <!-- end preview  -->
                        <input type="file" class="form-control form-control-solid" name="file" id="editImgBerita" onchange="previewEditBerita();"/>
                    </div>
                    <!--end::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" id="statusBerita_edit" name="status">

                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="idBerita_edit" name="id_berita">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitberita" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal Edit Berita-->

<!-- begin hapus Berita-->
<div class="modal fade" id="hapusBerita">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Berita</h3>

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
            <form action="<?= site_url('berita/delete') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Berita tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="hapusBerita_id" name="id_berita">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal hapus Berita -->

<!-- begin modal detail Berita-->
<div class="modal fade" id="detailBerita">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Berita</h3>

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
                        <div class="">
                            <img alt="image" id="imgBeritaDetail" style="max-width: 430px; min-width:300px;" />
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Row-->
                    <div class="row mb-5 mt-5">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-bold text-muted">Judul</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800" id="judulBerita_detail"></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-bold text-muted">Penulis</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold text-gray-800 fs-6" id="penulisBerita_detail"></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-bold text-muted">Tanggal</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold text-gray-800 fs-6" id="tanggalBerita_detail"></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-bold text-muted">Isi Berita</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-bold text-gray-800 fs-6" id="deskripsiBerita_detail"></span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-bold text-muted">Status</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <p id="statusBerita_detail"></p>
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
<!-- end modal detail Berita -->

<!-- begin modal Tambah Foto Carousel -->
<div class="modal fade" id="mdl_addcarousel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Foto Beranda</h3>

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
            <form action="<?= site_url('carousel/store') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span class="required">Gambar</span>
                        </label>
                        <!--end::Label-->
                        <!-- wadah preview -->
                        <img class="m-3 mx-auto rounded" id="prevAddCarousel" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <!-- end preview  -->
                        <input type="file" name="file" class="form-control form-control-solid" id="addImgCarousel" onchange="previewAddCarousel();" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" name="status">
                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitberita" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal tambah Foto Carousel-->

<!-- begin modal Edit Foto Carousel -->
<div class="modal fade" id="editCarousel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Foto Beranda</h3>

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
            <form action="<?= site_url('carousel/edit') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span>Gambar</span>
                        </label>
                        <!--end::Label-->
                        <!-- wadah preview -->
                        <img class="m-3 mx-auto rounded" id="prevEditCarousel" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <!-- end preview  -->
                        <input type="file" name="file" class="form-control form-control-solid" id="editImgCarousel" onchange="previewEditCarousel();"/>
                    </div>
                    <!--end::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <select class="form-select form-select-solid" id="statusCarousel_edit" name="status">
                            <option value="1">Diunggah</option>
                            <option value="2">Diarsipkan</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="idCarousel_edit" name="id_carousel">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="submitberita" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal Edit Foto Carousel-->

<!-- begin hapus Foto Carousel-->
<div class="modal fade" id="hapusCarousel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Foto</h3>

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
            <form action="<?= site_url('carousel/delete') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Foto tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="hapusCarousel_id" name="id_carousel">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal hapus Foto Carousel -->

<!-- begin modal detail Foto Carousel-->
<div class="modal fade" id="detailCarousel">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Foto</h3>

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
                    <div class="form-group">
                        <h6>Detail Foto</h6>
                        <div class="me-7 mb-4 text-center">
                            <div class="">
                                <img alt="image" id="imgDetailCarousel" style="max-width: 430px; min-width:300px;" />
                            </div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <div class="form-group">
                        <h6>Status</h6>
                        <p id="statusCarouselDetail"><span class="badge badge-success">Diunggah</span></p>
                    </div>
                </div>
                <!--end::Card body-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal detail Foto Carousel -->