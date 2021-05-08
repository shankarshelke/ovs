
<!-- <div class="modal fade" id="verify-modal" tabindex="-1" role="dialog" aria-labelledby="verifyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verify-modal-label">Verification Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if(isset($isValid)){ ?>
        <form id="verifyOtpForm">
          <label class="text-dark">Enter Mobile or Mail OTP</label>
          <div class="input-group mb-4">
            <input type="hidden" class="form-control" value="<?php echo $editField;?>" name="editField" aria-label="">
            <input type="text" class="form-control <?php echo ($isValid) ? 'is-valid' : 'is-invalid';?>" value="" id="otp" name="otp" placeholder="Enter Otp" aria-label="">
            <div class="invalid-feedback"> Invalid OTP</div>
          </div>
        </form>
        <button type="button" class="btn btn-primary btn-pill saveBtn" data-form-id="verifyOtpForm" data-url="/user/verifyOtp">Verify OTP</button>
      <?php }else{ ?>
        <form id="editFieldForm">
          <label class="text-dark">Enter <?php echo $editField;?></label>
          <div class="input-group mb-4">
            <input type="text" class="form-control" value="" id="otp" name="<?php echo $editField;?>" placeholder="Enter <?php echo $editField;?>" aria-label="">
            <div class="invalid-feedback"> Invalid OTP</div>
          </div>
        </form>
        <button type="button" class="btn btn-primary btn-pill saveBtn" data-form-id="editFieldForm" data-url="/user/profile">Save Changes</button>
      <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-pill saveBtn" data-form-id="verifyOtpForm" data-url="/user/verifyOtp">Save Changes</button>
      </div>
    </div>
  </div>
</div> -->