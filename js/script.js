 $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            autoplay:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:false,
                    loop:true,
                    margin:5,

                },
                600:{
                    items:2,
                    nav:false,
                    loop:true,

                },
                1000:{
                    items:4,
                    nav:true,
                    loop:true,
                }
            }
        })
        });

// Nawigacja zmienia  rozmiar  - Toggle Class 
$(window).on("scroll", function() {
    $("nav").toggleClass("shrink", $(this).scrollTop() > 50)
});

// ==== smooth scrolling ======
$(document).ready(function(){
  $("#myNavbar a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
           window.location.hash = hash;
      });
    } 
  });
});
// ======= smooth scrolling end  =====

//======= TIMER =============

//======= TIMER =============
