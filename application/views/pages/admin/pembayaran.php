<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Pembayaran</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Pesanan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach Payment -->
                                <tr>
                                    <td>
                                        <a href="<?= base_url('assets/img/account/melda.jpeg'); ?>" data-fancybox>
                                            <img src="<?= base_url('assets/img/account/melda.jpeg'); ?>" class="img-fluid" width="60" alt="" />
                                        </a>
                                    </td>
                                    <td><div class="smalls lg">Melda Yusnita</div></td>
                                    <td><div class="smalls lg">Mengatasi Stress Akibat Tekanan Kerja</div></td>
                                    <td><span class="smalls lg">Rp85.000,-</span></td>
                                    <td><span class="smalls lg">Belum Bayar</span></td>
                                    <td><span class="smalls lg">22 Juni 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('admin/pembayaran/delete/id'); ?>" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
                                            </div>
                                        </div>
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