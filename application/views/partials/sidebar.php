 		<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-mosque"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN PANEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kelola:</h6>
                        <a class="collapse-item" href="<?php echo base_url('manage/users') ?>">Users</a>
                        <a class="collapse-item" href="<?php echo base_url('manage/abouts') ?>">Info Masjid</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Monitoring Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoring"
                    aria-expanded="true" aria-controls="collapseMonitoring">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Monitoring</span>
                </a>
                <div id="collapseMonitoring" class="collapse" aria-labelledby="headingMonitoring"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List Monitoring:</h6>
                        <a class="collapse-item" href="Monitoring-color.html">Stok Komponen Produksi</a>
                        <a class="collapse-item" href="Monitoring-border.html">Stok Komponen Gudang</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Transaksi Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi"
                    aria-expanded="true" aria-controls="collapseTransaksi">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List Transaksi:</h6>
                        <a class="collapse-item" href="Transaksi-color.html">Permintaan</a>
                        <a class="collapse-item" href="Transaksi-border.html">Pengeluaran</a>
                        <a class="collapse-item" href="Transaksi-border.html">Penerimaan</a>
                        <a class="collapse-item" href="Transaksi-border.html">Produksi</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Laporan -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan</span></a>
            </li> -->

            <!-- Nav Item - Logout -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Logout</span></a>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->