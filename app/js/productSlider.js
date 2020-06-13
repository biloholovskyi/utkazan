// $(document).ready(function () {
//   $('.db-products-slider').owlCarousel({
//     loop: false,
//     margin: 10,
//     nav: false,
//     dots: false,
//     center: true,
//     onDragged: hiddenAnim,
//     responsive: {
//       0: {
//         items: 1,
//         dots: false,
//         nav: true,
//         navText: ''
//       },
//       600: {
//         items: 1,
//         dots: false,
//         nav: true,
//         navText: ''
//       },
//       991: {
//         items: 3,
//         nav: false
//       }
//     }
//   });
// });

// function hiddenAnim () {
//   $('#product-anim').fadeOut('slow');
// }

// const showAnim = () => {
//   const anim = $('#product-anim')
//   if(anim.length > 0 && $(window).width() > 991) {
//     setTimeout(() => {
//       anim.fadeIn('slow')
//     }, 2500)
//   }
// }

// export {
//   showAnim
// }