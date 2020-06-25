const overlay = $('.product-overlay');

const overlaySize = () => {
  const windowW = $(window).width();
  if(overlay.length > 0 && windowW > 1290) {
    console.log($('.single-page-container').width());

    const realWidth = windowW - ((windowW - $('.single-page-container').width()) / 2 + $('.m-col--4').width() + 16 + 40)
    overlay.css('width', realWidth + 'px');
  }

  if(windowW < 1291) {
    overlay.css('width', '100%');
  }
}

export {overlaySize}