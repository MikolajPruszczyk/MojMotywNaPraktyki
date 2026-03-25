<?php
// laczenie stylow i skryptow
function mojmotyw_scripts()
{
    wp_enqueue_style(
        'style',
        get_stylesheet_uri()
    );
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/script.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'mojmotyw_scripts');
?>