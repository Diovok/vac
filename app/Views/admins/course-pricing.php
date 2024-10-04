<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <!-- [Page specific CSS] start -->
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/dropzone.min.css') ?>">
    <!-- [Page specific CSS] end -->
    <?= $this->include('partials/head-css') ?>
    
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  
  <body <?= BODY_SETUP ?>>
    <?= $this->include('partials/layout-vertical') ?>
    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <?= $this->include('partials/breadcrumb') ?>
        <!-- [ Main Content ] start -->
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Pricing</h5>
            </div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xxl-6">
                  <div class="card border">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-5">
                          <img src="<?= base_url('assets/images/admin/img-bulb.svg') ?>" alt="images" class="img-fluid">
                          <ul class="d-flex flex-column gap-2 mt-3">
                            <li>Unlimited Students</li>
                            <li>No Transaction Fees</li>
                            <li>Course Product</li>
                            <li>5 Admin-level user</li>
                            <li>Priority Product Support</li>
                            <li>Advanced Reports</li>
                          </ul>
                        </div>
                        <div class="col-sm-7">
                          <div class="course-price">
                            <div class="form-check p-0">
                              <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef1">
                              <label class="form-check-label d-block" for="customCheckdef1">
                                <span class="d-flex align-items-center">
                                  <span class="flex-grow-1 me-3">
                                    <span class="h5 d-block">FREE</span>
                                    <span class="badge">Basic Features</span>
                                  </span>
                                  <span class="flex-shrink-0">
                                    <span class="h3 mb-0">0$/<span class="text-sm">mo</span></span>
                                  </span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check p-0">
                              <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef2" checked>
                              <label class="form-check-label d-block" for="customCheckdef2">
                                <span class="d-flex align-items-center">
                                  <span class="flex-grow-1 me-3">
                                    <span class="h5 d-block">REGULAR</span>
                                    <span class="badge"><i class="fas fa-star text-warning f-10"></i> Trending</span>
                                  </span>
                                  <span class="flex-shrink-0">
                                    <span class="h3 mb-0">99$/<span class="text-sm">mo</span></span>
                                  </span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check p-0">
                              <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef3" >
                              <label class="form-check-label d-block" for="customCheckdef3">
                                <span class="d-flex align-items-center">
                                  <span class="flex-grow-1 me-3">
                                    <span class="h5 d-block">PRO</span>
                                    <span class="badge">For advanced</span>
                                  </span>
                                  <span class="flex-shrink-0">
                                    <span class="h3 mb-0">199$/<span class="text-sm">mo</span></span>
                                  </span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check p-0">
                              <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef4" >
                              <label class="form-check-label d-block" for="customCheckdef4">
                                <span class="d-flex align-items-center">
                                  <span class="flex-grow-1 me-3">
                                    <span class="h5 d-block">Business</span>
                                    <span class="badge">For advanced</span>
                                  </span>
                                  <span class="flex-shrink-0">
                                    <span class="h3 mb-0">299$/<span class="text-sm">mo</span></span>
                                  </span>
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-block') ?>
  <?= $this->include('partials/customizer.php') ?>
  <?= $this->include('partials/footer-js') ?>
  <!-- [Page Specific JS] start -->
  <!-- file-upload Js -->
  <script src="<?= base_url('assets/js/plugins/dropzone-amd-module.min.js') ?>"></script>
  <!-- [Page Specific JS] end -->
</body>
  <!-- [Body] end -->
</html>
