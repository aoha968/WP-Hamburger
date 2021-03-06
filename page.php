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
                    <div class="l-visual -page">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <section class="posted">
                        <?php the_content(); ?>
                    </section>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </main>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </body>
</html>