 </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('manage/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Modal-->
    <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-loading">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="float-right" src="<?php echo base_url('assets/admin-temp/img/lodeng2.gif') ?>">
                        </div>
                        <div class="col-sm-6">
                            <h2 class="text-center text-danger"><strong>LOADING ...</strong></h2>
                        </div>
                        <div class="col-sm-3">
                            <img src="<?php echo base_url('assets/admin-temp/img/lodeng2.gif') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-footer">
                    <form action="" method="post" id="form">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-sm btn-danger btn-icon-only text-light" id="btnDelete">Hapus</button>
                        <button type="button" class="btn btn-danger" id="btnDeleteProses" style="display: none;">PROSES DELETE ...</button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/admin-temp') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/admin-temp') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url(); ?>assets/admin-temp/js/datepicker/bootstrap-datepicker.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin-temp') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin-temp') ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/admin-temp') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/admin-temp') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/admin-temp') ?>/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url('assets/jsadmin/plugin-mnbtricks') ?>/mnbtricks.js"></script>

    <!-- tinymce wysiwyg editor -->
    <script src="<?php echo base_url('assets/admin-temp/tinymce_7.3.0/tinymce/js/tinymce/tinymce.min.js') ?>"></script>

    <script>
        $(document).ready(function () {
            $("#datepicker").datepicker({
                autoclose: true,
                format: "yyyy-mm-dd"
            });

            tinymce.init({
                selector: 'textarea',  // change this value according to your HTML
                plugins: 'lists',
                menu: {
                    edit: { title: 'Edit', items: 'undo, redo, selectall' }
                },

                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | help | orderlist | checklist',
            });
        });
    </script>

</body>

</html>