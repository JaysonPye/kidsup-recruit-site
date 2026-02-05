// OffCanvass
$('body').on('click', '.js-kids-nav-toggle', function(event){
	$('#kids-offcanvass').toggleClass('kids-awake');
	$('#kids-page, #kids-menu').toggleClass('kids-sleep');
	$('#kids-offcanvass').css('z-index',990);
	$('.kids-nav-toggle').css('z-index',1000);
	// ...
});

// Header scroll animation
var $header = $('#kids-menu');
var $SiteTitle = $('.navbar-brand img');
var $SiteDescription = $('.navbar-brand-sub');
var $menuCircle = $('.menu_circle');
var $contentBar = $('.content_bar');

$(window).scroll(function() {
	if ($(window).scrollTop() > 50) {
		$header.css({'background':'rgba(128,180,207,0.6)','padding':'0.2em'});
		$SiteTitle.css({'width':'80%'});
		$SiteDescription.css({'margin-top':'-20px','opacity':'1'});
		$menuCircle.css({'border-width':'0','border-color':'rgba(239,130,0,0)'});
		$contentBar.css({'display':'flex'});
	} else {
		$header.css({'color':'#666','background':'rgba(255,255,255,0)','padding':'1em'});
		$SiteTitle.css({'width':'100%'});
		$SiteDescription.css({'margin-top':'0','opacity':'0'});
		$menuCircle.css({'border-width':'50px','border-color':'rgba(239,130,0,1)'});
		$contentBar.css({'display':'none'});
	}
});




$(function(){
	var $toggle = $('#nav_toggle');
	var $header = $('.ku-header');

	if (!$toggle.length || !$header.length) {
		return;
	}

	$toggle.on('click', function() {
		var isOpen = $header.hasClass('open');
		$header.toggleClass('open', !isOpen);
		$('body').toggleClass('nav-open', !isOpen);
		$toggle.attr('aria-expanded', (!isOpen).toString());
	});

	var desktopMq = window.matchMedia('(min-width: 1024px)');
	function resetNavForDesktop() {
		if (!desktopMq.matches) {
			return;
		}
		$header.removeClass('open');
		$('body').removeClass('nav-open');
		$toggle.attr('aria-expanded', 'false');
	}

	if (desktopMq.addEventListener) {
		desktopMq.addEventListener('change', resetNavForDesktop);
	} else if (desktopMq.addListener) {
		desktopMq.addListener(resetNavForDesktop);
	}
});

$(function() {
	var $submenuToggle = $('.ku-submenu-toggle');

	$submenuToggle.on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		var $parent = $(this).closest('.has-submenu');
		var isOpen = $parent.hasClass('is-open');
		$('.has-submenu').not($parent).removeClass('is-open').find('.ku-submenu-toggle').attr('aria-expanded', 'false');
		$parent.toggleClass('is-open', !isOpen);
		$(this).attr('aria-expanded', (!isOpen).toString());
	});

	$(document).on('click', function(event) {
		if ($(event.target).closest('.has-submenu').length) {
			return;
		}
		$('.has-submenu').removeClass('is-open').find('.ku-submenu-toggle').attr('aria-expanded', 'false');
	});

	$('.ku-submenu a').on('click', function() {
		$('.has-submenu').removeClass('is-open').find('.ku-submenu-toggle').attr('aria-expanded', 'false');
	});
});

$(function() {
	var currentPath = window.location.pathname.split('/').pop();
	if (currentPath === '') {
		currentPath = 'index.php';
	}

	$('.ku-nav__list a').each(function() {
		var href = $(this).attr('href');
		if (!href || href.charAt(0) === '#') {
			return;
		}
		var hrefPath = href.split('/').pop();
		if (hrefPath === currentPath) {
			$(this).addClass('is-current');
		}
	});

	$('.has-submenu').each(function() {
		var $parent = $(this);
		var $currentSub = $parent.find('a.is-current');
		var hasCurrent = $currentSub.length > 0;
		if (hasCurrent) {
			$parent.find('.ku-submenu-toggle').addClass('is-current');
			$currentSub.removeClass('is-current');
		}
	});
});

$(function() {
	var headNav = $("#top-header");
	$(window).on('load scroll', function () {
		if($(this).scrollTop() > 400 && headNav.hasClass('m_fixed') == false) {
			headNav.css({"top": '-80px'});
			headNav.addClass('m_fixed');
			headNav.animate({"top": 0},400);
		}
		else if($(this).scrollTop() < 300 && headNav.hasClass('m_fixed') == true){
			headNav.removeClass('m_fixed');
		}
	});
});
