if (document.querySelector('.rmbt-clients-portfolio-swiper')) {
  swiperParam = new Swiper('.rmbt-clients-portfolio-swiper', {
    direction: 'horizontal',
    loop: true,

    speed: 1400,
    autoplay: {
      delay: 1000,
    },

    // slidesPerView: 4,
    slidesPerView: 'auto',
    spaceBetween: 60,

    breakpoints: {
      768: {
        spaceBetween: 20,
        centeredSlidesBounds: true,
      },
      640: {
        spaceBetween: 10,
      },
    },
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
