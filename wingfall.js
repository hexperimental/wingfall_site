$( document ).ready(function() {
    var lastScrollTop = 0;
    var rotation =0;
   $(document).on( 'scroll', window, function(){
        var $w = $(this),
        scroll_top = $w.scrollTop(),
        total_height = $("body").height(),
        viewable_area = $w.height(),
        scrollPercent = Math.floor((scroll_top + viewable_area) / total_height * 100);
        var margin=50;
        var posX = ( (scroll_top*100)/($("#stage").height()-150)+2);
        var angleDelta = 1;
        if(scroll_top< 0){return}
        if(posX > 82){return}
        if (scroll_top > lastScrollTop){
            angleDelta=-5;
        } else {
            angleDelta=5;
        }
        rotation+= angleDelta;

        if(rotation>45){rotation=45;}
        if(rotation<-45){rotation=-45;}

        $("#dude").rotate(rotation)
        $("#dude").css('left',posX+'%')
        lastScrollTop = scroll_top;
    });
});
jQuery.fn.rotate = function(degrees) {
    $(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
    return $(this);
};
