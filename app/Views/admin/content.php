<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
<div class="row">
    <div class="col">
        <a href="/create/content" class="btn btn-primary">Add Content</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col overflow-auto">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Paragraf</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($contents as $content) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $content['text']; ?></td>
                        <td><?= $content['created_at']; ?></td>
                        <td><?= $content['updated_at']; ?></td>
                        <td>
                            <a href="/content/<?= $content['id']; ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <form action="/content/<?= $content['id']; ?>" method="POST" class="d-inline" onclick="return confirm('Are you sure?')">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>