// homepage image loop
(() => {
    const items = [...document.querySelectorAll('.header-container')]

    const isVisible = (element) => !element?.classList.contains('hidden')
    const show = (element) => element?.classList.remove('hidden')
    const hide = (element) => element?.classList.add('hidden')

    const showNext = () => {
        const current = items.findIndex(isVisible)
        const next = (current + 1) % items.length;

        items[current] && hide(items[current])
        show(items[next])
    }

    showNext()
    setInterval(showNext, 3000)
})();

// homepage rooster tabs
(() => {
    const root = document.querySelector('.section.rooster')
    const tabSelectors = [...root.querySelectorAll('.team-logos > *')]
    const playerLists = [...root.querySelectorAll('.players')]

    const withTeamId = (id) => (elem) => elem.dataset.teamid == id

    const show = (element) => element?.classList.remove('hidden')
    const hide = (element) => element?.classList.add('hidden')
    
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