// Swiper
var swiper = new Swiper(".bike-slider", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
          clickable: true,
        },
        aytoplay: {
          delay:5000,
          // on click autoplay don't stop if false
          disableOnInteraction: false,
        },
        breakpoints: {
           280: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          510: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          758: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
      });