<?php $this->load->view('template/head1'); ?>
<?php $this->load->view('guest/template/nav1'); ?>
<?php $this->load->view('guest/template/sidebar1'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Data Operator</h1>
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('guest') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Operator</li>
        </ol>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-user mr-2"></i>Data Operator</h3>
                    </div>
                    <div class="box-body">
                        <?php if ($this->session->flashdata('msg_sukses')) { ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Berhasil!</strong><br> <?= $this->session->flashdata('msg_sukses'); ?>
                            </div>
                        <?php } ?>

                        <table id="mytable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width :10px">No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No. HP</th>
                                    <th>Jenis Kelamin</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                // $list_data = isset($_POST['list_data']) ? $_POST['list_data'] : '';
                                if (is_array($list_operator)) { ?>
                                    <?php foreach ($list_operator as $dt) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dt->nama; ?></td>
                                            <td><?= $dt->alamat; ?></td>
                                            <td><?= $dt->no_hp; ?></td>
                                            <td><?= $dt->jenis_kelamin; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                <?php } else { ?>
                                    <td colspan="9" align="center"><strong>Data Kosong</strong></td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>

<?php $this->load->view('template/footer1'); ?>