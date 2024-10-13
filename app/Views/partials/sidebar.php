<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="<?php base_url("/")?>" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="<?= base_url('assets/images/vacilogo.png') ?>"alt="logo"  class="img-fluid logo-lg">
        <span class="badge bg-light-success rounded-pill ms-2 theme-version"><?= VERSION ?></span>
      </a>
    </div>
    
    <div class="navbar-content">          
      <ul class="pc-navbar">
        <?= $this->include('partials/menu-list') ?>
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
