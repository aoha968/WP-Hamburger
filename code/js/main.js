/*======================================
windowサイズ変更処理
========================================*/
$(window).resize(function(){
    var window_width = window.innerWidth;
    var pc_width = 1025;
    var timer = false;
    var sidebar = $(".l-main").find(".l-sidebar");

    if(timer !== false){
        clearTimeout(timer);
    }
    timer = setTimeout(function(){
        if(pc_width <= window_width)
            if($(sidebar).hasClass('open')){
                MenuClose();
        }
    });
});

/*======================================
アコーディオンメニュー
========================================*/
$(function(){
    var sidebar = $(".l-main").find(".l-sidebar");
    var menu__btn = $(sidebar).find(".c-menu__btn");

    /*======================================
    Menuボタン押下時
    ========================================*/
    $(".l-header__menu-btn").on("click", function() {
        MenuOpen();
    });

    /*======================================
    ×ボタン押下時
    ========================================*/
    $(menu__btn).on("click", function() {
        MenuClose();
    });
});

function MenuOpen() {
    var sidebar = $(".l-main").find(".l-sidebar");
    var sidebar__bg = $(".l-main").find(".l-sidebar__bg");

    $(sidebar__bg).removeClass("open").addClass("open");    /* グレー背景 */
    $(sidebar).removeClass("open").addClass("open");        /* サイドメニュー */
    $("html").css( "overflow", "hidden" );                 /* メインコンテンツをスクロールさせないようにする */
}

function MenuClose() {
    var sidebar = $(".l-main").find(".l-sidebar");
    var sidebar__bg = $(".l-main").find(".l-sidebar__bg");

    $(sidebar__bg).addClass("open").removeClass("open");    /* グレー背景 */
    $(sidebar).addClass("open").removeClass("open");        /* サイドメニュー */
    $("html").css( "overflow", "visible" );                 /* メインコンテンツをスクロールできるようにする */
}

