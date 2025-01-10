/**
 * A1A theme child script
 */
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';

;((w, $) => {
  'use strict';

  const doSwiperInit = () => {
    const swiper = new Swiper('.a1a-testimonial-carousel.swiper', {
      modules: [Navigation, Pagination],
      spaceBetween: 20,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      on: {
        slideChange() {
          const index_currentSlide = this.realIndex + 1;
          this.el.querySelector('.current-and-total .__current').innerHTML = index_currentSlide;
        }
      }
    });
  }

  $(() => {
    doSwiperInit();
  })
})(window, jQuery);