<?php $this->load->view("partial_portals/header"); ?>
<?php $this->load->view("partial_portals/topbar"); ?>

<!-- Activities Start -->
<div class="container-fluid activities py-5" id="activities">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Activitas</p>
            <h1 class="display-3"><?= $activitas->title; ?></h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-12 col-xl-12">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="ms-4">
                        <img src="<?= $activitas->image; ?>" alt="" class="img img-responsive img-thumbnail">
                        <p class="mb-4"><?= $activitas->content; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Activities Start -->

<?php $this->load->view("partial_portals/footer"); ?>
