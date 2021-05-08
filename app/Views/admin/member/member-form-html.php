<div class="mt-4">
	<form id="member-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $member->id; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $user->id; ?>" name="user_id" placeholder="user id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="members" name="userFileType" placeholder="userFileType" aria-label="">
		<div class="row">
			<div class="col-sm-6 float-left">
				<div class="row"> 
					<div class="input-group col-12">
						<label class="form-control-file" for="">Profile</label>
						<input type="file" class="form-control  " name="file" id="file" data-reader-img=".member-img" accept="image/*">
						<div class="invalid-feedback">
							<!-- < ?php echo $errors['file']; ?> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-group col-12 mb-3">
						<label class="form-control-file" for="">Name</label>
						
						<input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($member->name) ? $member->name : set_value('name');?>" name="name" placeholder="Member Name" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['name']) ? $errors['name'] : ''; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-group col-12 mb-3">
						<label class="form-control-file" for="">Aadhar Number</label>
						
						<input type="text" class="form-control <?= isset($errors['aadhar_no']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($member->aadhar_no) ? $member->aadhar_no : set_value('aadhar_no');?>" name="aadhar_no" placeholder="Aadhar Number" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['aadhar_no']) ? $errors['aadhar_no'] : ''; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-group col-12 mb-3">
						<label class="form-control-file" for="">Contact</label>
						
						<input type="text" class="form-control <?= isset($errors['contact']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($member->contact) ? $member->contact : set_value('contact');?>" name="contact" placeholder="Contact" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['contact']) ? $errors['contact'] : ''; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-group col-12 mb-3">
						<label class="form-control-file" for="">Email</label>
						
						<input type="text" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($member->email) ? $member->email : set_value('email');?>" name="email" placeholder="Email" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['email']) ? $errors['email'] : ''; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-group col-12 mb-3">
						<label class="form-control-file" for="">Pin Code/Zip Code</label>
						
						<input type="text" class="form-control <?= isset($errors['pincode']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($member->pincode) ? $member->pincode : set_value('pincode');?>" name="pincode" placeholder="Pin Code" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['pincode']) ? $errors['pincode'] : ''; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-group col-12 mb-3">
						<label class="form-control-file" for="">Select Election</label>
						
						<select name="election_id"  class="form-control" id="election-id">
							<?php foreach ($elections as $key => $election) {?>
								<option value="<?= $election->id;?>" <?php ($election->id == $member->election_id) ? 'selected="selected"' : "";?>><?= $election->name;?></option>
							<?php }?>
						</select>
						<div class="invalid-feedback">
							<?= isset($errors['election_id']) ? $errors['election_id'] : ''; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 float-right">
				<div class="row">
					<div class="input-group col-12 member-img justify-content-end">
						<img src="<?php echo ($member->file_full_path) ? $member->file_full_path : base_url('assets/admin/main/images/users/profile.svg');?>" class="img-thumbnail img-image"/>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-2">
		<button type="button" data-form-id="member-form" data-url="/Members/addMembers" class="saveImgForm btn btn-outline btn-primary col-6 mt-2">Submit Category</button>
		</div>
	</form>
	
</div>