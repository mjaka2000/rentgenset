<?php $this->load->view('template/head1'); ?>
<?php $this->load->view('admin/template/nav1'); ?>
<?php $this->load->view('admin/template/sidebar1'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Laporan
            <small>Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><!--<i class="fa fa-home"></i>--> Home</a></li>
            <li class="active">Report</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <!-- <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        Start creating your amazing application!
      </div> -->
        <!-- /.box-body -->
        <!-- <div class="box-footer">
        Footer
      </div> -->
        <!-- /.box-footer-->
        <!-- </div> -->
        <div class="row">

        </div>
        <div class="box">
            <!-- <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div> -->
            <div class="box-body">
                <!-- <h2 align="center">Laporan Data</h2> -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Keluar</h3>
                            <p>Laporan Data Genset Keluar</p><br>
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div> -->
                        <a href="<?= base_url('report/dataKeluar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>Masuk</h3>
                            <p>Laporan Data Genset Masuk</p><br>
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div> -->
                        <a href="<?= base_url('report/dataMasuk') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Perbaikan Genset</h3>
                            <p>Laporan Data Perbaikan Genset</p><br>
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div> -->
                        <a href="<?= base_url('report/serviceGenset') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>Mobil</h3>
                            <p>Laporan Data Mobil</p><br>
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div> -->
                        <a href="<?= base_url('report/mobil') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <h3>Genset</h3>
                            <p>Laporan Data Genset</p><br>
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div> -->
                        <a href="<?= base_url('report/genset') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>Operator</h3>
                            <p>Laporan Data Operator</p><br>
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div> -->
                        <a href="<?= base_url('report/operator') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>Pelanggan</h3>
                            <p>Laporan Data Pelanggan</p><br>
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div> -->
                        <a href="<?= base_url('report/pelanggan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

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

<?php $this->load->view('template/footer1'); ?>