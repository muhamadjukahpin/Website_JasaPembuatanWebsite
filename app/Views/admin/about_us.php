<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="row">
    <div class="col overflow-auto">
        <div class="card">
            <h5 class="card-header" style="background-color: #4d4fe1; color:#FFF"><?= $title; ?></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p>Created : <?= $about['created_at']; ?></p>
                    </div>
                    <div class="col">
                        <p>Updated : <?= $about['updated_at']; ?></p>
                    </div>
                </div>
                <div class="card-text"><?= $about['text']; ?></div>
                <a href="/about-us/<?= $about['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>