<?= $this->extend('auth/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card border-0 shadow-lg my-5">
        <div class="card-body">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="POST" action="/register">
                  <?= csrf_field(); ?>
                  <div class="form-group">
                    <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= (old('name')) ?>" placeholder="Name">
                    <div class="invalid-feedback">
                      <?= $validation->getError('name'); ?></small>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>" placeholder="Enter email address...">
                    <div class="invalid-feedback">
                      <?= $validation->getError('email'); ?></small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control <?= ($validation->hasError('password1')) ? 'is-invalid' : ''; ?>" id="password1" name="password1" value="<?= old('password1'); ?>" placeholder="password">
                      <div class="invalid-feedback">
                        <?= $validation->getError('password1'); ?></small>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control <?= ($validation->hasError('password2')) ? 'is-invalid' : ''; ?>" id="password2" name="password2" value="<?= old('password2'); ?>" placeholder="Repeate password">
                      <div class="invalid-feedback">
                        <?= $validation->getError('password2'); ?></small>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register Account
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="/login">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>