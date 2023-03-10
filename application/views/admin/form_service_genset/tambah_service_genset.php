<?php $this->load->view('template/head'); ?>
<?php $this->load->view('admin/template/nav'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Tambah Perbaikan Genset</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/tabel_service_genset'); ?>"> Data Perbaikan Genset</a></li>
            <li class="breadcrumb-item active">Tambah Perbaikan Genset</li>
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
                            <h3 class="box-title"><i class="nav-icon fa fa-plus-circle mr-2"></i>&nbsp;Tambah Perbaikan Genset</h3>
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

                            <form action="<?= base_url('admin/proses_tambah_service_genset'); ?>" method="post" role="form">

                                <div class="form-group">
                                    <label for="kode_genset" class="form-label">Nomor Genset</label>
                                    <select name="kode_genset" class="form-control" id="kode_genset" required>
                                        <option value="" selected>-- Pilih Nomor Genset --</option>
                                        <?php foreach ($list_genset as $g) { ?>
                                            <option value="<?= $g->kode_genset; ?>"><?= $g->kode_genset; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_genset" class="form-label">Nama Genset</label>
                                    <input readonly type="text" name="nama_genset" class="form-control" id="nama_genset" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_perbaikan" class="form-label">Jenis Perbaikan</label>
                                    <input type="text" name="jenis_perbaikan" class="form-control" id="jenis_perbaikan" placeholder="Contoh : Perbaikan Aki dll" required>
                                </div>
                                <div class="form-group">
                                    <label for="spare_part" class="form-label">Spare Part(Diganti)</label><span style="color: red;"><small>*Jika tidak ada yang diganti abaikan</small></span>
                                    <input type="text" name="spare_part" class="form-control" id="spare_part" placeholder="Filter Oli, Filter Solar dll">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_perbaikan" class="form-label">Tanggal Perbaikan</label>
                                    <input type="text" name="tgl_perbaikan" class="form-control form_datetime" id="tgl_perbaikan" placeholder="Tanggal Perbaikan" required>
                                </div>
                                <div class="form-group">
                                    <label for="ket_perbaikan" class="form-label">Keterangan Perbaikan</label>
                                    <select name="ket_perbaikan" class="form-control" id="ket_perbaikan" required>
                                        <option value="">-- Status --</option>
                                        <option value="Selesai Diperbaiki">Selesai Diperbaiki</option>
                                        <option value="Masih Terkendala">Masih Terkendala</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="biaya_perbaikan" class="form-label">Perkiraan Biaya Perbaikan</label>
                                    <input type="text" name="biaya_perbaikan" class="form-control" id="biaya_perbaikan" value="0">
                                </div>

                                <hr>
                                <div class="form-group" align="center">
                                    <a href="<?= base_url('admin/tabel_service_genset'); ?>" type="button" class="btn btn-sm btn-default" name="btn_kembali"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-eraser mr-2"></i>Reset</button>
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

<?php $this->load->view('template/footer'); ?>
<?php $this->load->view('admin/template/script') ?>
</body>

</html>