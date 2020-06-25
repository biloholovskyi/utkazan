const section = $('.about__video');
const video = $('.about__videoblock');
const bg = $('.about__video-bg');

const play = () => {
  if (!section.hasClass('about__video--show')) {
    const sectionWidth = section.eq(0).width();
    const margin = sectionWidth / -2;

    section.attr('data-width', sectionWidth);

    video.css({
      'width': sectionWidth + 'px',
      'height': sectionWidth + 'px',
      'top': '50%',
      'left': '50%',
      'margin-top': margin + 'px',
      'margin-left': margin + 'px',
      'z-index': '999999999'
    });
    bg.css({
      'width': sectionWidth + 'px',
      'height': sectionWidth + 'px',
      'top': '50%',
      'left': '50%',
      'margin-top': margin + 'px',
      'margin-left': margin + 'px',
      'z-index': '9999999999999'
    });

    setTimeout(() => {
      $('.fullPageNav').css('visibility', 'hidden');
      $('.header').css('visibility', 'hidden');
      video.css({
        'transition': 'all .9s',
        'width': '100%',
        'height': '100%',
        'top': '0',
        'left': '0',
        'margin-top': '0',
        'margin-left': '0',
        'object-fit': 'contain',
        'background-color': '#3586DC'
      });
      bg.css({
        'transition': 'all .9s',
        'width': '100%',
        'height': '100%',
        'top': '0',
        'left': '0',
        'margin-top': '0',
        'margin-left': '0',
        'transform': 'scale(2)',
        'opacity': '0'
      });

      video[0].muted = false;
    }, 100)

    setTimeout(() => {
      bg.css('z-index', '-1');
    }, 1000)

    section.addClass('about__video--show');
    $('body').css({
      'height': '100vh',
      'overflow': 'hidden'
    })
  }
}

const close = () => {
  $('.fullPageNav').css('visibility', 'visible');
  $('.header').css('visibility', 'visible');
  $('body').removeAttr('style');

  const margin = +section.attr('data-width') / -2;

  video[0].muted = true;

  video.css({
    'width': section.attr('data-width') + 'px',
    'height': section.attr('data-width') + 'px',
    'top': '50%',
    'left': '50%',
    'margin-top': margin + 'px',
    'margin-left': margin + 'px',
    'object-fit': 'cover',
  })
  bg.css({
    'width': section.attr('data-width') + 'px',
    'height': section.attr('data-width') + 'px',
    'opacity': '1',
    'z-index': '999999999999999',
    'top': '50%',
    'left': '50%',
    'margin-top': margin + 'px',
    'margin-left': margin + 'px',
    'transform' : 'scale(1)'
  })

  setTimeout(() => {
    section.removeClass('about__video--show');
    video.removeAttr('style');
    bg.removeAttr('style');
  }, 1000)
}

export {play, close}