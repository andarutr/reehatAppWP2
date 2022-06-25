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
                                <?php foreach($time_managements->result() as $time_management): ?>
                                <tr>
                                    <td><div class="smalls lg"><?= $aplikasi ?></div></td>
                                    <td><span class="smalls lg"><?= $time_management->batas_penggunaan ?></span></td>
                                    <td><span class="smalls lg"><?= $time_management->periode ?></span></td>
                                    <td><span class="smalls lg"><?= $time_management->updated_at ?></span></td>
                                    <td><span class="smalls lg"><?= $time_management->created_at ?></span></td>
                                    <td>
                                        <a href="<?= base_url('user/time-management/delete'); ?>/<?= $time_management->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
