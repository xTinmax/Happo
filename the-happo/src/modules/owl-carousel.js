jQuery(document).ready(function() {
    jQuery('.owl-carousel').owlCarousel({
       items: 1,
       loop: true,
       dots: true,
       responsive: {
          0: {
             nav: false
          },
          768: {
             nav: true
          }
       }
    });

    window.dispatchEvent(new Event('resize'));
 });