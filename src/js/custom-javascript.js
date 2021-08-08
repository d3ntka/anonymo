// Add your JS customizations here

function openTeam(evt, teamName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(teamName).style.display = "block";
  evt.currentTarget.className += " active";
} 




const swiperTeams = new Swiper('#swiper-teams', {
  // Optional parameters
  // loop: true,
  slidesPerView: 1,
  containerModifierClass:	'swiper-container-teams-',
  thumbs: {
    swiper: swiperTeamsThumbs,
    slideThumbActiveClass: 'swiper-slide-thumb-active',
    thumbsContainerClass: 'swiper-container-thumbs',
  },
  // spaceBetween: 10,

    // Navigation arrows
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },

  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  //   draggable: true,
  //   dragSize: 28,
  //   hide: false,
  // },
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