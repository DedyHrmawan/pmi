<!--begin::Projects Section-->
<div class="mb-lg-n15 position-relative z-index-2 ">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">
                <!--begin::Heading-->
                <div class="text-left mb-5 mb-lg-10">
                    <!--begin::Title-->
                    <img alt="Logo" src="<?= base_url(); ?>assets/admin/media/logo-pmi-black.svg" class="logo-default h-50px h-lg-60px" />
                    <h5 class="fs-1 text-dark mt-10 mb-20" id="">Silahkan mengisi form isian dibawah ini untuk booking jadwal donor !</h5>
                    <!--end::Title-->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Lokasi</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="" class="form-control form-control-lg form-control-solid " value="Plaza Araya" readonly />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Tanggal</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="" class="form-control form-control-lg form-control-solid " value="26 August 2022" readonly />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Jam Buka</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="" class="form-control form-control-lg form-control-solid " value="10:40" readonly />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Jam Tutup</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="" class="form-control form-control-lg form-control-solid " value="16:00" readonly />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Nama</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="" class="form-control form-control-lg form-control-solid " placeholder="Masukan Nama" required />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Nomor Telepon</label>
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="" class="form-control form-control-lg form-control-solid " placeholder="Masukan Nomor Telepon" required />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Alamat</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="" class="form-control form-control-lg form-control-solid " placeholder="Masukan Alamat" required />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Booking Waktu</label>
                        <div class="col-lg-8 fv-row">
                            <input id="jam_hadir" class="form-control form-control-solid" placeholder="Masukan Waktu Kehadiran" name="" required />
                        </div>
                    </div>
                    
                </div>
                <!--end::Heading-->
                <div class="text-center">
                    <a href="<?php echo site_url('login'); ?>" class="btn btn-danger  btn-color-white me-1">Booking Jadwal</a>
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Projects Section-->
<!--begin::Pricing Section-->
<div class="mt-sm-n20 pt-5">
    <!--begin::Curve top-->
    <div class="landing-curve landing-red-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
</div>
<!--end::Pricing Section-->