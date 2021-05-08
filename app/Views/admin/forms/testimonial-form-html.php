<div class="mt-4">
	<form id="testimonial-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo isset($testimonial_details['id']) ? $testimonial_details['id'] : null; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="testimonial" name="userFileType" placeholder="userFileType" aria-label="">
		
		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text p-0 pr-2 pl-2">
						<i class="mdi mdi-format-title mdi-24px"></i>
					</span>
				</div>
				
				<input type="text" class="form-control <?php echo (form_error('name')) ? 'is-invalid' : 'is-valid'; ?> "  value="<?php echo isset($testimonial_details['name']) ? $testimonial_details['name'] : set_value('name');?>" name="name" placeholder="Testimonial Name" aria-label="">

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
				<input type="text" class="form-control" value="<?php echo isset($testimonial_details['designation']) ? $testimonial_details['designation'] : set_value('designation');?>" name="designation" placeholder="Designation" aria-label="">

            </div>
		</div>
		<div class="row"> 
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text p-0 pr-2 pl-2">
						<i class="mdi mdi-format-paragraph mdi-24px"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo isset($testimonial_details['desc']) ? $testimonial_details['desc'] : set_value('desc');?>" name="desc" placeholder="Description" aria-label="">

            </div>
		</div>
        <div class="row"> 
            <div class="input-group col-12">
                <div class="input-group-prepend">
                    <span class="input-group-text p-0 pr-2 pl-2">
                        <i class="mdi mdi-image mdi-24px"></i>
                    </span>
                </div>
                <input type="file" class="form-control <?php echo (form_error('file')) ? 'is-invalid' : 'is-valid'; ?> " name="file" id="file" accept="image/*">
				<div class="invalid-feedback">
					<?php echo form_error('file'); ?>
				</div>
			</div>
		</div>
		<?php if(isset($testimonial_details)) {?>
			<input type="hidden" class="form-control is-invalid"  value="<?php echo $testimonial_details['imgPath'];?>" name="imgPath" placeholder="userFileType" aria-label="">
			<div class="row">
				<div class="input-group col-12">
					<img src="<?php echo base_url().$testimonial_details['imgPath'];?>" class="img-thumbnail"/>
				</div>
			</div>
		<?php } ?>
	</form>
	<button type="button" data-form-id="testimonial-form" data-url="testimonial/addTestimonial" class="saveImgForm btn btn-outline btn-primary">Submit</button>
</div>