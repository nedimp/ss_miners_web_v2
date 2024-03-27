(() => {
    document.querySelectorAll('.section.hero .swiper').forEach(node => {
        new Swiper(node, {
            pagination: {
                el: ".swiper-pagination",
            },
            effect: 'fade',
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
        })
    })
})();
