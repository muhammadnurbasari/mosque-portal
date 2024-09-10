<?php $this->load->view("partial_portals/header"); ?>
<?php $this->load->view("partial_portals/topbar"); ?>

<!-- About Satrt -->
<div class="container-fluid about py-1">
    <div class="container py-1">
        <div class="row g-5 mb-5">
            <!-- <div class="col-xl-6">
                <div class="row g-4">
                    <div class="col-6">
                        <img src="<?= base_url('assets/') ?>img/about-1.jpg" class="img-fluid h-100 wow zoomIn" data-wow-delay="0.1s" alt="">
                    </div>
                    <div class="col-6">
                        <img src="<?= base_url('assets/') ?>img/about-2.jpg" class="img-fluid pb-3 wow zoomIn" data-wow-delay="0.1s" alt="">
                        <img src="<?= base_url('assets/') ?>img/about-3.jpg" class="img-fluid pt-3 wow zoomIn" data-wow-delay="0.1s" alt="">
                    </div>
                </div>
            </div> -->
            <div class="col-xl-12 wow fadeIn" data-wow-delay="0.5s">
                <p class="fs-5 text-uppercase text-primary">VISI & MISI</p>
                <!-- <h1 class="display-5 pb-4 m-0">Allah Help Those Who Help Themselves</h1>
                <p class="pb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam. Etiam quis mauris justo. Vivamus purus nulla, rutrum ac risus in.</p> -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="ps-3 d-flex align-items-center justify-content-start">
                            <!-- <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i class="fa fa-eye text-dark fa-4x mb-5 pb-2"></i></span> -->
                            <div class="ms-4">
                                <h5>VISI</h5>
                                <p><?= $abouts->vision; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-3 d-flex align-items-center justify-content-start">
                            <!-- <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i class="fa fa-flag text-dark fa-4x mb-5 pb-2"></i></span> -->
                            <div class="ms-4">
                                <h5>MISI</h5>
                                <p><?= htmlspecialchars_decode($abouts->mission); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="bg-light p-3 mb-4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-3">
                            <img src="<?= base_url('assets/') ?>img/about-child.jpg" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col-6">
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam. Etiam quis mauris justo.</p>
                        </div>
                        <div class="col-3">
                                <h2 class="mb-0 text-primary text-center">$20,46</h2>
                                <h5 class="mb-0 text-center">Raised</h5>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-6">
                        <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Charity & Donation</p>
                        <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Parent Education</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Hadith & Sunnah</p>
                        <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Mosque Development</p>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- <div class="container text-center bg-primary py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-2">
                    <i class="fa fa-mosque fa-5x text-white"></i>
                </div>
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="mb-0">Every Muslim Needs To Realise The Importance Of The "Pillar" Of Islam</h1>
                </div>
                <div class="col-lg-3">
                    <a href="" class="btn btn-light py-2 px-4">Learn More</a>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- About End -->

<?php $this->load->view("partial_portals/footer"); ?>
