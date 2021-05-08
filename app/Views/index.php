<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= isset($title) ? $title : lang('Main.default_title');?></title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?= base_url('/assets/admin/main/images/favicon.ico');?>">
    <!-- Start css -->
    <!-- Apex css -->
    <!-- <link href="<?= base_url('/assets/admin/main/plugins/apexcharts/apexcharts.css');?>" rel="stylesheet"> -->
    <!-- Botstrap css -->
    <link href="<?= base_url('/assets/admin/main/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
    <!-- <link href="<?= base_url('/assets/admin/main/css/icons.css');?>" rel="stylesheet" type="text/css"> -->
    <!-- <link href="<?= base_url('/assets/admin/main/css/flag-icon.min.css');?>" rel="stylesheet" type="text/css"> -->
    <link href="<?= base_url('/assets/admin/main/css/style.css');?>" rel="stylesheet" type="text/css">
    <!--AjaxCall css Links -->
    <div id="css-html">
        <?php echo (isset($css_html)) ? $css_html : '';?>
    </div>
    <!-- custom css -->
    <link href="<?= base_url('/assets/admin/custom/css/sd-admin.css');?>" rel="stylesheet" type="text/css">
    
    <!-- End css -->
</head>
<body class="vertical-layout">    
    <!-- Start Public Modal Html -->
    <div class="modal fade" id="public-modal" tabindex="-1" data-backdrop="static" role="dialog"
        aria-labelledby="public-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="public-modal-title">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- End Public Modal Html --> 
    
    <!-- Start header -->
    <div id="header-html">
        <?php echo (isset($header_html)) ? $header_html : '';?>
    </div>
    <!-- Start header -->
    
    <!-- Start sidebar -->
    <div id="sidebar-html">
        <?php echo (isset($sidebar_html)) ? $sidebar_html : '';?>
    </div>
    <!-- End sidebar -->

    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start topbar -->
        <div id="topbar-html">
            <?php echo (isset($topbar_html)) ? $topbar_html : '';?>
        </div>
        <!-- End topbar -->
        <!-- Start view -->
        <div id="view-html">
            <?php echo (isset($view_html)) ? $view_html : '';?>
        </div>
        <!-- End view -->
        <!-- Start footer -->
        <div id="footer-html">
            <?php echo (isset($footer_html)) ? $footer_html : '';?>
        </div>
        <!-- End footer -->
    </div>
            
    <script>
    var base_url = '<?php echo base_url();?>';
    </script>
    <!-- Start js -->        
    <script src="<?= base_url('/assets/admin/main/js/jquery.min.js');?>"></script>
    <script src="<?= base_url('/assets/admin/main/js/popper.min.js');?>"></script>
    <script src="<?= base_url('/assets/admin/main/js/bootstrap.min.js');?>"></script>
    <!-- <script src="<?= base_url('/assets/admin/main/js/modernizr.min.js');?>"></script> -->
    <!-- <script src="<?= base_url('/assets/admin/main/js/detect.js');?>"></script> -->
    <!-- <script src="<?= base_url('/assets/admin/main/js/jquery.slimscroll.js');?>"></script> -->
    <!-- Switchery js -->
    <script src="<?= base_url('/assets/admin/main/plugins/switchery/switchery.min.js');?>"></script>
    <!-- Apex js -->
    <!-- <script src="<?= base_url('/assets/admin/main/plugins/apexcharts/apexcharts.min.js');?>"></script> -->
    <!-- <script src="<?= base_url('/assets/admin/main/plugins/apexcharts/irregular-data-series.js');?>"></script>     -->
    
    <div id="js-html">
        <?php echo (isset($js_html)) ? $js_html : '';?>
    </div>

    <!-- Custom Js -->
    <script src="<?= base_url('/assets/admin/custom/js/sd-admin.js');?>"></script>
    

    <script>
        var show_notify = jQuery.parseJSON('<?php echo json_encode( isset($show_notify) ? $show_notify : '');?>');
        if(show_notify){
            new PNotify(show_notify);
        }
    </script>
    <!-- End js -->
</body>
</html>


