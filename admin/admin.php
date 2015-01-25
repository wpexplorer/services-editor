<?php
/**
 * Registers the settings page for this plugin
 *
 * @package     WPExplorer Services Editor
 * @subpackage  Filters
 * @copyright   Copyright (c) 2014, Alexander Clarke
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */


// create custom plugin settings menu
add_action( 'admin_menu', 'wpexsr_create_menu' );

// Create submenu
function wpexsr_create_menu() {
	add_submenu_page( 'options-general.php', 'Services Editor', 'Services Editor', 'administrator', __FILE__, 'wpexsr_settings_page' );
	add_action( 'admin_init', 'wpexsr_register_settings' );
}

// Register settings
function wpexsr_register_settings() {
	register_setting( 'wpexsr_options', 'custom_services_dashicon' );
	register_setting( 'wpexsr_options', 'custom_services_labels' );
	register_setting( 'wpexsr_options', 'custom_services_slug' );
	register_setting( 'wpexsr_options', 'custom_services_categories_labels' );
	register_setting( 'wpexsr_options', 'custom_services_categories_slug' );
	register_setting( 'wpexsr_options', 'custom_services_tags_labels' );
	register_setting( 'wpexsr_options', 'custom_services_tags_slug' );
}

// The settings page output
function wpexsr_settings_page() { ?>
<div class="wrap">
<h2><?php _e( 'WPExplorer Services Editor', 'wpexsr' ); ?></h2>

<form method="post" action="options.php">
	<?php settings_fields( 'wpexsr_options' ); ?>
	<p><?php _e( 'If you alter any slug\'s make sure to reset your permalinks to prevent 404 errors.', 'wpexsr' ); ?></p>
	<table class="form-table">
		<tr valign="top">
			<th scope="row"><?php _e( 'Admin Icon', 'wpexsr' ); ?></th>
			<td>
				<?php $dashicons = array('admin-appearance','admin-collapse','admin-comments','admin-generic','admin-home','admin-media','admin-network','admin-page','admin-plugins','admin-settings','admin-site','admin-tools','admin-users','align-center','align-left','align-none','align-right','analytics','arrow-down','arrow-down-alt','arrow-down-alt2','arrow-left','arrow-left-alt','arrow-left-alt2','arrow-right','arrow-right-alt','arrow-right-alt2','arrow-up','arrow-up-alt','arrow-up-alt2','art','awards','backup','book','book-alt','businessman','calendar','camera','cart','category','chart-area','chart-bar','chart-line','chart-pie','clock','cloud','dashboard','desktop','dismiss','download','edit','editor-aligncenter','editor-alignleft','editor-alignright','editor-bold','editor-customchar','editor-distractionfree','editor-help','editor-indent','editor-insertmore','editor-italic','editor-justify','editor-kitchensink','editor-ol','editor-outdent','editor-paste-text','editor-paste-word','editor-quote','editor-removeformatting','editor-rtl','editor-spellcheck','editor-strikethrough','editor-textcolor','editor-ul','editor-underline','editor-unlink','editor-video','email','email-alt','exerpt-view','facebook','facebook-alt','feedback','flag','format-aside','format-audio','format-chat','format-gallery','format-image','format-links','format-quote','format-standard','format-status','format-video','forms','googleplus','groups','hammer','id','id-alt','image-crop','image-flip-horizontal','image-flip-vertical','image-rotate-left','image-rotate-right','images-alt','images-alt2','info','leftright','lightbulb','list-view','location','location-alt','lock','marker','menu','migrate','minus','networking','no','no-alt','performance','plus','portfolio','post-status','pressthis','products','redo','rss','screenoptions','search','share','share-alt','share-alt2','share1','shield','shield-alt','slides','smartphone','smiley','sort','sos','star-empty','star-filled','star-half','tablet','tag','testimonial','translation','trash','twitter','undo','update','upload','vault','video-alt','video-alt2','video-alt3','visibility','welcome-add-page','welcome-comments','welcome-edit-page','welcome-learn-more','welcome-view-site','welcome-widgets-menus','wordpress','wordpress-alt','yes');
				$dashicons = array_combine( $dashicons,$dashicons ); ?>
				<select name='custom_services_dashicon' id='custom_services_dashicon'>
					<option value="0"><?php _e( 'Select', 'wpexsr' ); ?></option>
					<?php foreach ( $dashicons as $dashicon ) {
						if ( $dashicon == get_option( 'custom_services_dashicon' ) ) {
							$selected = 'selected';
						} else {
							$selected = '';
						} ?>
						<option value="<?php echo $dashicon; ?>" <?php echo $selected; ?>><?php echo $dashicon; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Post Type Label', 'wpexsr' ); ?></th>
			<td><input type="text" name="custom_services_labels" value="<?php echo get_option( 'custom_services_labels' ); ?>" /></td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Post Type Slug', 'wpexsr' ); ?></th>
			<td><input type="text" name="custom_services_slug" value="<?php echo get_option( 'custom_services_slug' ); ?>" /></td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Categories Label', 'wpexsr' ); ?></th>
			<td><input type="text" name="custom_services_categories_labels" value="<?php echo get_option( 'custom_services_categories_labels' ); ?>" /></td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Categories Slug', 'wpexsr' ); ?></th>
			<td><input type="text" name="custom_services_categories_slug" value="<?php echo get_option( 'custom_services_categories_slug' ); ?>" /></td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Tags Label', 'wpexsr' ); ?></th>
			<td><input type="text" name="custom_services_tags_labels" value="<?php echo get_option( 'custom_services_tags_labels' ); ?>" /></td>
		</tr>
		<tr valign="top">
			<th scope="row"><?php _e( 'Tags Slug', 'wpexsr' ); ?></th>
			<td><input type="text" name="custom_services_tags_slug" value="<?php echo get_option( 'custom_services_tags_slug' ); ?>" /></td>
		</tr>
	</table>
	<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
</form>
</div>
<?php } ?>