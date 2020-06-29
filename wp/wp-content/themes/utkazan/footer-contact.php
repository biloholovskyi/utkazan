<div class="alert-modal">
  <div class="alert-modal__body">
    <p>Спасибо!</p>
    <p>Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время</p>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
    <script>$(document).ready(function () {

    
    let windowWidth = $(window).width();
    let containerWidth = $('.m-container').width();
    let wrapper = $('.contact-page__wrapper').width();
    let mapWidth = windowWidth - ((windowWidth - containerWidth) / 2 + wrapper);


});
  ymaps.ready(init);
function init(){
var myMap = new ymaps.Map("map", {
  center: [<?php the_field('maps_coordinate'); ?>],
  zoom: 17
});

myMap.behaviors.disable(['drag', 'scrollZoom', 'dblClickZoom']);

myMap.controls
  .remove('trafficControl')
  // .remove('fullscreenControl')
  .remove('rulerControl')
  .remove('typeSelector')
  .remove('searchControl')
  .remove('zoomControl')
  .remove('geolocationControl');

var myPin = new ymaps.Placemark([<?php the_field('maps_coordinate'); ?>],
  {
    balloonContentHeader: '',
    balloonContentBody: '',
    balloonContentFooter: '',
    hintContent: ''
  },
  {
    iconLayout: 'default#image',
    
    iconImageHref: '<?php echo get_template_directory_uri(); ?>/media/icon/pin.png',
    iconImageSize: [37.6, 37.6],
    iconImageOffset: [0, 0]
  });

myMap.geoObjects.add(myPin);
}
    </script>
  </body>
</html>