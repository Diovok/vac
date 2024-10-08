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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5>Notifications</h5>
              </div>
              <div class="card-body">
                <h6>Enrollment Notifications</h6>
                <p class="text-muted">Get notified via email whenever a student enrolls in your school and/or courses.</p>
                <div class="card shadow-none border">
                  <div class="card-body p-3">
                    <div class="form-check form-switch form-check-reverse text-start mb-2">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-1" checked>
                      <label class="form-check-label " for="notifyswitch-1">When a new student joins the school</label>
                    </div>
                    <div class="form-check form-switch form-check-reverse text-start mb-2">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-2" checked>
                      <label class="form-check-label " for="notifyswitch-2">When a student enrolls in a paid course</label>
                    </div>
                    <div class="form-check form-switch form-check-reverse text-start mb-0">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-3">
                      <label class="form-check-label " for="notifyswitch-3">When a student enrolls in a free course</label>
                    </div>
                  </div>
                </div>

                <h6 class="mt-3 mt-md-5">Comment Notifications</h6>
                <p class="text-muted">Get alerted via email whenever someone engages in a commenting action.</p>
                <div class="card shadow-none border">
                  <div class="card-body p-3">
                    <div class="form-check form-switch form-check-reverse text-start mb-2">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-4" checked>
                      <label class="form-check-label " for="notifyswitch-4">When a new comment is posted that requires moderation</label>
                    </div>
                    <div class="form-check form-switch form-check-reverse text-start mb-2">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-5">
                      <label class="form-check-label " for="notifyswitch-5">When a new comment is posted on one of your courses</label>
                    </div>
                    <div class="form-check form-switch form-check-reverse text-start mb-0">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-6" checked>
                      <label class="form-check-label " for="notifyswitch-6">When a new comment is posted in a thread you've commented on</label>
                    </div>
                  </div>
                </div>

                <h6 class="mt-3 mt-md-5">Subscription Notifications</h6>
                <p class="text-muted">Get email notifications for specific subscription events.</p>
                <div class="card shadow-none border">
                  <div class="card-body p-3">
                    <div class="form-check form-switch form-check-reverse text-start mb-2">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-7" checked>
                      <label class="form-check-label " for="notifyswitch-7">When a subscription payment fails or a subscription is canceled due to non-payment</label>
                    </div>
                    <div class="form-check form-switch form-check-reverse text-start mb-2">
                      <input class="form-check-input" type="checkbox" id="notifyswitch-8" checked>
                      <label class="form-check-label " for="notifyswitch-8">When a student cancels their subscription to one of your courses</label>
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
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
