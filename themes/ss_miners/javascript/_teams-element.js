(() => {
    const node = document.querySelector('.section.teams .swiper')
    new Swiper(node, {
        slidesPerView: 'auto',
        spaceBetween: 30,
        freeMode: true,
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
        }
      })
})();