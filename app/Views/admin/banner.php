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
                        <p>Created : <?= $banner['created_at']; ?></p>
                    </div>
                    <div class="col">
                        <p>Updated : <?= $banner['updated_at']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-text">Title : <?= $banner['title']; ?></div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="card-text"><?= $banner['isi']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img class=" img-thumbnail img-fluid" width="350px" src="/img/<?= $banner['img']; ?>" alt="img">
                    </div>
                </div>
                <a href="/banner/<?= $banner['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>