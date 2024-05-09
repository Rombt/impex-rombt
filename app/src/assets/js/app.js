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
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
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
