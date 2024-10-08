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
        <div class="card border-0 shadow-none bg-transparent">
          <div class="card-body px-0">
            <div class="row align-items-center">
              <div class="col">
                <h5>Quality is never an accident. It is always the result of interlligent effort</h5>
                <p>It makes no difference what the price is, it all makes senses to us.</p>
              </div>
              <div class="col-auto">
                <ul class="nav nav-pills nav-price" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-selected="true">Monthly</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-selected="false">Yearly <span class="badge bg-primary ms-2">Save 30%</span></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6 col-lg-7">
            <div class="card">
              <div class="card-body">
                <ul class="list-group list-group-flush product-check-list">
                  <li class="list-group-item enable">One End Product</li>
                  <li class="list-group-item enable">No attribution required</li>
                  <li class="list-group-item enable">TypeScript</li>
                  <li class="list-group-item">Figma Design Resources</li>
                  <li class="list-group-item">Create Multiple Products</li>
                  <li class="list-group-item">Create a SaaS Project</li>
                  <li class="list-group-item">Resale Product</li>
                  <li class="list-group-item">Separate sale of our UI Elements?</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="price-check border rounded p-3">
                      <div class="form-check">
                        <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef1">
                        <label class="form-check-label d-block" for="customCheckdef1">
                          <span class="row align-items-center">
                            <span class="col-6">
                              <span class="h5 mb-0 d-block">Basic</span>
                              <span class="text-muted mb-0">03 Services</span>
                            </span>
                            <span class="col-6 text-end">
                              <span class="price-price h4">$69 <span class="text-muted text-sm"> /Lifetime</span></span>
                            </span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="price-check border rounded p-3 my-3">
                      <div class="form-check">
                        <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef2" checked>
                        <label class="form-check-label d-block" for="customCheckdef2">
                          <span class="row align-items-center">
                            <span class="col-6">
                              <span class="h5 mb-0 d-block">Standard <span class="badge bg-success ms-2">Popular</span></span>
                              <span class="text-muted mb-0">05 Services</span>
                            </span>
                            <span class="col-6 text-end">
                              <span class="price-price h4">$129 <span class="text-muted text-sm"> /Lifetime</span></span>
                            </span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="price-check border rounded p-3">
                      <div class="form-check">
                        <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef3">
                        <label class="form-check-label d-block" for="customCheckdef3">
                          <span class="row align-items-center">
                            <span class="col-6">
                              <span class="h5 mb-0 d-block">Premium</span>
                              <span class="text-muted mb-0">08 Services</span>
                            </span>
                            <span class="col-6 text-end">
                              <span class="price-price h4">$599 <span class="text-muted text-sm"> /Lifetime</span></span>
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
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-block') ?>
  <?= $this->include('partials/footer-js') ?>
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
