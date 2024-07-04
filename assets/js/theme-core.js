// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {
		console.log('theme core')
		$(".gform_wrapper .readonly input").attr("readonly", "");
		$(".gform_wrapper .disabled input").attr('disabled','disabled');
		
		$("#menu-mobile").mmenu({
			"extensions": ["border-none", "effect-listitems-slide", "pagedim-black", "multiline"],
			"offCanvas": {
				"position": "left",
				"zposition" : "front"
			},
			"navbar": {
				"title": 'AMBASSADOR ZERMATT'
			}
		},{
			classNames: {
				selected: "current_page_item"
			}
		});
	
		function whichAnimationEvent(){
			var t,
				el = document.createElement("fakeelement");
	
			var animations = {
				"animation"      : "animationend",
				"OAnimation"     : "oAnimationEnd",
				"MozAnimation"   : "animationend",
				"WebkitAnimation": "webkitAnimationEnd"
			}
	
			for (t in animations){
				if (el.style[t] !== undefined){
					return animations[t];
				}
			}
		}
	
		var animationEvent = whichAnimationEvent();
		
		$("#hamburger").click(function(e){
			e.preventDefault();
			if(!jQuery('html').hasClass('opened')) {
				jQuery('html')
					.addClass('opened')
					.find(".header-menu-container")
					.css("display", "block");
			} else {
				jQuery('html')
					.removeClass('opened')
					.find(".header-menu-container")
					.one(animationEvent, function(event) {
							console.log("end - closed");
							jQuery(this).css("display", "none");
					});
			}
		});

		$("#hamburger-mobile").click(function(e){
			e.preventDefault();
			if($("ul.sub-menu.mm-listview li.active.selected").length){
				var current = $("ul.sub-menu.mm-listview li.active.selected");
				var api = $("#menu-mobile").data("mmenu");
				api.setSelected(current);
				api.openPanel(current.closest(".mm-panel"));
			}
		});
		fixingMenu();
		adjustElementsPosition();

		function adjustElementsPosition(){
			var windowWidth = $(window).width();
		
			if($('.home-section').length && windowWidth > 575){
				$('.home-section').each(function(ind){
					var imgHeight = $(this).find('.hp-st-image img').height();
						$(this).find('.vertical-caption').css('width', imgHeight);
					if($(this).hasClass('home-right-left')){
						$(this).find('.vertical-caption').css('right', -(imgHeight));
					}
				});
			}
			
		
			if($('.slider-section.slider-full').length && windowWidth < 1172){
				$('.slider-section.slider-full').each(function(ind){
					$(this).find('.slick-slide').each(function(ind){
						$(this).find('img').width(windowWidth).height('auto');
						$(this).width(windowWidth).height('auto');
					});
					var slickSlideHeight = $(this).find('.slick-slide').height();
					$(this).find('.slick-track').height(slickSlideHeight);
					$(this).find('.slick-list').height(slickSlideHeight);
					$(this).find('.slick-slider').height(slickSlideHeight);
					$(this).height(slickSlideHeight+90);
					$('.slider-section.slider-full').each(function(ind){
						$(this).find('.slick-prev').css('right', 90).css('left', 'auto');
						$(this).find('.slick-next').css('right', 30);
					});
				});
			}
			
			if(windowWidth > 767){
				var containerWidth = $('.header-social .reference-container').width();
				var widthDifference = windowWidth - containerWidth;
				var marginLeft = widthDifference / 2 + 15;
				
				var colWidth = containerWidth / 12;
				
				$('.img_text_block h2').each(function(ind){
					$(this).css('marginLeft', (marginLeft + colWidth));
				});
				$('.img_text_block_2 h2').each(function(ind){
					$(this).css('marginRight', (marginLeft + colWidth));
				});
				$('.img_text_block .link-collector').each(function(ind){
					$(this).css('marginLeft', (marginLeft + colWidth));
				});
				$('.img_text_block .single-img').each(function(ind){
					$(this).css('paddingLeft', (marginLeft + colWidth));
				});
				$('.img_text_block .text-container').each(function(ind){
					$(this).css('maxWidth', (5 * colWidth));
				});
				$('.img_text_block_2 .text-container').each(function(ind){
					$(this).css('maxWidth', (5.5 * colWidth));
				});
				if($('.img_text_block .slider-small').length){
					$('.img_text_block .slider-small').each(function(ind){
						var slickWidth = $(this).parents('.image-collector-container').width();
						var slideWidth = $(this).find('.slick-slide').width();
						var slideMrginTxt = ""+$(this).find('.slick-slide').css('marginLeft');
						var slideMrgin = parseInt(slideMrginTxt.replace('px', ''));
						
						if(slickWidth > slideWidth){
							$(this).css("marginLeft", -(slideWidth - (slickWidth - slideWidth - (2 * slideMrgin))));
						}
						
					});
				}
				if($('.slider-section.slider-full').length && windowWidth > 1172){
					$('.slider-section.slider-full').each(function(ind){
						var slideWidth = $(this).find('.slick-slide').width();
						var widthSlideDifference = windowWidth - slideWidth;
						var marginRightSlide = widthSlideDifference / 2;
						$(this).find('.slick-prev').css('right', (marginRightSlide + 90)).css('left', 'auto');
						$(this).find('.slick-next').css('right', (marginRightSlide + 30));
					});
				}
				if($('.single-image-collected').length){
					$('.single-image-collected').each(function(ind){
						var imgHeight = $(this).find('img').height();
						// console.log(imgHeight);
						$(this).find('.vertical-caption-one-image').css('width', imgHeight).css('right', -(imgHeight));
					});
				}
			}
			else {
				$('.img_text_block h2').each(function(ind){
					$(this).css('marginLeft', 0);
				});
				$('.img_text_block .link-collector').each(function(ind){
					$(this).css('marginLeft', 0);
				});
				$('.img_text_block .single-img').each(function(ind){
					$(this).css('paddingLeft', 0);
				});
				$('.img_text_block .text-container').each(function(ind){
					$(this).css('maxWidth', '100%');
				});
				if($('.img_text_block .slider-small').length){
					$('.img_text_block .slider-small').each(function(ind){
						$(this).css("marginLeft", 0);
					});
				}
			}
		}

		window.onscroll = function() {fixingMenu();adjustElementsPosition();};
		$(window).resize(function() {fixingMenu();adjustElementsPosition();});

		function fixingMenu() {
			var trigger = 50;
			if( ( document.documentElement.scrollTop > trigger || document.body.scrollTop > trigger ) && !jQuery('html').hasClass('fixed')){
				jQuery('html').addClass('fixed');
			}

			if( ( ( document.documentElement.scrollTop > 0 && document.documentElement.scrollTop < trigger ) || ( document.body.scrollTop > 0 && document.body.scrollTop < trigger ) ) ) {
				jQuery('html').removeClass('fixed');
			}
		}

	}, false);
});