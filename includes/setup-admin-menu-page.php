<?php

/**
 * Register admin menu and page via Codestar framework
 *
 * @since 1.0.0
 */
function asenha_admin_menu_page() {

	if ( class_exists( 'ASENHA_CSF' ) ) {

		// Set a unique slug-like ID

		$prefix = 'admin-site-enhancements';

		// Create options

		ASENHA_CSF::createOptions ( $prefix, array(

		    // framework title
			'framework_title' 		=> 'Admin and Site Enhancements <small>by <a href="https://bowo.io" target="_blank">bowo.io</a></small>',
			'framework_class' 		=> 'asenha',

			// menu settings
			'menu_title' 			=> 'Enhancements',
			'menu_slug' 			=> ASENHA_SLUG,
			'menu_type'				=> 'submenu',
			'menu_capability'		=> 'manage_options',
			// 'menu_icon'			=> 'dashicons-arrow-up-alt2',
			// 'menu_position'		=> 8,
			'menu_hidden'			=> false,
			'menu_parent'			=> 'tools.php',

			// menu extras
			'show_bar_menu' 		=> false,
			'show_sub_menu' 		=> false,
			'show_in_network' 		=> false,
			'show_in_customizer' 	=> false,
			'show_search' 			=> true,
			'show_reset_all'		=> false,
			'show_reset_section'	=> false,
			'show_footer' 			=> false,
			'show_all_options' 		=> true,
			'show_form_warning' 	=> true,
			'sticky_header'			=> true,
			'save_defaults'			=> false,
			'ajax_save'				=> true,

			// admin bar menu settings
			// 'admin_bar_menu_icon'     => '',
			// 'admin_bar_menu_priority' => 80,

			// footer
			'footer_text'			=> '',
			// 'footer_after'			=> 'Footer after',
			'footer_credit'			=> '<a href="https://wordpress.org/plugins/admin-site-enhancements/" target="_blank">Admin and Site Enhancements</a> is on <a href="https://github.com/qriouslad/admin-site-enhancements" target="_blank">github</a>.',

			// database model
			// 'database'                => 'options', // options, transient, theme_mod, network
			// 'transient_time'          => 0,

			// contextual help
			// 'contextual_help'         => array(),
			// 'contextual_help_sidebar' => '',

			// typography options
			// 'enqueue_webfont'         => true,
			// 'async_webfont'           => false,

			// others
			// 'output_css'              => true,

			// theme and wrapper classname
			'nav'                     => 'normal',
			'theme'                   => 'light',
			'class'                   => '',

			// external default values
			// 'defaults'                => array(),

		) );

		ASENHA_CSF::createSection( $prefix, array(
			'id'		=> 'content_admin',
			'title'		=> 'Content Admin',
			// 'icon'   => 'fas fa-rocket',
		) );

		ASENHA_CSF::createSection( $prefix, array(
			'parent'	=> 'content_admin',
			'title'		=> 'List Tables',
			'fields'	=> array(

				array(
				  'id'    => 'show-featured-image-column',
				  'type'  => 'switcher',
				  'title' => 'Show Featured Image Column',
				  'label' => 'Show featured image column in list tables for pages and post types that support featured images.',
				),

				array(
				  'id'    => 'show-excerpt-column',
				  'type'  => 'switcher',
				  'title' => 'Show Excerpt Column',
				  'label' => 'Show excerpt column in list tables for pages and post types that support excerpt.',
				),

				array(
				  'id'    => 'show-id-column',
				  'type'  => 'switcher',
				  'title' => 'Show ID Column',
				  'label' => 'Show ID column in list tables for pages, all post types, all taxonomies, media, users and comments.',
				),

				array(
				  'id'    => 'hide-comments-column',
				  'type'  => 'switcher',
				  'title' => 'Hide Comments Column',
				  'label' => 'Hide comments column in list tables for pages, post types that support comments, and alse media/attachments.',
				),

				array(
				  'id'    => 'hide-post-tags-column',
				  'type'  => 'switcher',
				  'title' => 'Hide Post Tags Column',
				  'label' => 'Hide tags column in list tables for posts.',
				),

				array(
				  'id'    => 'show-custom-taxonomy-filters',
				  'type'  => 'switcher',
				  'title' => 'Show Custom Taxonomy Filters',
				  'label' => 'Show additional filter(s) for hierarchical, custom taxonomies on list tables of all post types. This will work similarly with the post categories filter.',
				),

				array(
				  'id'    => 'enable-duplication',
				  'type'  => 'switcher',
				  'title' => 'Enable Page and Post Duplication',
				  'label' => 'Enable one-click duplication of pages, posts and custom posts. The corresponding taxonomy terms and post meta will also be duplicated.',
				),

				array(
				  'id'    => 'enable-media-replacement',
				  'type'  => 'switcher',
				  'title' => 'Enable Media Replacement',
				  'label' => 'Easily replace any type of media file with a new one while retaining the existing media ID and file name.',
				),

			)
		) );

		// ASENHA_CSF::createSection( $prefix, array(
		// 	'parent'	=> 'content_admin',
		// 	'title'		=> 'Tools',
		// 	'fields'	=> array(

		// 		array(
		// 		  'id'    => 'enable-duplication',
		// 		  'type'  => 'switcher',
		// 		  'title' => 'Enable Page and Post Duplication',
		// 		  'label' => 'Enable one-click duplication of pages, posts and custom posts. The corresponding taxonomy terms and post meta will also be duplicated.',
		// 		),

		// 		array(
		// 		  'id'    => 'enable-media-replacement',
		// 		  'type'  => 'switcher',
		// 		  'title' => 'Enable Media Replacement',
		// 		  'label' => 'Easily replace any type of media file with a new one while retaining the existing media ID and file name.',
		// 		),

		// 	)
		// ) );

		// ASENHA_CSF::createSection( $prefix, array(
		// 	'id'		=> 'admin_menu',
		// 	'title'		=> 'Admin Menu',
		// 	'fields'	=> array(
		// 	)
		// ) );

		// ASENHA_CSF::createSection( $prefix, array(
		// 	'parent'	=> 'admin_menu',
		// 	'title'		=> 'Admin Bar',
		// 	'fields'	=> array(

		// 		array(
		// 		'id'    => 'opt-text-1',
		// 		'type'  => 'text',
		// 		'title' => 'Text',
		// 		),

		// 	)
		// ) );

		// ASENHA_CSF::createSection( $prefix, array(
		// 	'parent'	=> 'admin_menu',
		// 	'title'		=> 'Side Menu',
		// 	'fields'	=> array(

		// 		array(
		// 		'id'    => 'opt-text-1',
		// 		'type'  => 'text',
		// 		'title' => 'Text',
		// 		),

		// 	)
		// ) );

	}

}

/**
 * Enqueue admin scripts
 *
 * @since 1.0.0
 */
function asenha_admin_scripts( $hook_suffix ) {

	// For main page of this plugin

	if ( is_asenha() ) {
		wp_enqueue_style( 'asenha-admin-page', ASENHA_URL . 'assets/css/admin-page.css', array(), ASENHA_VERSION );
		wp_enqueue_script( 'asenha-admin-page', ASENHA_URL . 'assets/js/admin-page.js', array(), ASENHA_VERSION, false );
	}

	// Enqueue on all wp-admin

	wp_enqueue_style( 'asenha-wp-admin', ASENHA_URL . 'assets/css/wp-admin.css', array(), ASENHA_VERSION );


	$current_screen = get_current_screen();

	// Content Admin >> Show IDs, for list tables in wp-admin, e.g. All Posts page

	if ( ( false !== strpos( $current_screen->base, 'edit' ) ) // List tables for pages, posts, taxonomies
		|| ( false !== strpos( $current_screen->base, 'users' ) ) // Users list table
		|| ( false !== strpos( $current_screen->base, 'upload' ) ) // Media list table
	) {
		wp_enqueue_style( 'asenha-list-table', ASENHA_URL . 'assets/css/list-table.css', array(), ASENHA_VERSION );
	}

	// Content Admin >> Enable Media Replacement
	
	if ( ( $current_screen->base == 'upload' ) // Media list table
		|| ( $current_screen->id == 'attachment' ) // Media edit page
	) {
		// wp_enqueue_style( 'asenha-jbox', ASENHA_URL . 'assets/css/jBox.all.min.css', array(), ASENHA_VERSION );
		// wp_enqueue_script( 'asenha-jbox', ASENHA_URL . 'assets/js/jBox.all.min.js', array(), ASENHA_VERSION, false );
		wp_enqueue_style( 'asenha-media-replace', ASENHA_URL . 'assets/css/media-replace.css', array(), ASENHA_VERSION );
		wp_enqueue_script( 'asenha-media-replace', ASENHA_URL . 'assets/js/media-replace.js', array(), ASENHA_VERSION, false );
	}

}

/**
 * Remove CodeStar framework welcome / ads page
 *
 * @since 1.0.0
 */
function asenha_remove_codestar_submenu() {

	remove_submenu_page( 'tools.php', 'csf-welcome' );

}

/**
 * Add 'Access now' plugin action link.
 *
 * @since    1.0.0
 */

function asenha_plugin_action_links( $links ) {

	$settings_link = '<a href="tools.php?page=' . ASENHA_SLUG . '">Access now</a>';

	array_unshift($links, $settings_link); 

	return $links; 

}

/**
 * Check if current screen is this plugin's main page
 *
 * @since 1.0.0
 */
function is_asenha() {

	$request_uri = sanitize_text_field( $_SERVER['REQUEST_URI'] ); // e.g. /wp-admin/index.php?page=page-slug

	if ( strpos( $request_uri, 'page=' . ASENHA_SLUG ) !== false ) {
		return true; // Yes, this is the plugin's main page
	} else {
		return false; // Nope, this is NOT the plugin's page
	}

}