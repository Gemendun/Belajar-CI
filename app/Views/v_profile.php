<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section profile">
    <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                    
                    <h5 class="card-title" style="border-bottom: 1px solid #ebeef4; padding-bottom: 15px; margin-bottom: 15px;">Profile</h5>

                    <div class="profile-overview">
                        <h5 class="card-title" style="font-size: 16px; color: #012970; margin-top: 0;">Profile Information</h5>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Username</div>
                            <div class="col-lg-9 col-md-8"><?= esc($username) ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Role</div>
                            <div class="col-lg-9 col-md-8">
                                <span class="badge bg-danger"><?= esc($role) ?></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Email</div>
                            <div class="col-lg-9 col-md-8 text-primary"><?= esc($email) ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Login Time</div>
                            <div class="col-lg-9 col-md-8"><?= esc($login_time) ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Status</div>
                            <div class="col-lg-9 col-md-8">
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i> Sudah Login
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>