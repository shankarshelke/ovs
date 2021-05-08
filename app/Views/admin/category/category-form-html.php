<div class="mt-4">
	<form id="category-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $category->id; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $user->id; ?>" name="user_id" placeholder="user id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="category" name="userFileType" placeholder="userFileType" aria-label="">
		<div class="row">
			<div class="col-sm-6 float-left">
				<div class="row">
					<div class="input-group col-12 mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-format-title mdi-24px"></i>
							</span>
						</div>
						
						<input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($category->name) ? $category->name : set_value('name');?>" name="name" placeholder="Category Name" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['name']) ? $errors['name'] : ''; ?>
						</div>
					</div>
				</div>
				<div class="row"> 
					<div class="input-group col-12">
						<div class="input-group-prepend">
							<span class="input-group-text p-0 pr-2 pl-2">
								<i class="mdi mdi-image mdi-24px"></i>
							</span>
						</div>
						<input type="file" class="form-control  " name="file" id="file" data-reader-img=".category-img" accept="image/*">
						<div class="invalid-feedback">
							<!-- < ?php echo $errors['file']; ?> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 float-right">
				<div class="row">
					<div class="input-group col-12 category-img justify-content-end">
						<img src="<?php echo ($category->file_full_path) ? $category->file_full_path : base_url('assets/admin/main/images/users/profile.svg');?>" class="img-thumbnail img-image"/>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-2">
		<button type="button" data-form-id="category-form" data-url="/Categories/addCategories" class="saveImgForm btn btn-outline btn-primary col-6 mt-2">Submit Category</button>
		</div>
	</form>
	
</div>