<?php

require get_template_directory().'/post-types/employee.php';
require get_template_directory().'/taxonomies/location.php';

add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
});



function isActive (string $page) {
    if (stripos($_SERVER['REQUEST_URI'], $page))
        return 'active';
    return '';
}
