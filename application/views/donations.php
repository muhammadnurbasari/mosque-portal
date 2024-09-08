<?php $this->load->view("partial_portals/header"); ?>
<?php $this->load->view("partial_portals/topbar"); ?>

<!-- Activities Start -->
<div class="container-fluid activities py-5" id="activities">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">SALURKAN INFAK ANDA MELALUI :</p>
            <h1 class="display-6"><?= $donations->bank_name; ?></h1>
            <h3 class="display-6">No. Rek. <?= $donations->bank_account; ?></h3>
            <h6 class="display-6">A.n. <?= $donations->account_owner; ?></h6>
        </div>
        <div class="row g-4">
            <div class="col-lg-12 col-xl-12">
                <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="ms-4">
                        <img src="<?= $donations->qr_image; ?>" alt="" class="img img-responsive img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Activities Start -->

<?php $this->load->view("partial_portals/footer"); ?>
