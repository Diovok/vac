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
            <!-- [ single-light ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>light box</h5>
                </div>
                <div class="card-body">
                  <p> Add this code <code>data-lightbox="example-set"</code> to see road trip gallery in lightbox popup.</p>
                  <div class="row text-center">
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                      <a data-lightbox="<?= base_url('assets/images/light-box/l1.jpg') ?>"
                        ><img src="<?= base_url('assets/images/light-box/sl1.jpg') ?>" class="img-fluid m-b-10" alt=""
                      ></a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                      <a data-lightbox="<?= base_url('assets/images/light-box/l2.jpg') ?>"
                        ><img src="<?= base_url('assets/images/light-box/sl2.jpg') ?>" class="img-fluid m-b-10" alt=""
                      ></a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                      <a data-lightbox="<?= base_url('assets/images/light-box/l3.jpg') ?>"
                        ><img src="<?= base_url('assets/images/light-box/sl3.jpg') ?>" class="img-fluid m-b-10" alt=""
                      ></a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                      <a data-lightbox="<?= base_url('assets/images/light-box/l4.jpg') ?>"
                        ><img src="<?= base_url('assets/images/light-box/sl4.jpg') ?>" class="img-fluid m-b-10" alt=""
                      ></a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                      <a data-lightbox="<?= base_url('assets/images/light-box/l5.jpg') ?>"
                        ><img src="<?= base_url('assets/images/light-box/sl5.jpg') ?>" class="img-fluid m-b-10" alt=""
                      ></a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12">
                      <a data-lightbox="<?= base_url('assets/images/light-box/l6.jpg') ?>"
                        ><img src="<?= base_url('assets/images/light-box/sl6.jpg') ?>" class="img-fluid m-b-10" alt=""
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ multiple-light ] end -->
          </div>
          <div class="modal fade modal-lightbox" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                  <img src="<?= base_url('assets/images/light-box/l1.jpg') ?>" alt="images" class="modal-image img-fluid">
                </div>
              </div>
            </div>
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
    var lightboxModal = new bootstrap.Modal(document.getElementById('lightboxModal'));
    var elem = document.querySelectorAll('[data-lightbox]');
    for (var j = 0; j < elem.length; j++) {
      elem[j].addEventListener('click', function () {
        var images_path = event.target;
        if (images_path.tagName == 'IMG') {
          images_path = images_path.parentNode;
        }
        var recipient = images_path.getAttribute('data-lightbox');
        var image = document.querySelector('.modal-image');
        image.setAttribute('src', recipient);
        lightboxModal.show();
      });
    }
  
    function removeClassByPrefix(node, prefix) {
      for (let i = 0; i < node.classList.length; i++) {
        let value = node.classList[i];
        if (value.startsWith(prefix)) {
          node.classList.remove(value);
        }
      }
    }
  </script>
<!-- [Page Specific JS] end -->
<?= $this->include('partials/customizer.php') ?>
</body>

</html>

