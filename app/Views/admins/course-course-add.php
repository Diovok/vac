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
                <h5 class="mb-0">Course Add</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Course Name</label>
                      <input type="text" class="form-control" placeholder="Enter first name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Course Code</label>
                      <input type="text" class="form-control" placeholder="Enter Course Code">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Start Form</label>
                      <input type="date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Course Duration</label>
                      <input type="text" class="form-control" placeholder="Enter Course Duration">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Course Price</label>
                      <input type="number" class="form-control" placeholder="Enter course price">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Teacher Name</label>
                      <input type="text" class="form-control" placeholder="Enter Teacher name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Maximum Students</label>
                      <input type="number" class="form-control" placeholder="Enter maximum students">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Course Status</label>
                      <select class="form-select">
                        <option>Deactive</option>
                        <option>Active</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Course Details</label>
                      <textarea class="form-control" rows="3" placeholder="Enter course details"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <form action="<?= base_url('assets/json/file-upload.php') ?>" class="dropzone">
                        <div class="fallback">
                          <input name="file" type="file" multiple>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-12 text-end">
                    <button class="btn btn-primary">Create Course</button>
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
  <!-- [Page Specific JS] start -->
  <!-- file-upload Js -->
  <script src="<?= base_url('assets/js/plugins/dropzone-amd-module.min.js') ?>"></script>
  <!-- [Page Specific JS] end -->
  <?= $this->include('partials/footer-js') ?>
</body>
  <!-- [Body] end -->
</html>
