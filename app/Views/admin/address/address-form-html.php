<div class="mt-4">
	<form id="address-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $address->id; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $user->id; ?>" name="user_id" placeholder="user id" aria-label="">
		<div class="row">
			<div class="col-sm-12 float-left">
				<div class="row">
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($address->name) ? $address->name : set_value('name');?>" name="name" placeholder="Category Name" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['name']) ? $errors['name'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['address']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($address->address) ? $address->address : set_value('address');?>" name="address" placeholder="Address" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['address']) ? $errors['address'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['pincode']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($address->pincode) ? $address->pincode : set_value('pincode');?>" name="pincode" placeholder="Pincode" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['pincode']) ? $errors['pincode'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['contact']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($address->contact) ? $address->contact : set_value('contact');?>" name="contact" placeholder="Contact" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['contact']) ? $errors['contact'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($address->email) ? $address->email : set_value('email');?>" name="email" placeholder="Email" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['email']) ? $errors['email'] : ''; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-2">
		<button type="button" data-form-id="address-form" data-url="/Addresses/addAddresses" class="saveBtn btn btn-outline btn-primary col-6 mt-2">Submit Category</button>
		</div>
	</form>
	
</div>