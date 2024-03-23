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