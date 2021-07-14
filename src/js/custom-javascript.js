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
const swiperTournament = new Swiper('.swiper-container_tournament', {
  // Optional parameters
  // loop: true,
  slidesPerView: 1,
  // spaceBetween: 10,

  breakpoints: {
    350: {
      slidesPerView: 2,
    },
    500: {
      slidesPerView: 3,
    },
    700: {
      slidesPerView: 4,
    },
    900: {
      slidesPerView: 5,
    },
    1300: {
      slidesPerView: 6,
    },
    1500: {
      slidesPerView: 7,
    },
    1500: {
      slidesPerView: 8,
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

jQuery(function(){
  let didScroll = false;
  let parallaxTitles = document.querySelectorAll('.parallax-title');
  var w = window.innerWidth;

  const scrollInProgress = () => {
    didScroll = true
  }
  
  const raf = () => {
    if (w < 768){
      if(didScroll) {
        parallaxTitles.forEach((element, index) => {
          element.style.transform = "translateX("+ window.scrollY / 8 + "%)"
        })
        didScroll = false;
      }

    }
    requestAnimationFrame(raf);
  }
  
  requestAnimationFrame(raf);
  window.addEventListener('scroll', scrollInProgress)
});