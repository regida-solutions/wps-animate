/**
 * External dependencies
 */
import ScrollReveal from 'scrollreveal';

ScrollReveal().reveal(
	'*[class^="wp-block"] > h1,' +
		'*[class^="wp-block"] > h2,' +
		'*[class^="wp-block"] > h3,' +
		'*[class^="wp-block"] > h4,' +
		'*[class^="wp-block"] > h5,' +
		'.wp-block-cover .wp-block-cover__inner-container > *,' +
		'.wp-block-media-text .wp-block-media-text__media,' +
		'.wp-block-media-text .wp-block-media-text__content > *,' +
		'.wp-block-image,' +
		'.wps-section .wps-section__inner > *,' +
		'.entry-content > .wp-block-heading,' +
		'.wps-grid-column',
	{ interval: 100 },
);
