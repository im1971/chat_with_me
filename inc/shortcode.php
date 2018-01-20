<?php
function sm_artistry_load_shortcode(){

    require_once FB_MESSENGER_PLUGIN_DIR . '/inc/markup.php';
}

function sm_artistry_register_shortcodes(){
    add_shortcode("fbmessenger","sm_artistry_load_shortcode");
}

add_action( 'init', 'sm_artistry_register_shortcodes');