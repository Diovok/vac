<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <?= $this->include('partials/head-page-meta') ?>
    <?= $this->include('partials/head-css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/uikit.css') ?>" >
  </head>
  <!-- [Head] end -->
  <body class="component-page">
    <!-- [ Main Content ] start -->
    <?= $this->include('partials/loader') ?>
    <?= $this->include('partials/component/component-header') ?>

    <section class="component-block">
      <div class="container">
        <div class="row">
          <div class="col-xl-3">
            <?= $this->include('partials/component/component-menu-list') ?>
          </div>
          <div class="col-xl-9">    
            <div class="row">
              <?= $this->include('partials/component/component-breadcrumb') ?>
            </div>
            <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ toasts ] start -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5>live toast</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="position-fixed top-0 end-0 p-3" style="z-index: 99999">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-header">
                        <img src="<?= base_url('assets/images/favicon.svg') ?>" class="img-fluid m-r-5" alt="images"
                          style="width: 17px">
                        <strong class="me-auto">Able Pro</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body"> Hello, world! This is a toast message. </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Translucent</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="bg-dark p-4 mb-2">
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-header">
                        <img src="<?= base_url('assets/images/favicon.svg') ?>" class="img-fluid m-r-5" alt="images"
                          style="width: 17px">
                        <strong class="me-auto">Able Pro</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body"> Hello, world! This is a toast message. </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Color schemes</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="bg-body toast-container p-4 mb-2">
                    <div class="toast text-white bg-primary fade show" role="alert" aria-live="assertive"
                      aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="toast text-white bg-secondary fade show" role="alert" aria-live="assertive"
                      aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="toast text-white bg-success fade show" role="alert" aria-live="assertive"
                      aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="toast text-white bg-warning fade show" role="alert" aria-live="assertive"
                      aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="toast text-white bg-danger fade show" role="alert" aria-live="assertive"
                      aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="toast text-white bg-info fade show" role="alert" aria-live="assertive"
                      aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="toast text-white bg-dark fade show" role="alert" aria-live="assertive"
                      aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5>Basic</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="bg-body p-4 mb-2">
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-header">
                        <img src="<?= base_url('assets/images/favicon.svg') ?>" class="img-fluid m-r-5" alt="images"
                          style="width: 17px">
                        <strong class="me-auto">Able Pro</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body"> Hello, world! This is a toast message. </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Stacking</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="bg-body toast-container p-4 mb-2">
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-header">
                        <img src="<?= base_url('assets/images/favicon.svg') ?>" class="img-fluid m-r-5" alt="images"
                          style="width: 17px">
                        <strong class="me-auto">Able Pro</strong>
                        <small>9 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body"> Hello, world! This is a toast message. </div>
                    </div>
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-header">
                        <img src="<?= base_url('assets/images/favicon.svg') ?>" class="img-fluid m-r-5" alt="images"
                          style="width: 17px">
                        <strong class="me-auto">Able Pro</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body"> Hello, world! This is a toast message. </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Custom content</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="bg-body toast-container p-4 mb-2">
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close"></button>
                      </div>
                    </div>
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-body">
                        Hello, world! This is a toast message.
                        <div class="mt-2 pt-2 border-top">
                          <button type="button" class="btn btn-light-primary btn-sm  mb-1 me-1">Take action</button>
                          <button type="button" class="btn btn-light-danger btn-sm  mb-1 me-1"
                            data-bs-dismiss="toast">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Placement</h5>
                </div>
                <div class="card-body border-bottom">
                  <form>
                    <select class="form-select" id="selectToastPlacement">
                      <option value="" selected>Select a position...</option>
                      <option value="top-0 start-0">Top left</option>
                      <option value="top-0 start-50 translate-middle-x">Top center</option>
                      <option value="top-0 end-0">Top right</option>
                      <option value="top-50 start-0 translate-middle-y">Middle left</option>
                      <option value="top-50 start-50 translate-middle">Middle center</option>
                      <option value="top-50 end-0 translate-middle-y">Middle right</option>
                      <option value="bottom-0 start-0">Bottom left</option>
                      <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                      <option value="bottom-0 end-0">Bottom right</option>
                    </select>
                  </form>
                </div>
                <div class="card-body pc-component">
                  <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts"
                    style="height: 200px">
                    <div class="toast-container position-absolute p-3" id="toastPlacement">
                      <div class="toast show fade">
                        <div class="toast-header">
                          <img src="<?= base_url('assets/images/favicon.svg') ?>" class="img-fluid m-r-5" alt="images"
                            style="width: 17px">
                          <strong class="me-auto">Able Pro</strong>
                          <small>11 mins ago</small>
                        </div>
                        <div class="toast-body"> Hello, world! This is a toast message. </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ toasts ] end -->
          </div>
            <!-- [ Main Content ] end -->
          </div>
      </div>
    </div>
  </section>
  <!-- [ Main Content ] end -->
<?= $this->include('partials/footer-js') ?>
<?= $this->include('partials/component/layout-component-footer-js') ?>
<!-- [Page Specific JS] start -->
  <script>
    a = document.getElementById('toastPlacement');
    a &&
      document.getElementById('selectToastPlacement').addEventListener('change', function () {
        a.dataset.originalClass || (a.dataset.originalClass = a.className), (a.className = a.dataset.originalClass + ' ' + this.value);
      });

    (d = document.getElementById('liveToastBtn')),
      (f = document.getElementById('liveToast')),
      d &&
      d.addEventListener('click', function () {
        var a = new bootstrap.Toast(f);
        a.show();
      });
</script>
<?= $this->include('partials/customizer.php') ?>
</body>

</html>