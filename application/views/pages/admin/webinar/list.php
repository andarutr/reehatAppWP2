<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <?= $this->session->flashdata('webinar_msg'); ?>
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
                                <?php foreach($webinars->result() as $webinar): ?>
                                <tr>
                                    <td><a href="<?= base_url('assets/img/webinar'); ?>/<?= $webinar->thumbnail ?>" data-fancybox><img src="<?= base_url('assets/img/webinar'); ?>/<?= $webinar->thumbnail ?>" class="img-fluid" width="80" alt="" /></a></td>
                                    <td><div class="smalls lg"><?= $webinar->title ?></div></td>
                                    <td><div class="smalls lg"><?= $webinar->mentor ?></div></td>
                                    <td><span class="smalls lg"><?= $webinar->updated_at ?></span></td>
                                    <td><span class="smalls lg"><?= $webinar->created_at ?></span></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('admin/webinar/edit'); ?>/<?= $webinar->id ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('admin/webinar/delete'); ?>/<?= $webinar->id ?>" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
    </div>
</div>