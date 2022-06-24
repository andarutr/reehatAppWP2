<div class="row">
    <div class="col-xl-7 col-lg-6 col-md-12">
        <div class="dashboard_wrap">
            <?= $this->session->flashdata('error_msg'); ?>
            <?= $this->session->flashdata('success_msg'); ?>
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Update Profile</h6>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <form action="<?= base_url('admin/my-profile-backend'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group smalls">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="full_name" placeholder="<?= $user['full_name']; ?>">
                            <?= form_error('full_name','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group smalls">
                            <label>Email</label>
                            <input type="text" class="form-control" value="<?= $user['email']; ?>" disabled>
                        </div>
                        <div class="form-group smalls">
                            <label>Foto (Opsional)</label>
                            <input type="file" class="form-control" name="picture">
                        </div>
                        <div class="form-group smalls">
                            <button type="submit" class="btn theme-bg text-white" type="button">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="col-xl-5 col-lg-6 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <?= $this->session->flashdata('change_password_failed'); ?>
                    <?= $this->session->flashdata('success_password'); ?>
                    <form action="<?= base_url('admin/ganti-password'); ?>" method="POST">
                        <div class="form-group smalls">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" name="old_password">
                            <?= form_error('old_password','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group smalls">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" name="new_password">
                            <?= form_error('new_password','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group smalls">
                            <button type="submit" class="btn theme-bg text-white" type="button">Ganti Password</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
</div>