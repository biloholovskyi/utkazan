const changeWord = () => {
  const words = $('.first__title-word');
  if(words.length < 0) {
    return
  }

  setInterval(() => {
    const current = $('.first__title-word--active');
    const next = current.next('.first__title-word').length > 0 ? current.next('.first__title-word') : words.eq(0);

    next.addClass('first__title-word--active');
    current.addClass('first__title-word--top');
    setTimeout(() => {
      current.css({
        'transition': 'all 0s',
        'opacity': '0'
      }).removeClass('first__title-word--active').removeClass('first__title-word--top');
    }, 1000)
    setTimeout(() => {
      current.removeAttr('style');
    }, 1500);
  }, 3000);
}

export {changeWord}