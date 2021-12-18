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
                    <div class="l-visual -front">
                        <h2>ダミーサイト</h2>
                    </div>
                    <ul class="p-card">
                        <li class="p-card__list -takeout">
                            <?php $cat = get_category_by_slug('takeout'); ?>
                            <a href="<?php echo get_category_link( $cat->cat_ID); ?>">
                                <h2>Take Out</h2>
                                <dl>
                                    <dt>Take OUT</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                                <dl>
                                    <dt>Take OUT</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                            </a>
                        </li>
                        <li class="p-card__list -eatin">
                            <?php $cat = get_category_by_slug('eatin'); ?>
                            <a href="<?php echo get_category_link( $cat->cat_ID); ?>">
                                <h2>Eat In</h2>
                                <dl>
                                    <dt>Take OUT</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                                <dl>
                                    <dt>Take OUT</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                            </a>
                        </li>
                    </ul>
                    <section class="p-access">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d904.5428802981785!2d130.36010448131128!3d33.59582942938617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541924d04c53b73%3A0xc28cc19b818683e5!2z44Oi44K544OQ44O844Ks44O8IOemj-WyoVBheVBheeODieODvOODoOW6lw!5e0!3m2!1sja!2sjp!4v1614218912687!5m2!1sja!2sjp" width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="c-layer -rear"></div>
                        <div class="c-layer -front"></div>
                        <div class="p-access__text">
                            <h2>見出しが入ります</h2>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                    </section>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </main>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </body>
</html>