<?php
    /* WordPressの設定ファイルを読み込む */
    require_once(__DIR__ . "/lib/setting.php");

    /* css, jQuery */
    function Hamburger_script() {
        wp_enqueue_style('ress', '//unpkg.com/modern-css-reset/dist/reset.min.css');
        wp_enqueue_style('base', get_template_directory_uri() . '/public/css/style.css', array(), '1.0' );
        wp_enqueue_style('googleapis', '//fonts.googleapis.com');
        wp_enqueue_style('googleapis', '//fonts.gstatic.com');
        wp_enqueue_style('googleapis', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;400&display=swap');

        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", array(), '3.6.0');
        wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    }
    add_action('wp_enqueue_scripts', 'Hamburger_script');


