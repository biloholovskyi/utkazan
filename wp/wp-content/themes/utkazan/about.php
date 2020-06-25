<?php
/*
Template Name: about
*/
?>
<?php get_header('white'); ?>
<section class="about">
      <div class="m-container">
        <div class="m-row">
          <div class="m-col m-col--4 m-col-md--5 m-col-xs--10"> 
            <div class="about-title"> 
              <h2>О компании</h2>
              <p><?php the_field('company_desc') ?></p>
            </div>
          </div>
          <div class="m-col m-col--3 m-col-md--1 m-col-xs--10"> </div>
          <div class="m-col m-col--3 m-col-md--4 m-col-xs--10">
            <div class="about__company__numbers">
              <div class="about__company__number anim-number"><?php the_field('year_company') ?></div>
              <div class="about__company__desc">год основания компании </div>
            </div>
          </div>
        </div>
        <?php $companyImg = get_field('company_img'); ?>
        <div class="m-row">
          <div class="m-col m-col-lg--10">
            <div class="photo-team"><img src="<?php echo $companyImg; ?>" alt="photo team"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="about_company">
      <div class="m-container">
        <div class="m-row">
          <div class="m-col m-col--15">
            <div class="about_company_info">
              <p><?php the_field('company_text') ?></p> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="principles">
      <div class="m-container">
        <div class="m-row">
          <div class="m-col m-col--5 m-col-md--10">
            <div class="principles-title">
              <h3>Принципы компании</h3>
            </div>
            <div class="principles-list">
              <ul>
              <?php
                $args = array(
                  'numberposts' => -1, // если -1 то выводит все
                  'orderby' => 'date',
                  'order' => 'DESC',
                  'post_type' => 'principles', // тип поста
                  'suppress_filters' => true,
                );

                $posts = get_posts($args);

                foreach ($posts as $post) {
                  setup_postdata($post);
                  ?>
                <li>
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_field('principles_desc') ?></p>
                </li>
                <?php
                  }
                  wp_reset_postdata(); // сброс
                  ?>
              </ul>
            </div>
          </div>
          <div class="m-col m-col--1 m-col-lg--1 m-col-md--10"></div>
          <div class="m-col m-col--4 m-col-lg--4 m-col-md--10">
            <div class="about__video">
              <div class="about__video-bg"></div>
              <div class="about__video-close"></div>
              <?php $images = get_field('images2'); ?>
              <!-- <video class="about__videoblock" id="about-video" src="./media/video/about.mp4" playsinline muted autoplay loop preload="" controls></video> -->
              <img src="<?php echo $images; ?>" alt="image">
            </div>
            <!-- <div class="principles__right">
              <p>“Дефотек” сегодня - это точный, отлаженный как швейцарские часы механизм. Здесь старательно выполняют свою работу службы логистики, маркетинга, контроля качества и доставки.<br><br> <span>На протяжении многих лет компания остается крупнейшим поставщиком различной химии для сахарной промышленности.</span>    </p>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <?php get_footer('other'); ?> 
  