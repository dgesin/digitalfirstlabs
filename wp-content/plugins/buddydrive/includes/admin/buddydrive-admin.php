<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( !class_exists( 'BuddyDrive_Admin' ) ) :
/**
 * Loads BuddyDrive plugin admin area
 *
 * Inspired by bbPress 2.3
 * 
 * @package BuddyDrive
 * @subpackage Admin
 * @since version (1.0)
 */
class BuddyDrive_Admin {

	/** Directory *************************************************************/

	/**
	 * @var string Path to the BuddyDrive admin directory
	 */
	public $admin_dir = '';

	/** URLs ******************************************************************/

	/**
	 * @var string URL to the BuddyDrive admin directory
	 */
	public $admin_url = '';

	/**
	 * @var string URL to the BuddyDrive images directory
	 */
	public $images_url = '';

	/**
	 * @var string URL to the BuddyDrive admin styles directory
	 */
	public $styles_url = '';

	/**
	 * @var string URL to the BuddyDrive admin script directory
	 */
	public $js_url = '';
	
	/**
	 * @var the BuddyDrive settings page for admin or network admin
	 */
	public $settings_page ='';
	
	/**
	 * @var the notice hook depending on config (multisite or not)
	 */
	public $notice_hook = '';

	/**
	 * @var the user columns filter depending on config (multisite or not)
	 */
	public $user_columns_filter = '';

	/**
	 * @var the BuddyDrive hook_suffixes to eventually load script
	 */
	public $hook_suffixes = array();


	/** Functions *************************************************************/

	/**
	 * The main BuddyDrive admin loader
	 *
	 * @since version (1.0)
	 *
	 * @uses BuddyDrive_Admin::setup_globals() Setup the globals needed
	 * @uses BuddyDrive_Admin::includes() Include the required files
	 * @uses BuddyDrive_Admin::setup_actions() Setup the hooks and actions
	 */
	public function __construct() {
		$this->setup_globals();
		$this->includes();
		$this->setup_actions();
	}

	/**
	 * Admin globals
	 *
	 * @since version (1.0)
	 * @access private
	 *
	 * @uses buddydrive() to get some globals of plugin instance
	 * @uses bp_core_do_network_admin() to define the best menu (network)
	 */
	private function setup_globals() {
		$buddydrive = buddydrive();
		$this->admin_dir           = trailingslashit( $buddydrive->includes_dir . 'admin'  ); // Admin path
		$this->admin_url           = trailingslashit( $buddydrive->includes_url . 'admin'  ); // Admin url
		$this->images_url          = trailingslashit( $this->admin_url   . 'images' ); // Admin images URL
		$this->styles_url          = trailingslashit( $this->admin_url   . 'css' ); // Admin styles URL*/
		$this->js_url              = trailingslashit( $this->admin_url   . 'js' );
		$this->settings_page       = bp_core_do_network_admin() ? 'settings.php' : 'options-general.php';
		$this->notice_hook         = bp_core_do_network_admin() ? 'network_admin_notices' : 'admin_notices' ;
		$this->user_columns_filter = bp_core_do_network_admin() ? 'wpmu_users_columns' : 'manage_users_columns';
	}

	/**
	 * Include required files
	 *
	 * @since version (1.0)
	 * @access private
	 */
	private function includes() {
		require( $this->admin_dir . 'buddydrive-settings.php'  );
		require( $this->admin_dir . 'buddydrive-items.php'  );
	}

	/**
	 * Setup the admin hooks, actions and filters
	 *
	 * @since version (1.0)
	 * @access private
	 *
	 * @uses add_action() To add various actions
	 * @uses bp_core_admin_hook() to hook the right menu (network or not)
	 * @uses add_filter() To add various filters
	 */
	private function setup_actions() {

		/** General Actions ***************************************************/

		add_action( bp_core_admin_hook(),                 array( $this, 'admin_menus'             ) ); // Add menu item to settings menu
		add_action( 'buddydrive_admin_head',              array( $this, 'admin_head'              ) ); // Add some general styling to the admin area
		add_action( $this->notice_hook,                   array( $this, 'activation_notice'       ) ); // Checks for BuddyDrive Upload directory once activated
		add_action( 'buddydrive_admin_register_settings', array( $this, 'register_admin_settings' ) ); // Add settings
		add_action( 'buddydrive_activation',              array( $this, 'new_install'             ) ); // Add menu item to settings menu
		add_action( 'admin_enqueue_scripts',              array( $this, 'enqueue_scripts'         ), 10, 1 ); // Add enqueued JS and CSS

		/** Filters ***********************************************************/

		// Modify BuddyDrive's admin links
		add_filter( 'plugin_action_links',               array( $this, 'modify_plugin_action_links' ), 10, 2 );
		add_filter( 'network_admin_plugin_action_links', array( $this, 'modify_plugin_action_links' ), 10, 2 );

		// Filters the user space left output to strip html tags
		add_filter( 'buddydrive_get_user_space_left',    'buddydrive_filter_user_space_left'         , 10, 2 );

		// Allow plugins to modify these actions
		do_action_ref_array( 'buddydrive_admin_loaded', array( &$this ) );
	}
	
	/**
	 * Builds BuddyDrive admin menus
	 * 
	 * @uses bp_current_user_can() to check for user's capability
	 * @uses add_submenu_page() to add the settings page
	 * @uses add_menu_page() to add the admin area for BuddyDrive items
	 * @uses add_dashboard_page() to add the BuddyDrive Welcome Screen
	 */
	public function admin_menus() {

		// Bail if user cannot manage options
		if ( ! bp_current_user_can( 'manage_options' ) )
			return;


		$this->hook_suffixes[] = add_submenu_page(
			$this->settings_page,
			__( 'BuddyDrive',  'buddydrive' ),
			__( 'BuddyDrive',  'buddydrive' ),
			'manage_options',
			'buddydrive',
			'buddydrive_admin_settings'
		);

		$hook = add_menu_page(
			__( 'BuddyDrive', 'buddydrive' ),
			__( 'BuddyDrive', 'buddydrive' ),
			'manage_options',
			'buddydrive-files',
			'buddydrive_files_admin',
			'div'
		);

		$this->hook_suffixes[] = $hook;

		// About
		$this->hook_suffixes[] = add_dashboard_page(
			__( 'Welcome to BuddyDrive',  'buddydrive' ),
			__( 'Welcome to BuddyDrive',  'buddydrive' ),
			'manage_options',
			'buddydrive-about',
			array( $this, 'about_screen' )
		);


		// Hook into early actions to load custom CSS and our init handler.
		add_action( "load-$hook", 'buddydrive_files_admin_load' );

		// Putting user edit hooks there, this way we're sure they will load at the right place
		add_action( 'edit_user_profile',          array( $this, 'edit_user_quota'           ), 10, 1 );
		add_action( 'edit_user_profile_update',   array( $this, 'save_user_quota'           ), 10, 1 );
		add_action( 'set_user_role',              array( $this, 'update_user_quota_to_role' ), 10, 2 );
		
		add_filter( $this->user_columns_filter,   array( $this, 'user_quota_column' )        );
		add_filter( 'manage_users_custom_column', array( $this, 'user_quota_row'    ), 10, 3 );
		
		if( is_multisite() ) {
			$hook_settings = $this->hook_suffixes[0];
			add_action( "load-$hook_settings", array( $this, 'multisite_upload_trick' ) );
		}
		
	}

	/**
	 * Loads some common css and hides the BuddyDrive about submenu
	 *
	 * @uses remove_submenu_page() to remove the BuddyDrive About submenu
	 */
	public function admin_head() {

		// Hide About page
		remove_submenu_page( 'index.php', 'buddydrive-about'   );

		$version          = buddydrive_get_version();
		$menu_icon_url    = $this->images_url . 'menu.png?ver='       . $version;
		$icon32_url       = $this->images_url . 'icons32.png?ver='    . $version;
		$badge_url        = $this->images_url . 'badge.png?ver='      . $version;

		?>

		<style type="text/css" media="screen">
		/*<![CDATA[*/

			/* Icon 32 */
			#icon-buddydrive {
				background: url('<?php echo $icon32_url; ?>');
				background-repeat: no-repeat;
			}

			/* Icon Positions */
			#icon-buddydrive {
				background-position: -4px 0px;
			}


			/* Menu */
			#toplevel_page_buddydrive-files .wp-menu-image,
			#toplevel_page_buddydrive-files:hover .wp-menu-image {
				background: url('<?php echo $menu_icon_url; ?>');
				background-repeat: no-repeat;
			}

			/* Menu Positions */
			#toplevel_page_buddydrive-files .wp-menu-image {
				background-position: 0px -32px;
			}
			#toplevel_page_buddydrive-files:hover .wp-menu-image,
			#toplevel_page_buddydrive-files.current .wp-menu-image {
				background-position: 0px 0px;
			}

			/* Version Badge */

			.buddydrive-badge {
				padding-top: 170px;
				height: 25px;
				width: 173px;
				color: #555555;
				font-weight: bold;
				font-size: 11px;
				text-align: center;
				margin: 0 -5px;
				background: url('<?php echo $badge_url; ?>') no-repeat;
			}

			.about-wrap .buddydrive-badge {
				position: absolute;
				top: 0;
				right: 0;
			}
				body.rtl .about-wrap .buddydrive-badge {
					right: auto;
					left: 0;
				}


		/*]]>*/
		</style>
		<?php
	}
	
	/**
	 * Creates the upload dir and htaccess file
	 * 
	 * @uses buddydrive_get_upload_data() to get BuddyDrive upload datas
	 * @uses wp_mkdir_p() to create the dir
	 * @uses insert_with_markers() to create the htaccess file
	 */
	public function activation_notice() {
		// we need to eventually create the upload dir and the .htaccess file
		$buddydrive_upload = buddydrive_get_upload_data();
		$buddydrive_dir = $buddydrive_upload['dir'];

		if( !file_exists( $buddydrive_dir ) ){
			// we first create the initial dir
			@wp_mkdir_p( $buddydrive_dir );
		
			// then we need to check for .htaccess and eventually create it
			if( !file_exists( $buddydrive_dir .'/.htaccess' ) ) {
			
				// Defining the rule, we need to make it unreachable and use php to reach it
				$rules = array( 'Order Allow,Deny','Deny from all' );
			
				// creating the .htaccess file
				insert_with_markers( $buddydrive_dir .'/.htaccess', 'Buddydrive', $rules );
			}
			
		}
	}

	/**
	 * Registers admin settings for BuddyDrive
	 * 
	 * @uses buddydrive_admin_get_settings_sections() to get the settings section
	 * @uses buddydrive_admin_get_settings_fields_for_section() to get the fields
	 * @uses bp_current_user_can() to check for user's capability
	 * @uses add_settings_section() to add the settings section
	 * @uses add_settings_field() to add the fields
	 * @uses register_setting() to fianlly register the settings
	 */
	public static function register_admin_settings() {

		// Bail if no sections available
		$sections = buddydrive_admin_get_settings_sections();

		if ( empty( $sections ) )
			return false;

		// Loop through sections
		foreach ( (array) $sections as $section_id => $section ) {

			// Only proceed if current user can see this section
			if ( ! bp_current_user_can( 'manage_options' ) )
				continue;

			// Only add section and fields if section has fields
			$fields = buddydrive_admin_get_settings_fields_for_section( $section_id );
			if ( empty( $fields ) )
				continue;

			// Add the section
			add_settings_section( $section_id, $section['title'], $section['callback'], $section['page'] );

			// Loop through fields for this section
			foreach ( (array) $fields as $field_id => $field ) {

				// Add the field
				add_settings_field( $field_id, $field['title'], $field['callback'], $section['page'], $section_id, $field['args'] );

				// Register the setting
				register_setting( $section['page'], $field_id, $field['sanitize_callback'] );
			}
		}
	} 

	/**
	 * Eqnueues scripts and styles if needed
	 * 
	 * @param  string $hook the WordPress admin page
	 * @uses wp_enqueue_style() to enqueue the style
	 * @uses wp_enqueue_script() to enqueue the script
	 */
	public function enqueue_scripts( $hook = false ) {

		if( in_array( $hook, $this->hook_suffixes ) )
			wp_enqueue_style( 'buddydrive-admin-css', $this->styles_url .'buddydrive-admin.css' );

		if( !empty( $this->hook_suffixes[1] ) && $hook == $this->hook_suffixes[1] && !empty( $_REQUEST['action'] ) && $_REQUEST['action'] == 'edit' )
			wp_enqueue_script( 'buddydrive-admin-js', $this->js_url .'buddydrive-admin.js' );
	}

	/**
	 * Modifies the links in plugins table
	 * 
	 * @param  array $links the existing links
	 * @param  string $file  the file of plugins
	 * @uses plugin_basename() to get the file name of BuddyDrive plugin
	 * @uses add_query_arg() to add args to the link
	 * @uses bp_get_admin_url() to build the new links
	 * @return array  the existing links + the new ones
	 */
	public function modify_plugin_action_links( $links, $file ) {

		// Return normal links if not BuddyPress
		if ( plugin_basename( buddydrive()->file ) != $file )
			return $links;

		// Add a few links to the existing links array
		return array_merge( $links, array(
			'settings' => '<a href="' . add_query_arg( array( 'page' => 'buddydrive'      ), bp_get_admin_url( $this->settings_page ) ) . '">' . esc_html__( 'Settings', 'buddydrive' ) . '</a>',
			'about'    => '<a href="' . add_query_arg( array( 'page' => 'buddydrive-about'      ), bp_get_admin_url( 'index.php'          ) ) . '">' . esc_html__( 'About',    'buddydrive' ) . '</a>'
		) );
	}

	/**
	 * Displays the Welcome screen
	 * 
	 * @uses buddydrive_get_version() to get the current version of the plugin
	 * @uses bp_get_admin_url() to build the url to settings page
	 * @uses add_query_arg() to add args to the url
	 */
	public function about_screen() {
		$display_version = buddydrive_get_version();
		$settings_url = add_query_arg( array( 'page' => 'buddydrive'), bp_get_admin_url( $this->settings_page ) );
		?>
		<div class="wrap about-wrap">
			<h1><?php printf( __( 'BuddyDrive %s', 'buddydrive' ), $display_version ); ?></h1>
			<div class="about-text"><?php printf( __( 'Thank you for upgrading to the latest version of BuddyDrive! BuddyDrive %s is ready to manage the files and folders of your buddies!', 'buddydrive' ), $display_version ); ?></div>
			<div class="buddydrive-badge"><?php printf( __( 'Version %s', 'buddydrive' ), $display_version ); ?></div>

			<h2 class="nav-tab-wrapper">
				<a class="nav-tab nav-tab-active" href="<?php echo esc_url(  bp_get_admin_url( add_query_arg( array( 'page' => 'buddydrive-about' ), 'index.php' ) ) ); ?>">
					<?php _e( 'About', 'buddydrive' ); ?>
				</a>
			</h2>

			<div class="changelog">
				<h3><?php _e( 'Share files, the BuddyPress way!', 'buddydrive' ); ?></h3>

				<div class="feature-section">
					<p><?php _e( 'BuddyDrive is a BuddyPress plugin to power the management of your members files and folders. It requires version 1.7 of BuddyPress.', 'buddydrive' ); ?></p>
					<p><?php _e( 'Each member of your community will get a BuddyDrive area in their member&#39;s page.', 'buddydrive' );?></p>
				</div>
			</div>

			<div class="changelog">
				<h3><?php printf( __( 'What&#39; new in %s ?', 'buddydrive' ), $display_version ); ?></h3>

				<div class="feature-section">
					<ul>
						<li><?php _e( 'Slugs and names are now fully customizable to help you make BuddyDrive your very own file sharing system', 'buddydrive' ); ?></li>
						<li><?php _e( 'Administrator now have a finer control of user&#39;s BuddyDrive quota : it can be different by WordPress roles and by users', 'buddydrive' );?></li>
						<li><?php _e( 'From the WordPress administration, Administrator can be informed about each user&#39;s BuddyDrive usage thanks to a new column in the users list', 'buddydrive' );?></li>
						<li><?php _e( 'The Administrator can auto-enable BuddyDrive for groups once their creation steps are completed', 'buddydrive' );?></li>
						<li><?php printf( __( 'Finally version %s fixes a bug with the hidden groups, It&#39;s now possible to share files in this kind of groups', 'buddydrive' ), $display_version );?></li>
					</ul>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'User&#39;s BuddyDrive', 'buddydrive' ); ?></h3>

				<div class="feature-section images-stagger-right">
					<img alt="" src="<?php echo buddydrive_get_plugin_url();?>/screenshot-1.png" class="image-30" />
					<h4><?php _e( 'The BuddyDrive Explorer', 'buddydrive' ); ?></h4>
					<p><?php _e( 'It lives in the member&#39;s page just under the BuddyDrive tab.', 'buddydrive' ); ?></p>
					<p><?php _e( 'The BuddyDrive edit bar allows the user to manage from one unique place his content.', 'buddydrive' ); ?></p>
					<p><?php _e( 'He can add new files, new folders, set their privacy settings, edit them and of course delete them at any time.', 'buddydrive' ); ?></p>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'BuddyDrive Uploader', 'buddydrive' ); ?></h3>

				<div class="feature-section images-stagger-right">
					<img alt="" src="<?php echo buddydrive_get_plugin_url();?>/screenshot-2.png" class="image-30" />
					<h4><?php _e( 'WordPress HTML5 Uploader', 'buddydrive' ); ?></h4>
					<p><?php _e( 'BuddyDrive uses WordPress HTML5 uploader and do not add any third party script to handle uploads.', 'buddydrive' ); ?></p>
					<p><?php _e( 'WordPress is a fabulous tool and already knows how to deal with attachments for its content.', 'buddydrive' ); ?></p>
					<p><?php _e( 'So BuddyDrive is managing uploads, the WordPress way!', 'buddydrive' ); ?></p>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'BuddyDrive Folders', 'buddydrive' ); ?></h3>

				<div class="feature-section images-stagger-right">
					<img alt="" src="<?php echo buddydrive_get_images_url();?>/folder-demo.png" class="image-30" />
					<p><?php _e( 'Using folders is a convenient way to share a list of files at once.', 'buddydrive' ); ?></p>
					<p><?php _e( 'Users just need to create a folder, open it an add the files of their choice to it.', 'buddydrive' ); ?></p>
					<p><?php _e( 'When sharing a folder, a member actually shares the list of files that is attached to it.', 'buddydrive' ); ?></p>
				</div>
			</div>
			
			<div class="changelog">
				<h3><?php _e( 'BuddyDrive privacy options', 'buddydrive' ); ?></h3>

				<div class="feature-section images-stagger-right">
					<img alt="" src="<?php echo buddydrive_get_images_url();?>/privacy-demo.png" class="image-50" />
					<p>
					<?php _e( 'There are five levels of privacy for the files or folders.', 'buddydrive' ); ?>&nbsp;
					<?php _e( 'Depending on your BuddyPress settings, a user can set the privacy of a BuddyDrive item to:', 'buddydrive' ); ?></p>
					<ul>
						<li><?php _e( 'Private: the owner of the item will be the only one to be able to download the file.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Password protected: a password will be required before being able to download the file.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Public: everyone can download the file.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Friends only: if the BuddyPress friendship component is active, a user can restrict a download to his friends only.', 'buddydrive' ); ?></li>
						<li><?php _e( 'One of the user&#39;s group: if the BuddyPress user groups component is active, and if the administrator of the group enabled BuddyDrive, a user can restrict the download to members of the group only.', 'buddydrive' ); ?></li>
					</ul>
				</div>
			</div>
			
			<div class="changelog">
				<h3><?php _e( 'Sharing BuddyDrive items', 'buddydrive' ); ?></h3>

				<div class="feature-section images-stagger-right">
					<img alt="" src="<?php echo buddydrive_get_plugin_url();?>/screenshot-3.png" class="image-30" />
					<h4><?php _e( 'WordPress Embeds', 'buddydrive' ); ?></h4>
					<p><?php _e( 'Depending on the privacy option of an item and the activated BuddyPress components, a user can :', 'buddydrive' ); ?></p>
					<ul>
						<li><?php _e( 'Share a public BuddyDrive item in his personal activity.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Share a password protected item using the private messaging BuddyPress component.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Alert his friends he shared a new item using the private messaging BuddyPress component.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Share his file in a group activity to inform the other members of the group.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Copy the link to his item and paste it anywhere in the blog or in a child blog (in case of a multisite configuration). This link will automatically be converted into a nice piece of html.', 'buddydrive' ); ?></li>
					</ul>
				</div>
			</div>
			
			<div class="changelog">
				<h3><?php _e( 'Supervising BuddyDrive', 'buddydrive' ); ?></h3>

				<div class="feature-section images-stagger-right">
					<img alt="" src="<?php echo buddydrive_get_plugin_url();?>/screenshot-4.png" class="image-30" />
					<h4><?php _e( 'BuddyDrive items Admin UI', 'buddydrive' ); ?></h4>
					<p><?php _e( 'The administrator of the community can manage all BuddyDrive items from the backend of WordPress.', 'buddydrive' ); ?></p>
					<p><?php _e( 'In this administrative area, he can download any file, edit it or its parent foler, edit the privacy options of the item and of course delete anything at any time.', 'buddydrive' ); ?></p>
				</div>
			</div>
			
			<div class="changelog">
				<h3><?php _e( 'BuddyDrive Configuration', 'buddydrive' ); ?></h3>

				<div class="feature-section images-stagger-right">
					<img alt="" src="<?php echo buddydrive_get_plugin_url();?>/screenshot-5.png" class="image-30" />
					<h4><a href="<?php echo $settings_url;?>" title="<?php _e( 'Configure BuddyDrive', 'buddydrive' ); ?>"><?php _e( 'Configure BuddyDrive', 'buddydrive' ); ?></a></h4>
					<p><?php _e( 'From the settings menu of his WordPress administration, the administrator is able to configure BuddyDrive by :', 'buddydrive' ); ?></p>
					<ul>
						<li><?php _e( 'Choosing the amount of space each user will get to upload their files.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Adjusting the max upload size allowed for a file.', 'buddydrive' ); ?></li>
						<li><?php _e( 'Selecting the mime types from the default WordPress ones.', 'buddydrive' ); ?></li>
					</ul>
				</div>
				
				<div class="return-to-dashboard">
					<a href="<?php echo $settings_url;?>" title="<?php _e( 'Configure BuddyDrive', 'buddydrive' ); ?>"><?php _e( 'Go to the BuddyDrive Settings page', 'buddydrive' );?></a>
				</div>
			</div>

		</div>
	<?php
	}
	
	public function multisite_upload_trick() {
		remove_filter( 'upload_mimes', 'check_upload_mimes' );
		remove_filter( 'upload_size_limit', 'upload_size_limit_filter' );
	}

	/**
	 * Displays a field to customize the user's upload quota
	 *
	 * @since version 1.1
	 * 
	 * @param  object $profileuser data about the user being edited
	 * @global $blog_id the id of the current blog
	 * @uses bp_get_root_blog_id() to make sure we're on the blog BuddyPress is activated on
	 * @uses  current_user_can() to check for edit user capability
	 * @uses ve_get_quota_by_user_id() to get user's quota (default to role's default)
	 * @uses esc_html_e() to sanitize translation before display.
	 * @return string html output
	 */
	public static function edit_user_quota( $profileuser ) {
		global $blog_id;

		if( $blog_id != bp_get_root_blog_id() )
			return;

		// Bail if current user cannot edit users
		if ( ! current_user_can( 'edit_user', $profileuser->ID ) )
			return;
			
		$user_quota = buddydrive_get_quota_by_user_id( $profileuser->ID );
		?>

		<h3><?php esc_html_e( 'User&#39;s BuddyDrive quota', 'bbpress' ); ?></h3>

		<table class="form-table">
			<tbody>
				<tr>
					<th><label for="_buddydrive_user_quota"><?php esc_html_e( 'Space available', 'buddydrive' ); ?></label></th>
					<td>
						<input name="_buddydrive_user_quota" type="number" min="1" step="1" id="_buddydrive_user_quota" value="<?php echo $user_quota;?>" class="small-text" />
						<label for="_buddydrive_user_quota"><?php _e( 'MO', 'buddydrive' ); ?></label>
					</td>
				</tr>

			</tbody>
		</table>

		<?php
	}

	/**
	 * Saves the user's quota on profile edit
	 *
	 * @since version 1.1
	 * 
	 * @param  integer $user_id (the on being edited)
	 * @global $wpdb the WordPress db class
	 * @global $blog_id the id of the current blog
	 * @uses bp_get_root_blog_id() to make sure we're on the blog BuddyPress is activated on
	 * @uses current_user_can() to check for edit user capability
	 * @uses get_user_meta() to get user's preference
	 * @uses bp_get_option() to get blog's preference
	 * @uses buddydrive() to get the old role global
	 * @uses update_user_meta() to save user's quota
	 */
	public static function save_user_quota( $user_id ) {
		global $wpdb, $blog_id;

		if( $blog_id != bp_get_root_blog_id() )
			return;

		if ( ! current_user_can( 'edit_user', $user_id ) )
			return;

		if( empty( $_POST['_buddydrive_user_quota'] ) )
			return;

		$user_roles = get_user_meta( $user_id, $wpdb->get_blog_prefix( bp_get_root_blog_id() ) . 'capabilities', true );
		$user_roles = array_keys( $user_roles );
		$user_role = is_array( $user_roles ) ? $user_roles[0] : bp_get_option('default_role');

		// temporarly setting old role
		buddydrive()->old_role = $user_role;
		

		update_user_meta( $user_id, '_buddydrive_user_quota', intval( $_POST['_buddydrive_user_quota'] ) );
	}

	/**
	 * Updates the user quota on role changed
	 *
	 * @since version 1.1
	 * 
	 * @param  integer $user_id the id of the user being edited
	 * @param  string $role the new role of the user
	 * @global $blog_id the id of the current blog
	 * @uses bp_get_root_blog_id() to make sure we're on the blog BuddyPress is activated on
	 * @uses buddydrive() to get the old role global
	 * @uses bp_get_option() to get main blog option
	 * @uses update_user_meta() to save user's preference
	 */
	public static function update_user_quota_to_role( $user_id, $role ) {
		global $blog_id;

		if( $blog_id != bp_get_root_blog_id() )
			return;

		$buddydrive = buddydrive();

		$old_role = !empty( $buddydrive->old_role ) ? $buddydrive->old_role : false;

		if( isset( $_POST['_buddydrive_user_quota'] ) && $old_role == $role )
			return;

		$option_user_quota = bp_get_option( '_buddydrive_user_quota', 1000 );

		if( is_array( $option_user_quota ) )
			$user_quota = !empty( $option_user_quota[$role] ) ? $option_user_quota[$role] : 1000;
		else
			$user_quota = $option_user_quota;
		
		update_user_meta( $user_id, '_buddydrive_user_quota', $user_quota );
	}

	/**
	 * Adds a column to admin user listing to show drive usage
	 *
	 * @since version 1.1
	 * 
	 * @param  array $columns the different column of the WP_List_Table
	 * @return array the new columns
	 */
	public static function user_quota_column( $columns = array() ) {
		$columns['user_quota'] = __( 'BuddyDrive Usage',  'buddydrive' );

		return $columns;
	}

	/**
	 * Displays the row data for our new column
	 *
	 * @since version 1.1
	 * 
	 * @param  string  $retval
	 * @param  string  $column_name
	 * @param  integer $user_id
	 * @uses buddydrive_get_user_space_left() to calculate the disk usage
	 * @return string the user's drive usage
	 */
	public static function user_quota_row( $retval = '', $column_name = '', $user_id = 0 ) {
		
		if ( 'user_quota' === $column_name )
			$retval = buddydrive_get_user_space_left( false, $user_id ) .'%';

		// Pass retval through
		return $retval;
	}
	
}

endif;

/**
 * Launches the admin
 * 
 * @uses buddydrive()
 */
function buddydrive_admin() {
	buddydrive()->admin = new BuddyDrive_Admin();
}

add_action( 'buddydrive_init', 'buddydrive_admin', 0 );