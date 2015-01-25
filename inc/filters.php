<?php
/**
 * Filters used to rename the services post type and custom taxonomies
 *
 * @package     WPExplorer Services Editor
 * @subpackage  Filters
 * @copyright   Copyright (c) 2014, Alexander Clarke
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Post Type Labels & Slug
if ( ! function_exists( 'wpex_custom_services_args' ) ) {
	function wpex_custom_services_args( $args ) {
		
		// Custom Labels
		$option = get_option( 'custom_services_labels' );
		
		// Post name based on theme options
		if ( isset( $option  ) && $option  ) {
				$args['labels']['name'] = $option;
				$args['labels']['singular_name'] = $option;
				$args['labels']['add_new'] = _x( 'Add New', 'wpex' );
				$args['labels']['add_new_item'] = _x( 'Add New Item', 'wpex' );
				$args['labels']['edit_item'] = _x( 'Edit Item', 'wpex' );
				$args['labels']['new_item'] = _x( 'New Item', 'wpex' );
				$args['labels']['view_item'] = _x( 'View Item', 'wpex' );
				$args['labels']['search_items'] = _x( 'Search Items', 'wpex' );
				$args['labels']['not_found'] = _x( 'No Items Found', 'wpex' );
				$args['labels']['not_found_in_trash'] = _x( 'No Items Found In Trash', 'wpex' );
		}

		// Custom Dashicon
		$dashicon = get_option( 'custom_services_dashicon' );
		if ( isset( $dashicon ) && $dashicon ) {
			$args['menu_icon'] = 'dashicons-'. $dashicon;
		}

		// Custom Slug
		$option = get_option( 'custom_services_slug' );
		if ( isset( $option ) && $option ) {
			$args['rewrite'] = array( "slug" => $option );
		}

		// Return Args
		return $args;
	}
	add_filter( 'wpex_services_args', 'wpex_custom_services_args' );
	add_filter( 'symple_services_args', 'wpex_custom_services_args' );
}


// Category Taxonomy Labels & Slug
if ( ! function_exists( 'wpex_custom_services_category_args' ) ) {
	function wpex_custom_services_category_args( $args ) {
		
		// Custom Labels
		$option = get_option( 'custom_services_categories_labels' );

		// Category Labels
		if ( isset( $option ) && $option ) {
			$args['labels']['name'] = $option;
			$args['labels']['singular_name'] = $option;
			$args['labels']['search_items'] = __( 'Search','wpex');
			$args['labels']['popular_items'] =__( 'Popular','wpex');
			$args['labels']['all_items'] = __( 'All','wpex');
			$args['labels']['parent_item'] = __( 'Parent','wpex');
			$args['labels']['parent_item_colon'] = __( 'Parent','wpex');
			$args['labels']['edit_item'] = __( 'Edit','wpex');
			$args['labels']['update_item'] = __( 'Update','wpex');
			$args['labels']['add_new_item'] = __( 'Add New','wpex');
			$args['labels']['new_item_name'] = __( 'New Item Name','wpex');
			$args['labels']['separate_items_with_commas'] = __( 'Seperate with commas','wpex');
			$args['labels']['add_or_remove_items'] = __( 'Add or remove','wpex');
			$args['labels']['choose_from_most_used'] = __( 'Choose from the most used','wpex');
			$args['labels']['menu_name'] = $option;
		}

		// Custom Slug
		$option = get_option( 'custom_services_categories_slug' );
		if ( isset( $option ) && $option ) {
			$args['rewrite'] = array( "slug" => $option );
		}
		
		return $args;
			
	}
	add_filter( 'wpex_taxonomy_services_category_args', 'wpex_custom_services_category_args' );
	add_filter( 'symple_taxonomy_services_category_args', 'wpex_custom_services_category_args' );
}

// Tag Taxonomy Labels & Slug
if ( ! function_exists( 'wpex_custom_services_tag_args' ) ) {
	function wpex_custom_services_tag_args( $args ) {
		
		// Custom Labels
		$option = get_option( 'custom_services_tags_labels' );

		// Tag Labels
		if ( isset( $option ) && $option ) {
			$args['labels']['name'] = $option;
			$args['labels']['singular_name'] = $option;
			$args['labels']['search_items'] = __( 'Search','wpex');
			$args['labels']['popular_items'] =__( 'Popular','wpex');
			$args['labels']['all_items'] = __( 'All','wpex');
			$args['labels']['parent_item'] = __( 'Parent','wpex');
			$args['labels']['parent_item_colon'] = __( 'Parent','wpex');
			$args['labels']['edit_item'] = __( 'Edit','wpex');
			$args['labels']['update_item'] = __( 'Update','wpex');
			$args['labels']['add_new_item'] = __( 'Add New','wpex');
			$args['labels']['new_item_name'] = __( 'New Item Name','wpex');
			$args['labels']['separate_items_with_commas'] = __( 'Seperate with commas','wpex');
			$args['labels']['add_or_remove_items'] = __( 'Add or remove','wpex');
			$args['labels']['choose_from_most_used'] = __( 'Choose from the most used','wpex');
			$args['labels']['menu_name'] = $option;
		}
		
		// Custom Slug
		$option = get_option( 'custom_services_tags_slug' );
		if ( isset( $option ) && $option ) {
			$args['rewrite'] = array( "slug" => $option );
		}
		
		return $args;
			
	}
	add_filter( 'wpex_taxonomy_services_tag_args', 'wpex_custom_services_tag_args' );
	add_filter( 'symple_taxonomy_services_tag_args', 'wpex_custom_services_tag_args' );
}