export function loadSliderImages(slider, imageContainerSelector) {
    const images = slider.querySelectorAll(`${imageContainerSelector} img[loading="lazy"]`)
    images.forEach((img) => {
        img.removeAttribute('loading')
    })
}
