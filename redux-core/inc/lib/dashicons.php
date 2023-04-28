<?php
/** Array of Dashicons
 * Contributed by Kevin Provance <kevin.provance@gmail.com>
 * Last updated' April 28, 2023
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

add_filter( 'redux/fonts/dashicons', 'redux_get_dashicons' );

/**
 * Dashicons icon set'
 *
 * @return array
 */
function redux_get_dashicons(): array {
	return array(
		'dashicons-admin-appearance',
		'dashicons-admin-collapse',
		'dashicons-admin-comments',
		'dashicons-admin-customizer',
		'dashicons-admin-generic',
		'dashicons-admin-home',
		'dashicons-admin-links',
		'dashicons-admin-media',
		'dashicons-admin-multisite',
		'dashicons-admin-network',
		'dashicons-admin-page',
		'dashicons-admin-plugins',
		'dashicons-admin-post',
		'dashicons-admin-settings',
		'dashicons-admin-site-alt',
		'dashicons-admin-site-alt2',
		'dashicons-admin-site-alt3',
		'dashicons-admin-site',
		'dashicons-admin-tools',
		'dashicons-admin-users',
		'dashicons-airplane',
		'dashicons-album',
		'dashicons-align-center',
		'dashicons-align-full-width',
		'dashicons-align-left',
		'dashicons-align-none',
		'dashicons-align-pull-left',
		'dashicons-align-pull-right',
		'dashicons-align-right',
		'dashicons-align-wide',
		'dashicons-amazon',
		'dashicons-analytics',
		'dashicons-archive',
		'dashicons-arrow-down-alt',
		'dashicons-arrow-down-alt2',
		'dashicons-arrow-down',
		'dashicons-arrow-left-alt',
		'dashicons-arrow-left-alt2',
		'dashicons-arrow-left',
		'dashicons-arrow-right-alt',
		'dashicons-arrow-right-alt2',
		'dashicons-arrow-right',
		'dashicons-arrow-up-alt',
		'dashicons-arrow-up-alt2',
		'dashicons-arrow-up-duplicate',
		'dashicons-arrow-up',
		'dashicons-art',
		'dashicons-awards',
		'dashicons-backup',
		'dashicons-bank',
		'dashicons-beer',
		'dashicons-bell',
		'dashicons-block-default',
		'dashicons-book-alt',
		'dashicons-book',
		'dashicons-buddicons-activity',
		'dashicons-buddicons-bbpress-logo',
		'dashicons-buddicons-buddypress-logo',
		'dashicons-buddicons-community',
		'dashicons-buddicons-forums',
		'dashicons-buddicons-friends',
		'dashicons-buddicons-groups',
		'dashicons-buddicons-pm',
		'dashicons-buddicons-replies',
		'dashicons-buddicons-topics',
		'dashicons-buddicons-tracking',
		'dashicons-building',
		'dashicons-businessman',
		'dashicons-businessperson',
		'dashicons-businesswoman',
		'dashicons-button',
		'dashicons-calculator',
		'dashicons-calendar-alt',
		'dashicons-calendar',
		'dashicons-camera-alt',
		'dashicons-camera',
		'dashicons-car',
		'dashicons-carrot',
		'dashicons-cart',
		'dashicons-category',
		'dashicons-chart-area',
		'dashicons-chart-bar',
		'dashicons-chart-line',
		'dashicons-chart-pie',
		'dashicons-clipboard',
		'dashicons-clock',
		'dashicons-cloud-saved',
		'dashicons-cloud-upload',
		'dashicons-cloud',
		'dashicons-code-standards',
		'dashicons-coffee',
		'dashicons-color-picker',
		'dashicons-columns',
		'dashicons-controls-back',
		'dashicons-controls-forward',
		'dashicons-controls-pause',
		'dashicons-controls-play',
		'dashicons-controls-repeat',
		'dashicons-controls-skipback',
		'dashicons-controls-skipforward',
		'dashicons-controls-volumeoff',
		'dashicons-controls-volumeon',
		'dashicons-cover-image',
		'dashicons-dashboard',
		'dashicons-database-add',
		'dashicons-database-export',
		'dashicons-database-import',
		'dashicons-database-remove',
		'dashicons-database-view',
		'dashicons-database',
		'dashicons-desktop',
		'dashicons-dismiss',
		'dashicons-download',
		'dashicons-drumstick',
		'dashicons-edit-large',
		'dashicons-edit-page',
		'dashicons-edit',
		'dashicons-editor-aligncenter',
		'dashicons-editor-alignleft',
		'dashicons-editor-alignright',
		'dashicons-editor-bold',
		'dashicons-editor-break',
		'dashicons-editor-code-duplicate',
		'dashicons-editor-code',
		'dashicons-editor-contract',
		'dashicons-editor-customchar',
		'dashicons-editor-expand',
		'dashicons-editor-help',
		'dashicons-editor-indent',
		'dashicons-editor-insertmore',
		'dashicons-editor-italic',
		'dashicons-editor-justify',
		'dashicons-editor-kitchensink',
		'dashicons-editor-ltr',
		'dashicons-editor-ol-rtl',
		'dashicons-editor-ol',
		'dashicons-editor-outdent',
		'dashicons-editor-paragraph',
		'dashicons-editor-paste-text',
		'dashicons-editor-paste-word',
		'dashicons-editor-quote',
		'dashicons-editor-removeformatting',
		'dashicons-editor-rtl',
		'dashicons-editor-spellcheck',
		'dashicons-editor-strikethrough',
		'dashicons-editor-table',
		'dashicons-editor-textcolor',
		'dashicons-editor-ul',
		'dashicons-editor-underline',
		'dashicons-editor-unlink',
		'dashicons-editor-video',
		'dashicons-ellipsis',
		'dashicons-email-alt',
		'dashicons-email-alt2',
		'dashicons-email',
		'dashicons-embed-audio',
		'dashicons-embed-generic',
		'dashicons-embed-photo',
		'dashicons-embed-post',
		'dashicons-embed-video',
		'dashicons-excerpt-view',
		'dashicons-exit',
		'dashicons-external',
		'dashicons-facebook-alt',
		'dashicons-facebook',
		'dashicons-feedback',
		'dashicons-filter',
		'dashicons-flag',
		'dashicons-food',
		'dashicons-format-aside',
		'dashicons-format-audio',
		'dashicons-format-chat',
		'dashicons-format-gallery',
		'dashicons-format-image',
		'dashicons-format-quote',
		'dashicons-format-status',
		'dashicons-format-video',
		'dashicons-forms',
		'dashicons-fullscreen-alt',
		'dashicons-fullscreen-exit-alt',
		'dashicons-games',
		'dashicons-google',
		'dashicons-googleplus',
		'dashicons-grid-view',
		'dashicons-groups',
		'dashicons-hammer',
		'dashicons-heading',
		'dashicons-heart',
		'dashicons-hidden',
		'dashicons-hourglass',
		'dashicons-html',
		'dashicons-id-alt',
		'dashicons-id',
		'dashicons-image-crop',
		'dashicons-image-filter',
		'dashicons-image-flip-horizontal',
		'dashicons-image-flip-vertical',
		'dashicons-image-rotate-left',
		'dashicons-image-rotate-right',
		'dashicons-image-rotate',
		'dashicons-images-alt',
		'dashicons-images-alt2',
		'dashicons-index-card',
		'dashicons-info-outline',
		'dashicons-info',
		'dashicons-insert-after',
		'dashicons-insert-before',
		'dashicons-insert',
		'dashicons-instagram',
		'dashicons-laptop',
		'dashicons-layout',
		'dashicons-leftright',
		'dashicons-lightbulb',
		'dashicons-linkedin',
		'dashicons-list-view',
		'dashicons-location-alt',
		'dashicons-location',
		'dashicons-lock-duplicate',
		'dashicons-lock',
		'dashicons-marker',
		'dashicons-media-archive',
		'dashicons-media-audio',
		'dashicons-media-code',
		'dashicons-media-default',
		'dashicons-media-document',
		'dashicons-media-interactive',
		'dashicons-media-spreadsheet',
		'dashicons-media-text',
		'dashicons-media-video',
		'dashicons-megaphone',
		'dashicons-menu-alt',
		'dashicons-menu-alt2',
		'dashicons-menu-alt3',
		'dashicons-menu',
		'dashicons-microphone',
		'dashicons-migrate',
		'dashicons-minus',
		'dashicons-money-alt',
		'dashicons-money',
		'dashicons-move',
		'dashicons-nametag',
		'dashicons-networking',
		'dashicons-no-alt',
		'dashicons-no',
		'dashicons-open-folder',
		'dashicons-palmtree',
		'dashicons-paperclip',
		'dashicons-pdf',
		'dashicons-performance',
		'dashicons-pets',
		'dashicons-phone',
		'dashicons-pinterest',
		'dashicons-playlist-audio',
		'dashicons-playlist-video',
		'dashicons-plugins-checked',
		'dashicons-plus-alt',
		'dashicons-plus-alt2',
		'dashicons-plus',
		'dashicons-podio',
		'dashicons-portfolio',
		'dashicons-post-status',
		'dashicons-pressthis',
		'dashicons-printer',
		'dashicons-privacy',
		'dashicons-products',
		'dashicons-randomize',
		'dashicons-reddit',
		'dashicons-redo',
		'dashicons-remove',
		'dashicons-rest-api',
		'dashicons-rss',
		'dashicons-saved',
		'dashicons-schedule',
		'dashicons-screenoptions',
		'dashicons-search',
		'dashicons-share-alt',
		'dashicons-share-alt2',
		'dashicons-share',
		'dashicons-shield-alt',
		'dashicons-shield',
		'dashicons-shortcode',
		'dashicons-slides',
		'dashicons-smartphone',
		'dashicons-smiley',
		'dashicons-sort',
		'dashicons-sos',
		'dashicons-spotify',
		'dashicons-star-empty',
		'dashicons-star-filled',
		'dashicons-star-half',
		'dashicons-sticky',
		'dashicons-store',
		'dashicons-superhero-alt',
		'dashicons-superhero',
		'dashicons-table-col-after',
		'dashicons-table-col-before',
		'dashicons-table-col-delete',
		'dashicons-table-row-after',
		'dashicons-table-row-before',
		'dashicons-table-row-delete',
		'dashicons-tablet',
		'dashicons-tag',
		'dashicons-tagcloud',
		'dashicons-testimonial',
		'dashicons-text-page',
		'dashicons-text',
		'dashicons-thumbs-down',
		'dashicons-thumbs-up',
		'dashicons-tickets-alt',
		'dashicons-tickets',
		'dashicons-tide',
		'dashicons-translation',
		'dashicons-trash',
		'dashicons-twitch',
		'dashicons-twitter-alt',
		'dashicons-twitter',
		'dashicons-undo',
		'dashicons-universal-access-alt',
		'dashicons-universal-access',
		'dashicons-unlock',
		'dashicons-update-alt',
		'dashicons-update',
		'dashicons-upload',
		'dashicons-vault',
		'dashicons-video-alt',
		'dashicons-video-alt2',
		'dashicons-video-alt3',
		'dashicons-visibility',
		'dashicons-warning',
		'dashicons-welcome-add-page',
		'dashicons-welcome-comments',
		'dashicons-welcome-learn-more',
		'dashicons-welcome-view-site',
		'dashicons-welcome-widgets-menus',
		'dashicons-welcome-write-blog',
		'dashicons-whatsapp',
		'dashicons-wordpress-alt',
		'dashicons-wordpress',
		'dashicons-xing',
		'dashicons-yes-alt',
		'dashicons-yes',
		'dashicons-youtube',
		'dashicons-editor-distractionfree',
		'dashicons-exerpt-view',
		'dashicons-format-links',
		'dashicons-format-standard',
		'dashicons-post-trash',
		'dashicons-share1',
		'dashicons-welcome-edit-page',
	);
}
