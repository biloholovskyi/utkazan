
$(document).ready(function() {
    $('#accordeon .head').on('click', my_func);
   
});


function my_func(){
    $('#accordeon .hidden').not($(this).next());
    $(this).next().toggleClass("active");
}
