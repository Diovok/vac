<!DOCTYPE html>
<html lang="hu">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <?= $this->include('partials/head-css') ?>
    
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body <?= BODY_SETUP ?>>
    <?= $this->include('partials/loader') ?>
    <!-- [ Main Content ] start -->
    <div class="auth-main">
      <div class="auth-wrapper v1">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <div class="text-center">
                <a href="#"><img src="<?= base_url('assets/images/logo-dark.svg') ?>" alt="img"></a>

              <div class="saprator my-3"></div>
              <h4 class="text-center f-w-500 mb-3">Bejelentkezés</h4>

              <!-- Itt kezdődik az űrlap -->
              <form method="post" action="<?= base_url('/login') ?>">  <!-- Form létrehozása, POST metódussal -->
                <div class="mb-3">
                  <input type="text" class="form-control" name="username" id="usernameInput" placeholder="Felhasználónév" required>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" id="passwordInput" placeholder="Jelszó" required>
                </div>
                <div class="d-flex mt-1 justify-content-between align-items-center">
                  <div class="form-check">
                    <input class="form-check-input input-primary" type="checkbox" id="remembermeCheck" checked="">
                    <label class="form-check-label text-muted" for="customCheckc1">Emlékezzen rám</label>
                  </div>
                </div>
                <div class="d-grid mt-4">
                  <button type="submit" class="btn btn-primary">Bejelentkezés</button> <!-- type="submit" a form elküldéséhez -->
                </div>
              </form>
              <!-- Itt ér véget az űrlap -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-js') ?>
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
