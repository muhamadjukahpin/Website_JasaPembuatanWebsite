<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
<form action="/content" method="POST">
    <?= csrf_field(); ?>
    <div class="form-group">
        <div class="col-md-8 col-lg-6">
            <label for="text">Paragraf</label>
            <textarea type="text" class="form-control ckeditor <?= ($validation->hasError('text')) ? 'is-invalid' : ''; ?>" name="text" id="text"></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('text'); ?></small>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col">
            <a href="/content" class="btn btn-secondary mt-2">BACK</a>
            <button type="submit" class="btn btn-primary mt-2">ADD</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>