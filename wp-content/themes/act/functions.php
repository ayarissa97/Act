<?php

function actcourse_after_setup_theme()
{
    add_theme_support('title-tag');
}
do_action('after_setup_theme', 'actcourse_after_theme_setup');

function actcourse_include_assets()
{

    //include bootstrap css.
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0');

    wp_enqueue_style('bootstrap-icon', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '1.0');
    wp_enqueue_style('aos-style', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0');
    wp_enqueue_style('glightbox-style', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), '1.0');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), '1.0');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0');

    //include js.
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '1.0', true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0', true);
    wp_enqueue_script('purecounter_vanilla', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), '1.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}


add_action( 'wp_enqueue_scripts', 'actcourse_include_assets' );
