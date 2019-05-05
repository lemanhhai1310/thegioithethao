jQuery(document).on("click",".back-to-top",function(){jQuery(this).removeClass('display');jQuery('html, body').animate({scrollTop:0},600);});
jQuery(window).on("scroll",function(){
    if( jQuery('.back-to-top').length > 0 && jQuery(window).scrollTop() > 200 ){
        jQuery('.back-to-top').addClass('display');}
    else{
        jQuery('.back-to-top').removeClass('display');
    }
});


jQuery(document).ready(function($){
    mobile_menu_init();
    jQuery('#mobile_menu li.menu-item-has-children > a').append('<i></i>');
    jQuery('#mobile_menu li.menu-item-has-children > a > i').addClass('fa').addClass('fa-chevron-down');
    jQuery('#mobile_menu li.menu-item-has-children > a > i').click(function(e){
        e.preventDefault();
        jQuery(this).parent('a').next('ul').slideToggle();
        if(jQuery(this).hasClass('fa-chevron-down')) {
            jQuery(this).removeClass('fa-chevron-down').addClass('fa-chevron-up');
        }else {
            jQuery(this).removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }
    });
});
function mobile_menu_init() {
    var toggleButton = jQuery('#mobile_menu_toggler');
    var menuButton = jQuery('#m_nav_menu');
    var menuButtonBars = jQuery('.m_nav_ham');
    toggleButton.click(function(f){
        f.preventDefault();
        jQuery(this).toggleClass('active_mobile_menu');
        jQuery('#mobile_menu').slideToggle();
        if(jQuery(this).hasClass('active_mobile_menu')) {
            menuButtonBars.removeClass('button_closed');
            menuButtonBars.addClass('button_open');
            jQuery("#m_ham_1").addClass("m_nav_ham_1_open");
            jQuery("#m_ham_2").addClass("m_nav_ham_2_open");
            jQuery("#m_ham_3").addClass("m_nav_ham_3_open");
        } else  {
            menuButtonBars.removeClass('button_open');
            menuButtonBars.addClass('button_closed');
            jQuery("#m_ham_1").removeClass("m_nav_ham_1_open");
            jQuery("#m_ham_2").removeClass("m_nav_ham_2_open");
            jQuery("#m_ham_3").removeClass("m_nav_ham_3_open");
        }
    });
}

$(window).on("load", function (e) {
    UIkit.util.on('.sub_menu_h1', 'show', function () {
        // do something
        $('.mask_menu').fadeIn(300);
    });
    UIkit.util.on('.sub_menu_h1', 'hide', function () {
        // do something
        $('.mask_menu').stop(true, true).fadeOut(300);
    });

    UIkit.util.on('#toggle-usage', 'beforeshow', function () {
        console.log('open');
    });
    UIkit.util.on('#toggle-usage', 'beforehide', function () {
        console.log('close');
    });
});