const toggleMobileMenu = (e) => {
  const menu = $('.mobile-modal');
  if(menu.hasClass('mobile-modal--show')) {
    $('body').removeAttr('style');
  } else {
    $('body').css({
      'height' : '100vh',
      'overflow' : 'hidden'
    })
  }

  menu.toggleClass('mobile-modal--show');
  $('.header__humb').toggleClass('header__humb--show');
}

export {toggleMobileMenu}