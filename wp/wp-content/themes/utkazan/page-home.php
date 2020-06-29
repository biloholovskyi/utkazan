<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<!-- <div class="fullPageNav" id="fullPageNav">
      <div class="fullPageNav__delimiter fullPageNav__delimiter--first"></div>
      <div class="fullPageNav__item fullPageNav__item--active" data-number="1"></div>
      <div class="fullPageNav__delimiter"></div>
      <div class="fullPageNav__item" data-number="2" data-anim="true"></div>
      <div class="fullPageNav__delimiter"></div>
      <div class="fullPageNav__item" data-number="3" data-anim="true"></div>
      <div class="fullPageNav__delimiter fullPageNav__delimiter"></div>
      <div class="fullPageNav__item" data-number="4"></div>
      <div class="fullPageNav__delimiter fullPageNav__delimiter--last"></div>
    </div> -->
<div class="fullPageWrapper">
  <section class="fullPage home__first"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/media/image/home.jpg)">
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
            <!-- <button class="first__button-down" data-number="2"></button> -->
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
          <p class="about__text"><?php the_field('second_text'); ?></p><a class="about__link" href="./about">О
            компании</a>
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
  <section class="fullPage industry" >
  <picture>
<?php $thirdBg = get_field('industry-bg'); ?>
<img class="partner__fon-img"src="<?php echo $thirdBg; ?>" alt="image">
</picture>
    <div class="m-container">
      <div class="m-row">
        <div class="m-col m-col--10">
          <div class="industry__text">
            <h2 class="industry__title"><?php the_field('third-title'); ?></h2>
          </div>
        </div>
      </div>
      <div class="m-row">
        <div class="m-col m-col--7 m-col-lg--7 m-col-md--7 m-col-sm--5 m-col-xs--10 ">
          <div class="industry-left">
            <p><?php the_field('third-decs'); ?></p>
           
          </div>
        </div>
        <?php $logoRigth = get_field('logo_right'); ?>
        <?php $logoRigth2 = get_field('logo_right2'); ?>
        <div class="m-col m-col--3 m-col-lg--3 m-col-md--3 m-col-sm--5 m-col-xs--10">
          <div class="industry-right">
            <div class="partner__text">
              <div class="partner__list">
                <img src="<?php echo $logoRigth; ?>" alt="logo">
                <div class="logo-desc"><?php the_field('right_desc'); ?></div>
              </div>
            </div>
            <div class="partner__text">
              <div class="partner__list">
                <img src="<?php echo $logoRigth2; ?>" alt="logo">
                <div class="logo-desc"><?php the_field('right_desc2'); ?></div>
              </div>
            </div>
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
            <h2 class="industry__title"><?php the_field('fourth-title'); ?></h2>
          </div>
        </div>
      </div>
      <div class="m-row">
        <div class="m-col m-col--10 ">
         <div class="indst-wrap">
         <div class="industry-left">
            <p><?php the_field('fourth-desc-left'); ?></p>
            
          </div>
          <div class="industry-left">
            <p><?php the_field('fourth-desc-rigth'); ?></p>
            
          </div>
         </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <?php $georBg = get_field('geogr-bg'); ?>
  <section class="fullPage partner">
    <picture>

      <img class="partner__fon-img" src="<?php echo $georBg; ?>">
    </picture>
    <div class="m-container partner__container">
      <div class="m-row">
        <div class="m-col m-col--10">
          <h3 class="partner__title"><?php the_field('geography_title'); ?></h3>
        </div>
      </div>
      <div class="m-row partner__row">
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
                <div class="m-col m-col--3  m-col-sm--5 m-col-xs--10 m-col-md--5 m-col-lg--3">
                  <div class="partner__text">
                    <div class="partner__list">
                      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="logo">
                      <div class="logo-desc"><?php the_field('sublogo-desc'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                  <?php
                    }
                    wp_reset_postdata(); // сброс
                    ?> 
   

      </div>
    </div>
  </section>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</body>

</html>
<?php get_footer(); ?>