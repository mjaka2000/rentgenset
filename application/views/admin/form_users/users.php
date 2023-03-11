<?php $this->load->view('template/head'); ?>
<?php $this->load->view('admin/template/nav'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Data User</h1>
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div id="loading">
            <img src="<?= base_url(); ?>assets/style/loading.gif" alt="loading" width="50%">
        </div>
        <!-- Default box -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data User</h3>
                    </div>
                    <div class="box-body">
                        <?php if ($this->session->flashdata('msg_sukses')) { ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Berhasil!</strong><br> <?= $this->session->flashdata('msg_sukses'); ?>
                            </div>
                        <?php } ?>
                        <a href="<?= base_url('admin/tambah_users'); ?>" style="margin-bottom:10px;" type="button" class="btn btn-sm btn-primary" name="tambah_data"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah Data</a>

                        <table id="example1" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width :10px">No.</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Last Login</th>
                                    <th style="width:10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (is_array($user)) { ?>
                                    <?php foreach ($user as $u) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u->username ?></td>
                                            <?php if ($u->role == 1) { ?>
                                                <td>User Admin</td>
                                            <?php } else { ?>
                                                <td>User Guest</td>
                                            <?php } ?>
                                            <td><?= $u->last_login ?></td>
                                            <td><a href="<?= base_url('admin/edit_user/' . $u->id); ?>" type="button" class="btn btn-sm btn-info" name="btn_edit"><i class="fa fa-edit mr-2"></i></a>
                                                <a href="<?= base_url('admin/proses_deleteuser/' . $u->id); ?>" type="button" class="btn btn-sm btn-danger btn-delete" name="btn_delete"><i class="fa fa-trash mr-2"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php } else { ?>
                                    <td colspan="5" align="center"><strong>Data Kosong</strong></td>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="card-footer">
                            <h5><strong>Keterangan :</strong></h5>
                            <a href="#" type="button" class="btn btn-sm btn-info" name="btn_edit"><i class="fa fa-edit mr-2"></i></a>&nbsp;<span>Untuk Mengedit Data</span><br>
                            <a href="#" type="button" class="btn btn-sm btn-danger" name="btn_delete"><i class="fa fa-trash mr-2"></i></a>&nbsp;<span>Untuk Menghapus Data</span><br>
                            <!-- <a href="#" type="button" class="btn btn-xs btn-warning" name="btn_detail"><i class="fa fa-info-circle mr-2"></i></a>&nbsp;<span>Untuk Melihat Detail Perbaikan</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('template/footer'); ?>
<?php $this->load->view('admin/template/script') ?>
</body>

</html>