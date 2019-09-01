<?php
/*
 * Plugin Name: Tho_post_wg
 * Plugin Uri: https://nguyenminhthong.com
 * Description: A widget to display your own custom post.
 * Author: Nguyen Minh Thong
 * Author Uri: https://nguyenminhthong.com
 * Version: 1.0
 * /
  
add_action("widget_init", "tho_post_wg");

function tho_post_wg(){
register_widget("Tho_post_wg");
}

Class Tho_post_wg extends WP_Widget{
function __construct(){

}

function form($instance){

}

function update($new_instance, $old_instance){

}

function widget($args, $instance){

}
}