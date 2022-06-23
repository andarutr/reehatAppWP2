<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                    <h6 class="m-0">Webinar <a href="<?= base_url('admin/webinar/create'); ?>" class="badge badge-primary">Tambah Data</a></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                    <div class="table-responsive">
                        <table class="table dash_list">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Webinar</th>
                                    <th scope="col">Pembicara</th>
                                    <th scope="col">Diperbarui</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Foreach Webinar -->
                                <tr>
                                    <td><a href="<?= base_url('assets/img/webinar/webinar_1.png'); ?>" data-fancybox><img src="<?= base_url('assets/img/webinar/webinar_1.png'); ?>" class="img-fluid" width="80" alt="" /></a></td>
                                    <td><div class="smalls lg">Mengatasi Stress Akibat Tekanan Kerja</div></td>
                                    <td><div class="smalls lg">Unknown</div></td>
                                    <td><span class="smalls lg">22 Juni 2022</span></td>
                                    <td><span class="smalls lg">22 Juni 2022</span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('admin/webinar/edit/id'); ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('admin/webinar/delete/id'); ?>" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
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