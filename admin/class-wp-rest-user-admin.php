<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://sk8.tech
 * @since      1.1.0
 *
 * @package    Wp_Rest_User
 * @subpackage Wp_Rest_User/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Rest_User
 * @subpackage Wp_Rest_User/admin
 * @author     SK8Tech <support@sk8.tech>
 */
class Wp_Rest_User_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.1.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.1.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Custom option and settings
	 *
	 * @author Jack
	 *
	 * @see https://developer.wordpress.org/plugins/settings/custom-settings-page/
	 *
	 * @since    1.1.1
	 */
	function wporg_settings_init() {
		// register a new setting for "wporg" page
		register_setting('wporg', 'wporg_options');

		// register a new section in the "wporg" page
		add_settings_section(
			'wporg_section_developers',
			__('The Matrix has you.', 'wporg'),
			'wporg_section_developers_cb',
			'wporg'
		);

		// register a new field in the "wporg_section_developers" section, inside the "wporg" page
		add_settings_field(
			'wporg_field_pill', // as of WP 4.6 this value is used only internally
			// use $args' label_for to populate the id inside the callback
			__('Pill', 'wporg'),
			'wporg_field_pill_cb',
			'wporg',
			'wporg_section_developers',
			[
				'label_for' => 'wporg_field_pill',
				'class' => 'wporg_row',
				'wporg_custom_data' => 'custom',
			]
		);
	}

	/**
	 * Add Admin Menu
	 *
	 * @author Jack
	 *
	 * @see https://premium.wpmudev.org/blog/creating-wordpress-admin-pages/
	 *
	 * @since    1.1.1
	 */
	public function add_settings_menu() {
		add_options_page(
			'My Options',
			'My Plugin',
			'manage_options',
			'my-plugin.php',
			'my_plugin_page'
		);
		add_options_page(
			'WP REST User - Registration',
			'REST User',
			'manage_options',
			'wp-rest-user',
			'partials/wp-rest-user-admin-display.php',
			'myplguin_admin_page'
		);

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Rest_User_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Rest_User_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/wp-rest-user-admin.css', array(), $this->version, 'all');

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Rest_User_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Rest_User_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/wp-rest-user-admin.js', array('jquery'), $this->version, false);

	}

}
