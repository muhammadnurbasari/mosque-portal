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

                                                <!-- alert -->
                                                <div class="alert-edit"></div>

                                                <form class="edit" method="post" action="<?php echo base_url('manage/abouts/edit') ?>">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Phone :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="phone_number" autocomplete="off" value="<?php echo $abouts->phone_number; ?>">
                                                                <input type="hidden" name="id" value="<?php echo $abouts->id ?>">
                                                        </div>
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Email :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="email" autocomplete="off" value="<?php echo $abouts->email ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Twitter (opsional) :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="twitter" autocomplete="off" value="<?php echo $abouts->twitter ?>">
                                                        </div>
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Instagram (opsional) :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="instagram" autocomplete="off" value="<?php echo $abouts->instagram ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Facebook (opsional) :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="facebook" autocomplete="off" value="<?php echo $abouts->facebook ?>">
                                                        </div>
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label for="">Linkedin (opsional) :</label>
                                                            <input type="text" class="form-control" id="exampleFirstName"
                                                                 name="linkedin" autocomplete="off" value="<?php echo $abouts->linkedin ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                                            <label for="">Alamat :</label>
                                                            <textarea class="form-control" name="address" id="address"><?= $abouts->address; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="btn btn-primary btn-user btn-block" id="btnEdit" data-table="abouts">
                                                        Update
                                                    </a>
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