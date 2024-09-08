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
                                    <a href="<?= base_url('manage/abouts/') ?>" class="btn btn-danger btn-icon-split float-right" id="backButton" data-table="abouts">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-lg-7">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4"><?php echo $info_topbar ?> !</h1>
                                                </div>

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
                                                <form class="upload" enctype="multipart/form-data" method="post" action="<?php echo base_url('manage/visimisi/update') ?>">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                                            <label for="">Visi</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                    name="vision" autocomplete="off" value="<?= $abouts->vision; ?>" required>
                                                        </div>

                                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                                            <label for="">Misi</label>
                                                                <textarea name="mission" class="form-control" id="mission" required><?= $abouts->mission; ?></textarea>
                                                                <input type="hidden" name="id" value="<?php echo $abouts->id ?>">
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