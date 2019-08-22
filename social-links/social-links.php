<?php
/**
 */
/*
Plugin Name: Social Widget Test
Plugin URI:
Description: Social Links WIdget 
Version: 1.0.0
Author: Rajarshi Bose
Author URI: 
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

// Load Files 
require_once dirname( __FILE__ ) . '/inc/Base/Social_Links_Widget.php';
require_once dirname( __FILE__ ) . '/inc/Base/RegisterSocialLinksWidget.php';


$widget=new Inc\Base\RegisterSocialLinksWidget();
$widget->register();