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
                              <h1><?php echo lang('Auth.edit_group_heading'); ?></h1>
                              <p><?php echo lang('Auth.edit_group_subheading'); ?></p>

                              <div id="infoMessage"><?php echo $message; ?></div>

                              <?php echo form_open(current_url(), 'id="edit-group-form"'); ?>

                              <p>
                                    <?php echo form_label(lang('Auth.edit_group_name_label'), 'group_name'); ?> <br />
                                    <?php echo form_input($group_name, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger"><?php echo isset($vld_errors['group_name']) ? $vld_errors['group_name'] : '';?></div>
                              </p>

                              <p>
                                    <?php echo form_label(lang('Auth.edit_group_desc_label'), 'description'); ?> <br />
                                    <?php echo form_input($group_description, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger"><?php echo isset($vld_errors['description']) ? $vld_errors['description'] : '';?></div>
                              </p>

                              <!-- <p>< ?php echo form_submit('submit', lang('Auth.edit_group_submit_btn')); ?></p> -->
                              <p><button type="button" class="btn btn-info saveBtn" data-form-id="edit-group-form" data-url="/auth/edit_group/<?php echo $id;?>"><?php echo lang('Auth.edit_group_submit_btn');?> </button> </p>
                              <?php echo form_close(); ?>
                        </div>
                  </div>
            </div>
      </div>
</div>