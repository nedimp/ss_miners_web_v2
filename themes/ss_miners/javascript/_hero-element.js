(() => {
    const items = [...document.querySelectorAll('.header-container')]
    const navItems = [...document.querySelectorAll('.nav-bar-item')]

    const isVisible = (element) => !element?.classList.contains('hidden')
    const show = (element) => element?.classList.remove('hidden')
    const hide = (element) => element?.classList.add('hidden')

    const activate = (element) => element?.classList.add('active')
    const deactivate = (element) => element?.classList.remove('active')

    const showNext = () => {
        const current = items.findIndex(isVisible)
        const next = (current + 1) % items.length;

        // update image
        items[current] && hide(items[current])
        show(items[next])

        navItems[current] && deactivate(navItems[current])
        activate(navItems[next])
    }

    showNext()
    setInterval(showNext, 3000)
})();