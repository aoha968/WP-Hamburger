<header class="l-header">
    <button class="l-header__menu-btn">Menu</button>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="l-header__logo"><?php bloginfo('name'); ?></h1></a>

    <?php get_search_form(); ?>
</header>