/**
 * External dependencies
 */
import ScrollReveal from 'scrollreveal';

ScrollReveal().reveal(
	'.entry-content > *[class^="wp-block"] > h1,' +
		'.entry-content > *[class^="wp-block"] > h2,' +
		'.entry-content > *[class^="wp-block"] > h3,' +
		'.entry-content > *[class^="wp-block"] > h4,' +
		'.entry-content > *[class^="wp-block"] > h5,' +
		'.entry-content > .wp-block-cover .wp-block-cover__inner-container > *,' +
		'.entry-content > .wp-block-media-text .wp-block-media-text__media,' +
		'.entry-content > .wp-block-media-text .wp-block-media-text__content > *,' +
		'.entry-content > .wp-block-gallery > .wp-block-image,' +
		'.entry-content > .wp-block-image,' +
		'.entry-content > .wps-section .wps-section__inner > *,' +
		'.entry-content > .wp-block-heading,' +
		'.entry-content > .wps-grid.animated .wps-grid__inner > .wps-grid-column',
	{ interval: 100 },
);
