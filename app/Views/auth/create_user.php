<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
	<div class="row align-items-center">
		<div class="col-md-8 col-lg-8">
			<h4 class="page-title">CRM</h4>
			<div class="breadcrumb-list">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page">CRM</li>
				</ol>
			</div>
		</div>
		<div class="col-md-4 col-lg-4">
			<div class="widgetbar">
				<button class="btn btn-primary-rgba saveBtn" data-url="/auth/index"><i class="feather icon-arrow-left mr-2"></i>Back</button>
			</div>                        
		</div>
	</div>  

	<!-- Start row -->
	<div class="row mt-2">
		<!-- Start col -->
		<div class="col-lg-12">
			<div class="card m-b-30">
				<div class="card-body">

                              <h1><?php echo lang('Auth.create_user_heading');?></h1>
                              <p><?php echo lang('Auth.create_user_subheading');?></p>

                              <div id="infoMessage"><?php echo $message;?></div>

                              <?php echo form_open('auth/create_user', 'id="create-user-form"');?>
                                    <p>
                                          <?php echo form_label(lang('Auth.create_user_fname_label'), 'first_name');?> <br />
                                          <?php echo form_input($first_name, '', 'class="form-control col-md-6"');?>
                                          <div class="text-danger"><?php echo isset($vld_errors['first_name']) ? $vld_errors['first_name'] : '';?></div>
                                    </p>

                                    <p>
                                          <?php echo form_label(lang('Auth.create_user_lname_label'), 'last_name');?> <br />
                                          <?php echo form_input($last_name, '', 'class="form-control col-md-6"');?>
                                          <div class="text-danger"><?php echo isset($vld_errors['last_name']) ? $vld_errors['last_name'] : '';?></div>
                                    </p>

                                    <?php
                                    if ($identity_column !== 'email') {
                                    echo '<p>';
                                    echo form_label(lang('Auth.create_user_identity_label'), 'identity');
                                    echo '<br />';
                                    echo \Config\Services::validation()->getError('identity');
                                    echo form_input($identity);
                                    echo '</p>';
                                    }
                                    ?>

                                    <!-- <p>
                                          < ?php echo form_label(lang('Auth.create_user_company_label'), 'company');?> <br />
                                          < ?php echo form_input($company, '', 'class="form-control col-md-6"');?>
                                          <div class="text-danger">< ?php echo isset($vld_errors['company']) ? $vld_errors['company'] : '';?></div>
                                    </p> -->

                                    <p>
                                          <?php echo form_label(lang('Auth.create_user_email_label'), 'email');?> <br />
                                          <?php echo form_input($email, '', 'class="form-control col-md-6"');?>
                                          <div class="text-danger"><?php echo isset($vld_errors['email']) ? $vld_errors['email'] : '';?></div>
                                    </p>

                                    <p>
                                          <?php echo form_label(lang('Auth.create_user_phone_label'), 'phone');?> <br />
                                          <?php echo form_input($phone, '', 'class="form-control col-md-6"');?>
                                          <div class="text-danger"><?php echo isset($vld_errors['phone']) ? $vld_errors['phone'] : '';?></div>
                                    </p>

                                    <p>
                                          <?php echo form_label(lang('Auth.create_user_password_label'), 'password');?> <br />
                                          <?php echo form_input($password, '', 'class="form-control col-md-6"');?>
                                          <div class="text-danger"><?php echo isset($vld_errors['password']) ? $vld_errors['password'] : '';?></div>
                                    </p>

                                    <p>
                                          <?php echo form_label(lang('Auth.create_user_password_confirm_label'), 'password_confirm');?> <br />
                                          <?php echo form_input($password_confirm, '', 'class="form-control col-md-6"');?>
                                          <div class="text-danger"><?php echo isset($vld_errors['password_confirm']) ? $vld_errors['password_confirm'] : '';?></div>
                                    </p>


                                    <!-- <p>< ?php echo form_submit('submit', lang('Auth.create_user_submit_btn'));?></p> -->
                                    <p><button type="button" class="btn btn-info saveBtn" data-form-id="create-user-form" data-url="/auth/create_user"><?php echo lang('Auth.create_user_submit_btn');?> </button> </p>
                              <?php echo form_close();?>
                        </div>
                  </div>
            </div>
      </div>
</div>
