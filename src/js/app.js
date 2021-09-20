// core version + navigation, pagination modules:
import Swiper, { Navigation } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';

// configure Swiper to use modules
Swiper.use([Navigation]);

// init Swiper
const swiperTesti = new Swiper('.swiper.testimonials', {
  loop: true,
  slidesPerView: 2,
  autoplay:  {
    delay: 0,
  },
  spaceBetween: 230,

  // Navigation arrows
  navigation: {
    nextEl: '.testimonials .button-next',
    prevEl: '.testimonials .button-prev',
  },

});

const swiperBlog = new Swiper('.swiper.blog-list', {
  autoplay: true,
  slidesPerView: 3,
  spaceBetween: 100,

  // Navigation arrows
  navigation: {
    nextEl: '.blog .button-next',
    prevEl: '.blog .button-prev',
  },

});