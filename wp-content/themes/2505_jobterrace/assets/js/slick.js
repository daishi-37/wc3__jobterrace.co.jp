/*---------------------------------------------------------*/
/* スライダー　slick                                          */
/*---------------------------------------------------------*/
jQuery(document).ready(function($) {
    if( $('.slick-type1').length ) {
        $('.slick-type1').slick({
            autoplay:true,
            arrows: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            autoplaySpeed: 2000,
            speed: 4000,
            slidesToShow: 1,
            fade: true,
        });
    }
});
