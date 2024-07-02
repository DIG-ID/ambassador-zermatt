import "./swiper";
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

  }, false);
});

