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
                    <?php if(have_posts()): ?>
                        <?php
                            $title_bg = "";
                            if ( has_post_thumbnail() ) {
                                $img_url = wp_get_attachment_url( get_post_thumbnail_id() );
                                $title_bg = "background-image:url(".$img_url."); background-size: cover;";
                            }
                        ?>
                        <?php while(have_posts()): ?>
                            <?php wp_link_pages(); ?>
                            <div style="<?php echo $title_bg; ?>" class="l-visual -single">
                                <?php the_post(); ?>
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <section class="posted">
                                <div class="posted__title">
                                    <?php the_content(); ?>
                                </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </main>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </body>
</html>