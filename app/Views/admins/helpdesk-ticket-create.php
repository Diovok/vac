<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <!-- [Page specific CSS] start -->
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/dropzone.min.css') ?>">
    <link href="//cdnjs.cloudflare.com/ajax/libs/higght.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/quill.core.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/quill.snow.css') ?>">
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
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="container">

                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label">Customer</label>
                      <select class="mb-3 form-select">
                        <option>Default select</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label">Category</label>
                      <select class="mb-3 form-select">
                        <option>Default select</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="exampleInputPassword1">Subject</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Subject">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="exampleInputPassword1">Description</label>
                  <div id="tinymce-editor" style="height: 150px">
                    <p>hello..</p>
                  </div>
                </div>
                <form action="<?= base_url('assets/json/file-upload.php') ?>" class="dropzone">
                  <div class="fallback">
                    <input name="file" type="file" multiple>
                  </div>
                </form>
                <div class="text-end mt-4">
                  <button type="submit" class="btn btn-outline-secondary">Clear</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
  <script src='<?= base_url('assets/js/plugins/quill.min.js') ?>'></script>
  <script type="text/javascript">
    (function () {
      var quill = new Quill('#tinymce-editor', {
        modules: {
          toolbar: [
            [{
              header: [1, 2, false]
            }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
          ]
        },
        placeholder: 'Type your text here...',
        theme: 'snow'
      });
    })();
  </script>
  <!-- [Page Specific JS] end -->
</body>
  <!-- [Body] end -->
</html>
