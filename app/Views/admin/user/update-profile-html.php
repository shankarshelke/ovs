<div class="card mb-4 mt-4">
  <div class="card-body">
    <?php if(isset($verifyOtp)){ ?>
      <form id="verifyOtpForm">
        <label class="text-dark">Enter OTP</label>
        <div class="input-group mb-4">
          <input type="hidden" class="form-control" value="<?php echo $editField;?>" name="editField" aria-label="">
          <input type="text" class="form-control <?php echo ($verifyOtp) ? 'is-valid' : 'is-invalid';?>" value="" id="otp" name="otp" placeholder="Enter Otp" aria-label="">
          <!-- <button class="input-group-prepend saveBtn" data-form-id="verifyOtpForm" data-url="/user/verifyOtp">
            <span class="input-group-text">
              Verify OTP
            </span>
          </button> -->
          <div class="invalid-feedback"> Invalid OTP</div>
        </div>
      </form>
      <button type="button" class="btn btn-primary btn-pill saveBtn" data-url="/user/profile">Cancel</button>
      <button type="button" class="btn btn-primary btn-pill saveBtn" data-form-id="verifyOtpForm" data-url="/user/verifyOtp">Verify OTP</button>
    <?php }else{ ?>
      <form id="editFieldForm">
        <label class="text-dark">Enter New <?php echo $editField;?></label>
        <div class="input-group mb-4">
          <input type="hidden" class="form-control" value="<?php echo $editField;?>" name="editField" aria-label="">
          <?php if($editField != "username"){?>
            <input type="hidden" class="form-control" value="<?php echo $editField;?>" name="sendOtp" aria-label="">
          <?php }?>
          <input type="text" class="form-control <?php echo (form_error($editField)) ? 'is-invalid' : 'is-valid';?>" value="<?php echo set_value($editField);?>" id="otp" name="<?php echo $editField;?>" placeholder="Enter New <?php echo $editField;?>" aria-label="">
          <!-- <button class="input-group-prepend saveBtn" data-form-id="verifyOtpForm" data-url="/user/verifyOtp">
            <span class="input-group-text">
              Verify OTP
            </span>
          </button> -->
          <div class="invalid-feedback"> <?php echo form_error($editField);?> </div>
        </div>
      </form>
      <button type="button" class="btn btn-primary btn-pill saveBtn" data-url="/user/profile">Cancel</button>
      <button type="button" class="btn btn-primary btn-pill <?php echo ($editField != "username") ? 'sendVerifyCode' : 'saveBtn';?>" data-form-id="editFieldForm" data-url="<?php echo ($editField != "username") ? '/user/sendEmailText' : '/user/profile';?>">Send Otp New <?php echo $editField;?></button>
    <?php } ?>
  </div>
</div>