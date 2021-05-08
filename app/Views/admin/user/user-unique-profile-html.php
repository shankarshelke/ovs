<div class="mt-4">
	<div class="input-group mb-4">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<i class="mdi mdi-phone"></i>
			</span>
		</div>
		<label class="text-dark form-control"><?php echo $user->contact;?></label>
		<button class="input-group-prepend sendVerifyCode" data-url="/user/sendEmailText" data-edit-field-name="contact">
			<span class="input-group-text">
				<i class="mdi mdi-border-color"></i>
			</span>
		</button> 
	</div>

	<div class="input-group mb-4">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<i class="mdi mdi-currency-usd"></i>
			</span>
		</div>
		<label class="text-dark form-control"><?php echo ($user->email) ? $user->email : 'Add Email Address';?></label>
		<button class="input-group-prepend sendVerifyCode" data-url="/user/sendEmailText" data-edit-field-name="email">
			<span class="input-group-text">
				<i class="mdi mdi-border-color"></i>
			</span>
		</button>
	</div>
	<div class="input-group mb-4">
		<div class="input-group-prepend">
			<span class="input-group-text">
				<i class="mdi mdi-security-account-outline"></i>
			</span>
		</div>
		<label class="text-dark form-control"><?php echo $user->username;?></label>
		<button class="input-group-prepend sendVerifyCode" data-url="/user/sendEmailText" data-edit-field-name="username">
			<span class="input-group-text">
				<i class="mdi mdi-border-color"></i>
			</span>
		</button>
	</div>
</div>