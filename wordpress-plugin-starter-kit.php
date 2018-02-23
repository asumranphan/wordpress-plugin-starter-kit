<?php
/**
 * WordPress Plugin Starter Kit
 *
 * Plugin Name: WordPress Plugin Starter Kit
 * Plugin URI:  https://github.com/asumranphan/wordpress-plugin-starter-kit
 * Description: A WordPress Plugin Starter Kit for creating the WordPress Plugin.
 * Version:     1.0.0
 * Author:      Anurak Sumranphan <a.sumranphan@gmail.com>
 * Author URI:  https://www.atomfolio.me
 * License:     GNU General Public License v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: wordpress-plugin-starter-kit
 * Domain Path: /languages
 *
 * @category WordPress_Plugin
 * @package WordPress_Plugin_Starter_Kit
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once dirname( __FILE__ ) . '/includes/class-wordpress-plugin-starter-kit.php';

new WordPress_Plugin_Starter_Kit();
