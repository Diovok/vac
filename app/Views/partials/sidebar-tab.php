<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="dashboard-default" class="b-brand">
        <!-- ========   Change your logo from here   ============ -->
        <img src="<?= base_url('assets/images/vacilog.png') ?>" alt="" class="logo logo-lg" >
        <img src="<?= base_url('assets/images/vacilogo.png') ?>" alt="" class="logo logo-sm" >

      </a>
    </div>
    <div class="tab-container">
      <div class="tab-sidemenu">
        <ul class="pc-tab-link nav flex-column" role="tablist" id="pc-layout-submenus">
				</ul>
      </div>
      <div class="tab-link">
        <div class="navbar-content">
          <div class="tab-content" id="pc-layout-tab">
          </div>
          <ul class="pc-navbar">
            <?= $this->include('partials/menu-list') ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
