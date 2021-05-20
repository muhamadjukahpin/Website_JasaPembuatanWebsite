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
                        <p>Created : <?= $visi['created_at']; ?></p>
                    </div>
                    <div class="col">
                        <p>Updated : <?= $visi['updated_at']; ?></p>
                    </div>
                </div>
                <div class="card-text"><?= $visi['text']; ?></div>
                <a href="/visi/<?= $visi['id']; ?>" class="btn btn-success mt-2"><i class="fas fa-edit"></i></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>