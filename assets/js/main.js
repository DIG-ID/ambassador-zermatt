//import "./theme-core";
import "./swiper";
import "slick-carousel/slick/slick";
import "@staaky/fresco/dist/js/fresco.min.js";

import "@fancyapps/ui";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

    if ( document.querySelector('.section-page-header' ) ) {
      // Image Background Parallax Scroll
      const parallax = document.querySelector('.section-page-header');

      // Parallax Effect for header
      window.addEventListener("scroll", function () {
        let offset = window.scrollY;
        parallax.style.backgroundPositionY = offset * 0.7 + "px";
      });
      
    }

    $("a.fresco").each(function(){
      attr_caption = $(this).attr("data-fresco-caption");
      if(!attr_caption){
        attr_caption = $(this).next(".wp-caption-text").html();
        if(attr_caption){
          $(this).attr("data-fresco-caption",attr_caption);
        }
      }
    });

  }, false);
});

