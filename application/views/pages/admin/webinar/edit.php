<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="form_blocs_wrap">
                <form action="<?= base_url('admin/webinar/edit-backend'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row justify-content-between">
                        <div class="col-lg-12 col-md-7 col-sm-12">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" name="title">
                                        <!-- Validation Title -->
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Pembicara</label>
                                        <input type="text" class="form-control" name="mentor">
                                        <!-- Validation Mentor -->
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" name="cost">
                                        <!-- Validation Harga -->
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Video URL</label>
                                        <input type="text" class="form-control" name="video_url">
                                        <!-- Validation Video Url -->
                                    </div>

                                    <div class="form-group smalls">
                                        <label>Description</label>
                                        <textarea class="summernote" name="description"></textarea>
                                        <!-- Validation Description -->
                                    </div>

                                    <div class="form-group smalls">
                                        <label>Thumbnail</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="customFile" name="thumbnail">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                          <!-- Validation Thumbnail -->
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