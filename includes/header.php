<header class="l-header">
    <button class="l-header__menu-btn">Menu</button>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="l-header__logo"><?php bloginfo('name'); ?></h1></a>
    <form class="l-header__form">
        <div class="l-header__form__wrap">
            <input type="text" class="l-header__form__search">
        </div>
        <button type="submit" name="" class="l-header__form__btn" value="">検索</button>
    </form>
</header>