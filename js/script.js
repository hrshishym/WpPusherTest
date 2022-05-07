const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: "fade",
    fadeEffect: { // Add this
        crossFade: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },

});