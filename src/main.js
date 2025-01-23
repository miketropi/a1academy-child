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

  const toggleContentBlock = () => {
    $('.a1a-toggle-content-block').each(function() {
      const $self = $(this);
      console.log($self);

      $self.find('.__toggle-content').hide();
      $self.on('click', '.__toggle-header', function(e) {
        e.preventDefault();
        let $parent = $(this).parent('.a1a-toggle-content-item');
        $parent.siblings().find('.__toggle-content').slideUp('slow');
        $parent.children('.__toggle-content').slideDown('slow');
      })

      $self.find('.a1a-toggle-content-item:first-child .__toggle-header').trigger('click')
    })
  }

  $(() => {
    doSwiperInit();
    toggleContentBlock();
  })
})(window, jQuery);