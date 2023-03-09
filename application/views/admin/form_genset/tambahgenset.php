<?php $this->load->view('template/head1'); ?>
<?php $this->load->view('admin/template/nav1'); ?>
<?php $this->load->view('admin/template/sidebar1'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Tambah Genset</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/tabel_genset'); ?>"> Data Genset</a></li>
            <li class="breadcrumb-item active">Tambah Genset</li>
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
                            <h3 class="box-title"><i class="nav-icon fa fa-plus-circle mr-2"></i>Tambah Genset</h3>
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

                            <form action="<?= base_url('admin/proses_tambahgenset'); ?>" method="post" role="form" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="kode_genset" class="form-label">Nomor Genset</label>
                                    <input type="text" name="kode_genset" class="form-control" id="kode_genset" placeholder="Kode Genset" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_genset" class="form-label">Nama Genset</label>
                                    <input type="text" name="nama_genset" class="form-control" id="nama_genset" placeholder="Nama Genset" required>
                                </div>
                                <div class="form-group">
                                    <label for="daya" class="form-label">Daya (KVA)</label>
                                    <input type="number" name="daya" class="form-control" id="daya" placeholder="Daya" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga Perhari" required>
                                </div>
                                <div class="form-group">
                                    <label for="stok_gd" class="form-label">Stok Digudang</label>
                                    <input type="number" name="stok_gd" class="form-control" id="stok_gd" placeholder="Stok Digudang" required>
                                </div>
                                <div class="form-group">
                                    <label for="stok_pj" class="form-label">Stok Dipinjam</label>
                                    <input type="number" name="stok_pj" class="form-control" id="stok_pj" placeholder="Stok Dipinjam" required>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_genset" class="form-label">Gambar Genset</label>
                                    <input type="file" name="gambar_genset" class="form-control" id="gambar_genset">
                                </div>

                                <hr>
                                <div class="form-group" align="center">
                                    <a href="<?= base_url('admin/tabel_genset'); ?>" type="button" class="btn btn-sm btn-default" name="btn_kembali"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                                    <button type="reset" class="btn btn-sm btn-info"><i class="fa fa-eraser mr-2"></i>Reset</button>
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

<?php $this->load->view('template/footer1'); ?>