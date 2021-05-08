<div class="mt-4">
	<form id="zip-code-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo isset($zip_code['id']) ? $zip_code['id'] : null; ?>" name="id" placeholder="id" aria-label="">
		<div class="row"> 
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text p-0 pr-2 pl-2">
						<i class="mdi mdi-format-paragraph mdi-24px"></i>
					</span>
				</div>
				<select name="city_id" id="city_id" class="form-control">
					<option value="0">Choose Category</option>
					<?php foreach ($cities as $key => $city) { ?>
						<option value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
					<?php } ?>
				</select>
				<div class="invalid-feedback">
					<?php echo form_error('city_id'); ?>
				</div>
            </div>
		</div>

		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text p-0 pr-2 pl-2">
						<i class="mdi mdi-format-title mdi-24px"></i>
					</span>
				</div>
				
				<input type="text" class="form-control <?php echo (form_error('zip_code')) ? 'is-invalid' : 'is-valid'; ?> "  value="<?php echo isset($zip_code['zip_code']) ? $zip_code['zip_code'] : set_value('zip_code');?>" name="zip_code" placeholder="Zip Code" aria-label="">

				<div class="invalid-feedback">
					<?php echo form_error('zip_code'); ?>
				</div>
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">Contact</label> -->
		
	</form>
	<button type="button" data-form-id="zip-code-form" data-url="zip_code/addZipCode" class="saveBtn btn btn-outline btn-primary">Submit Category</button>
</div>