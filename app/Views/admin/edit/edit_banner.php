<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
<form action="/banner/<?= $banner['id']; ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" name="title" id="title" value="<?= (old('title')) ? old('title') : $banner['title']; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('title'); ?></small>
        </div>
    </div>
    <div class="form-group">
        <label for="isi">Content</label>
        <textarea class="form-control ckeditor <?= ($validation->hasError('isi')) ? 'is-invalid' : ''; ?>" name="isi" id="isi" rows="3"><?= (old('isi')) ? old('isi') : $banner['isi']; ?></textarea>
        <div class="invalid-feedback">
            <?= $validation->getError('isi'); ?></small>
        </div>
    </div>
    <div class="form-group">
        <label for="img">Image</label>
    </div>
    <div class="form-group row">
        <div class="col">
            <img src="/img/<?= $banner['img']; ?>" alt="img" class="img-thumbnail img-preview">
        </div>
        <div class="col-md-8">
            <div class="custom-file">
                <input type="file" class="custom-file-input <?= ($validation->hasError('img')) ? 'is-invalid' : ''; ?>" id="img" name="img" value="<?= (old('img')) ? old('img') : $banner['img']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('img'); ?>
                </div>
                <label class="custom-file-label" for="img"><?= $banner['img']; ?></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col">
            <a href="/banner" class="btn btn-secondary mt-2">BACK</a>
            <button type="submit" class="btn btn-primary mt-2">EDIT</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>