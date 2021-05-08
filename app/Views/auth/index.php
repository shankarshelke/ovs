
		<!-- <p>< ?php echo anchor('auth/create_user', lang('Auth.index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('Auth.index_create_group_link'))?></p> -->
	
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
	<div class="row align-items-center">
		<div class="col-md-6 col-lg-6">
			<h4 class="page-title">CRM</h4>
			<div class="breadcrumb-list">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page">CRM</li>
				</ol>
			</div>
		</div>
		<div class="col-md-6 col-lg-6">
			<div class="widgetbar">
				<button class="btn btn-primary-rgba saveBtn" data-url="/auth/create_group"><i class="feather icon-plus mr-2"></i><?= lang('Auth.index_create_group_link')?></button>
				<button class="btn btn-primary-rgba saveBtn" data-url="/auth/create_user"><i class="feather icon-plus mr-2"></i><?= lang('Auth.index_create_user_link')?></button>
			</div>                        
		</div>
	</div>  

	<!-- Start row -->
	<div class="row mt-2">
		<!-- Start col -->
		<div class="col-lg-12">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="table-responsive">
						<table id="category-table" class="display table table-striped table-bordered">
							<thead>
								<tr>
									<th><?php echo lang('Auth.index_fname_th');?></th>
									<th><?php echo lang('Auth.index_lname_th');?></th>
									<th><?php echo lang('Auth.index_email_th');?></th>
									<th><?php echo lang('Auth.index_groups_th');?></th>
									<th><?php echo lang('Auth.index_status_th');?></th>
									<th><?php echo lang('Auth.index_action_th');?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($users as $user):?>
									<tr>
										<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
										<td>
											<?php foreach ($user->groups as $group):?>
												<!-- < ?php echo anchor('auth/edit_group/' . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?> -->
												<button class="btn btn-link saveBtn" data-url="/auth/edit_group/<?= $group->id;?>"><?= htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')?></button><br />
											<?php endforeach?>
										</td>
										<td>
											<!-- < ?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, lang('Auth.index_active_link')) : anchor("auth/activate/". $user->id, lang('Auth.index_inactive_link'));?> -->
											<button class="btn btn-link saveBtn" data-url="<?= ($user->active) ? '/auth/deactivate/' . $user->id : '/auth/activate/' . $user->id ;?>"><?= ($user->active) ? lang('Auth.index_active_link') : lang('Auth.index_inactive_link');?></button>
										</td>
										<td> 
											<button class="btn btn-info float-right saveBtn" data-url="/auth/edit_user/<?= $user->id;?>"> <i class="mdi mdi-pencil mdi-18px"></i></button>
										</td>
									</tr>
								<?php endforeach;?>
							</tbody>
							<tfoot>
								<tr>
									<th><?php echo lang('Auth.index_fname_th');?></th>
									<th><?php echo lang('Auth.index_lname_th');?></th>
									<th><?php echo lang('Auth.index_email_th');?></th>
									<th><?php echo lang('Auth.index_groups_th');?></th>
									<th><?php echo lang('Auth.index_status_th');?></th>
									<th><?php echo lang('Auth.index_action_th');?></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- End col -->
	</div>
	<!-- End row -->
</div>
