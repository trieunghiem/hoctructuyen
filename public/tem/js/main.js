jQuery(document).ready(function() {
    $('.header-mobile__left_btn').on('click', function(){
        $('#page').addClass('panel_show_left');
    });
    $('.close').on('click', function(){
        $('#page').removeClass('panel_show_left');
    });
    $(document).on("click", ".hinhthucthanhtoan li.list-group-item a", function(){
            if ($(this).parent('li.list-group-item').hasClass('active')){
                $('.hinhthucthanhtoan .noidunghinhthuc').slideUp('fast');
                $(this).parent('li.list-group-item').removeClass('active');
            } else {
                $('.hinhthucthanhtoan li.list-group-item.active').removeClass('active');
                $('.hinhthucthanhtoan .noidunghinhthuc').slideUp('fast');
                $(this).parent('li.list-group-item').addClass('active').find('.noidunghinhthuc').slideDown('fast');
            }
        });
});
// Scroll To Top
$(document).ready(function(){
    $(".v2_bnc_icon_scrolltop").click(function(event){
        $('html, body').animate({ scrollTop: 0 }, 1000);
    });
    // Hide,Show ScrollToTop
    var num = 100;  
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {   
            $('.v2_bnc_scrolltop').addClass('fixed');
        }
        else
        {
            $('.v2_bnc_scrolltop').removeClass('fixed');
        }
    });
}); 
// End Scroll To Top 