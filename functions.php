<?php
/**
 * Plugin Name: WordPress Front-End Developer
 * Plugin URI: http://www.wordpressinc.com/wordpress-front-end-developer
 * Description: WordPress Front End Developer provides an easy way for theme developers see exactly what viewport resolution they are currently viewing.
 * Version: 1.0
 * Author: John Cionci | @johncionci
 * Author URI: https://github.com/johncionci/wordpress-front-end-developer
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2012-2014 John Cionci ( WordPress, Inc. )
 *
 * GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 */

/**
 * Load the required CSS & JS
 * @uses add_action
 * @author johncionci
 * @return null
 */
function wfed_scripts() {
	$ver = '1.0';

	/* Load the neccessary CSS */
	wp_enqueue_style( 'wfed-css', plugins_url( '/css/developer.css', __FILE__ ) , NULL , $ver , 'screen' );

	/* Load the neccessary JS */
	wp_enqueue_script( 'wfed-js', plugins_url( '/js/developer.js', __FILE__ ) , array( 'jquery' ), $ver, true );

}
add_action( 'wp_enqueue_scripts', 'wfed_scripts' );