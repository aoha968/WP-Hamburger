<div class="l-sidebar__bg"></div>
<aside class="l-sidebar">
    <h2>Menu</h2>
    <button class="c-menu__btn"><span>close</span></button>
    <?php 
        /* 参考サイト：https://01earth.jp/web-create/wordpress/walker_nav_menu-howto/ */
        wp_nav_menu( array( 
            'menu_id' => 'cateogrymenu',
            'menu_class' => 'c-menu',
            'theme_location' => '',
            'walker'  => new custom_walker_nav_menu
        ) ); 
    ?>
</aside>