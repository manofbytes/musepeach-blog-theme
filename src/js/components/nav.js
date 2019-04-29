'use strict';

export default function() {

	// Initiate the menus when the DOM loads.
	document.addEventListener( 'DOMContentLoaded', function() {

		const menu = document.querySelector('.header__nav');
		const hamburger = document.querySelector('.hamburger');

		hamburger.addEventListener( 'click', function(e) {
			e.preventDefault();

			menu.classList.toggle( 'header__nav--expanded' );
			this.classList.toggle( 'hamburger--expanded' );
			this.setAttribute( 'aria-expanded', this.getAttribute( 'aria-expanded' ) === 'false' ? 'true' : 'false' );

		}, false )

	});

}
