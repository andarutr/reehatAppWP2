<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="form_blocs_wrap">
                <form action="<?= base_url('admin/webinar/edit-backend'); ?>/<?= $webinar['id']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row justify-content-between">
                        <div class="col-lg-12 col-md-7 col-sm-12">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" name="title" value="<?= $webinar['title']; ?>">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Pembicara</label>
                                        <input type="text" class="form-control" name="mentor" value="<?= $webinar['mentor']; ?>">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" name="cost" value="<?= $webinar['cost']; ?>">
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Video URL</label>
                                        <input type="text" class="form-control" name="video_url" value="<?= $webinar['video_url']; ?>">
                                    </div>

                                    <div class="form-group smalls">
                                        <label>Description</label>
                                        <textarea class="summernote" name="description"><?= $webinar['description']; ?></textarea>
                                    </div>

                                    <div class="form-group smalls">
                                        <label>Thumbnail</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="customFile" name="thumbnail">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-success">Edit</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>