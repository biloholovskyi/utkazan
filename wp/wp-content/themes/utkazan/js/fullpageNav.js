const sections = $('.fullPage');

const fullPageNav = (e, status = false,) => {
  if($(window).width() > 991) {
    const wrapper = $('.fullPageNav');
    const animBlock = $('.anim-block');
    const animBlockItem = $('.anim-block__item');
    if(wrapper.attr('status') !== 'process') {
      wrapper.attr('status', 'process');
      $('#fullPageNav').removeAttr('data-delta');
      // включение анимации
      $('#prelouder').css({
        'opacity': '1',
        'z-index': '999999999'
      });
      setTimeout(() => {
        $('#prelouder').css({
          'opacity': '0'
        });
      }, 800)

      animBlock.css({
        'z-index': '9999'
      });

      setTimeout(() => {
        animBlock.css({
          'opacity': '1'
        });
      }, 100);

      setTimeout(() => {
        animBlockItem.addClass('anim-block__item--show');
      }, 500);

      // переключение блока
      const index = status ? 0 : +e.target.getAttribute('data-number') - 1;
      const numberStatus = status ? false : e.target.getAttribute('data-anim'); // для прокрутки номера
      $('.fullPageNav__item').removeClass('fullPageNav__item--active');
      $('.fullPage--active').css({
        'opacity': '0'
      });
      setTimeout(() => {
        $('.fullPage--active').css('z-index', '-1').removeClass('fullPage--active');
        $('.fullPage').eq(index).addClass('fullPage--active');
      }, 900);
      if(status) {
        $('.fullPageNav__item').eq(0).addClass('fullPageNav__item--active')
      } else {
        e.target.classList.add('fullPageNav__item--active');
      }

      // показ блока
      setTimeout(() => {
        animBlock.removeAttr('style');
        animBlockItem.removeClass('anim-block__item--show');
        wrapper.removeAttr('status');
        $('#prelouder').css({
          'z-index': '-1'
        });

        $('.prelouder-logo').css('opacity', '0');

        if(numberStatus) {
          numberRoll();
        }
        $('.fullPage').eq(index).css({
          'opacity': '1',
          'z-index': '50'
        });
      }, 2000);
    }
  } else {
    setTimeout(() => {
      $('#prelouder').css({
        'opacity': '0'
      })
    }, 1000);
    setTimeout(() => {
      $('#prelouder').css({
        'z-index': '-1'
      })
    }, 2000)
  }
}

const fullPageStart = (e) => {
  sections.eq(0).addClass('fullPage--active').css({
    'z-index': '50',
    'opacity': '1'
  });
  fullPageNav(e, true);
}

const fullPageResize = () => {
  sections.css({
    'height' : 'auto',
    'min-height' : 'auto',
    'position' : 'relative',
    'top' : 'auto',
    'left' : 'auto',
    'z-index' : '50',
    'opacity' : '1'
  })
}

const mobileScroll = () => {
  $('html, body').animate({
    scrollTop: $(window).height()
  }, 500);
}

const numberRoll = () => {
  $('.anim-number').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now));
      }
    })
  })
}

const switchScroll = (e) => {
  e = e || window.event;
  const data = $('#fullPageNav');
  if($(window).width() > 991 && !data.attr('status')) {
    const delta = e.deltaY || e.detail || e.wheelDelta;
    const dataDelta = data.attr('data-delta') ? +data.attr('data-delta') : 0;
    data.attr('data-delta', delta + +dataDelta);
    const index = $('.fullPageNav__item--active').attr('data-number');
    const navEl = $('.fullPageNav__item')
    if(dataDelta > 1000) {
      if(navEl.eq(index).length > 0) {
        navEl.removeClass('fullPageNav__item--active');
        navEl.eq(index).addClass('fullPageNav__item--active');
        switchSection(index, true);
      } else {
        navEl.removeClass('fullPageNav__item--active');
        navEl.eq(0).addClass('fullPageNav__item--active');
        switchSection(0, false);
      }
    } else if(dataDelta < -1000) {
      if(navEl.eq(index - 2).length > 0) {
        navEl.removeClass('fullPageNav__item--active');
        navEl.eq(index - 2).addClass('fullPageNav__item--active');
        switchSection(index - 2, true);
      } else {
        navEl.removeClass('fullPageNav__item--active');
        navEl.last().addClass('fullPageNav__item--active');
        switchSection(6, true);
      }
    }
  }
}

const stopScroll = (e) => {
  const data = $('#fullPageNav');
  if($(window).width() > 991) {
    data.removeAttr('data-delta');
    if(!data.attr('data-scroll')) {
      data.attr('data-scroll', 'stop');
      data.removeAttr('status');
      setTimeout(() => {
        data.removeAttr('data-scroll');
        data.removeAttr('data-delta');
      }, 1000);
    }
  }
}

const switchSection = (indexNumber, numberAnim) => {
  const wrapper = $('.fullPageNav');
  const animBlock = $('.anim-block');
  const animBlockItem = $('.anim-block__item');
  if(wrapper.attr('status') !== 'process') {
    wrapper.attr('status', 'process');
    $('#fullPageNav').removeAttr('data-delta');
    // включение анимации
    $('#prelouder').css({
      'opacity': '1',
      'z-index': '999999999'
    });
    setTimeout(() => {
      $('#prelouder').css({
        'opacity': '0'
      });
    }, 800)

    animBlock.css({
      'z-index': '9999'
    });

    setTimeout(() => {
      animBlock.css({
        'opacity': '1'
      });
    }, 100);

    setTimeout(() => {
      animBlockItem.addClass('anim-block__item--show');
    }, 500);

    // переключение блока
    const index = indexNumber;
    const numberStatus = numberAnim; // для прокрутки номера
    $('.fullPage--active').css({
      'opacity': '0'
    });
    setTimeout(() => {
      $('.fullPage--active').css('z-index', '-1').removeClass('fullPage--active');
      $('.fullPage').eq(index).addClass('fullPage--active');
    }, 900);

    // показ блока
    setTimeout(() => {
      animBlock.removeAttr('style');
      animBlockItem.removeClass('anim-block__item--show');
      wrapper.removeAttr('status');
      $('#prelouder').css({
        'z-index': '-1'
      });

      if(numberStatus) {
        numberRoll();
      }
      $('.fullPage').eq(index).css({
        'opacity': '1',
        'z-index': '50'
      });
    }, 2000);
  }
}

export {fullPageNav, fullPageStart, fullPageResize, mobileScroll, switchScroll, stopScroll, numberRoll}