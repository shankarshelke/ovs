
<form id="create-vendor-form" class="mb-2">
    <?php if(!isset($vendor_details['id'])) {?>
        <input type="hidden" value="3" name="groups" placeholder="customer registration groups id;">
    <?php }?>
    <input type="hidden" value="vendor" name="userFileType" placeholder="customer file type;">
    <input type="hidden" value="<?php echo (isset($vendor_details['id'])) ? $vendor_details['id'] : set_value('id');?>" name="id" placeholder="user id;">
    <input type="hidden" value="<?php echo (isset($vendor_details['pan_card_path'])) ? $vendor_details['pan_card_path'] : set_value('pan_card_path');?>" name="pan_card_path" placeholder="user id;">
   
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <input type="text" class="info form-control" placeholder="Vendor Name" value="<?php echo (isset($vendor_details['name'])) ? $vendor_details['name'] : set_value('name'); ?>" name="name">
            <div class="text-danger"><?php echo form_error('name'); ?></div>
        </div>

        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <select name="city" id="city" class="form-control">
                <option value="0">Choose City</option>
                <?php foreach ($cities as $key => $city) { ?>
                    <option value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
                <?php }?>
            </select>
        </div>
    </div>
                
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <input type="text" class="form-control" pattern="[789][0-9]{9}" class="info" placeholder="Vendor Contact"
                value="<?php echo (isset($vendor_details['contact'])) ? $vendor_details['contact'] :  set_value('contact'); ?>" name="contact">
            <div class="text-danger"><?php echo form_error('contact'); ?></div>
        </div>
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <!-- <input type="text" pattern="[789][0-9]{9}" class="info" placeholder="Contact" value="<?php echo set_value('contact'); ?>" name="contact"> -->
            <textarea name="address" class="form-control" id="address" cols="30" rows="1" placeholder="Vendor Address"><?php echo (isset($vendor_details['address'])) ? $vendor_details['address'] : set_value('address');?></textarea>
            <div class="text-danger"><?php echo form_error('address'); ?></div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <input type="text" class="info form-control" placeholder="Vendor Pincode" value="<?php echo  (isset($vendor_details['pin_code'])) ? $vendor_details['pin_code'] : set_value('pin_code'); ?>"
                name="pin_code">
        </div>
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <input type="email" class="info form-control" placeholder="Vendor E-Mail Id" value="<?php echo (isset($vendor_details['email'])) ? $vendor_details['email'] :  set_value('email'); ?>"
                name="email">
            <div class="text-danger"><?php echo form_error('email'); ?></div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <input type="text" class="info form-control" placeholder="Addhar No." value="<?php echo (isset($vendor_details['addar_no'])) ? $vendor_details['addar_no'] :  set_value('addhar_no'); ?>"
                name="addhar_no">
        </div>
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <input type="text" class="info form-control" placeholder="Pan No." value="<?php echo (isset($vendor_details['pan_no'])) ? $vendor_details['pan_no'] :  set_value('pan_no'); ?>"
                name="pan_no">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 input-box mt-10">
            <!-- <label class="control-label">E-Mail</label> -->
            <input type="text" class="info form-control" placeholder="Driving Licence" value="<?php echo (isset($vendor_details['driv_licence'])) ? $vendor_details['driv_licence'] :  set_value('driv_licence'); ?>"
                name="driv_licence">
        </div>
        <div class="col-md-6 input-box mt-10">
            <label class="control-label">Pan Card</label>
            <input type="file" class="info form-control" name="file">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6 input-box mb-20">
            <!-- <label class="control-label">Password</label> -->
            <input type="password" class="info form-control" placeholder="Password" value="" name="password">
            <div class="text-danger"><?php echo form_error('password'); ?></div>
        </div>
        <div class="col-md-6 input-box mb-20">
            <!-- <label class="control-label">Password</label> -->
            <input type="password" class="info form-control" placeholder="Confirm Password" value="" name="cpassword">
            <div class="text-danger"><?php echo form_error('cpassword'); ?></div>
        </div>
    </div>
    <?php if(isset($pageId)){?>
        <div class="col-md-6 input-box mb-20">
            <button type="button" data-url="vendor/addVendor" data-form-id="create-vendor-form" class="btn btn-outline-info saveImgForm">Submit</button>
        </div>
    <?php }?>
</form>