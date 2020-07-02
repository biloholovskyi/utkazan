<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
    <title><?php the_title(); ?></title>
  </head>
  <body>
    <header class="header header-white">
      <div class="header__humb">
        <div class="humb-item"></div>
        <div class="humb-item"></div>
        <div class="humb-item"></div>
      </div>
        <a class="header__logo" href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/media/icon/logo-black.svg">
          <div class="text-logo">Объединенные<br>Технологии</div>
      </a>
      <div class="header__nav">
        <a class="nav__link" href="/catalog">Услуги</a>
        <a class="nav__link" href="/about">О компании</a>
        <a class="nav__link" href="/contacts">Контакты</a></div>
      <button class="header__button main-modal-show">Связаться</button>
      <button class="header__mobile main-modal-show"></button>
    </header>
    <div class="prelouder" id="prelouder">
    <img class="prelouder-logo" src="<?php echo get_template_directory_uri(); ?>/media/icon/logo-black.svg">
          <div class="text-preloader">Объединенные<br>Технологии</div>
    </div>
    <div class="anim-block">
      <div class="anim-block__item"></div>
    </div>
    <div class="mobile-modal">
      <div class="mobile-modal__links">
        <a class="mobile-modal__link" href="./catalog">Услуги</a>
        <a class="mobile-modal__link" href="./about">О компании</a>
        <a class="mobile-modal__link" href="./contacts">Контакты</a></div>
      <div class="mobile-modal__button main-modal-show">Связаться</div>
    </div>
    <div class="main-modal">
      <div class="main-modal__body">
        <div class="modal-body__close"></div>
        <div class="modal-body__title">Обратная связь</div>
        <div class="modal-desc__text">Свяжитесь со мной по 
          <div class="modal-desc__wrapper"><span class="text-active">телефону</span> <span class="text-check text-check--tel"></span> <span class="text-disabled">почте</span></div>
        </div>
        <div class="modal-desc__small-text">Укажите предпочитаемый способ связи</div>
        <form class="modal-form">
          <input class="modal-input" type="text" name="contact" placeholder="Укажите номер телефона" required>
          <textarea class="modal-input modal-input--text" name="text" placeholder="Что Вас интересует?"></textarea>
          <input class="modal-submit" type="submit" value="Отправить">
        </form>
        <div class="modal-political">
          <div class="political__check political__check--active"></div>
          <div class="political__text">Я согласен на <a href="#" target="_blank">обработку персональных данных</a></div>
        </div>
      </div>
    </div>