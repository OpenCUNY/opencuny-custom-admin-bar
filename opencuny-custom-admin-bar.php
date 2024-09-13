<?php
// Remove WordPress menu node from admin bar
function remove_wp_logo( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_wp_logo', 100 );

// Add a custom brand node to the admin bar
function add_custom_admin_bar_node_with_icon() {
    global $wp_admin_bar;

    // Get the URL of your brand icon
    $brand_icon_url = 'https://opencuny.org/images/opencuny_logo.png'; // Replace with your actual URL

    // Add the custom node
    $wp_admin_bar->add_menu( array(
        'id'        => 'custom-admin-bar-node',
        'title'     => '<img src="' . $brand_icon_url . '" alt="OpenCUNY" style="width:32px;height:auto;display:block;">',
        'href'      => get_admin_url(),
        'meta'      => array(
            'title' => 'Go to Admin Panel'
        )
    ) );
}
add_action( 'admin_bar_menu', 'add_custom_admin_bar_node_with_icon', 0 );
?>