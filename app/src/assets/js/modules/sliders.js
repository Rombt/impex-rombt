if (document.querySelector('.main-slider-screen')) {
  swiperParam = new Swiper('.main-slider-screen', {
    direction: 'horizontal',
    loop: true,
    pagination: {
      el: '.main-slider-screen__pagination',
      clickable: true,
    },

    speed: 1400,
    autoplay: {
      delay: 5000,
    },
  });
}
