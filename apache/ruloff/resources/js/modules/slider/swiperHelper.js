import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

Swiper.use([Navigation]);


import { loadSliderImages } from './loader'

export function initSwiper(sliderSelector, imageContainerSelector, swiperOptions) {
    const sliderElement = document.querySelector(sliderSelector)
    if (!sliderElement) return null

    const swiper = new Swiper(sliderSelector, swiperOptions)

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                loadSliderImages(entry.target, imageContainerSelector)
                observer.unobserve(entry.target)
            }
        })
    }, { threshold: 0.1 })

    observer.observe(sliderElement)
    return swiper
}
