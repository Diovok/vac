<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <!-- map-vector css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/jsvectormap.min.css') ?>">
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
        <?= $this->include('partials/component/component-link') ?>
        <div class="row">
          <!-- [ Basic-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>Basic Map With Markers</h5>
                  </div>
                  <div class="card-body">
                      <div id="world-map-markers" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ Basic-Map ] end -->
          <!-- [ world-merc-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>world [merc] Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="world-merc" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ world-merc-Map ] end -->
          <!-- [ Canada-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>Canada Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="canada" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ Canada-Map ] end -->
          <!-- [ iraq-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>iraq Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="iraq" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ iraq-Map ] end -->
          <!-- [ italy-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>italy Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="italy" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ italy-Map ] end -->
          <!-- [ russia-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>russia Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="russia" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ russia-Map ] end -->
          <!-- [ spain-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>spain Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="spain" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ spain-Map ] end -->
          <!-- [ us-aea-en-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>us-aea-en Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="us-aea-en" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ us-aea-en-Map ] end -->
          <!-- [ us-lcc-en-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>us-lcc-en Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="us-lcc-en" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ us-lcc-en-Map ] end -->
          <!-- [ us-merc-en ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>us-merc-en Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="us-merc-en" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ us-merc-en-Map ] end -->
          <!-- [ us-mill-en-Map ] start -->
          <div class="col-md-6 col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>us-mill-en Map</h5>
                  </div>
                  <div class="card-body">
                      <div id="us-mill-en" class="set-map" style="height:400px;"></div>
                  </div>
              </div>
          </div>
          <!-- [ us-mill-en-Map ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-block') ?>
  <?= $this->include('partials/footer-js') ?>
  <!-- [Page Specific JS] start -->
  <script src="<?= base_url('assets/js/plugins/jsvectormap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/world.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/world-merc.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/canada.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/iraq.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/italy.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/russia.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/spain.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/us-aea-en.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/us-lcc-en.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/us-merc-en.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/us-mill-en.js') ?>"></script>
  
  <script src="<?= base_url('assets/js/pages/map-vector.js') ?>"></script>
  <!-- [Page Specific JS] end -->
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
