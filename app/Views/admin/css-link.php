<!-- Show Css Plugins  -->
<?php 
        $css_html = '';
        foreach ($plugins as $key => $plugin) {
                switch ($plugin) {
                        case EDITOR://Summernote css
                                $css_html .= '<link href="' . base_url('/assets/admin/main/plugins/summernote/summernote-bs4.css') . '" rel="stylesheet" type="text/css">';
                                break;
                        case DROPZONE://Dropzone css
								$css_html .= '<link href="' . base_url('/assets/admin/main/plugins/dropzone/dist/dropzone.css') . '" rel="stylesheet" type="text/css">';
                                break;
						case DATATABLE://Datatable css
								$css_html .= '<link href="' . base_url('/assets/admin/main/plugins/datatables/dataTables.bootstrap4.min.css') . '" rel="stylesheet" type="text/css">';
								$css_html .= '<link href="' . base_url('/assets/admin/main/plugins/datatables/buttons.bootstrap4.min.css') . '" rel="stylesheet" type="text/css">';
								//Responsive Datatable css
								$css_html .= '<link href="' . base_url('/assets/admin/main/plugins/datatables/responsive.bootstrap4.min.css') . '" rel="stylesheet" type="text/css">';
                                break;
                        
                        default:
                                null;
                                break;
                }
        }

        return $css_html;
?>
