<?=$this->extend('app/layout/default')?>
<?=$this->section('content')?>
<div class="row pb-5">
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('app/pengaduan'); ?>">Pengaduan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                </ol>
            </nav>
            <h1>Tambah Pengaduan</h1>
            <span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis viverra dapibus.<br>Maecenas
                eleifend augue convallis tellus rhoncus scelerisque. Aliquam eu nunc sit amet velit pharetra cursus, <a
                    href="#">disini</a>.
            </span>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Form Tambah Pengaduan</h5>
            </div>
            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" id="judul"
                                    aria-describedby="judul">
                                <div id="judul" class="form-text">Judul dari pengaduan anda.</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="form-group">
                                <label for="kategori" class="form-label">Kategori Pengaduan</label>
                                <select class="form-select" name="kategori" aria-label="Kategori Pengaduan">
                                    <option value="1">Pelayanan dan Fasilitas Umum</option>
                                    <option value="2">Pembangunan Desa</option>
                                    <option value="3">Pertanahan</option>
                                    <option value="3">Perlindungan Masyarakat</option>
                                    <option value="3">Ketentraman dan Ketertiban Umum</option>
                                </select>
                                <div id="judul" class="form-text">Pilih kategori dari pengaduan anda.</div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="kategori" class="form-label">Isi Pengaduan</label>
                                <div id="text-editor"></div>
                                <div id="judul" class="form-text">Isi dari pengaduan anda.</div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="lampiran" class="form-label">Lampiran</label>
                                <input type="file" class="form-control" name="lampiran" id="lampiran"
                                    aria-describedby="lampiran">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#text-editor').summernote({
            height: 250
        });
    });
</script>
<?=$this->endSection()?>