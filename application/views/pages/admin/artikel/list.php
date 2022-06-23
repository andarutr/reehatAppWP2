<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Artikel <a href="<?= base_url('admin/artikel/create'); ?>" class="badge badge-primary">Tambah Data</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Diperbarui</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach Artikel -->
                                <tr>
                                    <td><a href="<?= base_url('assets/img/artikel/artikel_1.jpg'); ?>" data-fancybox><img src="<?= base_url('assets/img/artikel/artikel_1.jpg'); ?>" class="img-fluid" width="80" alt="" /></a></td>
                                    <td><div class="smalls lg">Teknik Belajar Dengan Pomodoro</div></td>
                                    <td><span class="smalls lg">12 Maret 2022</span></td>
                                    <td><span class="smalls lg">12 Maret 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('admin/artikel/edit/id'); ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('admin/artikel/delete/id'); ?>" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
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
        <!-- Pagination -->
    </div>
</div>