<?php
function wsw_files() {
    wp_enqueue_script('slide', get_template_directory_uri() .'/assets/js/flickity.js' , array('jquery'), '1.0', true);
    wp_enqueue_script('slide',  get_template_directory_uri() . '/assets/js/lazyload.js' , array('jquery'), '1.0', true);
   
    wp_enqueue_script('wsw-js',  get_template_directory_uri() .'/assets/js/main.js' , array('jquery'), '1.0', true);
    wp_enqueue_style('carousel',  get_template_directory_uri() .'/assets/css/slider.css');
    wp_enqueue_style('wsw_main',  get_template_directory_uri() .'/assets/css/index.css');
   
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900family=Open+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet');
    wp_enqueue_style('icons', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
   
}


  
add_action('wp_enqueue_scripts', 'wsw_files');
