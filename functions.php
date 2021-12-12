<?php
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');

    /* css, jQuery */
    function Hamburger_script() {
        wp_enqueue_style('ress', '//unpkg.com/modern-css-reset/dist/reset.min.css');
        wp_enqueue_style('base', get_template_directory_uri() . '/public/css/style.css', array(), '1.0' );
        wp_enqueue_style('googleapis', '//fonts.googleapis.com');
        wp_enqueue_style('googleapis', '//fonts.gstatic.com');
        wp_enqueue_style('googleapis', '/fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;400&display=swap');

        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", array(), '3.6.0');
        wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    }
    add_action('wp_enqueue_scripts', 'Hamburger_script');
?>


<!-- // // 投稿のアーカイブページを作成する
// function post_has_archive($args, $post_type)
// {
//     if ('post' == $post_type) {
//         $args['rewrite'] = true; // リライトを有効にする
//         $args['has_archive'] = 'blog'; // 任意のスラッグ名
//     }
//     return $args;
// }
// add_filter('register_post_type_args', 'post_has_archive', 10, 2); -->