<?=$this->extend('app/layout/default')?>
<?=$this->section('content')?>
<div class="row">
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                </ol>
            </nav>
            <h1>Pengaduan</h1>
            <span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis viverra dapibus.<br>Maecenas eleifend augue convallis tellus rhoncus scelerisque. Aliquam eu nunc sit amet velit pharetra cursus, <a href="#">disini</a>.
            </span>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="tabel" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pengaduan #1</td>
                            <td><span class="badge badge-secondary">Pelayanan dan Fasilitas Umum</span></td>
                            <td>2022-10-29 10:00:00</td>
                            <td><span class="badge badge-info">Peninjauan</span></td>
                            <td>
                                <a href="<?= base_url('app/pengaduan/detail'); ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="#" class="btn btn-danger btn-sm">Batalkan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pengaduan #2</td>
                            <td><span class="badge badge-secondary">Pembangunan Desa</span></td>
                            <td>2022-10-29 10:00:00</td>
                            <td><span class="badge badge-warning">Pemrosesan</span></td>
                            <td><a href="<?= base_url('app/pengaduan/detail'); ?>" class="btn btn-info btn-sm">Detail</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pengaduan #3</td>
                            <td><span class="badge badge-secondary">Pembangunan Desa</span></td>
                            <td>2022-10-29 10:00:00</td>
                            <td><span class="badge badge-primary">Tindak Lanjut</span></td>
                            <td><a href="<?= base_url('app/pengaduan/detail'); ?>" class="btn btn-info btn-sm">Detail</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pengaduan #4</td>
                            <td><span class="badge badge-secondary">Pertanahan</span></td>
                            <td>2022-10-29 10:00:00</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                            <td><a href="<?= base_url('app/pengaduan/detail'); ?>" class="btn btn-info btn-sm">Detail</a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer">
                <a href="<?= base_url('app/pengaduan/tambah'); ?>" class="btn btn-success"><i class="material-icons">add</i> Tambah Pengaduan</a>
            </div>
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