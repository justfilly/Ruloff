import domReady from '@/core/domReady'

domReady(() => {
    const popup = document.getElementById('success-popup')

    if (sessionStorage.getItem('form_submitted') && popup) {
        setTimeout(() => {
            popup.style.opacity = '0'
            setTimeout(() => {
                popup.remove()
            }, 1000)
        }, 4000)

        sessionStorage.removeItem('form_submitted')
    }
})
