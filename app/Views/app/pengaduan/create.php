<?=$this->extend('app/layout/default')?>
<?=$this->section('content')?>
<div class="row pb-5">
    <?php if(session()->getFlashdata('error')):?>
    <div class="col-12">
        <div class="alert alert-danger text-white">
            <strong>Terdapat Kesalahan !</strong>
            <?= session()->getFlashdata('error'); ?>
        </div>
    </div>
    <?php endif;?>
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
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Form Tambah Pengaduan</h5>
            </div>
            <form method="POST" action="<?= base_url('app/pengaduan/store'); ?>" id="form-tambah" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text"
                                    class="form-control <?php if($validation->getError('judul')){ echo 'is-invalid'; } ?>"
                                    name="judul" id="judul" aria-describedby="judul" value="<?= old('judul'); ?>">
                                <?php if($validation->getError('judul')){ ?>
                                <small class="text-danger">
                                    <?php echo $validation->getError('judul'); ?>
                                </small>
                                <?php }else{ ?>
                                <div id="judul" class="form-text">Judul dari pengaduan anda.</div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="form-group">
                                <label for="jenis" class="form-label">Jenis Pengaduan</label>
                                <select class="form-select" name="jenis" aria-label="Jenis Pengaduan">
                                    <option value="pengaduan">pengaduan</option>
                                    <option value="saran">saran</option>
                                    <option value="kritik">kritik</option>
                                </select>
                                <div id="judul" class="form-text">Pilih jenis dari pengaduan anda.</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="form-group">
                                <label for="kategori" class="form-label">Kategori Pengaduan</label>
                                <select class="form-select" name="kategori" aria-label="Kategori Pengaduan">
                                    <?php foreach ($kategoris as $kategori) { ?>
                                    <option value="<?= $kategori['id']; ?>">
                                        <?= $kategori['judul']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                                <div id="judul" class="form-text">Pilih kategori dari pengaduan anda.</div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="isi" class="form-label">Isi Pengaduan</label>
                                <textarea name="isi" id="editor"><?= old("isi") ?></textarea>
                                <?php if($validation->getError('isi')){ ?>
                                <small class="text-danger">
                                    <?php echo $validation->getError('isi'); ?>
                                </small>
                                <?php }else{ ?>
                                <div id="isi" class="form-text">Isi dari pengaduan anda.</div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="lampiran" class="form-label">Lampiran</label>
                                <input type="file"
                                    class="form-control <?php if($validation->getError('lampiran')){ echo 'is-invalid'; } ?>"
                                    name="lampiran[]" id="lampiran" aria-describedby="lampiran" multiple>
                                <?php if($validation->getError('lampiran')){ ?>
                                <small class="text-danger">
                                    <?php echo $validation->getError('lampiran'); ?>
                                </small>
                                <?php }else{ ?>
                                <div id="lampiran" class="form-text">Sertakan lampiran foto berbentuk gambar jpeg, png
                                    maks 4mb.</div>
                                <?php } ?>
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
        CKEDITOR.replace( 'editor' );
    });
</script>
<?=$this->endSection()?>