<?php
/*
 * Plugin Name:  BC CodeMirror Embed
 * Plugin URI:   https://wordpress.org/plugins/wp-codemirror-block/
 * Description: It provides Code Block. it can be use as (syntax highlighter) built with CodeMirror library, it is use full for developers or tutorials blog to display highlighted code, with Web Editor.
 * Version:     1.0.0
 * Author:      BinaryCarpenter
 * Author URI:  https://BinaryCarpenter.com
 * License:     GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: codemirror-blocks
 * @package CodeMirror_Blocks
 */

defined('ABSPATH') || die;

if (! defined('CODEMIRROR_BLOCKS_PLUGIN')) {
    define('CODEMIRROR_BLOCKS_PLUGIN', __FILE__);
}

include( 'includes/class-codemirror-blocks.php' );
CodeMirror_Blocks\CodeMirror_Blocks::instance();

include( 'tinymce/class-tinymce.php' );
