if (document.querySelector('.main-slider-screen')) {
  swiperParam = new Swiper('.main-slider-screen', {
    direction: 'horizontal',
    pagination: {
      el: '.main-slider-screen__pagination',
      clickable: true,
    },

    speed: 600,
    // autoplay: {
    //   delay: 5000,
    // },
  });
}
