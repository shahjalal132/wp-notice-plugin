<?php

// create admin menu
add_action( 'admin_menu', function () {
    add_menu_page( 'Notice System', 'Notice System', 'manage_options', 'notice-system', function () {
        ?>

        <h2>Hello World it's working</h2>

        <?php
    }, 'dashicons-awards', 99 );
} );


// redirect to admin menu
add_action( 'activated_plugin', function ($plugin) {
    if ( PLUGIN_BASENAME == $plugin ) :
        wp_redirect( admin_url( 'admin.php?page=notice-system' ) );
        exit;
    endif;
} );

// add actions links
add_filter( 'plugin_action_links_' . PLUGIN_BASENAME, function ($links) {
    $link = sprintf( '<a class="notice-system" href="%s">%s</a>', admin_url( 'admin.php?page=notice-system' ), __( 'Settings', 'notice-system' ) );
    array_unshift( $links, $link );
    return $links;
} );

// add row links
add_filter( 'plugin_row_meta', function ($links, $file) {
    if ( PLUGIN_BASENAME == $file ) :
        $link = sprintf( '<a class="notice-system" href="%s">%s</a>', esc_url( 'https://github.com/shahjalal132' ), __( 'Author', 'notice-system' ) );
        array_push( $links, $link );
    endif;
    return $links;
}, 10, 2 );