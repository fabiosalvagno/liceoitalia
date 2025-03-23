import './bootstrap';

import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import Alpine from 'alpinejs'
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination],
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
});


window.Alpine = Alpine
Alpine.start()
