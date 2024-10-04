<!DOCTYPE html>
<html lang="en">
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
      <div class="auth-wrapper v2">
        <div class="auth-sidecontent">
          <img src="<?= base_url('assets/images/authentication/img-auth-sideimg.jpg') ?>" alt="images"
            class="img-fluid img-auth-side">
        </div>
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <div class="mb-4">
                <a href="#"><img src="<?= base_url('assets/images/logo-dark.svg') ?>" class="mb-4 img-fluid" alt="img"></a>
                <h3 class="mb-2"><b>Enter Verification Code</b></h3>
                <p class="text-muted mb-4">We send you on mail.</p>
                <p class="">We`ve send you code on jone. ****@company.com</p>
              </div>
              <div class="row my-4 text-center">
                <div class="col">
                  <input type="number" class="form-control text-center" placeholder="0">
                </div>
                <div class="col">
                  <input type="number" class="form-control text-center" placeholder="0">
                </div>
                <div class="col">
                  <input type="number" class="form-control text-center" placeholder="0">
                </div>
                <div class="col">
                  <input type="number" class="form-control text-center" placeholder="0">
                </div>
              </div>
              <div class="d-grid mt-4">
                <button type="button" class="btn btn-primary">Continue</button>
              </div>
              <div class="d-flex justify-content-start align-items-end mt-3">
                <p class="mb-0">Did not receive the email?</p>
                <a href="#" class="link-primary ms-2">Resend code</a>
              </div>
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
