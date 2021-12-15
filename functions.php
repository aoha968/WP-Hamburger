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

    /* サイドバーを出力するにあたっての整形する関数 */
    class custom_walker_nav_menu extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth = 0, $args = array()) {
            $output .= '<ul>';
        }
        function end_lvl(&$output, $depth = 0, $args = array()) {
            $output .= '</ul>';
        }
    }

    /* ページネーション */
    /* https://inokawablog.org/wordpress/wordpress-pagenation-no-plugin/ */
    function pagination( $pages, $paged, $range = 3, $show_only = false ) {
        $pages = ( int ) $pages;
        $paged = $paged ?: 1;
        $text_before  = "＜＜ 前へ";
        $text_next    = "次へ ＞＞";
        if ( $show_only && $pages === 1 ) {
            echo '<div class="pagination"><span class="current pager">1</span></div>';
            return;
        }
        if ( $pages === 1 ) return;    /* １ページのみで表示設定もない場合 */
        if ( 1 !== $pages ) {
            /* ２ページ以上の時 */
            echo '<div class="c-pagenation">';
            echo '<span class="c-pagenation__pageview">Page ', $paged ,' / ', $pages ,'</span>';   /* 現在のページ数などを表示 */
            if ( $paged == $pages ) {
                /* 一番後ろのページネーションの時は「＜＜前へ」を左寄せ、「次へ＞＞」は表示されない */
                echo '<div class="prev__left"><a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev"><span class="c-pagenation__pagetext">', $text_before ,'</span></a></div>';
            }
            else if ( $paged > 1 ) {
                /* 「＜＜前へ」 の表示 */
                echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev"><span class="c-pagenation__pagetext">', $text_before ,'</span></a>';
            }

            for ( $i = 1; $i <= $pages; $i++ ) {
                if ( $i <= $paged + $range && $i >= $paged - $range ) {
                    /* $paged +- $range 以内であればページ番号を出力 */
                    if ( $paged === $i ) {
                        echo '<p class="c-pagenation__current c-pagenation__page -page__tab">', $i ,'</p>';
                    } else {
                        echo '<a href="', get_pagenum_link( $i ) ,'" class="c-pagenation__page -page__tab">', $i ,'</a>';
                    }
                }
            }
            if ( $paged == 1 ) {
                /* 一番最初のページネーションの時は「次へ＞＞」を右寄せ、「＜＜前へ」は表示されない */
                echo '<div class="next__right"><a href="', get_pagenum_link( $paged + 1 ) ,'" class="next"><span class="c-pagenation__pagetext">', $text_next ,'</span></a></div>';
            }
            else if ( $paged < $pages ) {
                /* 「次へ＞＞」 の表示 */
                echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next"><span class="c-pagenation__pagetext">', $text_next ,'</span></a>';
            }
            echo '</div>';
        }
    }



