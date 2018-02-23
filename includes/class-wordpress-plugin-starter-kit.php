<?php
/**
 * Main class for WordPress Plugin Starter Kit.
 *
 * @category WordPress_Plugins
 * @package WordPress_Plugin_Starter_Kit
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * WordPress Plugin Starter Kit Class.
 */
class WordPress_Plugin_Starter_Kit {

    /**
     * Version
     *
     * @var string
     */
    protected $version = '1.0.0';

    /**
     * Constructor
     */
    public function __construct() {
        $this->define_constants();

        add_action( 'init', [ $this, 'setup' ] );
    }

    /**
     * Define Plugin Constants
     */
    public function define_constants() {
        define( 'WPSK_BASENAME', plugin_basename( dirname( dirname( __FILE__ ) ) ) );
        define( 'WPSK_VERSION', $this->version );
    }

    /**
     * Setup
     */
    public function setup() {
        if ( get_option( WPSK_BASENAME . '-version' ) === WPSK_VERSION ) {
            return;
        }

        update_option( WPSK_BASENAME . '-version', WPSK_VERSION );
    }
}
