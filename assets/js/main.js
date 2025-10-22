(function($) {
    "use strict";
  
    const $documentOn = $(document);
    const $windowOn = $(window);
        $(document).ready(function() {

            new WOW().init();
            

            const slider = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 5,
            spaceBetween: 15,            // ভিজ্যুয়াল গ্যাপ আমরা CSS margin দিয়ে দিয়েছি
            allowTouchMove: true,       // টাচ/ড্র্যাগ থাকবে; চাইলে false করুন
            freeMode: {
                enabled: true,
                momentum: false
            },
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: false  // hover করলে থামাতে চাইলে true দিন
            },
            speed: getComputedStyle(document.documentElement)
                    .getPropertyValue('--speed').trim() || 6000,
            });
        });
  })(jQuery);