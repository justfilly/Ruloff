import domReady from '@/core/domReady'
import { initSwiper } from './swiperHelper'
import 'swiper/swiper-bundle.css'

domReady(() => {
    initSwiper('.mySwiper', '.product-card', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            992: { slidesPerView: 3 },
            768: { slidesPerView: 2 },
            576: { slidesPerView: 1 },
            320: { slidesPerView: 1 },
            0: { slidesPerView: 1 },
        },
    })

    initSwiper('.reviewsSwiper', '.review-item', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    })
})
