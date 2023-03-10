<?php $this->load->view('template/head'); ?>
<?php $this->load->view('admin/template/nav'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin') ?>"><!--<i class="fa fa-home"></i>--> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div id="loading">
      <img src="<?= base_url(); ?>assets/style/loading.gif" alt="loading" width="50%">
    </div>

    <div class="row">

    </div>
    <div class="box">

      <div class="box-body">
        <h2 align="center">Selamat Datang, User <?= $this->session->userdata('name') ?>!</h2>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php if (!empty($stokBarangMasuk)) { ?>
                <h3><?= $stokBarangMasuk ?></h3>
              <?php } else { ?>
                <h3>0</h3>
              <?php } ?>
              <p>Data Genset Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-download"></i>
            </div>
            <a href="<?= base_url('admin/tabel_barang_masuk') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php if (!empty($stokBarangKeluar)) { ?>
                <h3><?= $stokBarangKeluar ?></h3>
              <?php } else { ?>
                <h3>0</h3>
              <?php } ?>
              <p>Data Genset Keluar</p>
            </div>
            <div class="icon">
              <i class="fa fa-upload"></i>
            </div>
            <a href="<?= base_url('admin/tabel_barang_keluar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <?php if (!empty($dataUser)) { ?>
                <h3><?= $dataUser ?></h3>
              <?php } else { ?>
                <h3>0</h3>
              <?php } ?>
              <p>Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('admin/users') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Laporan</h3>

              <p>Cetak Laporan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?= base_url('admin/laporan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php if (!empty($dataPelanggan)) { ?>
                <h3><?= $dataPelanggan ?></h3>
              <?php } else { ?>
                <h3>0</h3>
              <?php } ?>
              <p>Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('admin/tabel_pelanggan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <?php if (!empty($dataOperator)) { ?>
                <h3><?= $dataOperator ?></h3>
              <?php } else { ?>
                <h3>0</h3>
              <?php } ?>
              <p>Operator</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('admin/tabel_operator') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <!-- <div class="box-footer">
        Footer
      </div> -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('template/footer'); ?>
<?php $this->load->view('admin/template/script') ?>
</body>

</html>