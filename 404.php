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
                    <div class="wrap">
                        <div class="error__figure">
                            <div class="sad__mac"></div>
                            <p class="error__text">指定された以下のページは存在しないか、または移動した可能性があります。</p>
                            <p class="error__text">URL ：<span><?php echo esc_url(get_pagenum_link()); ?></span></p>
                            <p class="error__text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ</a></p>
                        </div>
                    </div>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </main>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </body>
</html>