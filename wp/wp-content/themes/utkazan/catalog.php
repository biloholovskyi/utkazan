<?php
/*
Template Name: Catalog
*/
?>
<?php get_header('white'); ?>
<section class="products">
  <div id="product-anim"></div><a class="product_back_btn" href="/">
    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.65">
        <path
          d="M6.6663 16.1706L20.0167 29.5207C20.3255 29.8298 20.7376 30 21.1772 30C21.6167 30 22.0289 29.8298 22.3376 29.5207L23.3208 28.5378C23.9605 27.8973 23.9605 26.8564 23.3208 26.2169L12.1102 15.0062L23.3332 3.78314C23.642 3.47412 23.8125 3.06217 23.8125 2.6229C23.8125 2.18315 23.642 1.7712 23.3332 1.46194L22.3501 0.479263C22.0411 0.17024 21.6291 0 21.1896 0C20.7501 0 20.3379 0.17024 20.0291 0.479263L6.6663 13.8416C6.35679 14.1516 6.18679 14.5655 6.18776 15.0055C6.18679 15.4472 6.35679 15.8608 6.6663 16.1706Z"
          fill="#C1C1C1"></path>
      </g>
    </svg></a>
    <div class="m-container">
    <div class="m-row">
      <div class="m-col">
        <div class="products-title">
          <h1>Услуги</h1>
        </div>
      </div>
    </div>
    </div>
  <div class="m-container">
  <?php
    $args = array(
      'numberposts' => -1, // если -1 то выводит все
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'catalog', // тип поста
      'suppress_filters' => true,
    );

    $posts = get_posts($args);

    foreach ($posts as $post) {
      setup_postdata($post); 
      ?>
    <div class="m-row servis-row">
     <a href="<?php the_permalink(); ?>" class="servis-link">
     <div class="m-col m-col--10 m-col-lg--4 m-col-md--5 m-col-sm--10">
        <div class="servis__img">
          <div class="servis__img-bg"></div>
          <?php $images = get_field('images2'); ?>
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="image">
         
        </div>
      </div>
      <div class="m-col m-col--1 empty"></div>
      <div class="m-col m-col--10 m-col-lg--5 m-col-md--5 m-col-sm--10">
        <div class="servis-text">
          <h2><?php the_title(); ?></h2> 
          <p><?php the_field('catalog_desc'); ?></p>
        </div>
      </div>
     </a>
    </div>
    <?php
      }
      wp_reset_postdata(); // сброс
      ?>
    <!-- <div class="m-row servis-row">
      <a href="#" class="servis-link">
      <div class="m-col m-col--4 m-col-lg--4 m-col-md--10">
        <div class="servis__img">
          <div class="servis__img-bg"></div>

          <?php $images = get_field('images2'); ?>

          <img src="<?php echo $images; ?>" alt="image">

        </div> 
      </div>
      <div class="m-col m-col--1"></div>
      <div class="m-col m-col--5 m-col-lg--5 m-col-md--10">
        <div class="servis-text">
          <h2>Title</h2> 
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
        </div>
      </div>
      </a>
    </div> -->
  </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- <script src="buildjs/index.js"></script> -->
<?php get_footer(); ?>
</body>

</html>