<?php $this->load->view("partial_portals/header"); ?>
<?php $this->load->view("partial_portals/topbar"); ?>

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
                            <p class="mb-4"><?= substr($act['content'],0,40).'...'; ?></p>
                            <a href="<?= base_url('welcome/activitas_readmore/'.$act['id']) ?>" class="btn btn-primary px-3">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
</div>
<!-- Activities Start -->

<?php $this->load->view("partial_portals/footer"); ?>
