export function validateForm(nameInput, phoneInput, consentCheckbox) {
    let isValid = true

    if (nameInput.value.trim() === '') {
        nameInput.classList.add('is-invalid')
        isValid = false
    }

    if (phoneInput.value.replace(/\D/g, '').length !== 11) {
        phoneInput.classList.add('is-invalid')
        isValid = false
    }

    if (!consentCheckbox.checked) {
        consentCheckbox.classList.add('is-invalid')
        isValid = false
    }

    return isValid
}
