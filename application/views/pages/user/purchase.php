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
                                <?php foreach($purchase->result() as $prch): ?>
                                <tr>
                                    <td><div class="smalls lg"><?= $prch->webinar ?></div></td>
                                    <td><span class="smalls lg">Rp<?= number_format($prch->cost,2,',','.'); ?></span></td>
                                    <td><span class="smalls lg"><?= $prch->created_at ?></span></td>
                                    <td><span class="smalls lg">
                                        <?php if($prch->status == 'Sudah Bayar'): ?>
                                        <a href="" class="badge badge-success"><?= $prch->status ?></a>
                                        <?php else: ?>
                                        <a href="" class="badge badge-danger"><?= $prch->status ?></a>
                                        <?php endif ?>
                                    </span></td>
                                    <td>
                                        <?php if($prch->status == 'Sudah Bayar'): ?>
                                        <a href="<?= base_url('user/webinar'); ?>/<?= $prch->url ?>" class="btn btn-sm btn-primary">Lihat</a>
                                        <?php else: ?>
                                        -
                                        <?php endif ?>
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
