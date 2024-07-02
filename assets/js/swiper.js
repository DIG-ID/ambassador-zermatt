import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {


		//Page Zimmer
		if (document.body.classList.contains("page-template-page-zimmer")) {
			var zimmerSwiper = new Swiper(".zimmer-gallery-0", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".zimmer-gallery-button-next-0",
					prevEl: ".zimmer-gallery-button-prev-0",
				},
			});
			var zimmer02Swiper = new Swiper(".zimmer-gallery-1", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".zimmer-gallery-button-next-1",
					prevEl: ".zimmer-gallery-button-prev-1",
				},
			});
			var zimmer03Swiper = new Swiper(".zimmer-gallery-2", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".zimmer-gallery-button-next-2",
					prevEl: ".zimmer-gallery-button-prev-2",
				},
			});
			var zimmer04Swiper = new Swiper(".zimmer-gallery-3", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".zimmer-gallery-button-next-3",
					prevEl: ".zimmer-gallery-button-prev-3",
				},
			});
		}

		//Page Gastronomie
		if (document.body.classList.contains("page-template-page-gastgronomie")) {
			var blockSwiper = new Swiper(".block-gallery-0", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".block-gallery-button-next-0",
					prevEl: ".block-gallery-button-prev-0",
				},
			});
			var block02Swiper = new Swiper(".block-gallery-1", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".block-gallery-button-next-1",
					prevEl: ".block-gallery-button-prev-1",
				},
			});
			var block03Swiper = new Swiper(".block-gallery-2", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".block-gallery-button-next-2",
					prevEl: ".block-gallery-button-prev-2",
				},
			});
			var block04Swiper = new Swiper(".block-gallery-3", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".block-gallery-button-next-3",
					prevEl: ".block-gallery-button-prev-3",
				},
			});
		}

		//Page Pool & Sauna
		if (document.body.classList.contains("page-template-page-pool-sauna")) {
			var blockSwiper = new Swiper(".block-gallery-0", {
				loop: true,
				speed: 800,
				navigation: {
					nextEl: ".block-gallery-button-next-0",
					prevEl: ".block-gallery-button-prev-0",
				},
			});
			var block02Swiper = new Swiper(".block-gallery-1", {
				loop: true,
				parallax: true,
				speed: 800,
				navigation: {
					nextEl: ".block-gallery-button-next-1",
					prevEl: ".block-gallery-button-prev-1",
				},
			});
			var block03Swiper = new Swiper(".block-gallery-2", {
				loop: true,
				parallax: true,
				speed: 800,
				navigation: {
					nextEl: ".block-gallery-button-next-2",
					prevEl: ".block-gallery-button-prev-2",
				},
			});
		}

	}, false);
});