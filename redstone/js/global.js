/*-------------------------------------------------------------------------------------------------------------------------------*/
/*This is main JS file that contains custom style rules used in this template*/
/*-------------------------------------------------------------------------------------------------------------------------------*/
/* Template Name: JustShop*/
/* Version: 1.0 Initial Release*/
/* Build Date: 17-03-2017*/
/* Author: Unbranded*/
/* Website: http://moonart.net.ua/site/ 
/* Copyright: (C) 2017 */
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------*/
/* TABLE OF CONTENTS: */
/*--------------------------------------------------------*/
/* 01 - variables */
/* 02 - page calculations */
/* 03 - function on document ready */
/* 04 - function on page load */
/* 05 - function on page resize */
/* 06 - function on page scroll */
/* 07 - swiper sliders */
/* 08 - buttons, clicks, hovers */
/* 09 - tabs */
/* 10 - accordeon */
/* 11 - isotope */
/* 12 - search */

var _functions = {};

$(function() {

	"use strict";

	/*================*/
	/* 01 - variables */
	/*================*/
	var swipers = [], winW, winH, headerH, winScr, $container, footerTop, _isresponsive, _ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);

	/*========================*/
	/* 02 - page calculations */
	/*========================*/
	_functions.pageCalculations = function(){
		winW = $(window).width();
		winH = $(window).height();
	};

	/*=================================*/
	/* 03 - function on document ready */
	/*=================================*/
	if(_ismobile) $('body').addClass('mobile');
	_functions.pageCalculations();

	/*============================*/
	/* 04 - function on page load */
	/*============================*/
	$(window).load(function(){
		_functions.initSwiper();
		$('body').addClass('loaded');
		$('#loader-wrapper').fadeOut();

		if($('.isotope-filter').length){
			var initValue = $('.isotope-nav').find('.selected a').attr('data-filter');
			$container.isotope({itemSelector: '.isotope-item', filter: initValue,masonry:{gutter:0,columnWidth:'.grid-sizer'}});			
		}	
	});

	/*==============================*/
	/* 05 - function on page resize */
	/*==============================*/
	_functions.resizeCall = function(){
		_functions.pageCalculations();
	};
	if(!_ismobile){
		$(window).resize(function(){
			_functions.resizeCall();
		});
	} else{
		window.addEventListener("orientationchange", function() {
			_functions.resizeCall();
		}, false);
	}

	/*==============================*/
	/* 06 - function on page scroll */
	/*==============================*/	
	$(window).on("scroll", function() {
		winScr = $(window).scrollTop();
		if (winScr > 200){
			$(".navbar").addClass("stick");
		} else {
			$(".navbar").removeClass("stick");
		}	
	});

	/*=====================*/
	/* 07 - swiper sliders */
	/*=====================*/
	var initIterator = 0;
	_functions.initSwiper = function(){
		$('.swiper-container').not('.initialized').each(function(){								  
			var $t = $(this);								  

			var index = 'swiper-unique-id-'+initIterator;

			$t.addClass('swiper-'+index+' initialized').attr('id', index);
			$t.find('>.swiper-pagination').addClass('swiper-pagination-'+index);
			$t.parent().find('>.swiper-button-prev').addClass('swiper-button-prev-'+index);
			$t.parent().find('>.swiper-button-next').addClass('swiper-button-next-'+index);

			var slidesPerViewVar = ($t.data('slides-per-view'))?$t.data('slides-per-view'):1;
			if(slidesPerViewVar!='auto') slidesPerViewVar = parseInt(slidesPerViewVar, 10);

			swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
				pagination: '.swiper-pagination-'+index,
		        paginationClickable: true,
		        nextButton: '.swiper-button-next-'+index,
		        prevButton: '.swiper-button-prev-'+index,
		        slidesPerView: slidesPerViewVar,
		        autoHeight:($t.is('[data-auto-height]'))?parseInt($t.data('auto-height'), 10):0,
		        loop: ($t.is('[data-loop]'))?parseInt($t.data('loop'), 10):0,
				autoplay: ($t.is('[data-autoplay]'))?parseInt($t.data('autoplay'), 10):5000,
				spaceBetween: ($t.is('[data-space-between]'))?parseInt($t.data('space-between'), 10):0,
				centeredSlides: ($t.is('[data-centered-slides]'))?parseInt($t.data('centered-slides'), 10):0,
		        breakpoints: ($t.is('[data-breakpoints]'))? { 767: { slidesPerView: parseInt($t.attr('data-xs-slides'), 10) }, 991: { slidesPerView: parseInt($t.attr('data-sm-slides'), 10) }, 1199: { slidesPerView: parseInt($t.attr('data-md-slides'), 10) } } : {},
		        initialSlide: ($t.is('[data-ini]'))?parseInt($t.data('ini'), 10):0,
		        speed: ($t.is('[data-speed]'))?parseInt($t.data('speed'), 10):500,
		        keyboardControl: true,
		        mousewheelControl: ($t.is('[data-mousewheel]'))?parseInt($t.data('mousewheel'), 10):0,
		        mousewheelReleaseOnEdges: true,
		        direction: ($t.is('[data-direction]'))?$t.data('direction'):'horizontal'
			});
			swipers['swiper-'+index].update();
			initIterator++;
		});

		// $('.swiper-container.swiper-control-top').each(function(){
		// 	swipers['swiper-'+$(this).attr('id')].params.control = swipers['swiper-'+$(this).closest('.two-swiper-wrapper').find('.swiper-control-bottom').attr('id')];
		// });
		// $('.swiper-container.swiper-control-bottom').each(function(){
		// 	swipers['swiper-'+$(this).attr('id')].params.control = swipers['swiper-'+$(this).closest('.two-swiper-wrapper').find('.swiper-control-top').attr('id')];
		// });
	};

	/*==============================*/
	/* 08 - buttons, clicks, hovers */
	/*==============================*/
	
	//menu
	$('.navbar-toggle').on('click', function(e){
		$(this).toggleClass('active');
		$(this).parents('nav').find('.collapse').slideToggle();
		e.preventDefault();
	});

	// $('.navbar a .caret').on('click', function(e){
	// 	$(this).parent().siblings('ul').slideToggle(350);
	// 	e.preventDefault();	
	// });

	$('.navbar i.fa').on('click', function(e){
		$(this).parent().find('> ul').slideToggle(350);
		$(this).toggleClass('rotated');
		e.preventDefault();	
	});

	//open and close popup
	$(document).on('click', '.open-popup', function(){
		$('.popup-content').removeClass('active');
		$('.popup-wrapper, .popup-content[data-rel="'+$(this).data('rel')+'"]').addClass('active');
		$('html').addClass('overflow-hidden');
		return false;
	});

	$(document).on('click', '.popup-wrapper .button-close, .popup-wrapper .layer-close', function(){
		$('.popup-wrapper, .popup-content').removeClass('active');
		$('html').removeClass('overflow-hidden');
		setTimeout(function(){
			$('.ajax-popup').remove();
		},300);
		return false;
	});
	
	/*video popup*/
	$(document).on('click', '.video-open', function(e){
		e.preventDefault();
		var video = $(this).attr('href');
		$('.video-popup-container iframe').attr('src',video);
		$('.video-popup').addClass('active');
		
	});
	$('.video-popup-close, .video-popup-layer').on('click', function(e){
		$('.video-popup').removeClass('active');
		$('.video-popup-container iframe').attr('src','about:blank')
		e.preventDefault();
	});

	/*==============================*/
	/* 09 - tabs */
	/*==============================*/
	var tabsFinish = 0;
	$('.tab-menu').on('click', function() {
		if($(this).hasClass('active') || tabsFinish) return false;
		tabsFinish = 1;
        var tabsWrapper = $(this).closest('.tabs-block'),
        	tabsMenu = tabsWrapper.find('.tab-menu'),
        	tabsItem = tabsWrapper.find('.tab-entry'),
        	index = tabsMenu.index(this);
        
        tabsItem.filter(':visible').fadeOut(function(){
        	tabsItem.eq(index).fadeIn(function(){
        		tabsFinish = 0;
        	});
        });
        tabsMenu.removeClass('active');
        $(this).addClass('active');
    });
	
	/*==============================*/
	/* 10 - accordeon */
	/*==============================*/
	$('.accordeon-title').on('click', function(){
		$(this).closest('.accordeon').find('.accordeon-title').not(this).removeClass('active').next().slideUp();
		$(this).addClass('active').next().slideDown();
	});
	
	/*==============================*/
	/* 11 - isotope */
	/*==============================*/
	$container = $('.isotope-content');
	$('.isotope-nav').on( 'click', 'a', function(e) {
		var filterValue = $(this).attr('data-filter');
		var $buttonGroup = $(this).parent().parent();
		var index = $buttonGroup.find('li').index($(this).parent());
		$buttonGroup.siblings('.isotope-select').find('option:eq('+index+')').prop('selected', true);
		$container.isotope({ filter: filterValue });
		$buttonGroup.find('.selected').removeClass('selected');
		$(this).parent().addClass('selected');
		e.preventDefault();
	});
	$('.isotope-select select').on( 'change', function() {
		var filterValue = $(this).find('option:selected').val();
		var index = $(this).find('option').index($(this).find('option:selected'));
		$container.isotope({ filter: filterValue });
		var $buttonGroup = $(this).parents('.isotope-select').siblings('.isotope-nav');
		$buttonGroup.find('.selected').removeClass('selected');
		$buttonGroup.find('li').eq(index).addClass('selected');
	});
	
	/*==============================*/
	/* 12 - search */
	/*==============================*/
    $('.tt-s-popup-btn').on('click', function(e){
		$('.tt-s-popup').addClass('open');
		e.preventDefault();
	});
	$('.tt-s-popup-close, .tt-s-popup-layer').on('click', function(e){
		$('.tt-s-popup').removeClass('open');
		e.preventDefault();
	});	

});