<?php
/**
 * This is child themes functions.php file. All modifications should be made in this file.
 *
 * All style changes should be in child themes style.css file.
 *
 * @package    Simppeli child
 * @version    1.0.0
 * @author     Sami Keijonen <sami.keijonen@foxnet.fi>
 * @copyright  Copyright (c) 2015, Sami Keijonen
 * @link       https://foxland.fi
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Setup function.  All child themes should run their setup within this function. The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function simppeli_child_theme_setup() {

	/* Load child theme text domain. */
	load_child_theme_textdomain( 'simppeli-child', get_stylesheet_directory() . '/languages' );
	
}
add_action( 'after_setup_theme', 'simppeli_child_theme_setup', 11 );
