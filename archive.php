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
                            <li class="wrap__menu__list">
                                <img S src="../img/archive_contents.png">
                                <div class="wrap__menu__list__detail">
                                    <h2>チーズバーガー</h2>
                                    <h3>小見出しが入ります</h3>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="wrap__menu__list__detail__btn">
                                        <button type="button">詳しく見る</button>
                                    </div>
                                </div>
                            </li>
                            <li class="wrap__menu__list">
                                <img src="../img/archive_contents.png">
                                <div class="wrap__menu__list__detail">
                                    <h2>ダブルチーズバーガー</h2>
                                    <h3>小見出しが入ります</h3>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="wrap__menu__list__detail__btn">
                                        <button type="button">詳しく見る</button>
                                    </div>
                                </div>
                            </li>
                            <li class="wrap__menu__list">
                                <img src="../img/archive_contents.png">
                                <div class="wrap__menu__list__detail">
                                    <h2>スペシャルチーズバーガー</h2>
                                    <h3>小見出しが入ります</h3>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="wrap__menu__list__detail__btn">
                                        <button type="button">詳しく見る</button>
                                    </div>
                                </div>
                            </li>
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