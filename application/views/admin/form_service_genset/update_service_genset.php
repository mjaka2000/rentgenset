<?php $this->load->view('template/head'); ?>
<?php $this->load->view('admin/template/nav'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Perbaikan Genset</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/tabel_service_genset'); ?>"> Data Perbaikan Genset</a></li>
            <li class="breadcrumb-item active">Edit Perbaikan Genset</li>
        </ol>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="box box-primary" style="width:50%;margin:auto">
                        <div class="box-header">
                            <h3 class="box-title"><i class="nav-icon fa fa-edit mr-2"></i>Edit Perbaikan Genset</h3>
                        </div>
                        <div class="box-body">
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

                            <form action="<?= base_url('admin/proses_update_service_genset'); ?>" method="post" role="form">
                                <?php foreach ($list_data as $ld) { ?>

                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?= $ld->id; ?>">
                                        <label for="kode_genset" class="form-label">Kode Genset</label>
                                        <input readonly type="text" name="kode_genset" class="form-control" id="kode_genset" placeholder="Kode Genset" value="<?= $ld->kode_genset; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_genset" class="form-label">Nama Genset</label>
                                        <input readonly type="text" name="nama_genset" class="form-control" id="nama_genset" value="<?= $ld->nama_genset; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_perbaikan" class="form-label">Jenis Perbaikan</label>
                                        <input type="text" name="jenis_perbaikan" class="form-control" id="jenis_perbaikan" placeholder="Contoh : Perbaikan Aki dll" required value="<?= $ld->jenis_perbaikan; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="spare_part" class="form-label">Spare Part(Diganti)</label><span style="color: red;"><small>*Jika tidak ada yang diganti kosongkan</small></span>
                                        <input type="text" name="spare_part" class="form-control" id="spare_part" placeholder="Filter Oli, Filter Solar dll" value="<?= $ld->spare_part; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_perbaikan" class="form-label">Tanggal Perbaikan</label>
                                        <input type="text" required name="tgl_perbaikan" class="form_datetime form-control" id="tgl_perbaikan" placeholder="Tanggal Perbaikan" value="<?= $ld->tgl_perbaikan; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ket_perbaikan" class="form-label">Keterangan Perbaikan</label>
                                        <select name="ket_perbaikan" class="form-control" id="ket_perbaikan" required>
                                            <option value="">-- Status --</option>
                                            <?php foreach ($list_data as $k) { ?>
                                                <?php if ($k->ket_perbaikan == "Selesai Diperbaiki") { ?>
                                                    <option value="Selesai Diperbaiki" selected>Selesai Diperbaiki</option>
                                                    <option value="Masih Terkendala">Masih Terkendala</option>
                                                <?php } else { ?>
                                                    <option value="Selesai Diperbaiki">Selesai Diperbaiki</option>
                                                    <option value="Masih Terkendala" selected>Masih Terkendala</option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="biaya_perbaikan" class="form-label">Biaya Perbaikan</label>
                                        <input type="text" name="biaya_perbaikan" class="form-control" id="biaya_perbaikan" value="<?= $ld->biaya_perbaikan; ?>">
                                    </div>
                                <?php } ?>
                                <hr>
                                <div class="form-group" align="center">
                                    <a href="<?= base_url('admin/tabel_service_genset'); ?>" type="button" class="btn btn-sm btn-default" name="btn_kembali"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-eraser mr-2"></i>Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-2"></i>Submit</button>
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

<?php $this->load->view('template/footer'); ?>
<?php $this->load->view('admin/template/script') ?>
</body>

</html>