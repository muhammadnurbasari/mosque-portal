        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('partials/topbar'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $info_topbar ?></h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary float-left"></h6>
                                    <a href="<?= base_url('manage/donations/') ?>" class="btn btn-danger btn-icon-split float-right" id="backButton" data-table="donations">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image">
                                            
                                        </div> -->
                                        <div class="col-lg-7">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4"><?php echo $info_topbar ?> !</h1>
                                                </div>

                                                <!-- alert -->
                                                <div class="alert-edit"></div>

                                                <?php if ($this->session->flashdata('message_error')) { ?>
                                                    <div class="alert alert-danger alert-dismissible fade show">
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        <strong><?php echo $this->session->flashdata('message_error') ?></strong>
                                                    </div><br>
                                                <?php } ?>

                                                <?php if ($this->session->flashdata('message_success')) { ?>
                                                    <div class="alert alert-success alert-dismissible fade show">
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        <strong><?php echo $this->session->flashdata('message_success') ?></strong>
                                                    </div><br>
                                                <?php } ?>

                                                <form enctype="multipart/form-data" method="post" action="<?php echo base_url('manage/donations/edit') ?>">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Bank :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="bank_name" autocomplete="off" value="<?php echo $donations->bank_name; ?>">
                                                                <input type="hidden" name="id" value="<?php echo $donations->id ?>">
                                                        </div>
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Rekening :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="bank_account" autocomplete="off" value="<?php echo $donations->bank_account ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Pemilik :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="account_owner" autocomplete="off" value="<?php echo $donations->account_owner ?>">
                                                        </div>
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Qr Image :</label>
                                                            <img src="<?= $donations->qr_image; ?>" alt="" class="img img-thumbnail img-responsive">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                                            <label for="">Ubah QR CODE IMAGE (opsional)</label>
                                                            <input type="file" class="form-control"
                                                                id="" placeholder="" name="image">
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-primary btn-user btn-block" type="submit">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>       

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php $this->load->view('partials/bottombar') ?>

        </div>
        <!-- End of Content Wrapper -->