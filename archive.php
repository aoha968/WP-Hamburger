<!DOCTYPE html>
<html lang="ja">
    <head>
        <?php get_header(); ?> 
    </head>

    <body>
        <main class="l-main">
            <div class="l-main__container">
                <?php get_template_part('includes/header'); ?>

                <article class="l-main__content">
                    <div class="l-visual -archive">
                        <div class="l-visual -layer"></div>
                        <h2 class="l-visual__title">Menu:
                            <span>チーズバーガー</span>
                        </h2>
                    </div>
                    <div class="wrap">
                        <div class="wrap__title">
                            <h2>小見出しが入ります</h2>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <ul class="wrap__menu">
                            <?php
                                if (have_posts()) :
                                    while (have_posts()) :
                                        the_post();
                            ?>
                            <li class="wrap__menu__list">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/archive_contents.png">
                                <?php endif; ?>
                                <div class="wrap__menu__list__detail">
                                    <h2><?php the_title(); ?></h2>
                                    <h3><?php the_excerpt(); ?></h3>
                                    <p><?php the_content(); ?></p>
                                    <div class="wrap__menu__list__detail__btn">
                                    <a href="<?php the_permalink(); ?>"><button type="button">詳しく見る</button></a>
                                    </div>
                                </div>
                            </li>
                            <?php   endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="c-pagenation">
                        <span class="c-pagenation__pageview">page 1/10</span>
                        <a class="prev" href="#">
                            <i class="fas fa-angle-double-left"></i>
                            <span class="c-pagenation__pagetext">前へ</span>
                        </a>
                        <p class="c-pagenation__current c-pagenation__page -page__tab">1</p>
                        <a class="c-pagenation__page -page__tab" href="#">2</a>
                        <a class="c-pagenation__page -page__tab"  href="#">3</a>
                        <a class="c-pagenation__page -page__tab"  href="#">4</a>
                        <a class="c-pagenation__page -page__tab"  href="#">5</a>
                        <a class="c-pagenation__page -page__tab" href="#">6</a>
                        <a class="c-pagenation__page -page__tab" href="#">7</a>
                        <a class="c-pagenation__page -page__tab" href="#">8</a>
                        <a class="c-pagenation__page -page__tab" href="#">9</a>
                        <a class="next" href="#">
                            <span  class="c-pagenation__pagetext">次へ</span>
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </div>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </main>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </body>
</html>