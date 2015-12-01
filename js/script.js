$(document).ready(function(){
	
	$('#svg-placeholder').html(svg);
	
	$(window).scroll(function(){
		if($('.page').hasClass('home-page')){
			if($(window).scrollTop() > 50) {
				$('.header-wrapper').removeClass('start').addClass('fixed');
			} else {
				$('.header-wrapper').removeClass('fixed').addClass('start');
			}
		} else {
			if($(window).scrollTop() > 50) {
				$('.header-wrapper').addClass('fixed');
			} else {
				$('.header-wrapper').removeClass('fixed');
			}
		}
	});
	
	
	// modal
	$('.btn-modal').click(function(){
		var modal = $(this).attr('data-modal');
		$('.dark-bg, #'+modal).fadeIn(500);
	});
	$('.modal .btn-close, .dark-bg').click(function(){
		$('.dark-bg, .modal').fadeOut(500);
	});
	
	
	// placeholder
	// init
	$('.inputtext, input:not([type="submit"]),textarea').each(function(){
		if($(this).val().length > 0){
			$(this).addClass('dirty');
		} else {
			$(this).removeClass('dirty');
		}
	});
	// action
	$('.inputtext, input:not([type="submit"]),textarea').keyup(function(){
		$(this).change();
	});
	$('.inputtext, input:not([type="submit"]),textarea').change(function(){
		if($(this).val().length > 0){
			$(this).addClass('dirty');
		} else {
			$(this).removeClass('dirty');
		}
	});
	
	// collapsible 
	$('.collapsible').collapsible();
	
	if($(window).outerWidth() < 992){
		$('select.mobile-synh').change(function(){
			var radio = $('.select-synh[data-select="'+$(this).attr('id')+'"]');
			radio.find('input[type="radio"]').not('[value="'+$(this).val()+'"]').prop('checked', false);
			radio.find('input[type="radio"][value="'+$(this).val()+'"]').prop('checked', true);
			radio.find('input[type="radio"]:checked').parent('.dropdown-item').click();
		});
	}
	$('.select-synh input[type="radio"]').change(function(){
		var select = $(this).parents('.select-synh').attr('data-select');
		if(($(window).outerWidth() > 992) || (!$('#'+select).hasClass('mobile-synh'))){
			$('#'+select).val($(this).val());
			$('#'+select).change();
		}
	});
	// dropdown init
	$('.dropdown-box').each(function(){
		var value = $(this).find('.dropdown-item[data-active="active"]').find('[data-value-text]');
		$(this).find('.dropdown-value > .item-text').html(value.attr('data-value-text'));
	});
	// dropdown open
	$('.dropdown-box').click(function(e){
		$('.dropdown-box').not($(this)).removeClass('open');
		$(this).toggleClass('open');
		e.stopPropagation();
	});
	$('.page').click(function(){
		$('.dropdown-box').removeClass('open');
	});
	// dropdown change
	$('.dropdown-box .dropdown-item').click(function(e){
		var value = $(this).find('[data-value-text]');
		var box = $(this).parents('.dropdown-box');
		$(this).attr('data-active', 'active').siblings().removeAttr('data-active');
		box.find('.dropdown-value > .item-text').html(value.attr('data-value-text'));
		e.stopPropagation();
		box.removeClass('open');
	});
	
	// jcarousel
	// http://sorgalla.com/jcarousel/docs/
	$('.carousel').jcarousel({
		list: '.carousel-inner'
	});
	$('.carousel-nav')
		.jcarouselPagination({
			item: function(page){
				return '<li class="nav-item"><a class="nav-link" href="#'+page+'"></a></li>';
			}
		})
		.on('jcarouselpagination:active', 'li', function(){ // - вот эта херня не работает почему-то
			$(this).children('a').addClass('active');
		})
		.on('jcarouselpagination:inactive', 'li', function(){ // - и эта (а должна!)
			$(this).children('a').removeClass('active');
		});
	$('.carousel-controlls .prev')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl();
	$('.carousel-controlls .next')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl();
	
	
	
	// anchor-link
	$('.anchor-link').click(function(e){
		var el = $(this).attr('href');
		var scrollto = $(el).offset();
		$('html,body').animate({scrollTop: scrollto.top - 100},700);
		return false;
		//e.preventDefault;
	});
	
	// yandex.map
	// https://tech.yandex.ru/maps/doc/jsapi/2.1/quick-start/tasks/quick-start-docpage/
	ymaps.ready(init);
	var sMap, sPlacemark, aMap;
	
	function init(){
		sMap = new ymaps.Map("cont-map",{
			center: [57.16565145867384,65.54499550000001], // Тюмень
			zoom: 12,
			controls: ['smallMapDefaultSet','routeEditor','trafficControl']
		});
		sPlacemark = new ymaps.Placemark(sMap.getCenter(),{},{
			iconLayout: 'default#image',
			iconImageHref: 'images/svg/pin56.svg',
			iconImageSize: [35,53],
		});
		sMap.behaviors.disable('scrollZoom');
		sMap.geoObjects.add(sPlacemark);
		
		aMap = new ymaps.Map("about-map",{
			center: [57.16565145867384,65.54499550000001], // Тюмень
			zoom: 11,
			controls: ['smallMapDefaultSet','routeEditor','trafficControl']
		});
		var aMapCoords = [
			[57.15689047935417,65.45087498346709],	// Черепанова 29
			[57.15370227137238,65.56400849999996],	// 50 лет Октября, 8/1
			[57.194878271190895,65.5943265],		// Ветеранов Труда, 47
			[57.13485277148095,65.60593249999998],	// Пермякова, 1а
			[57.13079877143909,65.54357149999998],	// Молодежная, 72
			[57.13420827141365,65.4935445],			// Московский тракт, 120/1
		]
		var projectsCollection = new ymaps.GeoObjectCollection({},{
			iconLayout: 'default#image',
			iconImageHref: 'images/svg/pin56.svg',
			iconImageSize: [35,53],
		});
		for (var i=0;i<aMapCoords.length;i++){
			projectsCollection.add(new ymaps.Placemark(aMapCoords[i]));
		}
		aMap.behaviors.disable('scrollZoom');
		aMap.geoObjects.add(projectsCollection);
	}
	$('.toggle-content-box').each(function(){
		if($(this).attr('data-state')){
			var state = $(this).attr('data-state');
		} else {
			var state = 'less';
		}
		if($(this).attr('data-show')){
			var num = $(this).attr('data-show');
		} else {
			var num = 5;
		}
		toggleContent($(this), 'init', state, num);
	});
	$('.show-buttons .show-more').click(function(){
		toggleContent($(this).parents('.toggle-content-box'), 'toggle', 'more', $(this).parents('.toggle-content-box').attr('data-show'));
		$(this).hide().siblings().show();
	});
	$('.show-buttons .show-less').click(function(){
		toggleContent($(this).parents('.toggle-content-box'), 'toggle', 'less', $(this).parents('.toggle-content-box').attr('data-show'));
		$(this).hide().siblings().show();
	});
	
	// tabs
	//$('.tabs').tabs();
	// init
	$('.tabs').each(function(){
		var actID = $(this).find('.tab-header-item.active .tab-link').attr('href');
		$(this).children('.tab-content').find(actID).addClass('open');
		if($('.workarea .tab-hide-box').length > 0){
			$('.tab-hide-box[data-hide-id='+actID+']').hide();
		}
	});
	// action
	$('.tab-link').click(function(){
		var actID = $(this).attr('href');
		var tabs = $(actID).parents('.tabs');
		if($(this).parent().hasClass('tab-header-item')){
			$(this).parent('.tab-header-item').addClass('active').siblings().removeClass('active');
		} else {
			$('.tab-header-item [href='+actID+']').parent('.tab-header-item').addClass('active').siblings().removeClass('active');
		}
		tabs.children('.tab-content').find(actID).addClass('open').siblings().removeClass('open');
		if($('.workarea .tab-hide-box').length > 0){
			$('.tab-hide-box[data-hide-id!='+actID+']').show();
			$('.tab-hide-box[data-hide-id='+actID+']').hide();
		}
		$(actID).trigger("tabshow");
		return false;
	});
	
	// tooltips 
	// init
	/*
	$('.tooltip').each(function(){
		if($(this).attr('data-box')){
			var box = $($(this).attr('data-box'));
		} else {
			var box = 'page';
		}
		if($(this).attr('data-position')){
			var pos = $(this).attr('data-position');
		} else {
			var pos = 'top-left';
		}
		if($(this).attr('data-offset')){
			var off = parseInt($(this).attr('data-offset'),10);
		} else {
			var off = 23;
		}
		var tooltipW = $(this).outerWidth();
		var tooltipH = $(this).outerHeight();
		var posTop = 0;
		var posLeft = 0;
		if(box != 'page'){
			switch(pos){
				case 'left-top':
					posTop = box.offset().top;
					posLeft = box.offset().left - off - tooltipW;
				break;
				case 'left-middle':
					posTop = box.offset().top + ((box.outerHeight() - tooltipH)/2);
					posLeft = box.offset().left - off - tooltipW;
				break;
				case 'left-bottom':
					posTop = box.offset().top + box.outerHeight() - tooltipH;
					posLeft = box.offset().left - off - tooltipW;
				break;
				case 'right-top':
					posTop = box.offset().top;
					posLeft = box.offset().left + off + box.outerWidth();
				break;
				case 'right-middle':
					posTop = box.offset().top + ((box.outerHeight() - tooltipH)/2);
					posLeft = box.offset().left + off + box.outerWidth();
				break;
				case 'right-bottom':
					posTop = box.offset().top + box.outerHeight() - tooltipH;
					posLeft = box.offset().left + off + box.outerWidth();
				break;
				case 'bottom-left':
					posTop = box.offset().top + box.outerHeight() + off;
					posLeft = box.offset().left;
				break;
				case 'bottom-center':
					posTop = box.offset().top + box.outerHeight() + off;
					posLeft =  box.offset().left + ((box.outerWidth() - tooltipW)/2);
				break;
				case 'bottom-right':
					posTop = box.offset().top + box.outerHeight() + off;
					posLeft = box.offset().left + box.outerWidth() - tooltipW;
				break;
				case 'top-center':
					posTop = box.offset().top - off - tooltipW;
					posLeft = box.offset().left + ((box.outerWidth() - tooltipW)/2);
				break;
				case 'top-right':
					posTop = box.offset().top - off - tooltipW;
					posLeft = box.offset().left + box.outerWidth() - tooltipW;
				break;
				case 'top-left':
				default:
					posTop = box.offset().top - off - tooltipW;
					posLeft = box.offset().left;
				break;
			}
			$(this).offset({top:posTop,left:posLeft});
		} else {
			console.log('page');
		}
	});
	// show
	$('.show-tooltip').click(function(){
		var tooltip = $(this).attr('data-tooltip');
		tooltip.addClass('show');
	});
	$('.btn.shopping-card').click(function(){
		$('.tooltip[data-box="#minicard"]').addClass('show');
	});
	// hide
	$('.tooltip .btn-close').click(function(){
		$(this).parents('.tooltip').removeClass('show');
	});
	*/
	
	// show/hide block
	$('.btn-toggle-block').click(function(){
		if($(this).attr('data-toggle-class')){
			var $class = $(this).attr('data-toggle-class');
		} else {
			var $class = 'hide';
		}
		if($(this).attr('data-hide-block')){
			$($(this).attr('data-hide-block')).addClass($class);
		}
		if ($(this).attr('data-show-block')) {
			$($(this).attr('data-show-block')).removeClass($class);
		} 
		if ($(this).attr('data-block')){
			$($(this).attr('data-block')).toggleClass($class);
		}
		if($(this).is('a')){
			return false;
		}
	});
	
	// delete address
	$('.address-book .btn-delete-addr').click(function(){
		$(this).parents('.address-item').detach();
	});
	
	// rating
	$('.rating-field .star').click(function(){
		var value = $(this).index() + 1;
		$(this).parents('.rating-field').children('.rating-value').val(value);
		$(this).parents('.rating-field').children('.rating').removeClass('rate-1 rate-2 rate-3 rate-4 rate-5').addClass('rate-'+value);
	});
	
	// forms
	$('[required]').change(function(){
		validateRequired($(this));
	});
	$('input[type="email"]').change(function(){
		validateEmail($(this));
	});
	$('input[type="tel"]').change(function(){
		validateTel($(this));
	});
	$('input[type="file"]').change(function(){
		if($(this).val().length > 0){
			var isValid = validateFile($(this));
			$(this).siblings('.inputfile-value').find('.item-text').text($(this)[0].files[0].name);
			$(this).siblings('.inputfile-value').addClass('shown');
		} else {
			$(this).parents('.inputfile').removeClass('invalid-file');
			$(this).siblings('.inputfile-value .item-text').text('');
			$(this).siblings('.inputfile-value').removeClass('shown');
		}
	});
	$('.inputfile .btn-delete').click(function(){
		$(this).parents('.inputfile').find('input[type="file"]').val('');
		$(this).parents('.inputfile').removeClass('invalid-file');
		$(this).parents('.inputfile').find('input[type="file"]').change();
		return false;
	});
	$('form').submit(function(){
		$(this).find('[required]').each(function(){
			validateRequired($(this));
		});
		if($(this).find('.invalid-required, .invalid-pattern, .invalid-file').length > 0){
			return false;
		} 
	});

});

function position() {
	var pos = $(window).scrollTop();
	$('.page').css({'position': 'fixed', 'top': - pos+'px'});
}
function toggleContent(el,action,state,num){
	// default
	if(!action){
		action = 'init';
	}
	if(!state){
		state = 'less';
	}
	if(!num){
		num = 5;
	}
	var lessHeight = el.children('.show-buttons').outerHeight();
	el.children('*:lt('+num+')').each(function(){
		lessHeight = lessHeight + $(this).outerHeight() + parseFloat($(this).css('margin-bottom'),10);
	});
	var moreHeight = el.children('.show-buttons').outerHeight();
	el.children('[class!="show-buttons"]').each(function(){
		moreHeight = moreHeight + $(this).outerHeight() + parseFloat($(this).css('margin-bottom'),10);
	});
	if(action == 'init'){
		if(state == 'less'){
			el.css('height', lessHeight);
		} else if (state == 'more') {
			el.css('height', moreHeight);
		}
	} else if (action == 'toggle'){
		if(state == 'less'){
			el.animate({'height': lessHeight},300).attr('data-state', 'more');
		} else if (state == 'more') {
			el.animate({'height': moreHeight},300).attr('data-state', 'less');;
		}
	}
}
function tab(){
	console.log('ok');
}
// validation functions
function validateEmail(el){
	var pattern = /.+@.+\..+/i;
	if(pattern.test(el.val())){
		el.removeClass('invalid-pattern');
	} else {
		el.addClass('invalid-pattern');
	}
}
function validateTel(el){
	var pattern = /\d{10,11}/;
	if(pattern.test(el.val())){
		el.removeClass('invalid-pattern');
	} else {
		el.addClass('invalid-pattern');
	}
}
function validateFile(el){
	var typePattern = /ppt|pptx|doc|docx|xls|xlsx|txt|pdf|png|jpg/i;
	if((el[0].files[0].size > 10485760) || !(typePattern.test(el[0].files[0].name.split('.').pop()))) {
		el.parents('.inputfile').addClass('invalid-file');
		return false;
	} else {
		el.parents('.inputfile').removeClass('invalid-file');
		return true;
	}
}
function validateRequired(el){
	if((el.val().length == 0) || ((el.attr('type') == 'checkbox') && (el.prop('checked') == false))){
		el.addClass('invalid-required');
	} else {
		el.removeClass('invalid-required');
	}
}

// angularjs 
// https://docs.angularjs.org/guide
// http://angular.ru/guide/
/*
var zakrepi = angular.module('zakrepi',[]);
*/