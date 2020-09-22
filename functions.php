<?php

function wpwc_starter_enqueue() {
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

    if($_SERVER['SERVER_NAME'] != 'localhost') {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.min.css');
    } else {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '', true);
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_script( 'bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'wpwc_starter_enqueue');