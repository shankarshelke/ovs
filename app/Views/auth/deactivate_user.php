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
          <h1><?php echo lang('Auth.deactivate_heading'); ?></h1>
          <p><?php echo sprintf(lang('Auth.deactivate_subheading'), $user->username); ?></p>

          <?php echo form_open('auth/deactivate/' . $user->id, 'id="deactivate-form"'); ?>

          <p>
            <?php echo form_label(lang('Auth.deactivate_confirm_y_label'), 'confirm'); ?>
            <input type="radio" name="confirm" value="yes" checked="checked" />
            <?php echo form_label(lang('Auth.deactivate_confirm_n_label'), 'confirm'); ?>
            <input type="radio" name="confirm" value="no" />
          </p>

          <?php echo form_hidden('id', $user->id); ?>

          <!-- <p>< ?php echo form_submit('submit', lang('Auth.deactivate_submit_btn'));?></p> -->
          <p><button type="button" class="btn btn-info saveBtn" data-form-id="deactivate-form" data-url="/auth/deactivate/<?= $user->id; ?>"><?php echo lang('Auth.deactivate_submit_btn'); ?> </button> </p>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>