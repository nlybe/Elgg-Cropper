<?php
/**
 * Cropper jQuery image tool for Elgg
 * @package cropper 
 */
 
elgg_register_event_handler('init', 'system', 'cropper_init');

function cropper_init() {  
    
    // register a library of helper functions
    elgg_register_library('elgg:cropper', elgg_get_plugins_path() . 'cropper/lib/cropper.php');
    
    // extend css
    elgg_extend_view("css/elgg", "cropper/cropper.css");
    elgg_extend_view('css/admin', 'cropper/cropper_admin.css');
    elgg_register_css('cropper_css', '//cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css');

    // extend JS
    elgg_register_js('cropper', elgg_get_site_url() . 'mod/cropper/views/default/cropper/cropper.js');
    elgg_define_js('cropper_js', array(
        'src' => "//cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.js", 
        'deps' => array('jquery'),
        'exports' => 'cropper_js',
    ));    
    
    // register plugin settings view
    elgg_register_simplecache_view('cropper/settings.js'); 

    // Register actions
    $action_path = elgg_get_plugins_path() . 'cropper/actions/cropper';
    //elgg_unregister_action('avatar/crop', "$action_path/search.php");
    elgg_register_action('cropper/avatar/crop', "$action_path/avatar/crop.php");
    
}

