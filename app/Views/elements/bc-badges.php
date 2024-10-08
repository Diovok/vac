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
            <!-- [ badge ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Basic Badges</h5>
                </div>
                <div class="card-body pc-component">
                  <h1>Example heading <span class="badge text-bg-dark">New</span></h1>
                  <h2>Example heading <span class="badge text-bg-dark">New</span></h2>
                  <h3>Example heading <span class="badge text-bg-dark">New</span></h3>
                  <h4>Example heading <span class="badge text-bg-dark">New</span></h4>
                  <h5>Example heading <span class="badge text-bg-dark">New</span></h5>
                  <h6>Example heading <span class="badge text-bg-dark">New</span></h6>
                </div>
              </div>
              <div class="card btn-page">
                <div class="card-header">
                  <h5>Button Badges</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary">primary <span
                        class="badge bg-light text-dark">4</span></button>
                    <button type="button" class="btn btn-secondary position-relative">Inbox
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">99+
                        <span class="visually-hidden">unread messages</span>
                      </span>
                    </button>
                    <button type="button" class="btn btn-info position-relative ms-2">Profile
                      <span
                        class="position-absolute top-0 start-100 translate-middle p-2 text-bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Contextual Variations</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <span class="badge text-bg-primary">Primary</span>
                    <span class="badge text-bg-secondary">Secondary</span>
                    <span class="badge text-bg-success">Success</span>
                    <span class="badge text-bg-danger">Danger</span>
                    <span class="badge text-bg-warning text-dark">Warning</span>
                    <span class="badge text-bg-info">Info</span>
                    <span class="badge text-bg-light text-dark">Light</span>
                    <span class="badge text-bg-dark">Dark</span>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Pill Badges</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <span class="badge rounded-pill text-bg-primary">Primary</span>
                    <span class="badge rounded-pill text-bg-secondary">Secondary</span>
                    <span class="badge rounded-pill text-bg-success">Success</span>
                    <span class="badge rounded-pill text-bg-danger">Danger</span>
                    <span class="badge rounded-pill text-bg-warning text-dark">Warning</span>
                    <span class="badge rounded-pill text-bg-info">Info</span>
                    <span class="badge rounded-pill text-bg-light text-dark">Light</span>
                    <span class="badge rounded-pill text-bg-dark">Dark</span>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Light variant</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-light-primary">Primary</span>
                    <span class="badge bg-light-secondary">Secondary</span>
                    <span class="badge bg-light-success">Success</span>
                    <span class="badge bg-light-danger">Danger</span>
                    <span class="badge bg-light-warning">Warning</span>
                    <span class="badge bg-light-info">Info</span>
                    <span class="badge bg-light-light text-dark">Light</span>
                    <span class="badge bg-light-dark">Dark</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ badge ] end -->
          </div>
          <!-- [ Main Content ] end -->
        </div>
      </div>
    </div>
  </section>
  <!-- [ Main Content ] end -->
<?= $this->include('partials/footer-js') ?>
<?= $this->include('partials/component/layout-component-footer-js') ?>
<?= $this->include('partials/customizer.php') ?>
</body>

</html>