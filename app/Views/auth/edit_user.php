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

                              <h1><?php echo lang('Auth.edit_user_heading'); ?></h1>
                              <p><?php echo lang('Auth.edit_user_subheading'); ?></p>

                              <div id="infoMessage"><?php echo $message; ?></div>

                              <?php echo form_open(uri_string(), 'id="edit-user-form"'); ?>

                              <p>
                                    <?php echo form_label(lang('Auth.edit_user_fname_label'), 'first_name'); ?> <br />
                                    <?php echo form_input($first_name, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger"><?php echo isset($vld_errors['first_name']) ? $vld_errors['first_name'] : '';?></div>
                              </p>

                              <p>
                                    <?php echo form_label(lang('Auth.edit_user_lname_label'), 'last_name'); ?> <br />
                                    <?php echo form_input($last_name, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger"><?php echo isset($vld_errors['last_name']) ? $vld_errors['last_name'] : '';?></div>
                              </p>

                              <!-- <p>
                                    < ?php echo form_label(lang('Auth.edit_user_company_label'), 'company'); ?> <br />
                                    < ?php echo form_input($company, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger">< ?php echo isset($vld_errors['comany']) ? $vld_errors['comany'] : '';?></div>
                              </p> -->

                              <p>
                                    <?php echo form_label(lang('Auth.edit_user_phone_label'), 'phone'); ?> <br />
                                    <?php echo form_input($phone, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger"><?php echo isset($vld_errors['phone']) ? $vld_errors['phone'] : '';?></div>
                              </p>

                              <p>
                                    <?php echo form_label(lang('Auth.edit_user_password_label'), 'password'); ?> <br />
                                    <?php echo form_input($password, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger"><?php echo isset($vld_errors['password']) ? $vld_errors['password'] : '';?></div>
                              </p>

                              <p>
                                    <?php echo form_label(lang('Auth.edit_user_password_confirm_label'), 'password_confirm'); ?><br />
                                    <?php echo form_input($password_confirm, '', 'class="form-control col-md-6"'); ?>
                                    <div class="text-danger"><?php echo isset($vld_errors['password_confirm']) ? $vld_errors['password_confirm'] : '';?></div>
                              </p>

                              <?php if ($ionAuth->isAdmin()) : ?>

                                    <h3><?php echo lang('Auth.edit_user_groups_heading'); ?></h3>
                                    <?php foreach ($groups as $group) : ?>
                                          <label class="checkbox">
                                                <?php
                                                            $gID = $group['id'];
                                                            $checked = null;
                                                            $item = null;
                                                            foreach ($currentGroups as $grp) {
                                                                  if ($gID == $grp->id) {
                                                                        $checked = ' checked="checked"';
                                                                        break;
                                                                  }
                                                            }
                                                            ?>
                                                <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                                                <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                          </label>
                                    <?php endforeach ?>

                              <?php endif ?>

                              <?php echo form_hidden('id', $user->id); ?>

                              <!-- <p>< ?php echo form_submit('button', lang('Auth.edit_user_submit_btn')); ?></p> -->
                              <p><button type="button" class="btn btn-info saveBtn" data-form-id="edit-user-form" data-url="/auth/edit_user/<?= $user->id;?>"><?php echo lang('Auth.edit_user_submit_btn');?> </button> </p>

                              <?php echo form_close(); ?>
                        </div>
                  </div>
            </div>
      </div>
</div>