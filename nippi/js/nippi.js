// Activates the Carousel
$('.carousel').carousel({
  interval: 5000
})

// Activates Tooltips for Social Links
$('.tooltip-social').tooltip({
  selector: "a[data-toggle=tooltip]"
})

// scrollTop
$(function(){
  $(window).scroll(function() {
      if ($(this).scrollTop() > 200) {
         $('.go_to_top').fadeIn(200);
      } else {
         $('.go_to_top').fadeOut(200);
      }
   });

   $('.go_to_top').click(function(event) {
      event.preventDefault();

      $('html, body').animate({scrollTop: 0}, 300);
   });

})();
