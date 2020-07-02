<footer class="footer">
      <div class="footer__nav">
          <a class="header__logo" href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/media/icon/logo-footer.svg">
          <div class="text-logo">Объединенные<br>Технологии</div>
        </a>
        <div class="header__nav">
          <a class="nav__link" href="/catalog">Услуги</a>
          <a class="nav__link" href="/about">О компании</a>
          <a class="nav__link" href="/contacts">Контакты</a></div>
        <button class="header__button main-modal-show">Связаться</button>
      </div>
      <div class="footer-doc">
        <p>© Официальный сайт компании  ООО &#171;Объединенные Технологии&#187;  <br> Все права защищены .</p>
        <?php
          $args = array(
            'numberposts' => 1, // если -1 то выводит все
            'orderby' => 'date',
            'order' => 'ASC',
            'post_type' => 'politics', // тип поста
            'suppress_filters' => true,
          );

          $posts = get_posts($args);

          foreach ($posts as $post) {
            setup_postdata($post);
            ?>
        <a href="<?php the_field('politics');?>" target="_blank"> Политика конфиденциальности</a>
        <?php
          }
          wp_reset_postdata(); // сброс
          ?>

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