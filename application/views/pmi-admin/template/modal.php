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
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" placeholder="Masukan Deskripsi" type="text" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal tambah profil-->

<!-- begin modal Edit profil -->
<div class="modal fade" tabindex="-1" id="mdl_editprofil">
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

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" value="Profil" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" type="text" name="" id="" cols="30" rows="10">Siap dengan darah yang aman, cukup dan setiap saat dengan Pelayanan Prima mengikuti Perkembangan Teknologi Mutakhir mengacu Managemen Mutu</textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal Edit profil-->

<!-- begin hapus Profil-->
<div class="modal fade" tabindex="-1" id="mdl_delprofil">
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

            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Profil tersebut ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Hapus</button>
            </div>
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
                        <input id="add_jadwal" class="form-control form-control-solid " placeholder="Pilih Jadwal" name="" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                        <input id="add_jambuka" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Buka" name="" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                        <!--begin::Input-->
                        <input id="add_jamtutup" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Tutup" />
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
<div class="modal fade" tabindex="-1" id="mdl_editjadwal">
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

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" value="STIKI Malang" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jadwal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="edit_jadwal" class="form-control form-control-solid " value="19-20-2022" name="" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Buka</label>
                        <input id="edit_jambuka" type="text" class="form-control form-control-solid" value=" 08:00" name="" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Tutup</label>
                        <!--begin::Input-->
                        <input id="edit_jamtutup" type="text" class="form-control form-control-solid" value="09:10" />
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
<div class="modal fade" tabindex="-1" id="mdl_deljadwal">
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

<!-- begin modal Tambah Stok Darah -->
<div class="modal fade" tabindex="-1" id="mdl_addjenis">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Jenis Darah</h3>

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
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jenis Darah / Produk</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Jenis Darah atau Produk" name="" />
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal tambah jenis darah-->

<!-- begin modal Tambah Jenis Stok -->
<div class="modal fade" tabindex="-1" id="mdl_addstok">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Stok Darah</h3>

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
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jenis Darah</span>
                    </label>
                    <!--end::Label-->
                    <select name="" aria-label="Pilih Jenis Darah" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                        <option value="1">AHF</option>
                        <option value="2">Plasma Konvalesen</option>
                        <option value="3">FFP</option>
                        <option value="4">PCR</option>
                    </select>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jenis Golongan Darah</span>
                    </label>
                    <!--end::Label-->
                    <select name="" aria-label="Pilih Jenis Darah" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">AB</option>
                        <option value="4">O</option>
                    </select>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jumlah</span>
                    </label>
                    <!--end::Label-->
                    <input type="number" class="form-control form-control-solid" placeholder="Masukan Jumlah Stok Darah" name="" />
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal tambah stok-->

<!-- begin modal edit Jenis Stok -->
<div class="modal fade" tabindex="-1" id="mdl_editstok">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Stok Darah</h3>

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
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jenis Darah</span>
                    </label>
                    <!--end::Label-->
                    <select name="" aria-label="Pilih Jenis Darah" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                        <option value="1">AHF</option>
                        <option value="2">Plasma Konvalesen</option>
                        <option value="3">FFP</option>
                        <option value="4">PCR</option>
                    </select>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jenis Golongan Darah</span>
                    </label>
                    <!--end::Label-->
                    <select name="" aria-label="Pilih Jenis Darah" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">AB</option>
                        <option value="4">O</option>
                    </select>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Jumlah</span>
                    </label>
                    <!--end::Label-->
                    <input type="number" class="form-control form-control-solid" value="10" name="" />
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal edit stok-->

<!-- begin hapus stok darah-->
<div class="modal fade" tabindex="-1" id="mdl_delstok">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Produk atau Jenis Darah</h3>

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
                <p>Apakah anda yakin ingin menghapus produk atau jenis AHF tersebut ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal hapus stok darah -->

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

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" placeholder="Masukan Deskripsi" type="text" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal tambah Informasi-->

<!-- begin modal Edit Informasi -->
<div class="modal fade" tabindex="-1" id="mdl_editinfo">
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

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" value="Informasi Manfaat Donor" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Deskripsi</span>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" type="text" name="" id="" cols="30" rows="10">1. Menurunkan risiko terkena penyakit jantung dan pembuluh darah Donor darah secara teratur diketahui dapat menurunkan kekentalan darah. Kekentalan darah merupakan salah satu faktor yang berperan dalam meningkatkan risiko terkena penyakit jantung.</textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal Edit Informasi-->

<!-- begin modal hapus Informasi-->
<div class="modal fade" tabindex="-1" id="mdl_delinfo">
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

            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Informasi tersebut ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal hapus Informasi -->

<!-- begin modal detail Informasi-->
<div class="modal fade" tabindex="-1" id="mdl_detailinfo">
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
                    <p>Informasi Manfaat Donor </p>
                </div>
                <div class="form-group">
                    <h6>Deskripsi</h6>
                    <p>1. Menurunkan risiko terkena penyakit jantung dan pembuluh darah Donor darah secara teratur diketahui dapat menurunkan kekentalan darah. Kekentalan darah merupakan salah satu faktor yang berperan dalam meningkatkan risiko terkena penyakit jantung.</p>
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
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul Agenda</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Judul Agenda" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Lokasi Agenda" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Tanggal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="add_tanggal" class="form-control form-control-solid " placeholder="Pilih Tanggal" name="" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Mulai</label>
                        <input id="add_jammulai" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Buka" name="" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Selesai</label>
                        <!--begin::Input-->
                        <input id="add_jamselesai" type="text" class="form-control form-control-solid" placeholder="Masukan Jam Tutup" />
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
<!-- end modal tambah Agenda-->

<!-- begin edit Agenda-->
<div class="modal fade" tabindex="-1" id="mdl_editagenda">
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

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Judul Agenda</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" value="Donor Darah Bersama Rotary Club Jembatan Merah" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Lokasi</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" value=" Jl. Sumatera No. 16 Surabaya" name="" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Tanggal</span>
                    </label>
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Datepicker-->
                        <input id="edit_tanggal" class="form-control form-control-solid " value="19-20-2022" name="" />
                        <!--end::Datepicker-->
                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Mulai</label>
                        <input id="edit_jammulai" type="text" class="form-control form-control-solid" value=" 08:00" name="" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Jam Selesai</label>
                        <!--begin::Input-->
                        <input id="edit_jamselesai" type="text" class="form-control form-control-solid" value="09:10" />
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
<!-- end modal edit Agenda -->

<!-- begin hapus Agenda-->
<div class="modal fade" tabindex="-1" id="mdl_delagenda">
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

            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Agenda tersebut ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal Agenda -->