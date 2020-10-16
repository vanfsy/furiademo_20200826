// ハンバーガーメニュー
$('#hamburger').click(function() {

  let id = '#' + $(this).attr('aria-controls');
  let attr = 'aria-expanded';
  let hidden = $(this).attr(attr);
  let expanded = hidden === 'true' ? 'false' : 'true';

  $(this).attr(attr, expanded);
  $(id).attr('aria-hidden', hidden);
});


$(function(){

	$('.slideIn-left, .slideIn-right, .fade-in, .opacity-in, .fade-in-stairs').on('inview', function(event, isInView) {
		$(this).addClass('inview-in');
	});

	// changeImg ---------------------------//
	var $elem = $('.change_img');
	var sp = '-sp.';
	var pc = '-pc.';
	var replaceWidth = 768;

	function imageSwitch() {
		var windowWidth = parseInt($(window).width());
		$elem.each(function() {
			var $this = $(this);
			if(windowWidth >= replaceWidth) {
				$this.attr('src', $this.attr('src').replace(sp, pc));
			} else {
				$this.attr('src', $this.attr('src').replace(pc, sp));
			}
		});
	}
	imageSwitch();

	var resizeTimer;
	$(window).on('resize', function() {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() {
			imageSwitch();
		}, 200);
	});
	// smoothScroll ---------------------------//
	$('a[href^="#"]').click(function(){
		var speed = 1000;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});

	// tel-link ---------------------------//
	var ua = navigator.userAgent;
	if(ua.indexOf('iPhone') > 0 && ua.indexOf('iPod') == -1 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 && ua.indexOf('SC-01C') == -1 && ua.indexOf('A1_07') == -1 ){
		$('.tel-link').each(function(){
			var str = $(this).text();
			$(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
		});
	}

	$("#slide-main").slick({
		fade: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 3000,
		arrows : false,
		dots : false,
		pauseOnHover: false,
		lazyLoad: 'ondemand',
	});
	//SPヘッダー固定メニュー
	$(document).ready(function(){
		$(".btn-menu").click(function(){
			$(this).toggleClass('btn-open');
			$('body').toggleClass('menu-open');
			$("nav").toggleClass('open');
		});
		$(".nav-gnav>li>a, .btn-cv>a, .btn-close").click(function(){
			$(".btn-menu").removeClass('btn-open');
			$('body').removeClass('menu-open');
			$("nav").removeClass('open');
		});
	});
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('.btn-menu').addClass('fixed');
		} else {
			$('.btn-menu').removeClass('fixed');
		}
	});
});

$(document).ready(function(){
	$(window).bind('scroll', function() {
	var navHeight = $( window ).height() - 0;
		if ($(window).scrollTop() > navHeight) {
			$('nav').addClass('fixed');
		}
		else {
			$('nav').removeClass('fixed');
		}
	});
});
