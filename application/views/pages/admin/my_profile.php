<div class="row">
    <div class="col-xl-7 col-lg-6 col-md-12">
        <div class="dashboard_wrap">
            
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
                            <input type="text" class="form-control" name="full_name">
                            <!-- Validation Full Name -->
                        </div>
                        <div class="form-group smalls">
                            <label>Email</label>
                            <input type="text" class="form-control" value="Email Admin" disabled>
                        </div>
                        <div class="form-group smalls">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" />
                            <!-- Validation Password -->
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
                    <form action="<?= base_url('admin/ganti-password'); ?>" method="POST">@csrf
                        <div class="form-group smalls">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" name="password_old">
                            <!-- Validation Password -->
                        </div>
                        <div class="form-group smalls">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" name="password_new">
                            <!-- Validation Password -->
                        </div>
                        <div class="form-group smalls">
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirm">
                            <!-- Validation Password -->
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