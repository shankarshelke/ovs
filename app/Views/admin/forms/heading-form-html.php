<div class="mt-4">
	<form id="heading-form">
		<input type="hidden" class="form-control is-invalid" value="<?php echo isset($pageHeading_details['id']) ? $pageHeading_details['id'] : null; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid" value="aboutus" name="userFileType" placeholder="userFileType" aria-label="">

		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-view-headline"></i>
					</span>
				</div>
				<input type="text" class="form-control <?php echo (form_error('name')) ? 'is-invalid' : 'is-valid'; ?> " value="<?php echo isset($pageHeading_details['name']) ? $pageHeading_details['name'] : set_value('name'); ?>" name="name" placeholder="Heading Name" aria-label="">
				<div class="invalid-feedback">
					<?php echo form_error('name'); ?>
				</div>
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">Contact</label> -->
		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-format-align-justify"></i>
					</span>
				</div>
				<textarea name="desc1" id="" cols="30" rows="2" class="form-control" placeholder="Description 1"><?php echo isset($pageHeading_details['desc1']) ? $pageHeading_details['desc1'] : set_value('desc1'); ?></textarea>
				<!-- <input type="text" class="form-control" value="<?php echo isset($pageHeading_details['desc1']) ? $pageHeading_details['desc1'] : set_value('desc1'); ?>" name="desc1" placeholder="Description 1" aria-label=""> -->
			</div>
		</div>
		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-format-align-justify"></i>
					</span>
				</div>
				<textarea name="desc2" id="" cols="30" rows="2" class="form-control" placeholder="Description 2"><?php echo isset($pageHeading_details['desc2']) ? $pageHeading_details['desc2'] : set_value('desc2'); ?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-format-align-justify"></i>
					</span>
				</div>
				<textarea name="desc3" id="" cols="30" rows="2" class="form-control" placeholder="Description 3"><?php echo isset($pageHeading_details['desc3']) ? $pageHeading_details['desc3'] : set_value('desc3'); ?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-image"></i>
					</span>
				</div>
				<input type="file" class="form-control <?php echo (form_error('file')) ? 'is-invalid' : 'is-valid'; ?> " name="file" id="file" accept="image/*">
				<div class="invalid-feedback">
					<?php echo form_error('file'); ?>
				</div>
			</div>
		</div>
		<?php if (isset($pageHeading_details)) { ?>
			<input type="hidden" class="form-control is-invalid" value="<?php echo $pageHeading_details['imgPath']; ?>" name="imgPath" placeholder="userFileType" aria-label="">
			<div class="row">
				<div class="input-group col-12">
					<img src="<?php echo base_url() . $pageHeading_details['imgPath']; ?>" class="img-thumbnail" />
				</div>
			</div>
		<?php } ?>
	</form>
	<button type="button" data-form-id="heading-form" data-url="Page_heading/udpdateHeading" class="saveImgForm btn btn-outline btn-primary">Submit</button>
</div>