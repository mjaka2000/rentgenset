<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php foreach ($avatar as $a) { ?>
                    <img src="<?= base_url('assets/upload/user/img/' . $a->nama_file); ?>" class="img-circle" alt="User Image">
                <?php  } ?>
            </div>
            <div class="pull-left info">
                <p><?= $this->session->userdata('name') ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?= base_url('admin') ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                    <!-- <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span> -->
                </a>

            </li>
            <!-- <li class="treeview"><a href="#"><i class="fa fa-edit"></i>
                    <span>Forms</span><span class="pull-right-container"></span><i class="pull-right fa fa-angle-left "></i></span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= base_url(); ?>admin/tambah_genset">
                            <i class="fa fa-circle-o"></i>
                            <span>Tambah Data Genset</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tambah_service_genset">
                            <i class="fa fa-circle-o"></i>
                            <span>Tambah Data Service Genset</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tambah_data_mobil">
                            <i class="fa fa-circle-o"></i>
                            <span>Tambah Data Mobil</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tambah_data_operator">
                            <i class="fa fa-circle-o"></i>
                            <span>Tambah Data Operator</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tambah_data_pelanggan">
                            <i class="fa fa-circle-o"></i>
                            <span>Tambah Data Pelanggan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tambah_genset_keluar">
                            <i class="fa fa-circle-o"></i>
                            <span>Tambah Genset Keluar</span>
                        </a>
                    </li>

                </ul>
            </li> -->

            <li class="treeview"><a href="#"><i class="fa fa-table"></i>
                    <span>Data Master</span><span class="pull-right-container"></span><i class="pull-right fa fa-angle-left "></i></span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= base_url(); ?>admin/tabel_genset">
                            <i class="fa fa-cogs"></i>
                            <span>Data Genset</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url(); ?>admin/tabel_mobil">
                            <i class="fa fa-car nav-icon"></i>
                            <span>Data Mobil</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tabel_operator">
                            <i class="fa fa-user nav-icon"></i>
                            <span>Data Operator</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tabel_pelanggan">
                            <i class="fa fa-users nav-icon"></i>
                            <span>Data Pelanggan</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="<?= base_url(); ?>admin/tabel_service_genset">
                    <i class="fa fa-wrench nav-icon"></i>
                    <span>Data Perbaikan Genset</span>
                </a>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-copy"></i>
                    <span>Transaksi</span><span class="pull-right-container"></span><i class="pull-right fa fa-angle-left "></i></span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= base_url(); ?>admin/tabel_barang_keluar">
                            <i class="fa fa-upload nav-icon"></i>
                            <span>Data Genset Keluar</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/tabel_barang_masuk">
                            <i class="fa fa-download nav-icon"></i>
                            <span>Data Genset Masuk</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="header">LAPORAN</li>
            <li>
                <a href="<?= base_url('admin/laporan') ?>">
                    <i class="ion ion-stats-bars"></i> <span>Laporan Data</span>
                </a>

            </li>

            <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
            <li class="header">PENGATURAN</li>
            <li class="treeview"><a href="#"><i class="fa fa-user"></i>
                    <span>Menu User</span><span class="pull-right-container"></span><i class="pull-right fa fa-angle-left "></i></span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= base_url(); ?>admin/profile">
                            <i class="fa fa-cog"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin/users">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>