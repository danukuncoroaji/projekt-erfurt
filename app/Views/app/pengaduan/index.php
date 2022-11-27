<?=$this->extend('app/layout/default')?>
<?=$this->section('content')?>
<div class="row">
    <?php if(session()->getFlashdata('error')):?>
    <div class="col-12">
        <div class="alert alert-danger text-white">
            <strong>Terdapat Kesalahan !</strong>
            <?= session()->getFlashdata('error'); ?>
        </div>
    </div>
    <?php endif;?>
    <?php if(session()->getFlashdata('success')):?>
    <div class="col-12">
        <div class="alert alert-success text-white">
            <i class="fas fa-check"></i>
            <?= session()->getFlashdata('success') ?>
        </div>
    </div>
    <?php endif;?>
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                </ol>
            </nav>
            <h1>Pengaduan</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="tabel" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i= 1;
                        foreach($pengaduans as $pengaduan){ ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $pengaduan['judul']; ?></td>
                            <td><?= $pengaduan['kategori_pengaduan']; ?></td>
                            <td><span class="badge badge-secondary"><?= $pengaduan['kategori']; ?></span></td>
                            <td><?= $pengaduan['created_at']; ?></td>
                            <td>
                                <?php if($pengaduan['status'] == 1){ ?>
                                    <span class="badge badge-info">Peninjauan</span>
                                    <?php }else if($pengaduan['status'] == 2){ ?>
                                    <span class="badge badge-warning">Pemrosesan</span>
                                    <?php }else if($pengaduan['status'] == 3){ ?>
                                    <span class="badge badge-primary">Tindak Lanjut</span>
                                    <?php }else if($pengaduan['status'] == 4){ ?>
                                    <span class="badge badge-success">Ditutup</span>
                                    <?php } ?>
                            </td>
                            <td>
                                <a href="<?= base_url('app/pengaduan/detail/'. $pengaduan['id']); ?>"
                                    class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <?php if($session->get('level') == 3){ ?>
            <div class="card-footer">
                <a href="<?= base_url('app/pengaduan/tambah'); ?>" class="btn btn-success"><i
                        class="material-icons">add</i> Tambah Pengaduan</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/plugins/datatables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/datatables.js'); ?>"></script>
<script>
    $("#tabel").DataTable({
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
<?=$this->endSection()?>