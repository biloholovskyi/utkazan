<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

    <div class="fullPageNav" id="fullPageNav">
      <div class="fullPageNav__delimiter fullPageNav__delimiter--first"></div>
      <div class="fullPageNav__item fullPageNav__item--active" data-number="1"></div>
      <div class="fullPageNav__delimiter"></div>
      <div class="fullPageNav__item" data-number="2" data-anim="true"></div>
      <div class="fullPageNav__delimiter"></div>
      <div class="fullPageNav__item" data-number="3" data-anim="true"></div>
      <div class="fullPageNav__delimiter fullPageNav__delimiter"></div>
      <div class="fullPageNav__item" data-number="4"></div>
      <div class="fullPageNav__delimiter fullPageNav__delimiter--last"></div>
    </div>
    <div class="fullPageWrapper">
      <section class="fullPage home__first" style="background-image: url(<?php echo get_template_directory_uri(); ?>/media/image/home.jpg)">
        <div class="m-container first__container">
          <div class="m-row first__row">
            <div class="m-col m-col--2 m-col-sm--10"></div>
            <div class="m-col m-col--8 m-col-sm--10">
              <div class="first__wrapper">
                <div class="owl-carousel owl-theme" id="first-slider">
                <?php
                  $args = array(
                    'numberposts' => -1, // если -1 то выводит все
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'slider', // тип поста
                    'suppress_filters' => true,
                  );

                  $posts = get_posts($args);

                  foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                  <div class="item">
                      <h2 class="first__title"><?php the_title(); ?></h2>
                    <p><?php the_field('slider_text'); ?></p>
                  </div>
                  <?php
                    }
                    wp_reset_postdata(); // сброс
                    ?>
                </div>
                <button class="first__button-down" data-number="2"></button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fullPage home__about">
        <div class="particle" id="particle"></div>
        <div class="m-container">
          <div class="m-row">
            <div class="m-col m-col--7 m-col-sm--10">
              <h2 class="about__title"><?php the_field('second_title'); ?></h2>
              <p class="about__text"><?php the_field('second_text'); ?></p><a class="about__link" href="./about">О компании</a>
            </div>
            <div class="m-col m-col--3 m-col-sm--10">
              <div class="about__numbers">
            
              <?php
                $number_block = get_field('number_block');
              ?>

                <div class="about__number"><?php echo $number_block['number']; ?></div>
                <div class="about__desc"><?php echo $number_block['number_text']; ?></div>
                <div class="about__number"><?php echo $number_block['number2']; ?></div>
                <div class="about__desc"><?php echo $number_block['number_text2']; ?></div>
                <div class="about__number"><?php echo $number_block['number3']; ?></div>
                <div class="about__desc"><?php echo $number_block['number_text3']; ?></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fullPage industry">
        <div class="m-container">
          <div class="m-row">
            <div class="m-col m-col--10">
              <div class="industry__text">
                <h2 class="industry__title">Продукция</h2>
              </div>
            </div>
          </div>
          <div class="m-row">
            <div class="industry__list-wrapper">
              <div class="industry__list">
              <?php
                $args = array(
                  'numberposts' => -1, // если -1 то выводит все
                  'orderby' => 'date',
                  'order' => 'DESC',
                  'post_type' => 'services', // тип поста
                  'suppress_filters' => true,
                );

                $posts = get_posts($args);

                foreach ($posts as $post) {
                  setup_postdata($post);
                  ?>
                <div class="m-col m-col--3 m-col-xs--10 order-1">
                  <div class="industry__text">
                    <p class="industry__desc"><?php the_field('servis_text'); ?></p>
                  </div>
                </div>
                <?php
                  }
                  wp_reset_postdata(); // сброс
                  ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fullPage partner">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/media/image/mobile-map.svg" media="(max-width: 760px)">
          <source srcset="<?php echo get_template_directory_uri(); ?>/media/image/map-fon.svg"><img class="partner__fon-img" src="<?php echo get_template_directory_uri(); ?>/media/image/map-fon.svg">
        </picture>
        <div class="m-container partner__container">
          <div class="m-row partner__row">
            <div class="m-col m-col--4 m-col-sm--10">
              <div class="partner__text">
                <h3 class="partner__title"><?php the_field('geography_title'); ?></h3>
                <div class="partner__desc"><?php the_field('geography_text'); ?></div>
                <div class="partner__list">
                <?php
                $args = array(
                  'numberposts' => -1, // если -1 то выводит все
                  'orderby' => 'date',
                  'order' => 'DESC',
                  'post_type' => 'logo', // тип поста
                  'suppress_filters' => true,
                );

                $posts = get_posts($args);

                foreach ($posts as $post) {
                  setup_postdata($post);
                  ?>
                  <img class="partner__img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="image logo">
                  <?php
                    }
                    wp_reset_postdata(); // сброс
                    ?> 
                </div>
              </div>
            </div>
            <div class="m-col m-col--3 m-col-lg--2"></div>
            <div class="m-col m-col--3 m-col-lg--4 m-col-sm--10"></div>
          </div>
        </div>
      </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="buildjs/index.js"></script> -->
  </body>
</html>
<?php get_footer(); ?>