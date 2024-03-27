
(() => {
    document.querySelectorAll('.section.news .swiper').forEach(node => {
        new Swiper(node, {
            slidesPerView: 'auto',
            spaceBetween: 30,
            freeMode: true,
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: false,
            }
          })
    })
})();