<?php
/**
    *   Plugin Name:    My First Widget
    *   Plugin URI:     https://someurl.se
    *   Description:    This plugin adds my first widget.
    *   Version:        0.1
    *   Author:         Fredrik Larsson
    *   Author URI:     https://www.data-lord.se
    *   License:        WTFPL
    *   License URI:    http://www.wtfpl.net/
    *   Text Domain:    myfirstwidget
    *   Domain Path:    /languages      
**/

require("class.MyFirstWidget.php");

function mfw_widgets_init() {
    register_widget('MyFirstWidget');
}
add_action('widgets_init', 'mfw_widgets_init');