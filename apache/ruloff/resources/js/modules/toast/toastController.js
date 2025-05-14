export function showToast(message, type = 'success') {
    const toastContainer = document.getElementById('toast-container');

    const toast = document.createElement('div');
    toast.classList.add('notificationToast', type);

    const toastMessage = document.createElement('div');
    toastMessage.classList.add('toast-message');
    toastMessage.textContent = message;

    toast.appendChild(toastMessage);

    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        setTimeout(() => toast.remove(), 1000);
    }, 5000);
}

window.showToast = showToast;