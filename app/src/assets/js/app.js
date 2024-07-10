import './modules/functions.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/spoiler.js';
import './modules/tabs.js';
import './modules/arrowsInputNumberStyle.js';
import './modules/classHorizontalMenu.js';
import './modules/sliders.js';

/* Start the video when it is scrolled into view to the viewport */
// Function to check element visibility
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
}

// Function to start video
function playVideoWhenVisible() {
  const videoBlock = document.getElementById('rmbt-promo-video');
  if (!videoBlock) {
    return;
  }
  if (isElementInViewport(videoBlock)) {
    const video = videoBlock.querySelector('iframe');
    video.src = video.src.replace('autoplay=0', 'autoplay=1');
    window.removeEventListener('scroll', playVideoWhenVisible);
  }
}
window.addEventListener('scroll', playVideoWhenVisible);

const contactFeedbackForm = document.querySelector('#contact-feedback-form');
if (contactFeedbackForm) {
  document.addEventListener('click', e => {
    if (e.target.id === 'contactFeedbackFormSubmit') {
      // e.preventDefault();
    }
  });
}

document.addEventListener('click', e => {
  const target = e.target;

  if (target.classList.contains('.rmbt-phones-for-mobile') || target.closest('.rmbt-phones-for-mobile')) {
    target.closest('.rmbt-phones-for-mobile').querySelector('.rmbt-phones-for-mobile__body').classList.toggle('active');
  } else {
    // клик мимо
    document.querySelector('.rmbt-phones-for-mobile__body').classList.remove('active');
  }
});

/* =============  changing structure of blocks for different screens  ============= */

const logo = document.querySelector('.custom-logo-link');
const contHorizontMenu = document.querySelector('.cont-horizont-menu');

const contactForm = document.querySelector('#contact-feedback-form');
let buttonSubmitContactFeedbackForm;
if (contactForm) {
  buttonSubmitContactFeedbackForm = contactForm.querySelector('.submit-wrap');
}

if (window.innerWidth <= 767) {
  document.querySelector('.rmbt-top-row').prepend(logo);
  document.querySelector('.rmbt-top-row').append(contHorizontMenu);
  if (window.innerWidth < 670) {
    if (buttonSubmitContactFeedbackForm) {
      contactForm.querySelector('.rmbt-contacts-feedback-form__input-wrap').append(buttonSubmitContactFeedbackForm);
    }
    if (window.innerWidth < 482) {
      if (buttonSubmitContactFeedbackForm) {
        contactForm.querySelector('.rmbt-contacts-feedback-form').append(buttonSubmitContactFeedbackForm);
      }
    }
  }
} else if (window.innerWidth > 767) {
  document.querySelector('.rmbt-bottom-row').prepend(logo);
  document.querySelector('.rmbt-bottom-row').append(contHorizontMenu);
}

window.addEventListener('resize', resizeScreen);
function resizeScreen(e) {
  if (window.innerWidth <= 767) {
    document.querySelector('.rmbt-top-row').prepend(logo);
    document.querySelector('.rmbt-top-row').append(contHorizontMenu);

    contactForm.querySelector('.rmbt-contacts-feedback-form').append(buttonSubmitContactFeedbackForm);
    if (window.innerWidth < 670) {
      if (buttonSubmitContactFeedbackForm) {
        contactForm.querySelector('.rmbt-contacts-feedback-form__input-wrap').append(buttonSubmitContactFeedbackForm);
      }
      if (window.innerWidth < 482) {
        if (buttonSubmitContactFeedbackForm) {
          contactForm.querySelector('.rmbt-contacts-feedback-form').append(buttonSubmitContactFeedbackForm);
        }
      }
    }
  } else if (window.innerWidth > 767) {
    document.querySelector('.rmbt-bottom-row').prepend(logo);
    document.querySelector('.rmbt-bottom-row').append(contHorizontMenu);
  }
}

const url = new URL(window.location.href);

// скрыл переключение языков
if (decodeURIComponent(url.pathname).indexOf('группа-категории') > 0 || decodeURIComponent(url.pathname).indexOf('группа-категорий') > 0) {
  document.querySelector('.pll-parent-menu-item').style.display = 'none';
}
