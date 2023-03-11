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
    //* Script untuk membuat input tanggal
    $('.form_datetime').datetimepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayBtn: true,
        pickTime: false,
        minView: 2,
        maxView: 4,
    });
</script>
<script>
    //* Script untuk menampilkan loading
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector(
                "body").style.visibility = "hidden";
            document.querySelector(
                "#loading").style.visibility = "visible";
        } else {
            document.querySelector(
                "#loading").style.display = "none";
            document.querySelector(
                "body").style.visibility = "visible";
        }
    };
</script>
<script type="text/javascript">
    //* Script untuk memuat data genset
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
    //* Script untuk mengubah atribut jumlah hari
    function editHari() {
        document.getElementById("jumlah_hari").removeAttribute("readonly");
    }
</script>
<script type="text/javascript">
    //* Script untuk memuat data genset
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
    //* Script untuk memuat sweetalert status genset
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
        return true;
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
    }); //* Script untuk memuat sweetalert hapus data

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
    }); //* Script untuk memuat datatable
</script>