<?php 


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );


require get_template_directory() . '/inc/customizer.php';


function scripts(){

   
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', [], 1, 'all' );
    wp_enqueue_style( 'style' );
   
    wp_register_style( 'SASS_style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all' );
    wp_enqueue_style( 'SASS_style' );

    
};

add_action('wp_enqueue_scripts', 'scripts');



// Theme support

function setup(){

    add_theme_support('custom-logo');
    
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

   

}
 
add_action( 'after_setup_theme', 'setup' );




?>