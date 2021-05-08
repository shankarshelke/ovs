<div class="mt-4">
	<form id="sub-category-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo isset($sub_category_details['id']) ? $sub_category_details['id'] : null; ?>" name="id" placeholder="id" aria-label="">
		
		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text p-0 pr-2 pl-2">
						<i class="mdi mdi-format-title mdi-24px"></i>
					</span>
				</div>
				
				<input type="text" class="form-control <?php echo (form_error('name')) ? 'is-invalid' : 'is-valid'; ?> "  value="<?php echo isset($sub_category_details['name']) ? $sub_category_details['name'] : set_value('name');?>" name="name" placeholder="Sub Category Name" aria-label="">

				<div class="invalid-feedback">
					<?php echo form_error('name'); ?>
				</div>
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">Contact</label> -->
		<div class="row"> 
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text p-0 pr-2 pl-2">
						<i class="mdi mdi-format-paragraph mdi-24px"></i>
					</span>
				</div>
				<select name="cat_id" id="cat_id" class="form-control">
					<option value="0">Choose Category</option>
					<?php foreach ($categories as $key => $category) { ?>
						<option value="<?php echo $category['id'];?>" <?php echo (isset($sub_category_details['cat_id']) && $sub_category_details['cat_id'] == $category['id']) ? 'selected="selected"' : '';?>><?php echo $category['name'];?></option>
					<?php } ?>
				</select>
            </div>
		</div>
	</form>
	<button type="button" data-form-id="sub-category-form" data-url="sub_category/addSubCategory" class="saveBtn btn btn-outline btn-primary">Submit Category</button>
</div>