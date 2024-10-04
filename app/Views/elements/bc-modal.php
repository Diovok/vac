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
            <!-- [ demo-modal ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Demo Modal</h5>
                </div>
                <div class="card-body pb-0">
                  <div class="bd-example-modal">
                    <div class="modal" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Modal Title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Modal body text goes here.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary me-0">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Woohoo, you're reading this text in a modal!</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalLive">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ demo-modal ] end -->
            <!-- [ Scrolling-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Scrolling Long Content</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalLong">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ Scrolling-modal ] end -->
            <!-- [ vertically-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Vertically Centered</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ vertically-modal ] end -->
            <!-- [ tooltip-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Tooltips Modal</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalPopoversLabel">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <h5>Tooltips in a Button</h5>
                          <p>This
                            <a href="#!" role="button" class="btn btn-secondary tooltip-test" data-bs-toggle="tooltip"
                              title="Button Tooltip" data-container="#exampleModalPopovers">button</a>
                            triggers a popover on click.
                          </p>
                          <hr>
                          <h5>Tooltips in a modal</h5>
                          <p><a href="#!" class="tooltip-test" data-bs-toggle="tooltip" title="Tooltip"
                              data-container="#exampleModalPopovers">This link</a>
                            and
                            <a href="#!" class="tooltip-test" data-bs-toggle="tooltip" title="Tooltip"
                              data-container="#exampleModalPopovers">that link</a>
                            have tooltips on hover.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalPopovers">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ tooltip-modal ] end -->
            <!-- [ grid-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Using the Grid</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="gridModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="gridModalLabel">Grids in Modals</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid bd-example-row">
                            <div class="row">
                              <div class="col-md-4">.col-md-4</div>
                              <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                            </div>
                            <div class="row">
                              <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                              <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                            </div>
                            <div class="row">
                              <div class="col-sm-9">
                                Level 1: .col-sm-9
                                <div class="row">
                                  <div class="col-8 col-sm-6"> Level 2: .col-8 .col-sm-6 </div>
                                  <div class="col-4 col-sm-6"> Level 2: .col-4 .col-sm-6 </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#gridSystemModal">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ grid-modal ] end -->
            <!-- [ optional-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Optional Sizes</h5>
                </div>
                <div class="card-body pc-component">
                  <button type="button" class="btn btn-primary mr-2 mb-2" data-bs-toggle="modal"
                    data-bs-target=".bd-example-modal-lg">Large modal</button>
                  <button type="button" class="btn btn-primary mr-2 mb-2" data-bs-toggle="modal"
                    data-bs-target=".bd-example-modal-sm">Small modal</button>
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="myLargeModalLabel">Large Modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> ... </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="mySmallModalLabel">Small Modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> ... </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ optional-modal ] end -->
            <!-- [ Toggle between modals ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Toggle between modals</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel"><span class="badge bg-danger">1</span>
                            First Modal </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> Show a second modal and hide this one with the button below. </div>
                        <div class="modal-footer">
                          <button class="btn btn-light-primary" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel2"><span class="badge bg-success">2</span>
                            Second Modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> Hide this modal and show the first with the button below. </div>
                        <div class="modal-footer">
                          <button class="btn btn-light-secondary" data-bs-target="#exampleModalToggle"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Openfirst
                    modal</a>
                </div>
              </div>
            </div>
            <!-- [ Toggle between modals ] end -->

            <!-- [ Full screen modal ] start -->
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h5>Full screen modal</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-page">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreen">Full screen</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-sm-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-md-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-lg-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-xl-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Full screen modal ] end -->
            <!-- [ varying-modal ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Varying Modal Content</h5>
                </div>
                <div class="card-body pc-component btn-page">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@mdo">Open modal for @mdo</button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@fat">Open modal for @fat</button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@getbootstrap">Open modal for @bootstrap</button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label pt-0">Recipient:</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-0">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- [ varying-modal ] end -->
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
    var exampleModal = document.getElementById('exampleModal');
    exampleModal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget;
      var recipient = button.getAttribute('data-bs-whatever');
      var modalTitle = exampleModal.querySelector('.modal-title');
      var modalBodyInput = exampleModal.querySelector('.modal-body input');

      modalTitle.textContent = 'New message to ' + recipient;
      modalBodyInput.value = recipient;
    });
  </script>
<!-- [Page Specific JS] end -->
<?= $this->include('partials/customizer.php') ?>
</body>

</html>