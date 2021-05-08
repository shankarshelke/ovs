<div class="mt-4">
	<form id="personal-profile-form">
		<input type="hidden" class="form-control is-invalid"  value="<?= $user->id;?>" name="id" placeholder="id" aria-label="">

		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-account"></i>
				</span>
			</div>
			<!-- <button class="btn btn-primary">mdi-border-color</button> -->
			<input type="text" class="form-control <?= (isset($errors->name)) ? 'is-invalid' : 'is-valid'; ?>"  value="<?= $user->getName();?>" name="name" placeholder="Name" aria-label="">

			<div class="invalid-feedback">
				<?= isset($errors->name) ? $errors->name : ''; ?>
			</div>
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-phone"></i>
				</span>
			</div>
			<!-- <button class="btn btn-primary">mdi-border-color</button> -->
			<input type="text" disabled="disabled" class="form-control <?= (isset($errors->contact)) ? 'is-invalid' : 'is-valid'; ?>"  value="<?= (set_value('contact')) ? set_value('contact') :  $user->contact;?>" name="contact" placeholder="Contact" aria-label="">

			<div class="invalid-feedback">
				<?= isset($errors->contact) ? $errors->contact : ''; ?>
			</div>
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-phone"></i>
				</span>
			</div>
			<input type="text" class="form-control is-valid" value="<?= (set_value('additionalContact')) ? set_value('additionalContact') : '';?>" name="additionalContact" placeholder="Additional Contact" aria-label="">
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-email"></i>
				</span>
			</div>
			<!-- <button class="btn btn-primary">mdi-border-color</button> -->
			<input type="text" disabled="disabled" class="form-control <?= (isset($errors->email)) ? 'is-invalid' : 'is-valid'; ?> "  value="<?= (set_value('email')) ? set_value('email') :  $user->email;?>" name="email" placeholder="Email" aria-label="">

			<div class="invalid-feedback">
				<?= isset($errors->email) ? $errors->email : ''; ?>
			</div>
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-email"></i>
				</span>
			</div>
			<input type="text" class="form-control is-valid" value="<?= (set_value('additionalEmail')) ? set_value('additionalEmail') :  '';?>" name="additionalEmail" placeholder="Additional Email" aria-label="">
		</div>
		<!-- <label class="text-dark mt-4 font-weight-medium" for="">Contact</label> -->
		<!-- <div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-account-location"></i>
				</span>
			</div>
			<input type="text" class="form-control is-valid" value="< ?= (set_value('address')) ? set_value('address') :  $user->address;?>" name="address" placeholder="Address" aria-label="">

			<div class="invalid-feedback">
				< ?= isset($errors->address) ? $errors->address : ''; ?>
			</div> 
		</div> -->

		<!-- <div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-account-location"></i>
				</span>
			</div>
			<input type="text" class="form-control is-valid" value="< ?= (set_value('additionalAddress')) ? set_value('additionalAddress') :  $user->additionalAddress;?>" name="additionalAddress" placeholder="Additonal Address" aria-label="">

			<div class="invalid-feedback">
				< ?= isset($errors->address) ? $errors->address : ''; ?>
			</div> 
		</div> -->

		<!-- <div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-currency-usd"></i>
				</span>
			</div>
			<input type="text" class="form-control is-invalid" placeholder="City" value="< ?= $address['city'];?>" name="city">

			<div class="invalid-feedback">
				<?php //echo form_error('city'); ?>
			</div>
		</div> -->
		<!-- <div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-security-account-outline"></i>
				</span>
			</div>
			<input type="text" class="form-control is-invalid" value="< ?= $address['country'];?>" name="country" placeholder="Country" >

			<div class="invalid-feedback">
				<?php //echo form_error('country'); ?>
			</div>
		</div> -->
	</form>
	<button type="button" data-form-id="personal-profile-form" data-url="user/update/<?= $user->id;?>" class="saveBtn btn btn-outline btn-primary">Submit Profile</button>
</div>