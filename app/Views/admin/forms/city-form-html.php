<div class="mt-4">
	<form id="city-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo isset($city_details['id']) ? $city_details['id'] : null; ?>" name="id" placeholder="id" aria-label="">
		
		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text p-0 pr-2 pl-2">
						<i class="mdi mdi-format-title mdi-24px"></i>
					</span>
				</div>
				<input type="text" class="form-control <?php echo (form_error('name')) ? 'is-invalid' : 'is-valid'; ?> "  value="<?php echo isset($city_details['name']) ? $city_details['name'] : set_value('name');?>" name="name" placeholder="Sub Category Name" aria-label="">

				<div class="invalid-feedback">
					<?php echo form_error('name'); ?>
				</div>
			</div>
		</div>
	</form>
	<button type="button" data-form-id="city-form" data-url="city/addCity" class="saveBtn btn btn-outline btn-primary">Submit Category</button>
</div>