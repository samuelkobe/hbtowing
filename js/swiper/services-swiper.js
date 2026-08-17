const flatdeckSwiper = new Swiper('.swiper-flatdeck', {
  slidesPerView: 1.5,
  spaceBetween: 20,
  centeredSlides: true,
  centeredSlidesBounds: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1680: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
  },
});

const towingSwiper = new Swiper('.swiper-towing', {
  slidesPerView: 1.5,
  spaceBetween: 20,
  centeredSlides: true,
  centeredSlidesBounds: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1680: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
  },
});
