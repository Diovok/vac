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
        <!-- [ Main Content ] start -->
        <div class="row">
        
        <div class="col-sm-12">
          <div class="chat-wrapper">
            <div class="offcanvas-xxl offcanvas-start chat-offcanvas" tabindex="-1" id="offcanvas_User_list">
              <div class="offcanvas-header">
                <button class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas_User_list"
                  aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0">
                <div id="chat-user_list" class="show collapse collapse-horizontal">
                  <div class="chat-user_list">
                    <div class="card overflow-hidden">
                      <div class="card-body">
                        <h5 class="mb-4">Messages <span class="avtar avtar-xs bg-light-primary rounded-circle">9</span>
                        </h5>
                        <div class="form-search">
                          <i class="ti ti-search"></i>
                          <input type="search" class="form-control" placeholder="Search Followers">
                        </div>
                      </div>
                      <div class="scroll-block">
                        <div class="card-body p-0">
                          <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="chat-avtar">
                                    <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-1.jpg') ?>"
                                      alt="User image">
                                    <div class="bg-success chat-badge"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">John Doe <span class="float-end text-sm text-muted f-w-400">2h
                                      ago</span></h6>
                                  <span class="text-sm text-muted">Technical Department
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-danger text-white">9</span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="chat-avtar">
                                    <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-2.jpg') ?>"
                                      alt="User image">
                                    <div class="bg-success bg-opacity-50 chat-badge"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">Keefs <span class="float-end text-sm text-muted f-w-400">3h
                                      ago</span></h6>
                                  <span class="text-sm text-muted">Support Executive
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-success text-white"><i
                                          class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="chat-avtar">
                                    <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>"
                                      alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">Lazaro
                                    <span class="float-end text-sm text-muted f-w-400">Yesterday</span>
                                  </h6>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i
                                          class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="chat-avtar">
                                    <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>"
                                      alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">Adeline
                                    <span class="float-end text-sm text-muted f-w-400">4/25/2021</span>
                                  </h6>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i
                                          class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="chat-avtar">
                                    <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-1.jpg') ?>"
                                      alt="User image">
                                    <div class="bg-success chat-badge"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">John Doe <span class="float-end text-sm text-muted f-w-400">2h
                                      ago</span></h6>
                                  <span class="text-sm text-muted">Technical Department
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-danger text-white">9</span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-2.jpg') ?>"
                                    alt="User image">
                                  <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">Keefs <span class="float-end text-sm text-muted f-w-400">3h
                                      ago</span></h6>
                                  <span class="text-sm text-muted">Support Executive
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-success text-white"><i
                                          class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="chat-avtar">
                                    <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>"
                                      alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">Lazaro
                                    <span class="float-end text-sm text-muted f-w-400">Yesterday</span>
                                  </h6>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i
                                          class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                  <div class="chat-avtar">
                                    <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>"
                                      alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1 mx-2">
                                  <h6 class="mb-0">Adeline
                                    <span class="float-end text-sm text-muted f-w-400">4/25/2021</span>
                                  </h6>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i
                                          class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                          <a href="#" class="list-group-item list-group-item-action">
                            <i class="ti ti-power"></i>
                            <span>Logout</span>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action">
                            <i class="ti ti-settings"></i>
                            <span>Setting</span>
                          </a>
                          <div class="list-group-item">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-5.jpg') ?>"
                                    alt="User image">
                                  <i class="chat-badge bg-success"></i>
                                </div>
                              </div>
                              <div class="flex-grow-1 mx-3">
                                <h6 class="mb-0">John Doe</h6>
                              </div>
                              <div class="flex-shrink-0">
                                <div class="dropdown">
                                  <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-chevron-right f-16"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#"><i class="chat-badge bg-success"></i> Active</a>
                                    <a class="dropdown-item" href="#"><i class="chat-badge bg-warning"></i>
                                      Away</a>
                                    <a class="dropdown-item" href="#"><i class="chat-badge bg-secondary"></i> Edit Do not
                                      disturb</a>
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
            <div class="chat-content">
              <div class="card mb-0">
                <div class="card-header p-3">
                  <div class="d-flex align-items-center">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom">
                        <a href="#" class="d-xxl-none avtar avtar-s btn-link-secondary" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_User_list">
                          <i class="ti ti-menu-2 f-18"></i>
                        </a>
                        <a href="#" class="d-none d-xxl-inline-flex avtar avtar-s btn-link-secondary"
                          data-bs-toggle="collapse" data-bs-target="#chat-user_list">
                          <i class="ti ti-menu-2 f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="chat-avtar">
                              <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-5.jpg') ?>"
                                alt="User image">
                              <i class="chat-badge bg-success"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 mx-3 d-none d-sm-inline-block">
                            <h6 class="mb-0">Alene</h6>
                            <span class="text-sm text-muted">ui/ux designer</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-inline ms-auto mb-0">
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary">
                          <i class="ti ti-phone-call f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary">
                          <i class="ti ti-video f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="d-xxl-none avtar avtar-s btn-link-secondary" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_User_info">
                          <i class="ti ti-info-circle f-18"></i>
                        </a>
                        <a href="#" class="d-none d-xxl-inline-flex avtar avtar-s btn-link-secondary"
                          data-bs-toggle="collapse" data-bs-target="#chat-user_info">
                          <i class="ti ti-info-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <div class="dropdown">
                          <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots f-18"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Name</a>
                            <a class="dropdown-item" href="#">Date</a>
                            <a class="dropdown-item" href="#">Ratting</a>
                            <a class="dropdown-item" href="#">Unread</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="scroll-block chat-message">
                  <div class="card-body">
                    <div class="message-out">
                      <div class="d-flex align-items-end flex-column">
                        <p class="mb-1 text-muted"><small>9h ago</small></p>
                        <div class="message d-flex align-items-end flex-column">
                          <div class="d-flex align-items-center mb-1 chat-msg">
                            <div class="flex-shrink-0">
                              <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                <li class="list-inline-item">
                                  <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti ti-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                        Forward</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit-circle f-18"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <div class="msg-content bg-primary">
                                <p class="mb-0">Hi...Henny!!</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center mb-1 chat-msg">
                            <div class="flex-shrink-0">
                              <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                <li class="list-inline-item">
                                  <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti ti-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                        Forward</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit-circle f-18"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <div class="msg-content bg-primary">
                                <p class="mb-0">How can i cap you today?</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="message-in">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="d-flex align-items-start flex-column">
                            <p class="mb-1 text-muted">Agilulf Fuxg <small>11:23 AM</small></p>
                            <div class="message d-flex align-items-start flex-column">
                              <div class="d-flex align-items-center mb-1 chat-msg">
                                <div class="flex-grow-1 me-3">
                                  <div class="msg-content card mb-0">
                                    <p class="mb-0">Hey.. Bill</p>
                                  </div>
                                </div>
                                <div class="flex-shrink-0">
                                  <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                    <li class="list-inline-item">
                                      <div class="dropdown">
                                        <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="ti ti-dots-vertical f-18"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i>
                                            Reply</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                            Forward</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit-circle f-18"></i>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="d-flex align-items-center mb-1 chat-msg">
                                <div class="flex-grow-1 me-3">
                                  <div class="msg-content card mb-0">
                                    <p class="mb-0">nice to meet you!</p>
                                  </div>
                                </div>
                                <div class="flex-shrink-0">
                                  <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                    <li class="list-inline-item">
                                      <div class="dropdown">
                                        <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="ti ti-dots-vertical f-18"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i>
                                            Reply</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                            Forward</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit-circle f-18"></i>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="message-out">
                      <div class="d-flex align-items-end flex-column">
                        <p class="mb-1 text-muted"><small>9h ago</small></p>
                        <div class="message d-flex align-items-end flex-column">
                          <div class="d-flex align-items-center mb-1 chat-msg">
                            <div class="flex-shrink-0">
                              <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                <li class="list-inline-item">
                                  <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti ti-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                        Forward</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit-circle f-18"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <div class="msg-content bg-primary">
                                <p class="mb-0">Hi...Henny!!</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center mb-1 chat-msg">
                            <div class="flex-shrink-0">
                              <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                <li class="list-inline-item">
                                  <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti ti-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                        Forward</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit-circle f-18"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <div class="msg-content bg-primary">
                                <p class="mb-0">Are u listening me ?</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center mb-1 chat-msg">
                            <div class="flex-shrink-0">
                              <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                <li class="list-inline-item">
                                  <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti ti-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                        Forward</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit-circle f-18"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <div class="msg-content bg-primary">
                                <p class="mb-0">How can i cap you today?</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="message-in">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="<?= base_url('assets/images/user/avatar-3.jpg') ?>"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="d-flex align-items-start flex-column">
                            <p class="mb-1 text-muted">Agilulf Fuxg <small>11:23 AM</small></p>
                            <div class="message d-flex align-items-start flex-column">
                              <div class="d-flex align-items-center mb-1 chat-msg">
                                <div class="flex-grow-1 me-3">
                                  <div class="msg-content card mb-0">
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                      industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                      1500s.</p>
                                  </div>
                                </div>
                                <div class="flex-shrink-0">
                                  <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                    <li class="list-inline-item">
                                      <div class="dropdown">
                                        <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="ti ti-dots-vertical f-18"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i>
                                            Reply</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                            Forward</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                          <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="#" class="avtar avtar-xs btn-link-secondary">
                                        <i class="ti ti-edit-circle f-18"></i>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="message-out">
                      <div class="d-flex align-items-end flex-column">
                        <p class="mb-1 text-muted"><small>9h ago</small></p>
                        <div class="message d-flex align-items-end flex-column">
                          <div class="d-flex align-items-center mb-1 chat-msg">
                            <div class="flex-shrink-0">
                              <ul class="list-inline ms-auto mb-0 chat-msg-option">
                                <li class="list-inline-item">
                                  <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti ti-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i>
                                        Forward</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                      <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-edit-circle f-18"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <div class="msg-content bg-primary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                  industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                  1500s.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer py-2 px-3">
                  <textarea class="form-control border-0 shadow-none px-0" placeholder="Type a Message"
                    rows="2"></textarea>
                  <hr class="my-2">
                  <div class="d-sm-flex align-items-center">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-paperclip f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-photo f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-mood-smile f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-volume f-18"></i>
                        </a>
                      </li>
                    </ul>
                    <ul class="list-inline ms-auto mb-0">
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-primary">
                          <i class="ti ti-send f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas-xxl offcanvas-end chat-offcanvas" tabindex="-1" id="offcanvas_User_info">
              <div class="offcanvas-header">
                <button class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas_User_info"
                  aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0">
                <div id="chat-user_info" class="collapse collapse-horizontal">
                  <div class="chat-user_info">
                    <div class="card">
                      <div class="text-center card-body position-relative pb-0">
                        <h5 class="text-start">Profile View</h5>
                        <div class="position-absolute end-0 top-0 p-3 d-none d-xxl-inline-flex">
                          <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default" data-bs-toggle="collapse"
                            data-bs-target="#chat-user_info">
                            <i class="ti ti-x f-16"></i>
                          </a>
                        </div>
                        <div class="chat-avtar d-inline-flex mx-auto">
                          <img class="rounded-circle img-fluid wid-100" src="<?= base_url('assets/images/user/avatar-5.jpg') ?>"
                            alt="User image">
                        </div>
                        <h5 class="mb-0">Alene</h5>
                        <p class="text-muted text-sm">Sr. Customer Manager</p>
                        <div class="d-flex align-items-center justify-content-center mb-4">
                          <i class="chat-badge bg-success me-2"></i>
                          <span class="badge bg-light-success">Available</span>
                        </div>
                        <ul class="list-inline ms-auto mb-0">
                          <li class="list-inline-item">
                            <a href="#" class="avtar avtar-s btn-link-secondary">
                              <i class="ti ti-phone-call f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="avtar avtar-s btn-link-secondary">
                              <i class="ti ti-message-circle f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="avtar avtar-s btn-link-secondary">
                              <i class="ti ti-video f-18"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="scroll-block">
                        <div class="card-body">
                          <div class="row mb-3">
                            <div class="col-6">
                              <div class="p-3 rounded bg-light-primary">
                                <p class="mb-1">All File</p>
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-folder f-22 text-primary"></i>
                                  <h4 class="mb-0 ms-2">231</h4>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="p-3 rounded bg-light-secondary">
                                <p class="mb-1">All Link</p>
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-link f-22 text-secondary"></i>
                                  <h4 class="mb-0 ms-2">231</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                            <label class="form-check-label h5 mb-0" for="customSwitchemlnot1">Notification</label>
                            <input class="form-check-input h5 m-0 position-relative" type="checkbox"
                              id="customSwitchemlnot1" checked="">
                          </div>
                          <hr class="my-3 border border-secondary-subtle">
                          <a class="btn border-0 p-0 text-start w-100" data-bs-toggle="collapse"
                            href="#filtercollapse1">
                            <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                            <h5 class="mb-0">Information</h5>
                          </a>
                          <div class="collapse show" id="filtercollapse1">
                            <div class="py-3">
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0">Address</p>
                                <p class="mb-0 text-muted">Port Narcos</p>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0">Email</p>
                                <p class="mb-0 text-muted">alene@company.com</p>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0">Phone</p>
                                <p class="mb-0 text-muted">380-293-0177</p>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">Last visited</p>
                                <p class="mb-0 text-muted">2 hours</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-3 border border-secondary-subtle">
                          <a class="btn border-0 p-0 text-start w-100" data-bs-toggle="collapse"
                            href="#filtercollapse2">
                            <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                            <h5 class="mb-0">File type</h5>
                          </a>
                          <div class="collapse show" id="filtercollapse2">
                            <div class="py-3">
                              <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0">
                                  <a href="#" class="avtar avtar-s btn-light-success">
                                    <i class="ti ti-file-text f-20"></i>
                                  </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h6 class="mb-0">Document</h6>
                                  <span class="text-muted text-sm">123 files, 193MB</span>
                                </div>
                                <div class="flex-shrink-0">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-chevron-right f-16"></i>
                                  </a>
                                </div>
                              </div>
                              <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0">
                                  <a href="#" class="avtar avtar-s btn-light-warning">
                                    <i class="ti ti-photo f-20"></i>
                                  </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h6 class="mb-0">Photos</h6>
                                  <span class="text-muted text-sm">53 files, 321MB</span>
                                </div>
                                <div class="flex-shrink-0">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-chevron-right f-16"></i>
                                  </a>
                                </div>
                              </div>
                              <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0">
                                  <a href="#" class="avtar avtar-s btn-light-primary">
                                    <i class="ti ti-id f-20"></i>
                                  </a>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                  <h6 class="mb-0">Other</h6>
                                  <span class="text-muted text-sm">49 files, 193MB</span>
                                </div>
                                <div class="flex-shrink-0">
                                  <a href="#" class="avtar avtar-xs btn-link-secondary">
                                    <i class="ti ti-chevron-right f-16"></i>
                                  </a>
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
        </div>
        
      </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-block') ?>
  <?= $this->include('partials/footer-js') ?>
  <!-- [Page Specific JS] start -->
  <script>
    // scroll-block
    var tc = document.querySelectorAll('.scroll-block');
    for (var t = 0; t < tc.length; t++) {
      new SimpleBar(tc[t]);
    }
    setTimeout(function () {
      var element = document.querySelector('.chat-content .scroll-block .simplebar-content-wrapper');
      var elementheight = document.querySelector('.chat-content .scroll-block .simplebar-content');
      var off = elementheight.getBoundingClientRect();
      var h = off.height;
      element.scrollTop += h;
    }, 100)
  </script>
  <!-- [Page Specific JS] end -->
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
