<footer class="main-footer">
    <!-- <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
    </div> -->
    <div class="float-left">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#staticBackdrop">
            <b>Version</b>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <p>This website are using :</p> -->
                        <h4 class="modal-title" id="staticBackdropLabel">About This Version</h4>
                        <ul type="square">
                            <li>Website Version 0.1.0</li>
                            <li>Codeigniter Version 3.1.12</li>
                            <li>PHP Version 7.4</li>
                        </ul>
                        <strong>Copyright &copy; <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script></strong>
                        <!-- Muhammad Jaka Permana Putra Agus -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="win7-btn btn-xs" data-dismiss="modal">Close</button>
                        <!-- <button type="submit" class="btn btn-sm btn-primary">Sign in</button> -->
                        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url(); ?>assets/admin2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>assets/admin2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url(); ?>assets/admin2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/admin2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/admin2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/admin2/dist/js/demo.js"></script>

<script src="<?= base_url(); ?>assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/sweetalert2/sweetalert2.min.js"></script>

<script src="<?= base_url(); ?>assets/admin2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/admin2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?= base_url(); ?>assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>


<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayBtn: true,
        pickTime: false,
        minView: 2,
        maxView: 4,
    });
</script>
<script type="text/javascript">
    $("#kode_genset").change(function() {
        let kode_genset = $(this).val();
        <?php foreach ($list_genset as $l) { ?>
            if (kode_genset == "<?php echo $l->kode_genset ?>") {
                $("#nama_genset").val("<?php echo $l->nama_genset ?>");
            }
        <?php } ?>
    })
</script>
<script type="text/javascript">
    function editHari() {
        document.getElementById("jumlah_hari").removeAttribute("readonly");
    }
</script>
<script type="text/javascript">
    $("#kode_genset").change(function() {
        let kode_genset = $(this).val();
        let stok_gd = document.getElementById("stok_gd");

        <?php foreach ($list_genset as $s) { ?>
            if (kode_genset == "<?php echo $s->kode_genset ?>") {
                var text = document.createTextNode("<?php echo $s->stok_gd ?>");

                $("#daya").val("<?php echo $s->daya ?>");
                $("#nama_genset").val("<?php echo $s->nama_genset ?>");
                $("#stok_gd_input").val("<?php echo $s->stok_gd ?>");
                $("#stok_pj_input").val("<?php echo $s->stok_pj ?>");
                stok_gd.innerHTML = "<?php echo $s->stok_gd ?>";
                $("#harga_perhari").val("<?php echo $s->harga ?>")
            }
        <?php } ?>
    })

    $("#jumlah_hari, #harga_perhari").keyup(function() {
        var harga = parseInt($("#harga_perhari").val()) || 0;
        var hari = parseInt($("#jumlah_hari").val()) || 0;

        $("#total_harga").val(harga * hari);
    })

    $("#nopol").change(function() {
        let nopol = $(this).val();
        <?php foreach ($list_mobil as $mb) { ?>
            if (nopol == "<?php echo $mb->nopol ?>") {
                $("#tipe").val("<?php echo $mb->tipe ?>");
            }
        <?php } ?>
    })
</script>
<script>
    $('.btn-kembali').on('click', function() {
        var getLink = $(this).attr('href');
        Swal.fire({
            title: 'Ubah Status',
            text: 'Yakin ingin ubah Status Genset menjadi Barang Masuk (Kembali)?',
            type: 'warning',
            confirmButtonColor: '#d9534f',
            showCancelButton: true,
        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                window.location.href = getLink
            }
        })
        return false;
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.sidebar-menu').tree()
    })

    document.oncontextmenu = function() {
        return false;
    };

    $('.btn-delete').on('click', function() {
        var getLink = $(this).attr('href');
        Swal.fire({
            title: 'Hapus Data',
            text: 'Yakin ingin menghapus data?',
            type: 'warning',
            confirmButtonColor: '#d9534f',
            showCancelButton: true,
        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                window.location.href = getLink
            }
        })
        return false;
    });

    $(function() {
        $('#mytable').DataTable()
        // $('#example').DataTable();
        $('#example1').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': false,
            'info': true,
            'autoWidth': false

        })
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    });
</script>
</body>

</html>