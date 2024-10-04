<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/uppy.min.css') ?>" />
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
          
          <div class="col-12 file-manger-wrapper">
            <a
              class="h5 text-hover-primary my-3 d-block"
              data-bs-toggle="collapse"
              href="#collapseFilefilter"
              role="button"
              aria-expanded="false"
            >
              Quick Filter
            </a>
            <div class="collapse show" id="collapseFilefilter">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="avtar bg-light-primary">
                        <svg class="pc-icon wid-30 hei-30">
                          <use xlink:href="#custom-note-1"></use>
                        </svg>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                          <h6 class="mb-1">Documents</h6>
                          <p class="mb-0">100 files</p>
                        </div>
                        <span class="badge bg-primary f-12">15 GB</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="avtar bg-light-danger">
                        <svg class="pc-icon wid-30 hei-30">
                          <use xlink:href="#custom-video-play"></use>
                        </svg>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                          <h6 class="mb-1">Videos</h6>
                          <p class="mb-0">100 files</p>
                        </div>
                        <span class="badge bg-danger f-12">2.4 GB</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="avtar bg-light-success">
                        <svg class="pc-icon wid-30 hei-30">
                          <use xlink:href="#custom-image"></use>
                        </svg>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                          <h6 class="mb-1">Images</h6>
                          <p class="mb-0">100 files</p>
                        </div>
                        <span class="badge bg-success f-12">2.4 GB</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div
                    class="card border-0 shadow-none drp-upgrade-card"
                    style="background-image: url(<?= base_url('assets/images/layout/img-profile-card.jpg') ?>)"
                  >
                    <div class="card-body">
                      <h5 class="mb-0 text-muted">20.5GB of 50GB</h5>
                      <div class="row align-items-center my-2">
                        <div class="col">
                          <div class="progress" style="height: 6px">
                            <div class="progress-bar bg-primary" style="width: 70%"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <p class="mb-0 text-muted">70%</p>
                        </div>
                      </div>
                      <button class="btn btn-warning mt-3">Want More Storage?</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <a
              class="h5 text-hover-primary my-3 d-block"
              data-bs-toggle="collapse"
              href="#collapseRecentFile"
              role="button"
              aria-expanded="false"
            >
              Recent file
            </a>
            <div class="collapse show" id="collapseRecentFile">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Documents</span></h5>
                          <p class="mb-0"><small>24 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Root</span></h5>
                          <p class="mb-0"><small>50 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Images</span></h5>
                          <p class="mb-0"><small>100 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Music and video</span></h5>
                          <p class="mb-0"><small>100 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <div class="row my-2">
              <div class="col">
                <ul class="list-inline ms-auto mb-3">
                  <li class="list-inline-item">
                    <div class="form-search my-1">
                      <i class="ti ti-search"></i>
                      <input type="search" class="form-control" placeholder="Search Followers" />
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <select class="form-select my-1">
                      <option>All Type</option>
                      <option>Documents</option>
                      <option>Videos</option>
                      <option>Images</option>
                    </select>
                  </li>
                  <li class="list-inline-item">
                    <input type="date" class="form-control my-1" id="example-datemax" max="1979-12-31" />
                  </li>
                </ul>
              </div>
              <div class="col-auto">
                <ul class="nav nav-pills nav-files" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-home-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-home"
                      role="tab"
                      aria-controls="pills-home"
                      aria-selected="true"
                    >
                      <i class="ti ti-layout-grid"></i>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-profile-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-profile"
                      role="tab"
                      aria-controls="pills-profile"
                      aria-selected="false"
                    >
                      <i class="ti ti-layout-list"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row my-3">
              <div class="col">
                <div class="d-flex align-items-center">
                  <h5 class="mb-0 me-2">File</h5>
                  <a href="#" class="avtar avtar-xs btn btn-primary rounded-circle p-0" data-bs-toggle="modal" data-bs-target="#uploadFile">
                    <i class="ti ti-plus f-16"></i>
                  </a>
                </div>
              </div>
              <div class="col-auto">
                <button class="btn btn-outline-secondary btn-sm">View All <i class="ti ti-chevron-right ms-2"></i></button>
              </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" tabindex="0">
                <div class="row">
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-1" />
                            <label class="form-check-label d-block" for="file-check-1"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-doc.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-2" />
                            <label class="form-check-label d-block" for="file-check-2"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-xls.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-3" />
                            <label class="form-check-label d-block" for="file-check-3"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-pdf.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a href="#" class="user-popup" data-bs-toggle="modal" data-bs-target="#assignFile">
                            <div class="user-group p-1">
                              <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                              <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                              <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user-image" class="avtar" />
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-4" />
                            <label class="form-check-label d-block" for="file-check-4"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-xls.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-5" />
                            <label class="form-check-label d-block" for="file-check-5"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-rar.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-6" />
                            <label class="form-check-label d-block" for="file-check-6"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-2 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-imgview.jpg') ?>" alt="img" class="img-fluid rounded" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-7" />
                            <label class="form-check-label d-block" for="file-check-7"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-ppt.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-8" />
                            <label class="form-check-label d-block" for="file-check-8"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-ai.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-9" />
                            <label class="form-check-label d-block" for="file-check-9"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-ppt.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-10" />
                            <label class="form-check-label d-block" for="file-check-10"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-txt.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-11" />
                            <label class="form-check-label d-block" for="file-check-11"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-img.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-12" />
                            <label class="form-check-label d-block" for="file-check-12"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-doc.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-13" />
                            <label class="form-check-label d-block" for="file-check-13"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-rar.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-14" />
                            <label class="form-check-label d-block" for="file-check-14"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-doc.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-15" />
                            <label class="form-check-label d-block" for="file-check-15"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-ppt.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-16" />
                            <label class="form-check-label d-block" for="file-check-16"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="<?= base_url('assets/images/application/img-file-ai.svg') ?>" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" tabindex="0">
                <div class="table-responsive card bg-transparent border-0 shadow-none">
                  <table class="table table-borderless file-card">
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-doc.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" checked />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-xls.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">ablepro-design.sketch</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-pdf.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-5.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-ai.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" checked />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-img.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">ablepro-design.sketch</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-ppt.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-5.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-txt.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">ablepro-design.sketch</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="<?= base_url('assets/images/application/img-file-rar.svg') ?>" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-5.jpg') ?>" alt="user-image" class="avtar" />
                            <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <div class="modal fade" id="uploadFile" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="uploadFileLabel">Upload Files</h1>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="pc-uppy-3">
              <div class="for-DragDrop"></div>
              <div class="for-ProgressBar"></div>
              <div class="uploaded-files mt-3">
                <h5>Uploaded files:</h5>
                <ol></ol>
              </div>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <div class="input-group">
              <button class="btn btn-outline-secondary">Copy link</button>
              <input type="text" class="form-control" placeholder="Enter URL" value="https://www.figma.com/file/" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" data-bs-dismiss="modal">Add Files</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="assignFile" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="assignFileLabel">Share</h1>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <label class="input-group-text">Invite People</label>
              <input type="text" class="form-control" placeholder="Email" />
              <select class="form-select">
                <option>view</option>
                <option>Edit</option>
              </select>
            </div>
            <div class="d-flex align-items-center my-3">
              <div class="flex-shrink-0">
                <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="User image" />
              </div>
              <div class="flex-grow-1 mx-2">
                <p class="mb-0">Addie Bass</p>
              </div>
              <div class="flex-shrink-0">
                <div class="text-primary">Owner</div>
              </div>
            </div>
            <div class="d-flex align-items-center my-3">
              <div class="flex-shrink-0">
                <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-5.jpg') ?>" alt="User image" />
              </div>
              <div class="flex-grow-1 mx-2">
                <p class="mb-0">Mark E. Kinder</p>
              </div>
              <div class="flex-shrink-0">
                <select class="form-select w-auto" disabled>
                  <option>view</option>
                  <option>Edit</option>
                </select>
              </div>
            </div>
            <div class="d-flex align-items-center my-3">
              <div class="flex-shrink-0">
                <div class="avtar avtar-s bg-light-primary rounded-circle">
                  <span class="f-18">Q</span>
                </div>
              </div>
              <div class="flex-grow-1 mx-2">
                <p class="mb-0">Quentin</p>
              </div>
              <div class="flex-shrink-0">
                <select class="form-select w-auto">
                  <option>view</option>
                  <option>Edit</option>
                </select>
              </div>
            </div>
            <div class="d-flex align-items-center my-3">
              <div class="flex-shrink-0">
                <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="User image" />
              </div>
              <div class="flex-grow-1 mx-2">
                <p class="mb-0">Richard J. Doran</p>
              </div>
              <div class="flex-shrink-0">
                <select class="form-select w-auto">
                  <option>view</option>
                  <option>Edit</option>
                </select>
              </div>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <div class="input-group">
              <button class="btn btn-outline-secondary">Copy link</button>
              <input type="text" class="form-control" placeholder="Enter URL" value="https://www.figma.com/file/" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFileDesc">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">File Preview</h5>
        <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default ms-auto" data-bs-dismiss="offcanvas">
          <i class="ti ti-circle-x f-18"></i>
        </a>
      </div>
      <div class="offcanvas-body">
        <div class="my-3 text-center">
          <img src="<?= base_url('assets/images/application/img-file-doc.svg') ?>" alt="img" class="img-fluid wid-100" />
          <h5 class="mb-1 mt-4">Document-final.docx</h5>
          <p class="mb-0 text-muted">16 Nov 2022</p>
        </div>
        <hr class="my-4 border border-secondary-subtle" />
        <h5>File share with</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="User image" />
              </div>
              <div class="flex-grow-1 ms-2">
                <h6 class="mb-0">John Doe</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:John_Doe@ablepro.io">John_Doe@ablepro.io</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-5.jpg') ?>" alt="User image" />
              </div>
              <div class="flex-grow-1 ms-2">
                <h6 class="mb-0">Addie Bass</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:Addie_B@ablepro.io">Addie_B@ablepro.io</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="User image" />
              </div>
              <div class="flex-grow-1 ms-2">
                <h6 class="mb-0">Alberta Robbins</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:Alberta@ablepro.io">Alberta@ablepro.io</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-4.jpg') ?>" alt="User image" />
              </div>
              <div class="flex-grow-1 ms-2">
                <h6 class="mb-0">Agnes McGee</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:Agnes.Gee@ablepro.io">Agnes.Gee@ablepro.io</a></p>
              </div>
            </div>
          </li>
        </ul>
        <hr class="my-4 border border-secondary-subtle" />
        <div class="row g-2">
          <div class="col-12">
            <div class="d-grid">
              <button class="btn btn-primary">Share</button>
            </div>
          </div>
          <div class="col-6">
            <div class="d-grid">
              <button class="btn btn-light-secondary">Edit</button>
            </div>
          </div>
          <div class="col-6">
            <div class="d-grid">
              <button class="btn btn-light-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-block') ?>
  <?= $this->include('partials/footer-js') ?>
  <!-- [Page Specific JS] start -->
  <script src="<?= base_url('assets/js/plugins/uppy.min.js') ?>"></script>
    <script>
      const Tus = Uppy.Tus;
      const DragDrop = Uppy.DragDrop;
      const ProgressBar = Uppy.ProgressBar;

      const onUploadSuccess = (elForUploadedFiles) => (file, response) => {
        const url = response.uploadURL;
        const fileName = file.name;

        const li = document.createElement('li');
        const a = document.createElement('a');
        a.href = url;
        a.target = '_blank';
        a.appendChild(document.createTextNode(fileName));
        li.appendChild(a);

        document.querySelector(elForUploadedFiles).appendChild(li);
      };
      (function () {
        const pc_uppy_3 = new Uppy.Uppy({ debug: true, autoProceed: true })
          pc_uppy_3
              .use(DragDrop, { target: '.pc-uppy-3 .for-DragDrop' })
              .use(Tus, { endpoint: 'https://tusd.tusdemo.net/files/' })
              .use(ProgressBar, { target: '.pc-uppy-3 .for-ProgressBar', hideAfterFinish: false })
              .on('upload-success', onUploadSuccess('.pc-uppy-3 .uploaded-files ol'))
      })();
      const offcanvasFileDesc = new bootstrap.Offcanvas('#offcanvasFileDesc');
      var FileDescAction = document.querySelectorAll('.file-card .form-check-label, .file-card td:nth-child(2)');
      for (var i = 0; i < FileDescAction.length; i++) {
        FileDescAction[i].addEventListener('click', function (event) {
          var targetElement = event.target;
          if (targetElement.tagName == 'LABEL') {
            // if (targetElement.parentNode.children[0].checked == true) {
              offcanvasFileDesc.show();
            // }
          } else {
            offcanvasFileDesc.show();
          }
        });
      }
    </script>
  <!-- [Page Specific JS] end -->
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
