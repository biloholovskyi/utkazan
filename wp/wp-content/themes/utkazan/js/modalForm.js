const switchModalType = (e) => {
  const checkbox = $(e.target);
  const active = $('.text-active');
  const disabled = $('.text-disabled');

  checkbox.toggleClass('text-check--tel').toggleClass('text-check--mail');
  active.toggleClass('text-active').toggleClass('text-disabled');
  disabled.toggleClass('text-active').toggleClass('text-disabled');

  if(checkbox.hasClass('text-check--tel')) {
    $('.modal-input[type="text"]').attr('placeholder', 'Укажите номер телефона');
  } else {
    $('.modal-input[type="text"]').attr('placeholder', 'Укажите почту');
  }
}

const disabledPolitical = () => {
  $('.political__check').toggleClass('political__check--active');
}

const closeModalForm = () => {
  $('.main-modal').fadeOut('slow');
}

const openModalForm = () => {
  $('.main-modal').fadeIn('slow').css('display', 'flex');
}

export {
  switchModalType,
  disabledPolitical,
  closeModalForm,
  openModalForm
}



