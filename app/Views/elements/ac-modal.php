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
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Fade</h5>
                </div>
                <div class="card-body btn-page">
                  <button data-pc-animate="fade-in-scale" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Fade in &amp; Scale
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Slide</h5>
                </div>
                <div class="card-body btn-page">
                  <button data-pc-animate="slide-in-right" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Slide in (right)
                  </button>
                  <button data-pc-animate="slide-in-bottom" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Slide in (bottom)
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Fall</h5>
                </div>
                <div class="card-body btn-page">
                  <button data-pc-animate="fall" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Fall
                  </button>
                  <button data-pc-animate="side-fall" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Side Fall
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Flip</h5>
                </div>
                <div class="card-body btn-page">
                  <button data-pc-animate="3d-flip-horizontal" type="button" class="btn btn-primary"
                    data-bs-toggle="modal" data-bs-target="#animateModal">
                    3D Flip (horizontal)
                  </button>
                  <button data-pc-animate="3d-flip-vertical" type="button" class="btn btn-primary"
                    data-bs-toggle="modal" data-bs-target="#animateModal">
                    3D Flip (vertical)
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Rotate</h5>
                </div>
                <div class="card-body btn-page">
                  <button data-pc-animate="3d-rotate-bottom" type="button" class="btn btn-primary"
                    data-bs-toggle="modal" data-bs-target="#animateModal">
                    3D Rotate Bottom
                  </button>
                  <button data-pc-animate="3d-rotate-InLeft" type="button" class="btn btn-primary"
                    data-bs-toggle="modal" data-bs-target="#animateModal">
                    3D Rotate InLeft
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Advance</h5>
                </div>
                <div class="card-body btn-page">
                  <button data-pc-animate="blur" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Blur
                  </button>
                  <button data-pc-animate="let-me-in" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Let me in
                  </button>
                  <button data-pc-animate="make-way" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Make way!
                  </button>
                  <button data-pc-animate="slip-from-top" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Slip from top
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Other</h5>
                </div>
                <div class="card-body btn-page">
                  <button data-pc-animate="newspaper" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Newspaper
                  </button>
                  <button data-pc-animate="sticky-up" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Sticky Up
                  </button>
                  <button data-pc-animate="3d-sign" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    3D Sign
                  </button>
                  <button data-pc-animate="super-scaled" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Super Scaled
                  </button>
                  <button data-pc-animate="just-me" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    Just Me
                  </button>
                  <button data-pc-animate="3d-slit" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
                    3D Slit
                  </button>
                </div>
              </div>
            </div>
            <!-- [ single-light ] end -->
          </div>
          <div class="modal fade modal-animate" id="animateModal" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                  <h5>This is a modal window</h5>
                  <p>You can do the following things with it:</p>
                  <p> <b>Read:</b> modal windows will probably tell you something important so don't forget to read what
                    they say.</p>
                  <p><b>Look:</b> a modal window enjoys a certain kind of attention; just look at it and appreciate its
                    presence.</p>
                  <p class="mb-0"><b>Close:</b> click on the button below to close the modal.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary shadow-2">Save changes</button>
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
    var animateModal = document.getElementById('animateModal');
    animateModal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget;
      var recipient = button.getAttribute('data-pc-animate');
      var modalTitle = animateModal.querySelector('.modal-title');
      modalTitle.textContent = 'Animate Modal : ' + recipient;
      animateModal.classList.add('anim-' + recipient);
      if (recipient == 'let-me-in' || recipient == 'make-way' || recipient == 'slip-from-top') {
        document.body.classList.add('anim-' + recipient);
      }
    });
    animateModal.addEventListener('hidden.bs.modal', function (event) {
      removeClassByPrefix(animateModal, 'anim-');
      removeClassByPrefix(document.body, 'anim-');
    });

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

