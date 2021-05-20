<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
<form action="/misi/<?= $misi['id']; ?>" method="POST">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <div class="col">
            <textarea class="form-control ckeditor <?= ($validation->hasError('text')) ? 'is-invalid' : ''; ?>" name="text" id="text" rows="3"><?= (old('text')) ? old('text') : $misi['text']; ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('text'); ?></small>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col">
            <a href="/misi" class="btn btn-secondary mt-2">BACK</a>
            <button type="submit" class="btn btn-primary mt-2">EDIT</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>