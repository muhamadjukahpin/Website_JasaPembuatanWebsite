<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
<form action="/contact-us/<?= $contact['id']; ?>" method="POST">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group row">
        <div class="col-lg-1">
            <label for="name">Name</label>
        </div>
        <div class="col-md-8 col-lg-6">
            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" id="name" value="<?= (old('name')) ? old('name') : $contact['name'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('name'); ?></small>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-1">
            <label for="name">Number</label>
        </div>
        <div class="col-md-8 col-lg-6">
            <div class="row">
                <div class="col-lg-3">
                    <input type="number" class="form-control" readonly value="62">
                </div>
                <div class="col">
                    <input type="text" class="form-control <?= ($validation->hasError('number')) ? 'is-invalid' : ''; ?>" name="number" id="number" value="<?= (old('number')) ? old('number') : substr($contact['number'], 2); ?> ">
                    <div class="invalid-feedback">
                        <?= $validation->getError('number'); ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-1"></div>
        <div class="col">
            <a href="/contact-us" class="btn btn-secondary mt-2">BACK</a>
            <button type="submit" class="btn btn-primary mt-2">EDIT</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>