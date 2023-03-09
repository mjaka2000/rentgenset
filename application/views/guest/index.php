<?php $this->load->view('template/head1'); ?>
<?php $this->load->view('guest/template/nav1'); ?>
<?php $this->load->view('guest/template/sidebar1'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('guest') ?>"><!--<i class="fa fa-home"></i>--> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">

    </div>
    <div class="box">
      <div class="box-body">
        <h2 align="center">Selamat Datang, User <?= $this->session->userdata('name') ?>!</h2>

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