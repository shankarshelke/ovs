<div class="mt-4">
	<form id="taxes-form">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo isset($taxes['tId']) ? $taxes['tId'] : null; ?>" name="tId" placeholder="tId" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $this->data['user']->id; ?>" name="uId" placeholder="Product Name" aria-label="">

		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-account"></i>
					</span>
				</div>
				
				<input type="text" class="form-control <?php echo (form_error('tTitle')) ? 'is-invalid' : 'is-valid'; ?> "  value="<?php echo isset($taxes['tTitle']) ? $taxes['tTitle'] : set_value('tTitle');?>" name="tTitle" placeholder="Tax Title" aria-label="">

				<div class="invalid-feedback">
					<?php echo form_error('tTitle'); ?>
				</div>
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">Contact</label> -->
		<div class="row"> 
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-phone"></i>
					</span>
				</div>
				<input type="text" class="form-control <?php echo (form_error('tPercent')) ? 'is-invalid' : 'is-valid'; ?> " value="<?php echo isset($taxes['tPercent']) ? $taxes['tPercent'] : set_value('tPercent');?>" name="tPercent" placeholder="Tax Percentage" aria-label="">

				<div class="invalid-feedback">
					<?php echo form_error('tPercent'); ?>
				</div> 
            </div>
		</div>
        <div class="row"> 
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-phone"></i>
					</span>
				</div>
				<input type="text" class="form-control is-valid" value="<?php echo isset($taxes['tDesc']) ? $taxes['tDesc'] : set_value('tDesc');?>" name="tDesc" placeholder="tDesc" aria-label="">
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">User Name</label> -->
		
	</form>
	<button type="button" data-form-id="taxes-form" data-url="taxes/addTax" class="saveBtn btn btn-outline btn-primary">Save</button>
</div>