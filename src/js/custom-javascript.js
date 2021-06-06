// Add your JS customizations here

const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  // direction: 'vertical',
  // loop: true,
  slidesPerView: 1,
  // spaceBetween: 10,

  breakpoints: {
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      // spaceBetween: 20
    },
    // when window width is >= 640px
    680: {
      slidesPerView: 3,
      // spaceBetween: 20
    },
    1100: {
      slidesPerView: 4,
      // spaceBetween: 20
    },
    1400: {
      slidesPerView: 5,
      // spaceBetween: 20
    },

  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    dragSize: 28,
    hide: false,
  },
});
