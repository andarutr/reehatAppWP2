<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Time Management Instagram <a href="<?= base_url('user/time-management/create'); ?>" class="badge badge-primary">Tambah Data</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Aplikasi</th>
                                    <th scope="col">Batas Penggunaan</th>
                                    <th scope="col">Periode</th>
                                    <th scope="col">Data Diperbarui</th>
                                    <th scope="col">Data Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach Time Management -->
                                <tr>
                                    <td><div class="smalls lg">Instagram</div></td>
                                    <td><span class="smalls lg">3 Jam</span></td>
                                    <td><span class="smalls lg">Juni - Juli</span></td>
                                    <td><span class="smalls lg">22 Juni 2022</span></td>
                                    <td><span class="smalls lg">22 Juni 2022</span></td>
                                    <td>
                                        <a href="<?= base_url('user/time-management/delete/id'); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash"></i></a>
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
