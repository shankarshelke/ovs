
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Orbiter - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <script>
    var base_url = '<?php echo base_url();?>';
    </script>
    <!-- Start js -->        
    <script src="<?php echo base_url('assets/admin/main/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/modernizr.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/detect.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/jquery.slimscroll.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/vertical-menu.js');?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/admin/custom/js/sd-admin.js');?>"></script>
    <!-- Switchery js -->
    <script src="<?php echo base_url('assets/admin/main/plugins/switchery/switchery.min.js');?>"></script>
    <!-- Apex js -->
    <script src="<?php echo base_url('assets/admin/main/plugins/apexcharts/apexcharts.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/apexcharts/irregular-data-series.js');?>"></script>    
    <!-- Slick js -->
    <script src="<?php echo base_url('assets/admin/main/plugins/slick/slick.min.js');?>"></script>
    <!-- Custom Dashboard js -->   
    <script src="<?php echo base_url('assets/admin/main/js/custom/custom-dashboard.js');?>"></script>
    <!-- Pnotify js -->
    <script src="<?php echo base_url('assets/admin/main/plugins/pnotify/js/pnotify.custom.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/custom/custom-pnotify.js');?>"></script>
    
    <!-- Sweet-Alert js -->
    <script src="<?php echo base_url('assets/admin/main/plugins/sweet-alert2/sweetalert2.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/custom/custom-sweet-alert.js');?>"></script>

    
    <!-- Datatable js -->
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/buttons.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/buttons.colVis.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/dataTables.responsive.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/plugins/datatables/responsive.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/main/js/custom/custom-table-datatable.js');?>"></script>

    <script>
        var show_notify = jQuery.parseJSON('<?php echo json_encode($this->show_notify);?>');
        if(show_notify){
            new PNotify(show_notify);
        }
    </script>
    <!-- Core js -->
    <script src="<?php echo base_url('assets/admin/main/js/core.js');?>"></script>

    <div id="js-html">

    </div>
    <!-- End js -->
</body>
</html>