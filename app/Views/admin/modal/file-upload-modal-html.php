
<div class="modal fade" id="file-upload-modal" tabindex="-1" role="dialog" aria-labelledby="verifyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verify-modal-label">Verification Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class='content'>
          <!-- Dropzone -->
          <form action="<?php echo base_url('index.php/user/fileUpload'); ?>" class="dropzone" id="fileupload">
          </form> 
        </div> 
      </div>
    </div>
  </div>
</div>