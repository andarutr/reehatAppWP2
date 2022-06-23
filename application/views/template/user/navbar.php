<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="<?= base_url('user/dashboard'); ?>">
                    <img src="<?= base_url('assets/img/reehat_logo.png'); ?>" class="logo" width="60" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li class="account-drop">
                            <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="embos_45"><i class="fas fa-shopping-basket"></i><i class="embose_count">1</i></span>
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr bg-purple">
                                    <h4>Wishlist Product</h4>
                                </div>
                                <div class="ground-list ground-hover-list">
                                    <div class="ground ground-list-single">
                                        <div class="grd_thum"><img src="/assets/img/webinar/webinar_1.png" class="img-fluid rounded" width="50" alt="" /></div>
                                        <div class="ground-content">
                                            <h6>Mengatasi Stress Akibat...<small class="float-right text-fade">85K</small></h6>
                                            <a href="#" class="small text-danger">Remove</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
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
                                            <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Admin</a></h6>
                                            <small class="text-fade">Selamat Datang di Aplikasi Reehat :)</small>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="btn-group account-drop">
                                <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="/assets/img/account/{{ Auth::user()->picture }}" class="avater-img" alt="">
                                </a>
                                <div class="dropdown-menu pull-right animated flipInX">
                                    <div class="drp_menu_headr">
                                        <h4>Hi, {{ Auth::user()->full_name }}</h4>
                                    </div>
                                    <ul>
                                        <li><a href="/user/my-profile"><i class="fas fa-address-card"></i>My Profile</a></li>
                                        <li><a href="/user/time-management"><i class="fas fa-layer-group"></i>Time Management</a></li>
                                        <li><a href="/user/webinar"><i class="fas fa-gem"></i>Webinar</a></li>
                                        <li><a href="/user/artikel"><i class="fas fa-book"></i>Artikel</a></li>
                                        <li><a href="/auth/logout"><i class="fa fa-unlock-alt"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                
                <ul class="nav-menu nav-menu-social align-to-right">
                    
                    <li class="account-drop">
                        <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="embos_45"><i class="fas fa-shopping-basket"></i><i class="embose_count">0</i></span>
                        </a>
                        <div class="dropdown-menu pull-right animated flipInX">
                            <div class="drp_menu_headr bg-purple">
                                <h4>Pembayaran</h4>
                            </div>
                            <!-- Foreach Payment -->
                            <div class="ground-list ground-hover-list">
                                <div class="ground ground-list-single">
                                    <div class="ground-content">
                                        <h6>-</h6>
                                        <small>Rp-</small>
                                        <a href="<?= base_url('user/pembayaran'); ?>" class="text-success">Bayar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Foreach -->
                        </div>
                    </li>
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
                                        <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                                    </div>

                                    <div class="ground-content">
                                        <h6><a href="#">Admin</a></h6>
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
                                <img src="<?= base_url('assets/img/account/melda.jpeg'); ?>" class="avater-img" alt="">
                            </a>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr">
                                    <h4>Hi, Melda Yusnita</h4>
                                </div>
                                <ul>
                                    <li><a href="<?= base_url('user/my-profile'); ?>"><i class="fas fa-address-card"></i>My Profile</a></li>
                                    <li><a href="<?= base_url('user/time-management'); ?>"><i class="fas fa-layer-group"></i>Time Management</a></li>
                                    <li><a href="<?= base_url('user/webinar'); ?>"><i class="fas fa-gem"></i>Webinar</a></li>
                                    <li><a href="<?= base_url('user/artikel'); ?>"><i class="fas fa-book"></i>Artikel</a></li>
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