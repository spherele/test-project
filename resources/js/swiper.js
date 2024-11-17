import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 0,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
});
