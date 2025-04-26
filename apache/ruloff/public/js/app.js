document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.getElementById("name");
    const phoneInput = document.getElementById("phone");
    const consentCheckbox = document.getElementById("consent");
    const form = document.querySelector("form");

    if (!nameInput.parentNode.querySelector(".invalid-feedback")) {
        const nameError = document.createElement("div");
        nameError.className = "invalid-feedback";
        nameError.textContent = "Введите ваше имя";
        nameInput.parentNode.appendChild(nameError);
    }
    
    if (!phoneInput.parentNode.querySelector(".invalid-feedback")) {
        const phoneError = document.createElement("div");
        phoneError.className = "invalid-feedback";
        phoneError.textContent = "Введите полный номер";
        phoneInput.parentNode.appendChild(phoneError);
    }

    nameInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^А-Яа-яЁё\s]/g, "");
        this.classList.remove("is-invalid");
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
        phoneInput.classList.remove("is-invalid");
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

    form.addEventListener("submit", function (e) {
        let digitsOnly = phoneInput.value.replace(/\D/g, "");
        let name = nameInput.value.trim();
        let consentChecked = consentCheckbox.checked;

        if (digitsOnly.length !== 11) {
            e.preventDefault();
            phoneInput.classList.add("is-invalid");
        }

        if (name === "") {
            e.preventDefault();
            nameInput.classList.add("is-invalid");
        }

        if (!consentChecked) {
            e.preventDefault();
            consentCheckbox.classList.add("is-invalid");
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