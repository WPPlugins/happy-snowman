<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.wpmaniax.com
 * @since      1.0.0
 *
 * @package    Happy_Snowman
 * @subpackage Happy_Snowman/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Happy_Snowman
 * @subpackage Happy_Snowman/public
 * @author     WP Maniax <plugins@wpmaniax.com>
 */
class Happy_Snowman_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Happy_Snowman_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Happy_Snowman_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/happy-snowman-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Happy_Snowman_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Happy_Snowman_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/happy-snowman-public.js', array( 'jquery' ), $this->version, false );

	}

	public function show_happy_snowman() {
		?>
		<div id="snowman">
		  <i id="shadow"></i>
		  <i id="lfoot"></i>
		  <i id="rfoot"></i>
		  	<span id="body1">
		      <i id="ball">
		      <i id="button"></i>
		      <i id="button2"></i></i>
		  	</span>
		  	<span id="body2">
		      <i id="ball2">
		      <i id="button3"></i></i>
		  	</span>
		  	<span id="headcontainer">
		      <i id="head"></i>
		      <i id="mouth"></i>
		      <i id="mouth2"></i>
		      <i id="tooth"></i>
		      <i id="head2"></i>
		      <i id="eyebrow"></i>
				 <i id="eyebrow2"></i>
		      <i id="eyebrow3"></i>
		      <i id="eye"></i>
		      <i id="eye2"></i>
		      <i id="eye3"></i>
		      <i id="eye4"></i>
		      <i id="nose"></i>
		  	</span>
				<span id="leftarm">
		      <i id="larm"></i>
		      <i id="larm2"></i>
		      <i id="lfinger"></i>
		      <i id="lfinger2"></i>
		      <i id="lfinger3"></i>
				</span>
				<span id="rightarm">
		      <i id="rarm"></i>
		      <i id="rarm2"></i>
		      <i id="rfinger"></i>
		      <i id="rfinger2"></i>
		      <i id="rfinger3"></i>
		  	</span>
		  	<span id="hair">
		      <i id="hair1"></i>
		      <i id="hair2"></i>
		      <i id="hair3"></i>
		      <i id="hair4"></i>
		      <i id="hair5"></i>
				</span>
		</div>
		<?php
	}
}
