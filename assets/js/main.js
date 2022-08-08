const swiperWork = new Swiper('.swiper-work', {
    // Optional parameters
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      }, 
      pagination: {
        el: ".swiper-pagination",
      },
   breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 3,
    },
    // when window width is >= 1600px
    1600: {
      slidesPerView: 4,
    }
  }
  });

  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 2,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 4,
      },
      // when window width is >= 1200px
      1200: {
        slidesPerView: 6,
      }
    }
    
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
//Hamburger menu
let hamburger = document.querySelector('.hamburger');
let mobileMenu = document.querySelector('.menu');
let linkClose = document.querySelector('.menu__list');
let crossClose = document.querySelector('.cross-close');

hamburger.addEventListener('click', function() {
mobileMenu.classList.toggle('menu--active')
});

function closeMenu() {
   mobileMenu.classList.remove('menu--active');
}

crossClose.addEventListener('click', function(){
  closeMenu()
});

linkClose.addEventListener('touchstart', function(event){
   if (event.target.closest('.menu__link')){
      closeMenu(), closeHam();
   }
});