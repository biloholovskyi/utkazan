
$(document).ready(function() {
    $('#accordeon .head').on('click', my_func);
   
});


function my_func(){
    $('#accordeon .hidden').not($(this).next());
    $(this).next().toggleClass("active");
}


//form send
$('.modal-form').on('submit', function (e) { 
    e.preventDefault();
    $.ajax({
      url: '/wp-content/themes/utkazan/send.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function (data) {
        $('.modal-alert').fadeIn('slow').css('display', 'flex');
        $('input[type="text"], textarea').val('');
        // $('.input-wrapper--input').removeClass('input-wrapper--input');
        setTimeout(function () {
          $('.modal-alert').fadeOut('slow');
        }, 2000)
      }
    });
  });