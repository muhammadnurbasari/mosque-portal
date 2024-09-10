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
                        <h1 class="display-5 pb-4 m-0 text-center text-primary">Allah Menolong Mereka yang Menolong Dirinya Sendiri</h1>
                        <!-- <h3 class="fs-5 text-uppercase text-primary text-center">VISI dan MISI</h3> -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-12">
                                <div class="ps-3 d-flex align-items-center justify-content-start">
                                    <!-- <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i class="fa fa-eye text-dark fa-4x mb-5 pb-2"></i></span> -->
                                    <div class="ms-4">
                                        <h5 class="text-center">VISI</h5>
                                        <p class="text-center"><?= $abouts->vision; ?></p>

                                        <h5 class="text-center">MISI</h5>
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


        <!-- Activities Start -->
        <div class="container-fluid activities py-2">
            <div class="container py-2">
                <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Activitas</p>
                    <h1 class="display-3">Beberapa Kegiatan Kami</h1>
                </div>
                <div class="row g-4">

                    <?php foreach ($activitas as $key => $act) { ?>
                        <div class="col-lg-6 col-xl-4">
                            <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-mosque fa-4x text-dark"></i>
                                 <!-- <img src="<?= $act['image']; ?>" alt="" class="img img-responsive img-thumbnail" > -->
                                <div class="ms-4">
                                    <h4><?= $act['title'] ?></h4>
                                    <p class="mb-4"><?= strip_tags(htmlspecialchars_decode(substr($act['content'],0,40).'...')); ?></p>
                                    <a href="<?= base_url('welcome/activitas_readmore/'.$act['id']) ?>" class="btn btn-primary px-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        <!-- Activities Start -->


        <!-- Events Start -->
        <div class="container-fluid event py-5">
            <div class="container py-5">
                <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">List <span class="text-primary">Events</span></h1>
                
                <?php 
                $day_offweek = [
                    "Sunday" => "Ahad",
                    "Monday" => "Senin",
                    "Tuesday" => "Selasa",
                    "Wednesday" => "Rabu",
                    "Thursday" => "Kamis",
                    "Friday" => "Jum'at",
                    "Saturday" => "Sabtu"
                ];

                foreach ($events as $key => $event) { ?>
                    <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="col-3 col-lg-2 pe-0">
                            <div class="text-center border-bottom border-dark py-3 px-2">
                                <h6><?= date('d F Y', strtotime($event['posting_date'])); ?></h6>
                                <p class="mb-0"><?= $day_offweek[date('l', strtotime($event['posting_date']))]; ?></p>
                            </div>
                        </div>
                        <div class="col-9 col-lg-6 border-start border-dark pb-5">
                            <div class="ms-3">
                                <h4 class="mb-3"><?= $event['title']; ?></h4>
                                <p class="mb-4"><?= strip_tags(htmlspecialchars_decode(substr($event['content'],0,110).'...')); ?></p>
                                <a href="<?= base_url('welcome/event_readmore/'.$event['id']) ?>" class="btn btn-primary px-3">Detail</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="overflow-hidden mb-5">
                                <img src="<?= $event['image']; ?>" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- Events End -->


<?php $this->load->view("partial_portals/footer"); ?>
