(function($) {
    "use strict";
        $(document).ready(function() {

            new WOW({
                offset: 60,
                mobile: true,
                live: true
            }).init();
            

            const slider = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 5,
            spaceBetween: 15,          
            allowTouchMove: true,  
            freeMode: {
                enabled: true,
                momentum: false
            },
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: false  
            },
            speed: getComputedStyle(document.documentElement)
                    .getPropertyValue('--speed').trim() || 6000,
            });
        });
  })(jQuery);