<?php

function load_stylessheets(){

  wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all');
  
  wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all');

  wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), 1, 'all');

  wp_enqueue_style('ionicons', get_template_directory_uri() . '/fonts/ionicons/css/ionicons.min.css', array(), 1, 'all');

  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', array(), 1, 'all');

  wp_enqueue_style('flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', array(), 1, 'all');

  wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css', array(), 1, 'all');

  wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');

  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');

  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array() , 1, 1, 1);

  wp_enqueue_script('migratejq', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array() , 1, 1, 1);

  wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array() , 1, 1, 1);

  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array() , 1, 1, 1);

  wp_enqueue_script('owljs', get_template_directory_uri() . '/js/owl.carousel.min.js', array() , 1, 1, 1);

  wp_enqueue_script('waypointsjq', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array() , 1, 1, 1);

  wp_enqueue_script('fancyboxjq', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array() , 1, 1, 1);

  wp_enqueue_script('stellarjq', get_template_directory_uri() . '/js/jquery.stellar.min.js', array() , 1, 1, 1);


  wp_enqueue_script('aosjs', get_template_directory_uri() . '/js/aos.js', array() , 1, 1, 1);


  wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array() , 1, 1, true);

}

add_action('wp_enqueue_scripts', 'load_stylessheets');

add_image_size('product_image_small', 400, 400, false);
add_image_size('product_image_large', 700, 700, false);