<?php $this->load->view("partial_portals/header"); ?>
<?php $this->load->view("partial_portals/topbar"); ?>

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
                        <p class="mb-4"><?= substr($event['content'],0,110).'...'; ?></p>
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
