<footer class="l-footer">
    <?php
                $args = array(
                'menu' => 'footermenu',
                'menu_class' => 'l-footer__list',
                'theme_location' => '',
                );
                wp_nav_menu( $args );
            ?>
    <address class="c-copyright">Copyright: RaiseTech</address>
</footer>