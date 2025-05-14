import domReady from '../../../core/domReady'
import { sanitizeName, formatPhoneInput, handleBackspace } from './formatter'
import { validateForm } from './validators'

domReady(() => {
    const form = document.querySelector('form')
    const nameInput = document.getElementById('name')
    const phoneInput = document.getElementById('phone')
    const consentCheckbox = document.getElementById('consent')

    if (!form || !nameInput || !phoneInput || !consentCheckbox) return

    if (!nameInput.parentNode.querySelector('.invalid-feedback')) {
        const err = document.createElement('div')
        err.className = 'invalid-feedback'
        err.textContent = 'Введите ваше имя'
        nameInput.parentNode.appendChild(err)
    }

    if (!phoneInput.parentNode.querySelector('.invalid-feedback')) {
        const err = document.createElement('div')
        err.className = 'invalid-feedback'
        err.textContent = 'Введите полный номер'
        phoneInput.parentNode.appendChild(err)
    }

    nameInput.addEventListener('input', () => {
        nameInput.value = sanitizeName(nameInput.value)
        nameInput.classList.remove('is-invalid')
    })

    phoneInput.addEventListener('input', () => {
        phoneInput.value = formatPhoneInput(phoneInput.value)
        phoneInput.classList.remove('is-invalid')
    })

    consentCheckbox.addEventListener('change', () => {
        if (consentCheckbox.checked) {
            consentCheckbox.classList.remove('is-invalid')
        }
    })

    phoneInput.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace') {
            e.preventDefault()
            phoneInput.value = handleBackspace(phoneInput.value)
        }
    })

    form.addEventListener('submit', (e) => {
        if (!validateForm(nameInput, phoneInput, consentCheckbox)) {
            e.preventDefault()
        }
    })
})
