<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="<?= base_url('admin/dashboard'); ?>">
                    <img src="<?= base_url('assets/img/reehat_logo.png'); ?>" class="logo" width="60" />
                </a>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                
                <ul class="nav-menu nav-menu-social align-to-right">
                    <li class="account-drop">
                        <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">1</i></span>
                        </a>
                        <div class="dropdown-menu pull-right animated flipInX">
                            <div class="drp_menu_headr bg-warning">
                                <h4>1 Notifications</h4>
                            </div>
                            <div class="ground-list ground-hover-list">
                                <div class="ground ground-list-single">
                                    <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-admin"></i></div>
                                    </div>

                                    <div class="ground-content">
                                        <h6><a href="#"><?= $user['full_name']; ?></a></h6>
                                        <small class="text-fade">Selamat datang di aplikasi Reehat :)</small>
                                        <span class="small">Just Now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group account-drop">
                            <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url('assets/img/account'); ?>/<?= $user['picture']; ?>" class="avater-img" alt="">
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr">
                                    <h4>Hi, <?= $user['full_name']; ?></h4>
                                </div>
                                <ul>
                                    <li><a href="<?= base_url('admin/my-profile'); ?>"><i class="fas fa-address-card"></i>My Profile</a></li>
                                    <li><a href="<?= base_url('admin/webinar'); ?>"><i class="fas fa-gem"></i>Webinar</a></li>
                                    <li><a href="<?= base_url('admin/artikel'); ?>"><i class="fas fa-book"></i>Artikel</a></li>
                                    <li><a href="<?= base_url('admin/pembayaran'); ?>"><i class="fas fa-dollar-sign"></i>Check Pembayaran</a></li>
                                    <li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-unlock-alt"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>