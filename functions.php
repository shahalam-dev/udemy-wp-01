<?php

    // called stylesheet & javascript
    function university_files() {
        wp_enqueue_style( 'main_style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'university_files');