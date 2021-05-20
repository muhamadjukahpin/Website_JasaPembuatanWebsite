<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="banner" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-banner">
                <h1 class="judul-banner"><?= $banner['title']; ?></h1>
                <div class="isi-banner">
                    <?= $banner['isi']; ?>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-xl-4 col-fluid-6">
                        <a href="#contact-us" type="button" class="btn btn-light btn-block order scroll-page">Order</a>
                    </div>
                    <div class="col-sm-6 col-md-5 col-xl-4 col-fluid-6">
                        <a href="#contact-us" type="button" class="btn btn-light btn-block contact scroll-page">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-banner">
                <img src="/img/<?= $banner['img']; ?>" class="img-fluid" alt="image">
            </div>
        </div>
    </div>
    <div class="image-svg">
        <img src="/img/wave-d.svg" class="img-fluid" width="100%" alt="image-svg">
    </div>
</section>
<section class="content mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="judul-content">Apa saja yang akan <span style="color: #00B0FF;">kamu dapatkan ?</span>
                </h2>
                <div class="mt-get isi-content">
                    <?php foreach ($contents as $content) : ?>
                        <i class="fas fa-check-circle icon-check"></i>
                        <?= $content['text']; ?><br>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="judul-about-us mt-5">About Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mt-4 isi-about-us">
                    <?= $about_us['text']; ?>
                </div>
                <div class="isi-about-us">
                    <div class="mb-2 visi">Visi Kami &nbsp;: <?= $visi['text']; ?></div>
                    <div class="misi">Misi Kami : <?= $misi['text']; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-us" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="judul-contact-us">Contact Us</h2>
            </div>
        </div>
        <div class="flashdata" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="card mt-4 isi-contact-us">
                    <div class="card-body">
                        <form class="mt-3" method="POST" action="/home/save">
                            <?= csrf_field(); ?>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= old('name'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('name'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="message" class="col-sm-3 col-form-label">Pesan
                                    Anda</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control <?= ($validation->hasError('message')) ? 'is-invalid' : ''; ?>" name="message" id="message" rows="3"><?= old('message'); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('message'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary btn-send">KIRIM</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="card mt-4 isi-contact-us">
                    <div class="card-body">
                        <p class="text-center">Anda juga bisa hubungi <br> kami di bawah ini.</p>
                        <?php $i = 1;
                        foreach ($contact_us as $contact) : ?>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-10 nama-wa"><?= $contact['name']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-2"><img src="/img/iconfinder_Whatsapp_3721678.png" alt="image/whatsapp">
                                </div>
                                <div class="col-10">
                                    <a href="https://api.whatsapp.com/send?phone=<?= $contact['number']; ?>&text=Saya%20Mau%20Order" class="btn btn-success btn-block"><?= 0 . substr($contact['number'], 2); ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>&copy; <?= date('Y'); ?> nolep koding All Right Reserved. Build With <img src="img/Path 5.png" alt="love"></p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>