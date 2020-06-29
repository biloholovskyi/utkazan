<?php get_header('white'); ?>
    <section class="product-page"> <a class="product_back_btn" href="./catalog">Все услуги </a>
      <div class="m-container single-page-container"> 
        <div class="m-row">
          <div class="m-col">
            <div class="product-title">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
        <?php
          $mainPhoto = get_field('main_img');
          $specPhoto = get_field('photo_spec'); 
        ?>
        <div class="m-row">
          <div class="m-col m-col--4 m-col-md--10">
            <div class="product-desc">
              <p><?php the_field('catalog_desc'); ?></p>
              <div class="product-content">
                <div class="desc">
                  <div class="specialist">
                    <div class="foto"><img src="<?php echo $specPhoto; ?>" alt="foto"></div>
                    <div class="name">
                      <h3><?php the_field('name_spec'); ?></h3>
                      <p>Специалист по продукту</p>
                    </div>
                  </div>
                  <p class="contact-specialist">Контакты специалиста</p>
                  <div class="mail"><a href="maito:<?php the_field('email_spec'); ?>"><?php the_field('email_spec'); ?></a></div>
                  <div class="phone"><a href="tel:<?php the_field('tel_spec'); ?>"><?php the_field('tel_spec'); ?> </a></div>
                  <button class="header__button main-modal-show">Связаться  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="m-col m-col--6 m-col-md--10">
            <div class="product-overlay">
              <!-- <div class="product-img">    -->
                <!-- <div class="img-block">      -->
                  <div class="barrel">
                    <img class="barrel-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="barrel">
                  </div>
                <!-- </div> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="buildjs/index.js"></script>
    <?php get_footer(); ?>
  </body>
</html>