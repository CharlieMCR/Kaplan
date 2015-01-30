;(function($){
    $(document).ready(function(){

		var windowWidth = $(window).width();
		var windowHeight = $(window).height();
		var slideWidth = 0;
		var left = 0;
		var position = 1;
		var $items = $('.carousel >');
		var n = $items.length;

		$(function(){
			var $items = $('.carousel >');
			$('.full-height').css('height', windowHeight);
			$('.90-height').css('height', Math.round(windowHeight*0.8));
			$items.each(function(i){
				$(this).css({
					'background': 'url(' + $('img', $items).eq(i).attr('src') + ') no-repeat center center fixed',
					'background-size': 'cover'
				});
				if ($('body').hasClass('home')) {
					$(this).css({
						'width': windowWidth
					});
				} else {
					$(this).css({
						'width': Math.round(windowWidth*0.8)
					});
				};
			});
			$('img', $items).detach();
			$('.carousel').css({
				'width': windowWidth*n
			});
			slideWidth = $('.carousel >').width();
			return slideWidth;
		});

		function posUp() {
			if (position < n) {
				position++;
				left -= slideWidth;
			};
		}
		function posDown() {
			if (position > 1) {
				position--;
				left +=slideWidth;
			};
		}
		function carousel() {
			setInterval(function(){
				if (position < n) {
					posUp();
				} else if (position === n) {
					position = 1;
					left = 0;
				};
				slide();
			}, 5000);
		}
		function slide() {
			if (position <= n && position > 0) {
				$('.carousel').animate({
					'margin-left': left
				}, 1000, 'swing');
			}
		}

		function toggleNav() {
				if ($('.wrapper').hasClass('show-nav')) {
					// Do things on Nav Close
					$('.wrapper').removeClass('show-nav');
				} else {
					// Do things on Nav Open
					$('.wrapper').addClass('show-nav');
				}
			}

		$(function() {
			$('.toggle-nav').click(function() {
				toggleNav();
			});
		});

		$('#btn').click(function(){
			carousel();
		});

		$('#next').click(function(){
			posUp();
			slide();
		});

		$('#prev').click(function(){
			posDown();
			slide();
		});

		
		var $sliderContainer = $('.image-gallery');
		var $slide = $('> >', $sliderContainer);
		var $overlay = $('<div id="overlay" class="hide"></div>');
		var $innerOverlay = $('<div class="image-lb image-gallery"></div>');
		var $img = '';
		var $slider = '';
		var i = 0;

		function navigation(div) {
			div.prepend('<p id="prev" class="prev slide-direction"><</p>');
			div.append('<p id="next" class="next slide-direction">></p>');
			$slider = $('> >', div);
			return $slider;
		}

		function slideNav(direction, slider) {
			if (direction == -1) {
				if (i > 0) {
					i--;
					showSlide(i, slider);
				}
			};
			if (direction == 1) {
				if (i >= $slide.length-1) {
					i = 0;
					showSlide(i, slider);
				} else {
					i++;
					showSlide(i, slider);
				};
			};
		}

		function showSlide(i) {
			$slide.hide();
			$slide.eq(i).show();
			// $slide.eq(i+1).show();
		}

		function lightbox() {
			var $div = $('<div class=""></div>');
			$slide.each(function(i) {
				$div.append('<img>');
				$('img', $div).eq(i).attr('src', $slide.eq(i).attr('href'));
				$('img', $div).eq(i).attr('alt', $('img', $slide).eq(i).attr('alt'));
			});
			$innerOverlay.append($div);
			$overlay.append($innerOverlay);
			$('body').append($overlay);
			$img = $('img', $div);
			navigation($innerOverlay);
			return $innerOverlay;
			return $img;
			$slide = $img;
		}

		lightbox();
		// $(function(){
		// 	if ($('body').hasClass('single')) {
		// 		console.log('single');
		// 		lightbox();
		// 	};
		// });

		function closeOverlay() {
			// i = j;
			$overlay.addClass('hide');
			$slide = $('> >', $sliderContainer);
		}

		$('.prev').on('click', function(){slideNav(-1, $slide)});
		$('.next').on('click', function(){slideNav(1, $slide)});

		$slide.click(function(event) {
			// var a = 0;
			event.preventDefault();
			if ($overlay.hasClass('hide')) {
				$overlay.removeClass('hide');
			};
			$overlay.addClass('overlay');
			$slide = $img;
			i = $(this).index();
			// j = i;
			showSlide(i);
			// return j;
		})

		$(document).keydown(function(e) {
			if (e.keyCode === 27) {
				closeOverlay();
			} else if (e.keyCode === 37) {
				slideNav(-1, $slide);
			} else if (e.keyCode === 39) {
				slideNav(1, $slide);
			}
		});

		$overlay.click(function(e) {
			if (e.target.id === 'overlay') {
				closeOverlay();
			};
		})

		// console.log($img);




    });
})(jQuery);