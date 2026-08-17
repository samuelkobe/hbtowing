const heroSwiper = new Swiper('.swiper-hero', {
  slidesPerView: 1,
  spaceBetween: 40,
  centeredSlides: true,
  centeredSlidesBounds: true,
  breakpoints: {
    600: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 60,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 96,
    },
  }
});

const sliderSwiper = new Swiper('.swiper-slider', {
  slidesPerView: 1,
  autoplay: {
    delay: 10000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination'
  }
});

const testimonialSwiper = new Swiper('.swiper-testimonial', {
  slidesPerView: 1,
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
