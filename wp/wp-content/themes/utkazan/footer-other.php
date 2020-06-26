<footer class="footer">
      <div class="footer__nav"><a class="header__logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/removebg.png"></a>
        <div class="header__nav">
          <a class="nav__link" href="./products.html">Продукция</a>
          <a class="nav__link" href="./about">О компании</a>
          <a class="nav__link" href="./contacts">Контакты</a></div>
        <button class="header__button main-modal-show">Связаться</button>
      </div>
      <div class="footer-doc">
        <p>© Официальный сайт компании “”<br> Все права защищены.</p><a href="<?php the_field('politics'); ?>" target="_blank"> Политика конфиденциальности</a>
      </div>
    </footer>
    <div class="alert-modal">
  <div class="alert-modal__body">
    <p>Спасибо!</p>
    <p>Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время</p> 
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>