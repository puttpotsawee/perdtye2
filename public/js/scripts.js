$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});

$(':radio').change(
  function(){
    $('.choice').text( this.value + ' stars' );
  } 
); 
$.validate({
        modules : 'date, security, sweden'
        
    });