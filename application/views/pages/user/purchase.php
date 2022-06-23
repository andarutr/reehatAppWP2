<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Produk yang telah dibeli</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Webinar</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Dipesan pada</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach Webinar -->
                                <tr>
                                    <td><div class="smalls lg">Mengatasi Stress Akibat Tekanan Kerja</div></td>
                                    <td><span class="smalls lg">Rp85.000,-</span></td>
                                    <td><span class="smalls lg">22 Juni 2022</span></td>
                                    <td><span class="smalls lg">
                                        <a href="" class="badge badge-success">Sudah Bayar</a>
                                    </span></td>
                                    <td>
                                        <a href="<?= base_url('user/webinar/detail'); ?>" class="btn btn-sm btn-primary">Lihat</a>
                                    </td>
                                </tr>
                                <!-- End Foreach -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
