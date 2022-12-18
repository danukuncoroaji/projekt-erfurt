<?= $this->extend('app/layout/default') ?>
<?= $this->section('content') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js" integrity="sha512-Fd3EQng6gZYBGzHbKd52pV76dXZZravPY7lxfg01nPx5mdekqS8kX4o1NfTtWiHqQyKhEGaReSf4BrtfKc+D5w==" crossorigin="anonymous"></script>
<div class="row">
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="col-12">
            <div class="alert alert-danger text-white">
                <strong>Terdapat Kesalahan !</strong>
                <?= session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="col-12">
            <div class="alert alert-success text-white">
                <i class="fas fa-check"></i>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                </ol>
            </nav>
            <h1>Laporan</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="laporan" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Peninjauan</th>
                            <th>Pemrosesan</th>
                            <th>Tindak Lanjut</th>
                            <th>Ditutup</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $j = 1;
                        foreach ($laporans as $laporan) { ?>
                            <tr>
                                <td><?= $j; ?></td>
                                <td><?= $laporan['bulan']; ?></td>
                                <td><?= $laporan['peninjauan']; ?></td>
                                <td><?= $laporan['pemrosesan']; ?></td>
                                <td><?= $laporan['tindaklanjut']; ?></td>
                                <td><?= $laporan['ditutup']; ?></td>
                                <td><?= $laporan['total']; ?></td>
                            </tr>
                        <?php $j++;
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Peninjauan</th>
                            <th>Pemrosesan</th>
                            <th>Tindak Lanjut</th>
                            <th>Ditutup</th>
                            <th>Total</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer">
                <a class="btn btn-success" onclick="cetak()"><i class="material-icons">print</i> Cetak</a>
            </div>
        </div>
    </div>
</div>
<script>
    function cetak() {
        $('#laporan').printThis({
            importCSS: true, // to import the page css
            importStyle: true, // to import <style>css here will be imported !</style> the stylesheets (bootstrap included !)
            loadCSS: true, // to import style="The css writed Here will be imported !"
            canvas: true // only if you Have image/Charts ... 
        });
    }
</script>
<script src="<?php echo base_url('assets/plugins/datatables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/datatables.js'); ?>"></script>
<script>
    $(".tabel").DataTable({
        "language": {
            "decimal": "",
            "emptyTable": "Belum ada data.",
            "info": "Menampilkan _START_ ke _END_ dari total : _TOTAL_ data",
            "infoEmpty": "Menampilkan 0 dari 0 data",
            "infoFiltered": "(filtered from _MAX_ total entries)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Tampilkan _MENU_ data",
            "loadingRecords": "Mohon tunggu...",
            "processing": "Memproses...",
            "search": "Cari:",
            "zeroRecords": "Data tidak ditemukan",
            "paginate": {
                "first": "<<",
                "last": ">>",
                "next": ">",
                "previous": "<"
            },
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    });
</script>
<?= $this->endSection() ?>