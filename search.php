<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <?php get_header(); ?> 
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <main class="l-main">
                <div class="l-main__container">
                    <?php get_template_part('includes/header'); ?>

                    <article class="l-main__content">
                        <div class="l-visual -archive">
                            <div class="l-visual -layer"></div>
                            <h2 class="l-visual__title">Search:
                                <span><?php echo get_search_query(); ?></span>
                            </h2>
                        </div>
                        <div class="item">
                        <?php if (have_posts()): ?>
                            <?php if (!$_GET['s']) { ?>
                                <p>検索キーワードが未入力です<p>
                            <?php } else { ?>
                                <p class="page__title">
                                    「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件
                                </p>
                                <div class="item__title">
                                    <h2>小見出しが入ります</h2>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                                <ul class="item__menu">
                                    <?php if (have_posts()) : ?>
                                        <?php while (have_posts()) : the_post(); ?>
                                            <li class="item__menu__list">
                                                <?php if(has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('large'); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive_contents.png">
                                                <?php endif; ?>
                                                <div class="item__menu__list__detail">
                                                    <h2><?php the_title(); ?></h2>
                                                    <h3><?php the_excerpt(); ?></h3>
                                                    <a class="c-detail-btn" href="<?php the_permalink(); ?>">詳しく見る</a>
                                                </div>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                        </div>
                                <?php
                                    if ( function_exists( 'pagination' ) ) :
                                        pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
                                    endif;
                                ?>
                            <?php } ?>
                        <?php else: ?>
                            <p>検索されたキーワードに一致する記事はありませんでした</p>
                        <?php endif; ?>
                    </article>
                </div>
                <?php get_sidebar(); ?>
        </main>
        
        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </body>
</html>