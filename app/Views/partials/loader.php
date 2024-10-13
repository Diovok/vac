    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    

    <script>
  document.addEventListener('DOMContentLoaded', function() {
    <?php if (session()->get('forcePasswordChange')) : ?>
      var myModal = new bootstrap.Modal(document.getElementById('changePasswordModal'), {});
      myModal.show();
    <?php endif; ?>
  });
</script>

<!--

NOTI MEGJELENÍT

-->
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Ellenőrzés, hogy van-e sikeres üzenet a session-ben
    <?php if (session()->getFlashdata('success')) : ?>
      notifier.show('Siker!', '<?= session()->getFlashdata('success') ?>', 'success', '<?= base_url("assets/images/notification/ok-48.png") ?>', 5000);
    <?php endif; ?>
    
    // További flash üzenetek kezelése, például hibák vagy infók
    <?php if (session()->getFlashdata('error')) : ?>
      notifier.show('Hiba!', '<?= session()->getFlashdata('error') ?>', 'danger', '<?= base_url("assets/images/notification/high_priority-48.png") ?>', 5000);
    <?php endif; ?>

    <?php if (session()->getFlashdata('info')) : ?>
      notifier.show('Infó!', '<?= session()->getFlashdata('info') ?>', 'info', '<?= base_url("assets/images/notification/survey-48.png") ?>', 5000);
    <?php endif; ?>
  });
</script>
    <!-- Modal ablak -->
<div class="modal fade" id="changePasswordModal" tabindex="2" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changePasswordModalLabel"><i data-feather="lock" class="icon-svg-primary wid-20 me-2"></i>Jelszó megváltoztatása</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
      </div>
      <form method="post" action="<?= base_url('/change_password') ?>">
      <input type="hidden" name="redirect_url" value="<?= current_url() ?>">  

        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Jelenlegi jelszó</label>
            <input type="password" class="form-control" id="currentPasswordChp" name="current_password" placeholder="Adja meg a jelenlegi jelszavát" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Új jelszó</label>
            <input type="password" class="form-control" id="newPasswordChp" name="new_password" placeholder="Adja meg az új jelszót" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Új jelszó megerősítése</label>
            <input type="password" class="form-control" id="confirmNewPasswordChp" name="confirm_new_password" placeholder="Erősítse meg az új jelszót" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Bezárás</button>
          <button type="submit" class="btn btn-light-primary">Jelszó megváltoztatása</button>
        </div>
      </form>
    </div>
  </div>
</div>
    <!-- [ Pre-loader ] End -->