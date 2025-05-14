export function sanitizeName(value) {
    return value.replace(/[^А-Яа-яЁё\s]/g, '')
}

export function formatPhoneInput(raw) {
    let value = raw.replace(/\D/g, '')
    let formatted = '+7 '
    if (value.length > 1) formatted += '(' + value.substring(1, 4)
    if (value.length >= 4) formatted += ') ' + value.substring(4, 7)
    if (value.length >= 7) formatted += '-' + value.substring(7, 9)
    if (value.length >= 9) formatted += '-' + value.substring(9, 11)
    return formatted
}

export function handleBackspace(raw) {
    let value = raw.replace(/\D/g, '')
    if (value.length > 1) value = value.slice(0, -1)
    return formatPhoneInput(value)
}
