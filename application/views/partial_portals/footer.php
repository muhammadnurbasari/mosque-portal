<!-- Footer Start -->
<div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-4 footer-inner">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item mt-5">
                            <h4 class="text-light mb-4">INFAK<span class="text-primary"> Sekarang</span></h4>
                            <p class="mb-4 text-secondary">Assalamu'alaikum warahmatullahi wabarakatuh. Mari bersama-sama kita ikut berkontribusi dalam pembangunan dan pemeliharaan masjid, rumah Allah yang mulia. Infak Anda, sekecil apa pun, akan menjadi amal jariyah yang terus mengalir pahalanya. Bersama, kita dapat membangun tempat ibadah yang lebih nyaman dan berkah untuk kita semua.</p>
                            <a href="<?= base_url('welcome/donation') ?>" class="btn btn-primary py-2 px-4">INFAK <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item mt-5">
                            <h4 class="text-light mb-4">Masjid Abdul Aziz</h4>
                            <div class="d-flex flex-column">
                                <h6 class="text-secondary mb-0">Alamat</h6>
                                <div class="d-flex align-items-center border-bottom py-4">
                                    <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i class="fa fa-map-marker-alt text-dark"></i></span>
                                    <a href="" class="text-body"><?= $abouts->address; ?></a>
                                </div>
                                <h6 class="text-secondary mt-4 mb-0">Phone</h6>
                                <div class="d-flex align-items-center py-4">
                                    <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i class="fa fa-phone-alt text-dark"></i></span>
                                    <a href="" class="text-body"><?= $abouts->phone_number; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container py-4">
                <div class="border-top border-secondary pb-4"></div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Masjid abdul aziz</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>
        <a href="#activities" id="a_activities" class="btn btn-primary border-3 border-light back-to-top" style="display: none;"><i class="fa fa-arrow-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/wow/wow.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/easing/easing.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/waypoints/waypoints.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="<?= base_url('assets/') ?>js/main.js"></script>

		<script>
			$(document).ready(function(){

                let segment = '<?= $this->uri->segment(2); ?>'

                if (segment == 'activitas_readmore') {
                    $("#a_activities").trigger("click");
                }
                
			});
		</script>
    </body>

</html>