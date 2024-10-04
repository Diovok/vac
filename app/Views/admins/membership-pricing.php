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
    <?= $this->include('partials/layout-vertical') ?>
    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <?= $this->include('partials/breadcrumb') ?>
        <!-- [ Main Content ] start -->
        <div class="row">
          <div class="col-12">
            <div class="row g-4">
              
              <div class="col-md-6 col-lg-4">
                <div class="card price-card p-4 border border-success border-2 h-100">
                  <div class="card-body bg-success bg-opacity-10 rounded v3">
                    <div class="price-head v3">
                      <h4 class="mb-0 text-success">Casual</h4>
                      <div class="price-price mt-3">$50 <span class="text-muted"> month</span></div>
                    </div>
                    <ul class="list-group list-group-flush product-list v3">
                      <li class="list-group-item enable"><i class="ti ti-check text-success"></i> Full Facility Access</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-success"></i> Meals plans</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-success"></i> 10% Discounts</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-success"></i> Cancel anytime</li>
                    </ul>
                    <div class="d-grid"><a class="btn btn-dark mt-4" href="#">Buy Now</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card price-card p-4 border border-primary border-2 h-100">
                  <div class="card-body bg-primary bg-opacity-10 rounded v3">
                    <div class="price-head v3">
                      <h4 class="mb-0 text-primary">Addicted</h4>
                      <div class="price-price mt-3">$150 <span class="text-muted"> month</span></div>
                    </div>
                    <ul class="list-group list-group-flush product-list v3">
                      <li class="list-group-item enable"><i class="ti ti-check text-primary"></i> Full Facility Access</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-primary"></i> Meals plans</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-primary"></i> 50% Discounts</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-primary"></i> Cancel anytime</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-primary"></i> Basic feature</li>
                    </ul>
                    <div class="d-grid"><a class="btn btn-dark mt-4" href="#">Buy Now</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card price-card p-4 border border-warning border-2 h-100">
                  <div class="card-body bg-warning bg-opacity-10 rounded v3">
                    <div class="price-head v3">
                      <h4 class="mb-0 text-warning">Diehard</h4>
                      <div class="price-price mt-3">$250 <span class="text-muted"> month</span></div>
                    </div>
                    <ul class="list-group list-group-flush product-list v3">
                      <li class="list-group-item enable"><i class="ti ti-check text-warning"></i> Full Facility Access</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-warning"></i> Meals plans</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-warning"></i> 75% Discounts</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-warning"></i> Primmum feature</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-warning"></i> Cancel anytime</li>
                      <li class="list-group-item enable"><i class="ti ti-check text-warning"></i> Online booking</li>
                    </ul>
                    <div class="d-grid"><a class="btn btn-dark mt-4" href="#">Buy Now</a></div>
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
</body>
  <!-- [Body] end -->
</html>
