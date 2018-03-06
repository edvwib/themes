<?php

function isActive (string $page) {
    if (stripos($_SERVER['REQUEST_URI'],$page)) {
        return 'active';
    }

    return '';
}

add_action('wp_enqueue_scripts', function () {

});
