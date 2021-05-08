<div class="mt-4 modal-lg">
    <form id="service-form" class="border-bottom border-success mb-2">
        <input type="hidden" class="form-control is-invalid"
            value="<?php echo isset($service_details['id']) ? $service_details['id'] : null; ?>" name="id"
            placeholder="id" aria-label="">
        <input type="hidden" class="form-control is-invalid" value="service" name="userFileType" aria-label="">
		<input type="hidden" class="form-control is-invalid" value="<?php echo isset($service_details['imgPath']) ? $service_details['imgPath'] : '';?>" name="imgPath" aria-label="">
		<input type="hidden" class="form-control is-invalid" value="<?php echo isset($service_details['iconPath']) ? $service_details['iconPath'] : '';?>" name="iconPath" aria-label="">

        <div class="row">
            <div class="col-md-6">
                <label for="category name">Category Name</label>
                <select name="cat_id" id="cat_id" class="form-control">
                    <option value="0">Choose Category</option>
                    <?php foreach ($categories as $key => $category) {?>
                    	<option value="<?php echo $category['id'];?>" <?php echo (isset($service_details['cat_id']) && $service_details['cat_id'] == $category['id']) ? 'selected="selected"' : '';?> data-gst="<?php echo $category['gst'];?>" data-commission="<?php echo $category['commision'];?>"> <?php echo $category['name'];?> </option>
                    <?php }?>
                </select>
                <!-- <input type="text" class="form-control <?php echo (form_error('name')) ? 'is-invalid' : 'is-valid'; ?> "  value="<?php echo isset($service_details['name']) ? $service_details['name'] : set_value('name'); ?>" name="name" placeholder="Product Title" aria-label=""> -->

                <!-- <div class="invalid-feedback">
					<?php echo form_error('name'); ?>
				</div> -->
            </div>
            <div class="col-md-6">
                <label for="sub_cat_id">Sub Category Name</label>
                <select name="sub_cat_id" id="sub_cat_id" class="form-control">
                    <option value="0">Choose Sub Category</option>
                    <?php foreach ($sub_categories as $key => $sub_category) {?>
                    	<option value="<?php echo $sub_category['id'];?>" <?php echo (isset($service_details['sub_cat_id']) && $service_details['sub_cat_id'] == $sub_category['id']) ? 'selected="selected"' : '';?>>
							<?php echo $sub_category['name'];?>
						</option>
                    <?php }?>
                </select>

                <!-- <input type="text" class="form-control <?php echo (form_error('name')) ? 'is-invalid' : ''; ?> " value="<?php echo isset($service_details['name']) ? $service_details['name'] : set_value('name'); ?>" name="name" placeholder="Product Title" aria-label=""> -->

                <!-- <div class="invalid-feedback">
					<?php echo form_error('name'); ?>
				</div> -->
            </div>
        </div>
        <!-- <label class="text-dark mt-4 font-weight-medium" for="">Contact</label> -->
        <?php if($this->data['groups']->id != VENDORS){ ?>
            <div class="row pt-25">
                <div class="col-md-12">
                    <label for="vendor_id">Vendor Name</label>
                    <select name="vendor_id" id="vendor_id" class="form-control">
                        <option value="0">Choose Vendor</option>
                        <?php foreach ($vendors as $key => $vendor) {?>
                        <option value="<?php echo $vendor->id;?>"
                            <?php echo (isset($service_details['vendor_id']) && $service_details['vendor_id'] == $vendor->id) ? 'selected="selected"' : '';?>>
                            <?php echo $vendor->name;?></option>
                        <?php }?>
                    </select>

                    <!-- <input type="text" class="form-control <?php echo (form_error('name')) ? 'is-invalid' : 'is-valid'; ?> " value="<?php echo isset($service_details['name']) ? $service_details['name'] : set_value('name'); ?>" name="name" placeholder="Product Title" aria-label=""> -->

                    <!-- <div class="invalid-feedback">
                        <?php echo form_error('name'); ?>
                    </div> -->
                </div>
            </div>
         <?php }?>
        <div class="row pt-25">
            <div class="col-md-6">
                <label for="category name">GST(%)</label>
                <input type="text" class="form-control" readonly id="gst"
                    value="<?php echo (set_value('gst')) ? set_value('gst') : (isset($service_details['gst']) ? $service_details['gst'] : '0'); ?>"
                    name="gst" placeholder="Product Description" aria-label="">
            </div>
            <div class="col-md-6">
                <label for="category name">Admin Commission(%)</label>
                <input type="text" class="form-control" readonly id="commission"
                    value="<?php echo (set_value('commission')) ? set_value('commission') : (isset($service_details['commission']) ? $service_details['commission'] : '0'); ?>"
                    name="commission" placeholder="Product Description" aria-label="">
            </div>
        </div>
        <div class="row pt-25">
            <div class="col-md-6">
                <label for="name">Service Name</label>
                <input type="text" class="form-control"
                    value="<?php echo isset($service_details['name']) ? $service_details['name'] : set_value('name'); ?>"
                    name="name" placeholder="Product Description" aria-label="">
            </div>
            <div class="col-md-6">
                <label for="category name">Price (RS)</label>
                <input type="text" class="form-control" value="<?php echo isset($service_details['price']) ? $service_details['price'] : set_value('price'); ?>" name="price" placeholder="Product Description" aria-label="">
				<div class="invalid-feedback">
                    <?php echo form_error('file'); ?>
                </div>
            </div>
        </div>

        <div class="row pt-25">
            <div class="col-md-6">
                <label for="category name">Service Image:</label>
                <input type="file" class="form-control <?php echo (form_error('file')) ? 'is-invalid' : ''; ?> "
                    name="file" id="file" accept="image/*">
                <div class="invalid-feedback">
                    <?php echo form_error('file'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="category name">Service Icon Image:</label>
                <input type="file" class="form-control <?php echo (form_error('file_2')) ? 'is-invalid' : ''; ?> "
                    name="file_2" id="file_2" accept="image/*">
                <div class="invalid-feedback">
                    <?php echo form_error('file'); ?>
                </div>
            </div>
        </div>
		
		<input type="hidden" name="city_ids" id="city_ids">
		<div class="row pt-25">
			<div class="col-12">
				<label for="category name">City :</label>
				<span class="autocomplete-select"></span>
			</div>
		</div>
        <div class="row pt-25">
            <div class="col-12">
                <label for="category name">Description :</label>
				<textarea name="desc" id="desc" cols="30" rows="2" placeholder="Product Title" class="form-control <?php echo (form_error('desc')) ? 'is-invalid' : ''; ?> "><?php echo isset($service_details['desc']) ? $service_details['desc'] : set_value('desc'); ?></textarea>
                <div class="invalid-feedback">
                    <?php echo form_error('desc'); ?>
                </div>
            </div>
            <div class="col-12">
                <label for="category name">More Description :</label>
				<textarea name="desc2" id="desc2" cols="30" rows="3" placeholder="Product Title" class="form-control <?php echo (form_error('desc2')) ? 'is-invalid' : ''; ?> "><?php echo isset($service_details['desc2']) ? $service_details['desc2'] : set_value('desc2'); ?></textarea>
                <div class="invalid-feedback">
                    <?php echo form_error('des2'); ?>
                </div>
            </div>
        </div>
    </form>
    <button type="button" data-form-id="service-form" data-url="service/addService"
        class="saveImgForm btn btn-outline btn-primary">Submit</button>
</div>