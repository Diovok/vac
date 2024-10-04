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
    <?= $this->include('partials/loader') ?>
    <!-- [ Main Content ] start -->
    <div class="maintenance-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card soon-card">
              <div class="card-body">
                <div class="row justify-content-center align-items-center">
                  <div class="col-md-6">
                    <img class="img-fluid" src="<?= base_url('assets/images/pages/img-soon-2.svg') ?>" alt="img" />
                  </div>
                  <div class="col-md-4">
                    <h3 class="mt-4 text-center f-46"><b>Coming Soon</b></h3>
                    <p class="mt-3 mb-4 text-center text-muted f-16">Something new is on it's way</p>
                    <div class="row timer-block mt-4 justify-content-center" id="timer-block">
                      <div class="col-auto">
                        <span class="avtar avtar-xl">10</span>
                      </div>
                      <div class="col-auto">
                        <span class="avtar avtar-xl">10</span>
                      </div>
                      <div class="col-auto">
                        <span class="avtar avtar-xl">10</span>
                      </div>
                      <div class="col-auto">
                        <span class="avtar avtar-xl">10</span>
                      </div>
                    </div>
                    <div class="row d-flex my-4">
                      <div class="col">
                        <input type="email" class="form-control" placeholder="Email Address" />
                      </div>
                      <div class="col-auto">
                        <div class="d-grid">
                          <button class="btn btn-primary d-flex align-items-center"><i class="ti ti-bell-ringing me-2"></i>Notify Me</button>
                        </div>
                      </div>
                    </div>
                    <ul class="list-inline d-flex align-items-center justify-content-center mb-0">
                      <li class="list-inline-item"
                        ><a href="#" class="btn btn-icon btn-link-secondary">
                          <svg class="pc-icon">
                            <use xlink:href="#custom-facebook"></use>
                          </svg> </a
                      ></li>
                      <li class="list-inline-item"
                        ><a href="#" class="btn btn-icon btn-link-secondary">
                          <svg class="pc-icon">
                            <use xlink:href="#custom-google"></use>
                          </svg> </a
                      ></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-js') ?>
  <?= $this->include('partials/customizer.php') ?>
    <script>
      var d = new Date();
      d.setDate(d.getDate() + 2);
      var countDownDate = new Date(d).getTime();

      var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById('timer-block').innerHTML =
          '<div class="col-auto"><span class="avtar  avtar-xl">' +
          days +
          '</span></div><div class="col-auto"><span class="avtar  avtar-xl">' +
          hours +
          '</span></div><div class="col-auto"><span class="avtar  avtar-xl">' +
          minutes +
          '</span></div><div class="col-auto"><span class="avtar  avtar-xl">' +
          seconds +
          '</span></div>';
        if (distance < 0) {
          clearInterval(x);
          document.getElementById('timer-block').innerHTML = 'Times over';
        }
      }, 1000);
    </script>
</body>
  <!-- [Body] end -->
</html>
