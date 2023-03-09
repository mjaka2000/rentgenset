<?php $this->load->view('template/head1'); ?>
<?php $this->load->view('admin/template/nav1'); ?>
<?php $this->load->view('admin/template/sidebar1'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Data Pelanggan</h1>
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Pelanggan</li>
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
                        <h3 class="box-title"><i class="fa fa-users mr-2"></i>Data Pelanggan</h3>
                    </div>
                    <div class="box-body">
                        <?php if ($this->session->flashdata('msg_sukses')) { ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Berhasil!</strong><br> <?= $this->session->flashdata('msg_sukses'); ?>
                            </div>
                        <?php } ?>
                        <a href="<?= base_url('admin/tambah_data_pelanggan'); ?>" style="margin-bottom:10px;" type="button" class="btn btn-sm btn-primary" name="tambah_data"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah Data</a>

                        <table id="mytable" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width :10px">No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No. HP</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Perusahaan</th>
                                    <th style="width:10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                // $list_data = isset($_POST['list_data']) ? $_POST['list_data'] : '';
                                if (is_array($list_pelanggan)) { ?>
                                    <?php foreach ($list_pelanggan as $dt) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dt->nama; ?></td>
                                            <td><?= $dt->alamat; ?></td>
                                            <td><?= $dt->no_hp; ?></td>
                                            <td><?= $dt->jenis_kelamin; ?></td>
                                            <td><?= $dt->nama_perusahaan; ?></td>
                                            <td><a href="<?= base_url('admin/update_data_pelanggan/' . $dt->id); ?>" type="button" class="btn btn-sm btn-info" name="btn_edit"><i class="fa fa-edit mr-2"></i></a>
                                                <a href="<?= base_url('admin/hapus_pelanggan/' . $dt->id); ?>" type="button" class="btn btn-sm btn-danger btn-delete" name="btn_delete"><i class="fa fa-trash mr-2"></i></a>
                                                <!-- <a href="<?= base_url('admin/'); ?>" type="button" class="btn btn-xs btn-warning" name="btn_detail"><i class="fa fa-info-circle mr-2"></i></a> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php } else { ?>
                                    <td colspan="9" align="center"><strong>Data Kosong</strong></td>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="box-footer">
                            <h5><strong>Keterangan :</strong></h5>
                            <a href="#" type="button" class="btn btn-sm btn-info" name="btn_edit"><i class="fa fa-edit mr-2"></i></a>&nbsp;<span>Untuk Mengedit Data</span><br>
                            <a href="#" type="button" class="btn btn-sm btn-danger" name="btn_delete"><i class="fa fa-trash mr-2"></i></a>&nbsp;<span>Untuk Menghapus Data</span><br>
                            <!-- <a href="#" type="button" class="btn btn-xs btn-warning" name="btn_detail"><i class="fa fa-info-circle mr-2"></i></a>&nbsp;<span>Untuk Melihat Detail Perbaikan</span> -->
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>

<?php $this->load->view('template/footer1'); ?>