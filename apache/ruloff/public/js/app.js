document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.getElementById("name");
    const phoneInput = document.getElementById("phone");

    nameInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^А-Яа-яЁё\s]/g, "");
    });

    phoneInput.addEventListener("input", function () {
        let value = phoneInput.value.replace(/\D/g, "");
        let formattedValue = "+7 ";

        if (value.length > 1) {
            formattedValue += "(" + value.substring(1, 4);
        }
        if (value.length >= 4) {
            formattedValue += ") " + value.substring(4, 7);
        }
        if (value.length >= 7) {
            formattedValue += "-" + value.substring(7, 9);
        }
        if (value.length >= 9) {
            formattedValue += "-" + value.substring(9, 11);
        }

        phoneInput.value = formattedValue;
    });

    phoneInput.addEventListener("keydown", function (e) {
        if (e.key === "Backspace") {
            e.preventDefault();
            let value = phoneInput.value.replace(/\D/g, "");
            if (value.length > 1) {
                value = value.slice(0, -1);
            }
            let formattedValue = "+7 ";
            if (value.length > 1) {
                formattedValue += "(" + value.substring(1, 4);
            }
            if (value.length >= 4) {
                formattedValue += ") " + value.substring(4, 7);
            }
            if (value.length >= 7) {
                formattedValue += "-" + value.substring(7, 9);
            }
            if (value.length >= 9) {
                formattedValue += "-" + value.substring(9, 11);
            }
            phoneInput.value = formattedValue;
        }
    });


    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            992: { slidesPerView: 3 },
            768: { slidesPerView: 2 },
            576: { slidesPerView: 1 },
            320: { slidesPerView: 1 },
            0: {slidesPerView: 1}  
        }
    });


    var reviewsSwiper = new Swiper(".reviewsSwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
    
});