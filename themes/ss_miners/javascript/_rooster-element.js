(() => {
    const root = document.querySelector('.section.rooster')
    const tabSelectors = [...root.querySelectorAll('.team-logos > *')]
    const playerLists = [...root.querySelectorAll('.players')]

    const withTeamId = (id) => (elem) => elem.dataset.teamid == id

    const show = (element) => element?.classList.remove('d-none')
    const hide = (element) => element?.classList.add('d-none')
    
    const dim = (element) => element && (element.style = '')
    const undim = (element) => element && (element.style.opacity = '1')

    const setActive = (tabSelectorElem) => {
        const teamId = tabSelectorElem.dataset.teamid

        tabSelectors.forEach(dim)
        undim(tabSelectors.find(withTeamId(teamId)))

        playerLists.forEach(hide)
        show(playerLists.find(withTeamId(teamId)))
    }

    tabSelectors.forEach((elem) => elem.addEventListener('click', () => setActive(elem)))
    tabSelectors[0] && setActive(tabSelectors[0])
})();

(() => {
    document.querySelectorAll('.section.rooster .swiper').forEach(node => {
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