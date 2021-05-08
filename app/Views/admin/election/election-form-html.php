<div class="mt-4">
	<form id="election-form" class="border-bottom border-success mb-2">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $election->id; ?>" name="id" placeholder="id" aria-label="">
		<input type="hidden" class="form-control is-invalid"  value="<?php echo $user->id; ?>" name="user_id" placeholder="user id" aria-label="">
		<div class="row">
			<div class="col-sm-12 float-left">
				<div class="row">
					<div class="input-group col-12 mb-3">
						<label class="form-control-file" for="">Name</label>
						
						<input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($election->name) ? $election->name : set_value('name');?>" name="name" placeholder="Election Name" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['name']) ? $errors['name'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<label class="form-control-file"  for="">Election Type</label>
						<select class="form-control" name="election_type" id="election-type">
							<?php foreach ($categories as $key => $category) {?>
								<option value="<?= $category->id;?>"><?= $category->name;?></option>
							<?php }?>
						</select>
						<div class="invalid-feedback">
							<?= isset($errors['election_type']) ? $errors['election_type'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<label class="form-control-file"  for="">Election Start Date Time</label>
						
						<input type="datetime-local" class="form-control <?= isset($errors['start_date_time']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($election->start_date_time) ? $election->start_date_time : set_value('start_date_time');?>" name="start_date_time" placeholder="Pincode" aria-label="">
						
						<div class="invalid-feedback">
							<?= isset($errors['start_date_time']) ? $errors['start_date_time'] : ''; ?>
						</div>
					</div>
					<div class="input-group col-12 mb-3">
						<label class="form-control-file"  for="">Election End Date Time</label>
						
						
						<input type="datetime-local" class="form-control <?= isset($errors['end_date_time']) ? 'is-invalid' : ''; ?> "  value="<?php echo ($election->end_date_time) ? $election->end_date_time : set_value('end_date_time');?>" name="end_date_time" placeholder="End Date Time" aria-label="">

						<div class="invalid-feedback">
							<?= isset($errors['end_date_time']) ? $errors['end_date_time'] : ''; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-2">
		<button type="button" data-form-id="election-form" data-url="/Elections/addElections" class="saveBtn btn btn-outline btn-primary col-6 mt-2">Submit Elections</button>
		</div>
	</form>
	
</div>