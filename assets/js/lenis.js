import Lenis from '@studio-freight/lenis';

//Lenis configuration
export const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1,
  smooth: true,
  //easing: easeOutExpo(),
});

/*lenis.on('scroll', (e) => {
  console.log(e)
});*/

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf);
