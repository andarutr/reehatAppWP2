<div class="row">
                        
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-book"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4><?= $artikel_count ?></h4> <span>Artikel Tersedia</span></div>
        </div>  
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-dollar-sign"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4><?= $payment_count ?></h4> <span>Check Pembayaran</span></div>
        </div>  
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4><?= $user_count ?></h4> <span>Pengguna Baru</span></div>
        </div>  
    </div>
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="dashboard_stats_wrap">
            <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-gem"></i></div></div>
            <div class="dashboard_stats_wrap_content"><h4><?= $webinar_count ?></h4> <span>Webinar Tersedia</span></div>
        </div>  
    </div>

</div>
<div class="row">

    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <h5>Webinar Terbaru</h5>                                        
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <?php foreach($new_webinars->result() as $webinar): ?>
                <div class="grousp_crs">
                    <a href="<?= base_url('assets/img/webinar'); ?>/<?= $webinar->thumbnail ?>" data-fancybox>
                        <img src="<?= base_url('assets/img/webinar'); ?>/<?= $webinar->thumbnail ?>" class="img-fluid mr-3" width="125" />
                    </a>
                    <div class="grousp_crs_left">
                        <div class="grousp_crs_caption"><h4><?= $webinar->title ?></h4><br><?= $webinar->mentor ?></div>
                    </div>
                    <div class="grousp_crs_right">
                        <div class="frt_but"><a href="#" class="btn text-white theme-bg">Lihat</a></div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h6>Pengguna Baru</h6>
            </div>
            <div class="ground-list ground-hover-list">
                <?php foreach($new_user->result() as $user): ?>
                <div class="ground ground-list-single">
                    <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                        <div class="position-absolute text-success h5 mb-0"><img src="<?= base_url('assets/img/account'); ?>/<?= $user->picture ?>" class="img-fluid circle" width="60"></div>
                    </div>

                    <div class="ground-content">
                        <h6><a href="#"><?= $user->full_name ?></a></h6>
                        <small class="text-fade">Pengguna Baru</small>
                        <span class="small">Bergabung pada <?= $user->created_at ?></span>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>      
    </div>

</div>