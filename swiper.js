const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  speed: 600,
  loop: true,
  slidesPerView: 1.2,
  spaceBetween: 10,
  effect: "slide",
  simulateTouch: true,
  centeredSlides: true,

  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});