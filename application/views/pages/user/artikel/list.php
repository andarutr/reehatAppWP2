<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="form-group smalls">
                        <h6 class="m-0">Kumpulan Artikel</h6>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Foreach Artikel -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="th_sety">
                        <div class="th_sety_thumb">
                            <a href="<?= base_url('user/artikel/detail'); ?>">
                                <img src="<?= base_url('assets/img/artikel/artikel_1.jpg'); ?>" class="img-fluid rounded" alt="" />
                            </a>
                        </div>
                        <div class="th_sety_caption">
                            <h5><a href="<?= base_url('user/artikel/detail'); ?>">Teknik Belajar Dengan Pomodoro</a></h5>
                            <p>12 Maret 2022</p>
                            <a href="<?= base_url('user/artikel/detail'); ?>" class="them_sct active mt-4 mb-2"><i class="fas fa-book mr-1"></i>Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- End Foreach -->
            </div>
        </div>
        <!-- Pagination -->
    </div>
</div>
