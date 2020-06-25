const bigPhotos = $('.home-man__big-img');
const names = $('.home-man__name');
const posts = $('.home-man__post');
const abouts = $('.home-man__about');
const lists = $('.home-man__list .item');

const manSliderNext = (button) => {
  const bigCurrent = $('.home-man__big-img--current');
  const bigNext = button === 'next' ? bigCurrent.next('.home-man__big-img').length > 0 ? bigCurrent.next('.home-man__big-img') : bigPhotos.eq(0) : bigCurrent.prev('.home-man__big-img').length > 0 ? bigCurrent.prev('.home-man__big-img') : bigPhotos.last();
  // name
  const nameCurrent = $('.home-man__name--current');
  const nameNext = button === 'next' ? nameCurrent.next('.home-man__name').length > 0 ? nameCurrent.next('.home-man__name') : names.eq(0) : nameCurrent.prev('.home-man__name').length > 0 ? nameCurrent.prev('.home-man__name') : names.last();
  // post
  const postCurrent = $('.home-man__post--current');
  const postNext = postCurrent.next('.home-man__post').length > 0 ? postCurrent.next('.home-man__post') : posts.eq(0);
  // about
  const aboutCurrent = $('.home-man__about--current');
  const aboutNext = button === 'next' ? bigCurrent.next('.home-man__about').length > 0 ? aboutCurrent.next('.home-man__about') : abouts.eq(0) : bigCurrent.prev('.home-man__about').length > 0 ? aboutCurrent.prev('.home-man__about') : abouts.last();

  const listCurrent = $('.home-man__list .item--active');
  const listNext = button === 'next' ? listCurrent.next('.home-man__list .item').length > 0 ? listCurrent.next('.home-man__list .item') : lists.eq(0) : listCurrent.prev('.home-man__list .item').length > 0 ? listCurrent.prev('.home-man__list .item') : lists.last();

  bigCurrent.fadeOut('fast').addClass('home-man__big-img--hidden').removeClass('home-man__big-img--current');
  setTimeout(() => {
    bigNext.fadeIn('slow').addClass('home-man__big-img--current').removeClass('home-man__big-img--hidden');
  }, 200)
  // name
  nameCurrent.fadeOut('fast').removeClass('home-man__name--current');
  setTimeout(() => {
    nameNext.fadeIn('slow').addClass('home-man__name--current');
  }, 10)
  // post
  postCurrent.fadeOut('fast').removeClass('home-man__post--current');
  setTimeout(() => {
    postNext.fadeIn('slow').addClass('home-man__post--current');
  }, 10)
  // about
  aboutCurrent.fadeOut('fast').removeClass('home-man__about--current');
  setTimeout(() => {
    aboutNext.fadeIn('slow').addClass('home-man__about--current');
  }, 10)


  // переключение маленьких фото
  listCurrent.removeClass('item--active');
  listNext.addClass('item--active');
  // переключение текста
}

const manSliderClick = (e) => {
  const current = $(e.target);
  const index = current.index();
  $('.home-man__list .item--active').removeClass('item--active');
  current.addClass('item--active');
  bigPhotos.fadeOut('fast').removeClass('home-man__big-img--current');
  names.fadeOut('fast').removeClass('home-man__name--current');
  posts.fadeOut('fast').removeClass('home-man__post--current');
  abouts.fadeOut('fast').removeClass('home-man__about--current');
  if($(window).width() > 991) {
    setTimeout(() => {
      bigPhotos.eq(index).fadeIn('slow').addClass('home-man__big-img--current');
      names.eq(index).fadeIn('slow').addClass('home-man__name--current');
      posts.eq(index).fadeIn('slow').addClass('home-man__post--current');
      abouts.eq(index).fadeIn('slow').addClass('home-man__about--current');
    }, 200)
  } else {
    if($(window).width() > 760) {
      bigPhotos.eq(index).fadeIn('slow').addClass('home-man__big-img--current');
    }
    names.eq(index).fadeIn('slow').addClass('home-man__name--current');
    posts.eq(index).fadeIn('slow').addClass('home-man__post--current');
    abouts.eq(index).fadeIn('slow').addClass('home-man__about--current');
  }
}


export {manSliderNext, manSliderClick};