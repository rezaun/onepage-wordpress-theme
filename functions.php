<?php

//Kirki customizer
require_once (get_theme_file_path('/inc/stack-customizer.php'));

function stack_setup(){
    add_theme_support('title-tag');
    load_theme_textdomain('stack', get_template_directory_uri().'/languages');
}
add_action('after_setup_theme','stack_setup');

function stack_assets(){
    wp_enqueue_style("stack", get_stylesheet_uri());
    wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.min.css"));
    wp_enqueue_style("line-icons-css", get_theme_file_uri("/assets/fonts/line-icons.css"));
    wp_enqueue_style("slicknav-css", get_theme_file_uri("/assets/css/slicknav.css"));
    wp_enqueue_style("owl-carousel-css", get_theme_file_uri("/assets/css/owl.carousel.min.css"));
    wp_enqueue_style("owl-theme-css", get_theme_file_uri("/assets/css/owl.theme.css"));
    wp_enqueue_style("magnific-popup-css", get_theme_file_uri("/assets/css/magnific-popup.css"));
    wp_enqueue_style("nivo-lightbox-css", get_theme_file_uri("/assets/css/nivo-lightbox.css"));
    wp_enqueue_style("magnific-popup-css", get_theme_file_uri("/assets/css/magnific-popup.css"));
    wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"));
    wp_enqueue_style("responsive-css", get_theme_file_uri("/assets/css/responsive.css"));
    wp_enqueue_style("main-css", get_theme_file_uri("/assets/css/main.css"));

    wp_enqueue_script("popper-min-js", get_theme_file_uri("/assets/js/popper.min.js"), array('jquery'), null, true);
    wp_enqueue_script("bootstrap.min.js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), null, true);
    wp_enqueue_script("waypoints-jquery-js", get_theme_file_uri("/assets/js/waypoints.min.js"), array("jquery"), null, true);
    wp_enqueue_script("owl-carousel-min-js", get_theme_file_uri("/assets/js/owl.carousel.min.js"), array("jquery"), null, true);
    wp_enqueue_script("mixitup-js", get_theme_file_uri("/assets/js/jquery.mixitup.js"), array("jquery"), null, true);
    wp_enqueue_script("wow-js", get_theme_file_uri("/assets/js/wow.js"), array("jquery"), null, true);
    wp_enqueue_script("jquery-nav-js", get_theme_file_uri("/assets/js/jquery.nav.js"), array("jquery"), null, true);
    wp_enqueue_script("scrolling-nav-js", get_theme_file_uri("/assets/js/scrolling-nav.js"), array("jquery"), null, true);
    wp_enqueue_script("easing-js", get_theme_file_uri("/assets/js/jquery.easing.min.js"), array("jquery"), null, true);
    wp_enqueue_script("counterup-js", get_theme_file_uri("/assets/js/jquery.counterup.min.js"), array("jquery"), null, true);
    wp_enqueue_script("nivo-lightbox-js", get_theme_file_uri("/assets/js/nivo-lightbox.js"), array("jquery"), null, true);
    wp_enqueue_script("magnific-popupjs", get_theme_file_uri("/assets/js/jquery.magnific-popup.min.js"), array("jquery"), null, true);
    wp_enqueue_script("slicknav-js", get_theme_file_uri("/assets/js/jquery.slicknav.js"), array("jquery"), null, true);
    wp_enqueue_script("nivo-lightbox-js", get_theme_file_uri("/assets/js/nivo-lightbox.js"), array("jquery"), null, true);
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), null, true);
}
add_action('wp_enqueue_scripts','stack_assets');