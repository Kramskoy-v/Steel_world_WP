<?php


add_action( 'wp_enqueue_scripts', function (){
    function my_update_jquery () {
        if ( !is_admin() ) { 
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', false, false, false);
        wp_enqueue_script('jquery');
        }
    }


    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css' );
    
    wp_enqueue_script( 'swiperScript', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script( 'fancyboxJs', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
);

add_action( 'after_setup_theme', 'add_menu' );
function add_menu() {
	register_nav_menu( 'main_menu', 'Главное меню' );
}


add_theme_support( 'post-thumbnails' );
add_theme_support('title-tag');
add_theme_support('custom-logo');

/* Отключаем админ-панель для всех пользователей. */
show_admin_bar(false);

?>