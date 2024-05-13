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
if (document.querySelector('.rmbt-clients-portfolio-swiper')) {
  swiperParam = new Swiper('.rmbt-clients-portfolio-swiper', {
    direction: 'horizontal',
    loop: true,

    speed: 1400,
    autoplay: {
      delay: 1000,
    },

    slidesPerView: 4,
    spaceBetween: 60,
  });
}

if (document.querySelector('.rmbt-single-post-swiper')) {
  swiperParam = new Swiper('.rmbt-single-post-swiper', {
    direction: 'horizontal',
    loop: true,

    slidesPerView: 3,
    spaceBetween: 40,
    centeredSlides: true,
    centerInsufficientSlides: true,

    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },

    speed: 1400,
    autoplay: {
      delay: 5000,
    },
  });
}
