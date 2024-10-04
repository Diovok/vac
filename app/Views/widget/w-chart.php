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
          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s bg-light-primary">
                      <i class="ti ti-wallet f-20"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-0">All Earnings</h6>
                  </div>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                  <div class="mt-3 row align-items-center">
                    <div class="col-7">
                      <div id="all-earnings-graph"></div>
                    </div>
                    <div class="col-5">
                      <h5 class="mb-1">$30200</h5>
                      <p class="text-primary mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s bg-light-warning">
                      <i class="ti ti-clipboard-list f-20"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-0">Page Views</h6>
                  </div>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                  <div class="mt-3 row align-items-center">
                    <div class="col-7">
                      <div id="page-views-graph"></div>
                    </div>
                    <div class="col-5">
                      <h5 class="mb-1">290+</h5>
                      <p class="text-warning mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s bg-light-success">
                      <i class="ti ti-calendar-event f-20"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-0">Total Task</h6>
                  </div>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                  <div class="mt-3 row align-items-center">
                    <div class="col-7">
                      <div id="total-task-graph"></div>
                    </div>
                    <div class="col-5">
                      <h5 class="mb-1">14568</h5>
                      <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s bg-light-danger">
                      <i class="ti ti-cloud-download f-20"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-0">Download</h6>
                  </div>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                  <div class="mt-3 row align-items-center">
                    <div class="col-7">
                      <div id="download-graph"></div>
                    </div>
                    <div class="col-5">
                      <h5 class="mb-1">$30200</h5>
                      <p class="text-danger mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-xxl-9">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Repeat customer rate</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <h5 class="text-end my-2">5.44% <span class="badge bg-success">+2.6%</span> </h5>
                <div id="customer-rate-graph"></div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Project overview</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center justify-content-center">
                  <div class="col-md-6 col-xl-4">
                    <div class="mt-3 row align-items-center">
                      <div class="col-6">
                        <p class="text-muted mb-1">Total Tasks</p>
                        <h5 class="mb-0">34,686</h5>
                      </div>
                      <div class="col-6">
                        <div id="total-tasks-graph"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="mt-3 row align-items-center">
                      <div class="col-6">
                        <p class="text-muted mb-1">Pending Tasks</p>
                        <h5 class="mb-0">3,786</h5>
                      </div>
                      <div class="col-6">
                        <div id="pending-tasks-graph"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="mt-3 d-grid">
                      <button class="btn btn-primary d-flex align-items-center justify-content-center"
                        ><i class="ti ti-plus"></i> Add project</button
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <div class="avtar avtar-s bg-light-secondary">
                        <i class="ti ti-currency-dollar f-20"></i>
                      </div>
                      <div class="dropdown">
                        <a
                          class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                          href="#"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="ti ti-dots-vertical f-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Name</a>
                          <a class="dropdown-item" href="#">Date</a>
                          <a class="dropdown-item" href="#">Ratting</a>
                          <a class="dropdown-item" href="#">Unread</a>
                        </div>
                      </div>
                    </div>
                    <h5 class="mb-0">$30,200.00</h5>
                    <p class="text-muted mb-0">Income</p>
                    <div class="mt-2">
                      <div id="income-graph"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="my-n4" style="width: 130px">
                          <div id="total-earning-graph-1"></div>
                        </div>
                      </div>
                      <div class="flex-grow-1 mx-2">
                        <p class="mb-1">Total Earning</p>
                        <h6 class="mb-0">$45,890</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="my-n4" style="width: 130px">
                          <div id="total-earning-graph-2"></div>
                        </div>
                      </div>
                      <div class="flex-grow-1 mx-2">
                        <p class="mb-1">Total Earning</p>
                        <h6 class="mb-0">$45,890</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">New Orders</h5>
                  <select class="form-select form-select-sm w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected>Monthly</option>
                  </select>
                </div>
                <div class="my-3">
                  <div id="new-orders-graph"></div>
                  <h5 class="text-center mt-3"
                    >$30200 <small class="text-primary"><i class="ti ti-arrow-up-right"></i> 30.6%</small></h5
                  >
                </div>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View more</button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">New Users</h5>
                  <select class="form-select form-select-sm w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected>Monthly</option>
                  </select>
                </div>
                <div class="my-3">
                  <div id="new-users-graph"></div>
                  <h5 class="text-center mt-3"
                    >$30200 <small class="text-success"><i class="ti ti-arrow-up-right"></i> 30.6%</small></h5
                  >
                </div>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View more</button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Visitors</h5>
                  <select class="form-select form-select-sm w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected>Monthly</option>
                  </select>
                </div>
                <div class="my-3">
                  <div id="visitors-graph"></div>
                  <h5 class="text-center mt-3"
                    >$30200 <small class="text-danger"><i class="ti ti-arrow-down-right"></i> 30.6%</small></h5
                  >
                </div>
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View more</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header pb-0 pt-2">
                <ul class="nav nav-tabs analytics-tab" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="analytics-tab-1"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-1-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-1-pane"
                      aria-selected="true"
                      >Overview</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-2"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-2-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-2-pane"
                      aria-selected="false"
                      >Marketing</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-3"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-3-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-3-pane"
                      aria-selected="false"
                      >Project</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-4"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-4-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-4-pane"
                      aria-selected="false"
                      >Order</button
                    >
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-7 col-xl-8">
                    <ul class="list-inline mb-3 d-flex align-items-center justify-content-end">
                      <li class="list-inline-item">
                        <select class="form-select w-auto">
                          <option>Today</option>
                          <option>Weekly</option>
                          <option selected="">Monthly</option>
                        </select>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary border border-secondary">
                          <i class="ti ti-external-link f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary border border-secondary">
                          <i class="ti ti-arrows-diagonal f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <div class="dropdown">
                          <a
                            class="avtar avtar-s btn-link-secondary border border-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
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
                    <div class="tab-content" id="myTabContent">
                      <div
                        class="tab-pane fade show active"
                        id="analytics-tab-1-pane"
                        role="tabpanel"
                        aria-labelledby="analytics-tab-1"
                        tabindex="0"
                      >
                        <div id="overview-chart-1"></div>
                      </div>
                      <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel" aria-labelledby="analytics-tab-2" tabindex="0">
                        <div id="overview-chart-2"></div>
                      </div>
                      <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel" aria-labelledby="analytics-tab-3" tabindex="0">
                        <div id="overview-chart-3"></div>
                      </div>
                      <div class="tab-pane fade" id="analytics-tab-4-pane" role="tabpanel" aria-labelledby="analytics-tab-4" tabindex="0">
                        <div id="overview-chart-4"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-xl-4">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-chart-bar f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Total Sales</p>
                                <h6 class="mb-0">1,800</h6>
                              </div>
                              <div class="col-6 text-end">
                                <h6 class="mb-1">- 245</h6>
                                <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 30.6%</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-chart-arrows-vertical f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Revenue</p>
                                <h6 class="mb-0">$5667</h6>
                              </div>
                              <div class="col-6 text-end">
                                <h6 class="mb-1">+$2100</h6>
                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-shopping-cart f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Abandon Cart</p>
                                <h6 class="mb-0">128</h6>
                              </div>
                              <div class="col-6 text-end">
                                <h6 class="mb-1">-26</h6>
                                <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-ad f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Ads Spent</p>
                                <h6 class="mb-0">$2500</h6>
                              </div>
                              <div class="col-6 text-end">
                                <h6 class="mb-1">$200</h6>
                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">Overview Product</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Name</a>
                      <a class="dropdown-item" href="#">Date</a>
                      <a class="dropdown-item" href="#">Ratting</a>
                      <a class="dropdown-item" href="#">Unread</a>
                    </div>
                  </div>
                </div>
                <div class="my-3">
                  <div id="overview-product-graph"></div>
                </div>
                <div class="row g-3 text-center">
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-dark mb-1"><span>Apps</span></p>
                      <h6 class="mb-0">10+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-dark mb-1"><span>Other</span></p>
                      <h6 class="mb-0">5+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-secondary mb-1"><span>Widgets</span></p>
                      <h6 class="mb-0">150+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-secondary mb-1"><span>Forms</span></p>
                      <h6 class="mb-0">50+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-primary mb-1"><span>Components</span></p>
                      <h6 class="mb-0">200+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-primary mb-1"><span>Pages</span></p>
                      <h6 class="mb-0">150+</h6>
                    </div>
                  </div>
                </div>
                <div class="row g-2 text-center mt-4">
                  <div class="col-sm-6">
                    <div class="d-grid">
                      <button class="btn btn-outline-secondary">View All</button>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-grid">
                      <button class="btn btn-primary">Create new Page</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Total Income</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <div id="total-income-graph"></div>
                <div class="row g-3 mt-3">
                  <div class="col-sm-6">
                    <div class="bg-body p-3 rounded">
                      <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                          <span class="p-1 d-block bg-primary rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <p class="mb-0">Item01</p>
                        </div>
                      </div>
                      <h6 class="mb-0"
                        >$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6
                      >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-body p-3 rounded">
                      <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                          <span class="p-1 d-block bg-warning rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <p class="mb-0">Item01</p>
                        </div>
                      </div>
                      <h6 class="mb-0"
                        >$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6
                      >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-body p-3 rounded">
                      <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                          <span class="p-1 d-block bg-success rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <p class="mb-0">Item01</p>
                        </div>
                      </div>
                      <h6 class="mb-0"
                        >$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6
                      >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="bg-body p-3 rounded">
                      <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                          <span class="p-1 d-block bg-light-primary rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <p class="mb-0">Item01</p>
                        </div>
                      </div>
                      <h6 class="mb-0"
                        >$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">Languages support</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Name</a>
                      <a class="dropdown-item" href="#">Date</a>
                      <a class="dropdown-item" href="#">Ratting</a>
                      <a class="dropdown-item" href="#">Unread</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-xs bg-light-secondary">
                      <i class="ti ti-arrow-big-right f-18"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-0">Update version <span class="badge bg-light-success">V1.1.0</span></h6>
                  </div>
                </div>
                <div class="mt-2 mb-3">
                  <div id="languages-graph"></div>
                </div>
                <div class="row g-2">
                  <div class="col-6">
                    <div class="d-grid"><button class="btn btn-outline-secondary">React</button></div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid"><button class="btn btn-outline-secondary">Angular</button></div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid"><button class="btn btn-outline-secondary">Bootstrap</button></div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid"><button class="btn btn-outline-secondary">MUI</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">Monthly Report</h5>
                  <select class="form-select w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected="">Monthly</option>
                  </select>
                </div>
                <div class="mt-2">
                  <div id="monthly-report-graph"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-xl-7">
            <div class="card">
              <div class="card-body">
                <h5 class="mb-3">Sales Report</h5>
                <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                <h3 class="mb-0">$7,650</h3>
                <div id="sales-report-chart"></div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-xl-5">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="mb-2">Acquisition Channels</h6>
                    <p class="mb-0 text-muted">Marketing</p>
                  </div>
                  <h4 class="text-primary">-128</h4>
                </div>
                <div id="acquisition-chart"></div>
              </div>
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <div class="avtar avtar-s rounded-circle text-secondary bg-light-secondary">
                        <i class="ti ti-device-analytics f-18"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-1">Top Channels</h6>
                      <p class="mb-0 text-muted">Today, 2:00 AM</p>
                    </div>
                    <div class="flex-shrink-0 text-end">
                      <h6 class="mb-1">+ $1,430</h6>
                      <p class="mb-0 text-muted">35%</p>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                        <i class="ti ti-file-text f-18"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-1">Top Pages</h6>
                      <p class="mb-0 text-muted">Today 6:00 AM</p>
                    </div>
                    <div class="flex-shrink-0 text-end">
                      <h6 class="mb-1">- $1430</h6>
                      <p class="mb-0 text-muted">35%</p>
                    </div>
                  </div>
                </a>
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
  <!-- Apex Chart -->
  <script src="<?= base_url('assets/js/plugins/apexcharts.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/pages/w-chart.js') ?>"></script>
  <!-- [Page Specific JS] end -->
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
