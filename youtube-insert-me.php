<?php
/*
    Plugin Name: Youtube - Insert Me
    Plugin URI: http://www.toutestnet.fr
    Description: embed Youtube videos easily. The greatest advantage of this plugin is that your webpage will not nead three minutes to load ! That's the lightest plugin you can find for Wordpress
    Version: 1.0
    Author: Maxime ORIOL
    License: GPL2
*/

/*  Copyright 2011  Maxime ORIOL (email : maxime.oriol@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_yim() {
}

function deactive_yim() {
}

function youtubeinsertme() {
    echo "<script type='text/javascript' src='".WP_PLUGIN_URL."/youtube-insert-me/js/youtube-insert-me.js'></script>
        <script type='text/javascript'>
           jQuery(function() {
                jQuery('#content').youtubeInsert({
					width : 400
				});
           });
         </script>";
}

register_activation_hook(__FILE__, 'activate_yim');
register_deactivation_hook(__FILE__, 'deactive_yim');

if (!is_admin()) {
	add_action('wp_footer', 'youtubeinsertme');
}
?>