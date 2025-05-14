import domReady from '../../core/domReady'

domReady(function () {
    if (sessionStorage.getItem('form_submitted')) {
        const popup = document.getElementById('success-popup');

        setTimeout(() => {
            popup.style.opacity = '0';
            setTimeout(() => {
                popup.remove();
            }, 1000);
        }, 3000);

        sessionStorage.removeItem('form_submitted');
    }
});