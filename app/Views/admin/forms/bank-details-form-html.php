
<form id="bank-details-form" class="mb-2">
    <?php if(!isset($bank_details['id'])) {?>
        <input type="hidden" value="3" name="groups" placeholder="customer registration groups id;">
    <?php }?>
    <input type="hidden" value="vendor" name="userFileType" placeholder="customer file type;">
    <input type="hidden" value="<?php echo (isset($bank_details['id'])) ? $bank_details['id'] : set_value('id');?>" name="id" placeholder="user id;">
    <input type="hidden" value="<?php echo (isset($bank_details['qr_code_path'])) ? $bank_details['qr_code_path'] : set_value('qr_code_path');?>" name="qr_code_path" placeholder="user id;">
   
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">Account Number</label>
            <input type="text" class="info form-control" placeholder="Account Number" value="<?php echo (isset($bank_details['acc_no'])) ? $bank_details['acc_no'] : set_value('acc_no'); ?>" name="acc_no">
            <div class="text-danger"><?php echo form_error('acc_no'); ?></div>
        </div>
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">Account Holder Name</label>
            <input type="text" class="info form-control" placeholder="Account Holder Name" value="<?php echo (isset($bank_details['acc_holder_name'])) ? $bank_details['acc_holder_name'] : set_value('acc_holder_name'); ?>" name="acc_holder_name">
            <div class="text-danger"><?php echo form_error('acc_holder_name'); ?></div>
        </div>
    </div>
                
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">Bank Name</label>
            <input type="text" class="form-control" class="info" placeholder="Bank Name"
                value="<?php echo (isset($bank_details['bank_name'])) ? $bank_details['bank_name'] :  set_value('bank_name'); ?>" name="bank_name">
            <div class="text-danger"><?php echo form_error('bank_name'); ?></div>
        </div>
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">Branch Name</label>
            <input type="text" class="form-control" class="info" placeholder="Branch Name"
                value="<?php echo (isset($bank_details['branch_name'])) ? $bank_details['branch_name'] :  set_value('branch_name'); ?>" name="branch_name">
            <div class="text-danger"><?php echo form_error('branch_name'); ?></div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">Branch Code</label>
            <input type="text" class="info form-control" placeholder="Branch Code" value="<?php echo  (isset($bank_details['branch_code'])) ? $bank_details['branch_code'] : set_value('branch_code'); ?>"
                name="branch_code">
            <div class="text-danger"><?php echo form_error('branch_code'); ?></div>
        </div>
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">IFSC code</label>
            <input type="text" class="info form-control" placeholder="IFSC Code" value="<?php echo (isset($bank_details['ifsc_code'])) ? $bank_details['ifsc_code'] :  set_value('ifsc_code'); ?>"
                name="ifsc_code">
            <div class="text-danger"><?php echo form_error('ifsc_code'); ?></div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">UPI (Optional)</label>
            <input type="text" class="info form-control" placeholder="UPI" value="<?php echo (isset($bank_details['upi_id'])) ? $bank_details['upi_id'] :  set_value('upi_id'); ?>"
                name="upi_id">
        </div>
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">QR Code (Optional)</label>
            <input type="file" class="info form-control" name="file">
        </div>
    </div>
    <div class="input-box mb-20">
        <button type="button" data-url="bank/addBank" data-form-id="bank-details-form" class="btn btn-outline-info saveImgForm">Submit</button>
    </div>
</form>