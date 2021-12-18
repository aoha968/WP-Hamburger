<?php
    add_theme_support('title-tag');
    /* アイキャッチ画像を使用可能にする */
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    /* カスタムメニュー機能を使用可能にする */
    function register_my_menus() {      /* 追加するメニューが二つ以上の場合 */
        register_nav_menus(
            array(
            'cateogrymenu' => ( 'サイドメニュー' ),
            'footermenu' => ( 'フッターメニュー' )    /* 必要なメニューの数だけ追加 */
            )
        );
        }
        add_action( 'init', 'register_my_menus' );

    /* Theme Check対策 */
    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "html5" );
    add_theme_support( "custom-logo" );
    add_theme_support( "align-wide" );
    add_theme_support( "custom-background" );
    add_theme_support( "custom-header" );
