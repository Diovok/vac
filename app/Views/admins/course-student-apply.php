<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/style.css') ?>">
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
            <div class="card table-card">
              <div class="card-header">
                <h5 class="mb-0">Apply Student list</h5>
              </div>
              <div class="card-body pt-3">
                <div class="table-responsive">
                  <table class="table table-hover" id="pc-dt-simple">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Qualification</th>
                        <th>Email</th>
                        <th>Date/Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Airi Satou</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/09/12 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Ashton Cox</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/12/24 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Bradley Greer</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/09/19 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-4.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Brielle Williamson</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/08/22 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-5.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Airi Satou</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/09/12 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-6.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Ashton Cox</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/12/24 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-7.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Bradley Greer</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/09/19 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-8.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Brielle Williamson</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/08/22 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-9.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Brielle Williamson</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/08/22 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-10.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Airi Satou</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/09/12 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Ashton Cox</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/12/24 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-3.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Bradley Greer</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/09/19 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-4.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Brielle Williamson</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/08/22 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-5.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Airi Satou</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/09/12 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-6.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Ashton Cox</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.COM., M.COM.</td>
                        <td>Info@123.com</td>
                        <td>2023/12/24 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="<?= base_url('assets/images/user/avatar-7.jpg') ?>" alt="user image" class="img-radius wid-40">
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Bradley Greer</h6>
                            </div>
                          </div>
                        </td>
                        <td>(123) 4567 890</td>
                        <td>B.A, B.C.A</td>
                        <td>Info@123.com</td>
                        <td>2022/09/19 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                        <td>
                          <a href="#" class="avtar avtar-xs btn-light-success">
                            <i class="ti ti-check f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-danger">
                            <i class="ti ti-x f-20"></i>
                          </a>
                          <a href="#" class="avtar avtar-xs btn-light-secondary">
                            <i class="ti ti-dots-vertical f-20"></i>
                          </a>
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
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-block') ?>
  <?= $this->include('partials/customizer.php') ?>
  <!-- [Page Specific JS] start -->
  <script type="module">
    import {DataTable} from "<?= base_url('assets/js/plugins/module.js') ?>"
    window.dt = new DataTable("#pc-dt-simple");
  </script>
  <!-- [Page Specific JS] end -->
  <?= $this->include('partials/footer-js') ?>
</body>
  <!-- [Body] end -->
</html>
