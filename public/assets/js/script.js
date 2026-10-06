console.log("Website SDN Ngletih 1 Ready!");

document.addEventListener("DOMContentLoaded", function () {

    // Slider Galeri
    new Swiper(".galeriSwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        spaceBetween: 30,
        slidesPerView: 1,

        breakpoints: {
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        }
    });

    // Slider Ekstrakurikuler
    new Swiper(".ekstraSwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        spaceBetween: 25,
        slidesPerView: 1,

        breakpoints: {
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        }
    });

    new Swiper(".galeriSwiper", {

    slidesPerView: 3,
    spaceBetween: 30,

    loop: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    breakpoints: {

        0: {
            slidesPerView: 1
        },

        768: {
            slidesPerView: 2
        },

        992: {
            slidesPerView: 3
        }

    }

});

});



