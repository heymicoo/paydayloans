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
  slidesPerView: 1,
  autoplay:  {
    delay: 0,
  },
  spaceBetween: 80,

  // Navigation arrows
  navigation: {
    nextEl: '.testimonials .button-next',
    prevEl: '.testimonials .button-prev',
  },

  breakpoints: {
    1680: {
      spaceBetween: 230,
    },
    1025: {
      slidesPerView: 2,
    }
  }

});

const swiperBlog = new Swiper('.swiper.blog-list', {
  autoplay: true,
  slidesPerView: 1,
  spaceBetween: 100,

  // Navigation arrows
  navigation: {
    nextEl: '.blog .button-next',
    prevEl: '.blog .button-prev',
  },

  breakpoints: {
    1024: {
      slidesPerView: 2,
    },
    1680: {
      slidesPerView: 3,
    },
  }

});

(function($){

  $('#burger-menu').sidr({
      side: 'right',
  });

})(jQuery);
