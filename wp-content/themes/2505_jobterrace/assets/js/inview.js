/*---------------------------------------------------------*/
/* INVIEW                                                  */
/*---------------------------------------------------------*/
$('.fade  ,.fade-up-50, .fade-down-50').on('inview', function(event, isInView){
    if (isInView) {
        $(this).addClass('fade-in');
    }
});