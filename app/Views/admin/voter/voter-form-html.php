<div class="mt-4">
	<form id="voter-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $voter->id; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $user->id; ?>" name="user_id" placeholder="user id" aria-label="">
		<div class="row">
			<div class="col-sm-6 float-left">
				<div class="row"> 
					<div class="input-group col-12">
						<label class="form-control-file" for="">Profile</label>
						<input type="file" class="form-control  " name="file" id="file" data-reader-img=".voter-img" accept="image/*">
						<div class="invalid-feedback">
							<!-- < ?php echo $errors['file']; ?> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($voter->name) ? $voter->name : set_value('name');?>" name="name" placeholder="Category Name" aria-label="">

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
						
						<input type="text" class="form-control <?= isset($errors['aadhar_no']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($voter->aadhar_no) ? $voter->aadhar_no : set_value('aadhar_no');?>" name="aadhar_no" placeholder="Contact" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['aadhar_no']) ? $errors['aadhar_no'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['address']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($voter->address) ? $voter->address : set_value('address');?>" name="address" placeholder="Address" aria-label="">

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
						
						<input type="text" class="form-control <?= isset($errors['pincode']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($voter->pincode) ? $voter->pincode : set_value('pincode');?>" name="pincode" placeholder="Pincode" aria-label="">

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
						
						<input type="text" class="form-control <?= isset($errors['contact']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($voter->contact) ? $voter->contact : set_value('contact');?>" name="contact" placeholder="Contact" aria-label="">

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
						
						<input type="text" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($voter->email) ? $voter->email : set_value('email');?>" name="email" placeholder="Email" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['email']) ? $errors['email'] : ''; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 float-right">
				<div class="row">
					<div class="input-group col-12 voter-img justify-content-end">
						<img src="<?php echo ($voter->file_full_path) ? $voter->file_full_path : base_url('assets/admin/main/images/users/profile.svg');?>" class="img-thumbnail img-image"/>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-2">
		<button type="button" data-form-id="voter-form" data-url="/Voters/addVoters" class="saveBtn btn btn-outline btn-primary col-6 mt-2">Submit Category</button>
		</div>
	</form>
	
</div>