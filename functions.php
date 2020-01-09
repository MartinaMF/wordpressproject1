<?php
function livechate_files(){
    wp_enqueue_script('main-js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,microtime(),true);
    wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_script('jQuery','//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('cdn','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script('maxcdn','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('fontawesome','//use.fontawesome.com/releases/v5.0.8/js/all.js');
    wp_enqueue_style('livechate_main_styles',get_stylesheet_uri(),NULL,microtime());
    wp_localize_script('main-js','livechateData',array(
        'root_url' => get_site_url()
    ));
}
function livechate_features(){
    add_theme_support('title-tag');
}
add_action('wp_enqueue_scripts', 'livechate_files');
add_action('after_setup_theme', 'livechate_features');
?>