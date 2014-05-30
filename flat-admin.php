<?php

/*
Plugin Name: Clean Admin
Description: Make your Wordpress nice and clean
Author: Karlis Feldmanis
Version: 1.0
*/

function flat_admin() {
    wp_enqueue_style("flat_admin", plugins_url("assets/css/main.css", __FILE__));
}

add_action("admin_enqueue_scripts", "flat_admin");
add_action("login_enqueue_scripts", "flat_admin");

?>