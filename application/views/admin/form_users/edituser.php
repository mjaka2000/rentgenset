<?php $this->load->view('template/head'); ?>
<?php $this->load->view('admin/template/nav'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/users') ?>">User</a></li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div id="loading">
            <img src="<?= base_url(); ?>assets/style/loading.gif" alt="loading" width="50%">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="box box-primary" style="width:50%;margin:auto">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-user mr-2"></i>&nbsp;Edit User</h3>
                        </div>
                        <div class="box-body">
                            <form action="<?= base_url('admin/proses_edituser'); ?>" method="post" role="form">
                                <?php if ($this->session->flashdata('msg_sukses')) { ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Berhasil!</strong><br> <?= $this->session->flashdata('msg_sukses'); ?>
                                    </div>
                                <?php } ?>
                                <?php if (validation_errors()) { ?>
                                    <div class="alert alert-warning alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Perhatian!</strong><br> <?php echo validation_errors(); ?>
                                    </div>
                                <?php } ?>
                                <!--  -->
                                <?php foreach ($list_data as $d) { ?>
                                    <input type="hidden" name="id" value="<?= $d->id; ?>">
                                    <div class="form-group">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username" required="" value="<?= $d->username; ?>">
                                    </div>
                                    <div class="form-group ">
                                        <label for="role" class="form-label">Role</label>
                                        <select name="role" id="" style="width: 30%;" class="form-control">
                                            <?php if ($d->role == 1) { ?>
                                                <option value="1" selected="">User Admin</option>
                                                <option value="0">User Guest</option>
                                            <?php } else { ?>
                                                <option value="1">User Admin</option>
                                                <option value="0" selected="">User Guest</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <?php } ?>
                                <hr>
                                <div class="form-group" align="center">
                                    <a href="<?= base_url('admin/users'); ?>" type="button" class="btn btn-sm btn-default" onclick="" name="btn_kembali"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check mr-2"></i>Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('template/footer'); ?>
<?php $this->load->view('admin/template/script') ?>
</body>

</html>