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
                                    <h6 class="m-0 font-weight-bold text-primary float-left">Data <?php echo $info_topbar ?></h6>
                                    <a href="#" class="btn btn-primary btn-icon-split float-right" id="addButton" data-table="users">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-users"></i>
                                        </span>
                                        <span class="text">Add <?php echo $info_topbar ?></span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($users as $key => $value): ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $value['username'] ?></td>
                                                        <td><?php echo $value['email'] ?></td>
                                                        <td>
                                                            <a href="#" class="btn btn-warning btn-circle btn-sm" id="editButton" data-id="<?php echo $value['id'] ?>" data-table="users">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="#" id="deleteButton" class="btn btn-danger btn-circle btn-sm" data-table="users" data-id="<?php echo $value['id'] ?>" data-name="<?php echo $value['username'] ?>">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
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