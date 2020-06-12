import 'normalize.css';
import {fullPageNav, fullPageStart, numberRoll, mobileScroll, switchScroll, stopScroll} from "./fullpageNav";
import './particles';
import {manSliderNext, manSliderClick} from "./manSlider";
import {toggleMobileMenu} from "./mobileMenu";
import {switchModalType, disabledPolitical, closeModalForm, openModalForm} from "./modalForm";
import {play, close} from "./aboutVideo";
import './accordion';
import './owl.carousel.min';
import './productSlider';
import {changeWord} from "./changeWord";
import {overlaySize} from "./productOverlay";
import {showAnim} from "./productSlider";

$(document).ready(function() {
  fullPageStart();
  changeWord();
  overlaySize();
  showAnim();
  if($('.anim-number').length > 0) {
    setTimeout(() => {
      numberRoll();
    }, 2000)
  }

  if($('#particle').length > 0) {
    particlesJS.load('particle', 'particles.json', function() {});
  }
  if($('#particle-2').length > 0) {
    particlesJS.load('particle-2', 'particles.json', function() {});
  }

  $('.fullPageNav__item, .first__button-down').on('click', (e) => fullPageNav(e));
  $('.home-man__nav .next').on('click', () => manSliderNext('next'));
  $('.home-man__nav .prev').on('click', manSliderNext);
  $('.home-man__list .item').on('click', (e) => manSliderClick(e));
  $('.header__humb').on('click', toggleMobileMenu);
  $('.modal-desc__text .text-check').on('click', (e) => switchModalType(e));
  $('.political__check').on('click', disabledPolitical);
  $('.modal-body__close').on('click', closeModalForm);
  $('.main-modal-show').on('click', openModalForm);
  $('.about__video').on('click', play);
  $('.about__video-close').on('click', close);

  $('.first__button-down').on('click', () => {
    if($(window).width() < 992) {
      mobileScroll();
    }
  });
  document.querySelectorAll('.fullPage').forEach((elem) => {
    if (elem.addEventListener) {
      if ('onwheel' in document) {
        // IE9+, FF17+
        elem.addEventListener("wheel", switchScroll);
      } else if ('onmousewheel' in switchScroll) {
        // устаревший вариант события
        elem.addEventListener("mousewheel", switchScroll);
      } else {
        // Firefox < 17
        elem.addEventListener("MozMousePixelScroll", switchScroll);
      }
    } else { // IE8-
      elem.attachEvent("onmousewheel", switchScroll);
    }
  });
  $('.out-scroll').on('scroll', stopScroll);

  // close modal
  $('body').on('click', (e) => {
    const modal = $('.main-modal__body, .main-modal-show');
    if (!modal.is(e.target) && modal.has(e.target).length === 0) {
      closeModalForm();
    }
  })

  $('.anhors').on('click', 'a', (function(n){
      n.preventDefault();
    var id = $(this).attr('href'),
        top = $(id).offset().top;
    $('html,body').animate({scrollTop: top}, 800);
  }));
});



$(window).resize(function () {
  overlaySize();
});