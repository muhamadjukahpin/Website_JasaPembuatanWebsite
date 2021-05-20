<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
<div class="overflow-auto">
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($messages as $message) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $message['name']; ?></td>
                    <td><?= $message['email']; ?></td>
                    <td><?= $message['message']; ?></td>
                    <td><?= $message['created_at']; ?></td>
                    <td>
                        <form action="/message/<?= $message['id']; ?>" class="" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>