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
                    <li class="breadcrumb-item"><a href="<?= base_url('app/kategori'); ?>">Kategori</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $kategori['judul']; ?></li>
                </ol>
            </nav>
            <h1><?= $kategori['judul']; ?></h1>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Form Edit Kategori</h5>
            </div>
            <form method="POST" action="<?= base_url('app/kategori/update/'.$kategori['id']); ?>" id="form-tambah">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text"
                                    class="form-control <?php if($validation->getError('judul')){ echo 'is-invalid'; } ?>"
                                    name="judul" id="judul" aria-describedby="judul" value="<?= $kategori['judul']; ?>">
                                <?php if($validation->getError('judul')){ ?>
                                <small class="text-danger">
                                    <?php echo $validation->getError('judul'); ?>
                                </small>
                                <?php }else{ ?>
                                <div id="judul" class="form-text">Judul dari kategori anda.</div>
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