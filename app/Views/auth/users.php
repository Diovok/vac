<!DOCTYPE html>
<html lang="hu">
  <!-- [Fej] kezdete -->
  <head>
    
    <?= $this->include('partials/head-page-meta') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/style.css') ?>">
    <?= $this->include('partials/head-css') ?>
    
  </head>
  <!-- [Fej] vége -->
  <!-- [Törzs] kezdete -->
  
  <body <?= BODY_SETUP ?>>

    <!-- Függőleges elrendezés betöltése -->
    <?= $this->include('partials/layout-vertical') ?>

    <!-- [Fő tartalom] kezdete -->
    <div class="pc-container">
      <div class="pc-content">
        <?= $this->include('partials/breadcrumb') ?>

        


        <!-- [Fő tartalom] kezdete -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow-none">
              <div class="card-header">
                <h5>Felhasználók</h5>
                <div class="card-header-right">
                  <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Új felhasználó
                  </button>
                  
                  <!-- Modal ablak -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Felhasználó hozzáadása</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                        </div>
                        <form method="post" action="<?= base_url('/admin/add_user') ?>">
                            <div class="modal-body">
                                <div class="mb-3">
                                <label class="form-label">Felhasználónév</label>
                                <input type="text" class="form-control" id="usernameInput" name="username" placeholder="Adja meg a felhasználónevét" required>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Adja meg az e-mail címét" required>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Teljes név</label>
                                <input type="text" class="form-control" id="fullnameInput" name="fullname" placeholder="Adja meg a teljes nevét" required>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Jelszó</label>
                                <input type="password" class="form-control" id="passwd" name="password" placeholder="Adja meg a jelszót" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Bezárás</button>
                                <button type="submit" class="btn btn-light-primary">Változások mentése</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body shadow border-0">
                    <div class="table-responsive">
                        <table id="report-table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Név</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Státusz</th>
                                    <th class="border-top-0">Utolsó belépés</th>
                                    <th class="border-top-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($users) && is_array($users)): ?>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td><?= esc($user['fullname']) ?></td>
                                            <td><a href="mailto:<?= esc($user['email']) ?>" class="link-secondary"><?= esc($user['email']) ?></a></td>
                                            <td><?= esc($user['status']) ?></td>
                                            <td><?= !empty($user['last_login']) ? date('Y. F j, H:i', strtotime($user['last_login'])) : 'N/A' ?></td>
                                            <td>
                                              <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>

                                              <?php if ($user['status'] === 'active'): ?>
                                              <!-- Inaktiváló gomb, ha a felhasználó aktív -->
                                              <a href="<?= base_url('admin/user/deactivate/' . $user['id']) ?>" class="btn btn-sm btn-light-danger">
                                                <i class="feather icon-trash-2"></i> Inaktiválás
                                              </a>
                                              <?php else: ?>
                                                <!-- Aktiváló gomb, ha a felhasználó nem aktív -->
                                                <a href="<?= base_url('admin/user/activate/' . $user['id']) ?>" class="btn btn-sm btn-light-success">
                                                  <i class="feather icon-check"></i> Aktiválás
                                                </a>
                                              <?php endif; ?>                                                                      
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" class="text-center">Nincsenek felhasználók.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
          </div>
        </div>
        <!-- [Fő tartalom] vége -->
      </div>
    </div>

    <!-- [Lábléc] kezdete -->
    <?= $this->include('partials/footer-block') ?>
    <?= $this->include('partials/customizer.php') ?>
    <?= $this->include('partials/footer-js') ?>

        


    
    <!-- [Oldalspecifikus JS] kezdete -->
    <script type="module">
      import { DataTable } from "<?= base_url('assets/js/plugins/module.js') ?>"
      window.dt = new DataTable("#report-table");
    </script>
    <!-- [Oldalspecifikus JS] vége -->
    
  </body>
  <!-- [Törzs] vége -->
</html>
