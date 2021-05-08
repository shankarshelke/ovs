<!-- Choose New & Previous File -->
<div class="content">		
    <div class="row">
        <div class="card col-md-12">
            <div class="card-header card-header-border-bottom">
                <h2>Select Profile</h2>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="gallary-tab" data-toggle="tab" href="#gallary" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent1">
                    <div class="tab-pane pt-3 fade show active" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                        <div class="row">
                            <div class="col-md-12 widget-block">
                                <form method="post" action="#" id="#">
                                    <div class="form-group files color">
                                        <label>Upload Your File </label>
                                        <input type="file" class="form-control" name="upload_image" id="upload_image" accept="image/*">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane pt-3 fade" id="gallary" role="tabpanel" aria-labelledby="gallary-tab">
                        <div id="preview">
                            <?php echo (isset($filesDataHtml)) ? $filesDataHtml : "";?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Crop & Upload Modal -->


<div id="crop-upload-image-modal" class="modal" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Crop & Upload Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="text-center">
            <div id="image_demo"></div>
            
            <button class="btn btn-success crop_image">Crop & Upload Image</button>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
