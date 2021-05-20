<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
<div class="row">
    <div class="col">
        <a href="/create/contact-us" class="btn btn-primary">Add Contact</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col overflow-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($contact_us as $contact) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $contact['name']; ?></td>
                        <td><?= $contact['number']; ?></td>
                        <td>
                            <a href="/contact-us/<?= $contact['id']; ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <form action="/contact-us/<?= $contact['id']; ?>" method="POST" class="d-inline" onclick="return confirm('Are you sure?')">
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