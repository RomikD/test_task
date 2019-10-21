/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
$('#testimonial .owl-carousel').owlCarousel({
	loop:true,
	margin:10,
	nav:false,
	responsive:{
		0:{
			items:1
		},
		900:{
			items:2
		}
	}
});

jQuery('.logo i').on('click', function () {
	jQuery('header #site-navigation').toggle();
	if (jQuery('header #site-navigation').is(':visible')) {

		jQuery(".logo  i").removeClass('fa-align-justify');
		jQuery(".logo i").addClass(' fa-times');

	}
	else {
		jQuery(".logo i").removeClass(' fa-times');
		jQuery(".logo i").addClass('fa-align-justify');
	}
});

$(document).ready(function () {
	let show = true;
	const progress = $('#progress');
	const countbox = $('.benefits__inner');
	const number = $('.number');
	if (progress.length) {
		$(window).on("scroll load resize", function () {
			if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
			const w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
			let e_top = progress.offset().top; // Расстояние от блока со счетчиками до верха всего документа
			const w_height = $(window).height(); // Высота окна браузера
			const d_height = $(document).height(); // Высота всего документа
			const e_height = countbox.outerHeight(); // Полная высота блока со счетчиками
			if (w_top + (w_height - 150) >= e_top || w_height + w_top === d_height || e_height + e_top < w_height) {
				number.css('opacity', '1');
				number.spincrement({
					thousandSeparator: ",",
					duration: 6000
				});
				show = false;
			}
		});
	}
});
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();
