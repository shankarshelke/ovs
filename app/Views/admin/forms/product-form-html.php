<div class="mt-4">
	<form id="product-form">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo isset($product_details['id']) ? $product_details['id'] : null; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $this->data['user']->id; ?>" name="uId" placeholder="Product Name" aria-label="">

		<div class="row">
			<div class="input-group col-12">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-account"></i>
					</span>
				</div>
				<!-- <button class="btn btn-primary">mdi-border-color</button> -->
				<select name="pId" id="pId" value="<?php echo set_value('pId');?>" class="form-control <?php echo (form_error('pId')) ? 'is-invalid' : 'is-valid'; ?> ">
					<?php
						if(isset($product['id'])){
							echo '<option value="' . $product['id'] . '" selected="selected">' . $product['name'] . '</option>';
						}
					?>
				</select>
				<!-- <input type="text" class="form-control is-invalid"  value="" name="pId" placeholder="Product Name" aria-label=""> -->

				<div class="invalid-feedback">
					<?php echo form_error('pId'); ?>
				</div>
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">Contact</label> -->
		<div class="row"> 
			<div class="input-group col-6">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-phone"></i>
					</span>
				</div>
				<input type="text" class="form-control <?php echo (form_error('price')) ? 'is-invalid' : 'is-valid'; ?> " value="<?php echo isset($product_details['price']) ? $product_details['price'] : set_value('price');?>" name="price" placeholder="Product Price" aria-label="">

				<div class="invalid-feedback">
					<?php echo form_error('price'); ?>
				</div> 
			</div>
			
			<div class="input-group col-6">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-phone"></i>
					</span>
				</div>
				<input type="text" class="form-control is-valid" value="<?php echo isset($product_details['unit']) ? $product_details['unit'] : set_value('unit');?>" name="unit" placeholder="Unit" aria-label="">
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">Email</label> -->
		<div class="row">
			<div class="input-group col-6">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-currency-usd"></i>
					</span>
				</div>
				<input type="text" class="form-control is-valid" value="<?php echo isset($product_details['stockQuantity']) ? $product_details['stockQuantity'] : set_value('stockQuantity');?>" name="stockQuantity" placeholder="Stock Quantity">
			</div>
			<div class="input-group col-6">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="mdi mdi-currency-usd"></i>
					</span>
				</div>
				<input type="text" class="form-control is-valid" value="<?php echo isset($product_details['codeNo']) ? $product_details['codeNo'] : set_value('codeNo');?>" name="codeNo" placeholder="Code Number">
			</div>
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">User Name</label> -->
		
	</form>
	<button type="button" data-form-id="product-form" data-url="product/addProduct" class="saveBtn btn btn-outline btn-primary">Save</button>
</div>