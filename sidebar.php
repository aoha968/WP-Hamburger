<div class="l-sidebar__bg"></div>
<aside class="l-sidebar">
    <h2>Menu</h2>
    <button class="c-menu__btn"><span>close</span></button>
    <h3><a href="#">バーガー</a></h3>
    <ul>
        <?php
            $args = array(
                'menu' => 'global-navigation-hamburger',      /* 管理画面で作成したメニューの名前 */
                'menu_class' => '',                           /* メニューを構成するulタグのクラス名 */
                'container' => false,                         /* ulタグを囲んでいるdivタグを削除 */
            );
            wp_nav_menu($args);
        ?>
    </ul>
    <h3><a href="#">サイド</a></h3>
    <ul>
        <?php
            $args = array(
                'menu' => 'global-navigation-side',           /* 管理画面で作成したメニューの名前 */
                'menu_class' => '',                           /* メニューを構成するulタグのクラス名 */
                'container' => false,                         /* ulタグを囲んでいるdivタグを削除 */
            );
            wp_nav_menu($args);
        ?>
    </ul>
    <h3><a href="#">ドリンク</a></h3>
    <ul>
        <li><a href="#">コーラ</a></li>
        <li><a href="#">ファンタ</a></li>
        <li><a href="#">オレンジ</a></li>
        <li><a href="#">アップル</a></li>
        <li><a href="#">紅茶（Ice/Hot）</a></li>
        <li><a href="#">コーヒー（Ice/Hot）</a></li>
    </ul>
</aside>