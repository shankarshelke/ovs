<div class="mt-4">
	<form id="social-profile-form">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $this->data['user']->id;?>" name="id" placeholder="id" aria-label="">

		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-facebook"></i>
				</span>
			</div>
			<input type="text" class="form-control is-valid" value="<?php echo (set_value('fbLink')) ? set_value('fbLink') :  $this->data['user']->fbLink;?>" name="fbLink" placeholder="Facebook Link" aria-label="">
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-twitter"></i>
				</span>
			</div>
			<input type="text" class="form-control is-valid" value="<?php echo (set_value('twLink')) ? set_value('twLink') :  $this->data['user']->twLink;?>" name="twLink" placeholder="Twiter Link" aria-label="">

		</div>

		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="mdi mdi-linkedin"></i>
				</span>
			</div>
			<input type="text" class="form-control is-valid" value="<?php echo (set_value('instaLink')) ? set_value('instaLink') :  $this->data['user']->instaLink;?>" name="instaLink" placeholder="Instagram Link" aria-label="">

		</div>

	</form>
	<button type="button" data-form-id="social-profile-form" data-url="user/update" class="saveBtn btn btn-outline btn-primary">Submit Social Media </button>
</div>