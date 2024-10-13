<!DOCTYPE html>
<html lang="hu">
  <head>
    <?= $this->include('partials/head-page-meta') ?>
    <?= $this->include('partials/head-css') ?>
    
    <!-- Notifier CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/notifier.css') ?>">
  </head>
  
  <body <?= BODY_SETUP ?>>
    <div id="notification" class="notification"></div>

    <?= $this->include('partials/loader') ?>

    <!-- Main Content start -->
    <div class="auth-main">
      <div class="auth-wrapper v1">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <div class="text-center">
                <img src="<?= base_url('assets/images/vacilogo.png') ?>" alt="logo" style="width: 200px; height: auto;">
                <div class="saprator my-3"></div>
                <h4 class="text-center f-w-500 mb-3">Bejelentkezés</h4>

                <!-- Login form start -->
                <form method="post" action="<?= base_url('/login') ?>">
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
                    <button type="submit" class="btn btn-primary">Bejelentkezés</button>
                  </div>
                </form>
                <!-- Login form end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer JS and Notifier JS -->
    <?= $this->include('partials/footer-js') ?>


    
  </body>
</html>
