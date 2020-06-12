$(document).ready(function () {

    
    let windowWidth = $(window).width();
    let containerWidth = $('.m-container').width();
    let wrapper = $('.contact-page__wrapper').width();
    let mapWidth = windowWidth - ((windowWidth - containerWidth) / 2 + wrapper);


});
  ymaps.ready(init);
function init(){
var myMap = new ymaps.Map("map", {
  center: [44.997884, 41.063663],
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

var myPin = new ymaps.Placemark([44.997884, 41.063663],
  {
    balloonContentHeader: '',
    balloonContentBody: '',
    balloonContentFooter: '',
    hintContent: ''
  },
  {
    iconLayout: 'default#image',
    
    iconImageHref: './media/icon/pin.png',
    iconImageSize: [37.6, 37.6],
    iconImageOffset: [0, 0]
  });

myMap.geoObjects.add(myPin);
}