<?php

    function siteScripts() {
        
        wp_enqueue_script('scripts-js', get_template_directory_uri().'/js/scripts.js');
        wp_enqueue_style('style-css', get_template_directory_uri().'/style.css');
    }
        
    add_action('wp_enqueue_scripts', 'siteScripts');
?>