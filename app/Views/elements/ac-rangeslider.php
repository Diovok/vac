<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <?= $this->include('partials/head-page-meta') ?>
    <!-- [Page specific CSS] start -->
    <!-- rangeslider css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/bootstrap-slider.min.css') ?>" >
    <!-- [Page specific CSS] start -->
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
            <!-- [ rangeslider ] start -->
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Basic example with custom formatter and colored selected region via CSS.</h6>
                  <hr>
                  <input id="ex1" data-slider-id="ex1Slider" type="text" data-slider-min="0" data-slider-max="20"
                    data-slider-step="1" data-slider-value="14">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Range selector, options specified via data attribute.</h6>
                  <hr> Filter by price interval: <b>€ 10</b>
                  <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000"
                    data-slider-step="5" data-slider-value="[250,450]">
                  <b>€ 1000</b>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Sliders can be enabled and disabled.</h6>
                  <hr>
                  <input id="ex7" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1"
                    data-slider-value="5" data-slider-enabled="false">
                  <input id="ex7-enabled" type="checkbox"> Enabled
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using events to work with the values and style the selection and handles via CSS.</h6>
                  <hr>
                  <p><b>R</b>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255"
                      data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide"
                      data-slider-handle="square">
                  </p>
                  <p><b>G</b>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255"
                      data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide"
                      data-slider-handle="round">
                  </p>
                  <p><b>B</b>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255"
                      data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide"
                      data-slider-handle="triangle">
                  </p>
                  <div id="RGB"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Vertical slider with reversed values (largest to smallest).</h6>
                  <hr>
                  <input id="ex4" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                    data-slider-value="-3" data-slider-orientation="vertical">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Unusual tooltip positions</h6>
                  <hr>
                  <input id="ex17a" type="text">
                  <input id="ex17b" type="text">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Destroy instance of slider by calling <code>destroy()</code> method on slider instance via
                    JavaScript.</h6>
                  <hr>
                  <input id="ex5" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                    data-slider-value="0">
                  <button id="destroyEx5Slider" class="btn btn-danger mt-2">Click to Destroy</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Able to bind to 'slide' JQuery event on slider, which is triggered whenever the slider is used.
                  </h6>
                  <hr>
                  <input id="ex6" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                    data-slider-value="3">
                  <span id="ex6CurrentSliderValLabel">Current Slider Value: <span id="ex6SliderVal">3</span></span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Tooltip can always be displayed.</h6>
                  <hr>
                  <input id="ex8" data-slider-id="ex1Slider" type="text" data-slider-min="0" data-slider-max="20"
                    data-slider-step="1" data-slider-value="14">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Precision (number of places after the decimal) can be specified.</h6>
                  <hr>
                  <input id="ex9" type="text">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Setting custom handlers.</h6>
                  <hr>
                  <input id="ex10" type="text" data-slider-handle="custom">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using a custom step interval.</h6>
                  <hr>
                  <input id="ex11" type="text" data-slider-handle="custom">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Coloring the low and high track segments.</h6>
                  <hr>
                  <input id="ex12a" type="text">
                  <br>
                  Note that there is no low track on the single-value slider. The area to lesser than the value of the
                  handle is the
                  selection.
                  <br>
                  <input id="ex12b" type="text">
                  <br>
                  <input id="ex12c" type="text">
                  <br>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using tick marks and labels.</h6>
                  <hr>
                  <input id="ex13" type="text" data-slider-ticks="[0, 100, 200, 300, 400]"
                    data-slider-ticks-snap-bounds="30"
                    data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]'>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using tick marks at specific positions.</h6>
                  <hr>
                  <input id="ex14" type="text" data-slider-ticks="[0, 10, 20, 30, 40]"
                    data-slider-ticks-snap-bounds="95" data-slider-ticks-labels='["$0", "$10", "$20", "$30", "$40"]'
                    data-ticks_positions="[0, 30, 60, 70, 90, 100]">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>With a logarithmic scale.</h6>
                  <hr>
                  <input id="ex15" type="text" data-slider-min="1000" data-slider-max="10000000" data-slider-step="5">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Focus the slider handle after a value change.</h6>
                  <hr>
                  <input id="ex16a" type="text">
                  <br>
                  <input id="ex16b" type="text">
                  <br>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Accessibility with ARIA labels</h6>
                  <hr>
                  <span id="ex18-label-1" class="hidden">Example slider label</span>
                  <input id="ex18a" type="text">
                  <div class="mt-3">
                    <span id="ex18-label-2a" class="hidden">Example low value</span>
                    <span id="ex18-label-2b" class="hidden">Example high value</span>
                    <input id="ex18b" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Highlight ranges on slider with rangeHighlights attribute 14</h6>
                  <hr>
                  <input id="ex22" type="text" data-slider-id="slider22" data-slider-min="0" data-slider-max="20"
                    data-slider-step="1" data-slider-value="14" data-slider-rangeHighlights='[{ "start": 2, "end": 5, "class": "category1" },
                                               { "start": 7, "end": 8, "class": "category2" },
                                               { "start": 17, "end": 19 },
                                               { "start": 17, "end": 24 }, //not visible -  out of slider range
                                               { "start": -3, "end": 19 }]'>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using tick marks at specific positions..</h6>
                  <hr>
                  <input id="ex23" type="text" data-slider-ticks="[0, 1, 2, 3, 4]" data-slider-step="0.01"
                    data-slider-ticks-snap-bounds="200" data-slider-ticks-tooltip="true"
                    data-ticks_positions="[0, 30, 60, 70, 90, 100]">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Rtl mode (auto)</h6>
                  <hr>
                  <div class="well" dir="rtl">
                    <span>-5</span>
                    <input id="ex24" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                      data-slider-value="14">
                    <span>20</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ rangeslider ] end -->
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
<!-- range slider Js -->
<script src="<?= base_url('assets/js/plugins/bootstrap-slider.min.js') ?>"></script>
<script src="<?= base_url('assets/js/pages/ac-rangeslider.js') ?>"></script>
<!-- [Page Specific JS] end -->
<?= $this->include('partials/customizer.php') ?>
</body>


</html>