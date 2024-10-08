<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/style.css') ?>" >
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
        <?= $this->include('partials/component/component-link') ?>
      <div class="row">
        <!-- [ Dynamic Import ] start -->
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h5>Dynamic Import</h5>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table" id="pc-dt-dynamic-import"> </table>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Dynamic Import ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
    </div>
    <!-- [ Main Content ] end -->
  <?= $this->include('partials/footer-block') ?>
  <?= $this->include('partials/footer-js') ?>
  <script type="module">
    import {
      DataTable,
      convertCSV
    } from "<?= base_url('assets/js/plugins/module.js') ?>"
    const dataTable = new DataTable("#pc-dt-dynamic-import")
    const convertedData = convertCSV({
      type: "csv",
      data:"Name,Ext.,City,Start Date|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07",
      headings: true,
      columnDelimiter: ",",
      lineDelimiter: "|"
    })
    dataTable.insert(convertedData)
  </script>
  <!-- [Page Specific JS] end -->
  <?= $this->include('partials/customizer.php') ?>
</body>
  <!-- [Body] end -->
</html>
