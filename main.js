let menuBtn = document.querySelectorAll('.header__burger');
let menu = document.querySelector('.nav');
let lock = document.querySelector('body');

const btn = document.querySelector('.btn__action')
const modal = document.querySelector('.modal')
const cross = document.querySelector('.cross')


const showModal = () => {
    modal.classList.toggle('active')
    lock.classList.toggle('lock');
}

if (btn) {
    btn.addEventListener('click', showModal)
    cross.addEventListener('click', showModal)
}


console.log(menuBtn);

for (const burger of menuBtn) {
    burger.addEventListener('click', function () {
        burger.classList.toggle('active');
        menu.classList.toggle('active');
        lock.classList.toggle('lock');
    })
}




Fancybox.bind("[data-fancybox]", {
    // Your custom options
});

const swiper = new Swiper('.swiper1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 4,
    // If we need pagination


    // Navigation arrows
    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },

    }


});

const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    // If we need pagination


    // Navigation arrows
    navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },

    // And if we need scrollbar

});

const swiper3 = new Swiper('.swiper3', {
    // Optional parameters
    // direction: 'horizontal',
    loop: true,

    // If we need pagination


    // Navigation arrows
    navigation: {
        nextEl: '.blog__button-next',
        prevEl: '.blog__button-prev',
    },

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        // when window width is >= 640px
        1240: {
            slidesPerView: 2,
            spaceBetween: 20,
        }
    }

});
const swiper4 = new Swiper('.swiper4', {
    // Optional parameters
    // direction: 'horizontal',
    loop: true,

    // If we need pagination


    // Navigation arrows
    navigation: {
        nextEl: '.staff__button-next',
        prevEl: '.staff__button-prev',
    },

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        // when window width is >= 640px
        1240: {
            slidesPerView: 2,
            spaceBetween: 20,
        }
    }

});
const heroSwiper = new Swiper('.heroSwiper', {
    // Optional parameters
    autoplay: {
        delay: 5000,
    },
    direction: 'horizontal',
    loop: true,

});


