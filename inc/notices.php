<?php

function sample_admin_notice_success() {
    global $pagenow;

    if ( !isset( $_COOKIE['notice-system'] ) ) :
        if ( 'plugins.php' == $pagenow ) :
            ?>

            <div id="notice-system" class="notice notice-success is-dismissible">
                <p><?php _e( 'Hey it\'s working!', 'sample-text-domain' ); ?> <?php echo $pagenow; ?></p>
            </div>

            <?php
        endif;
    endif;
}
add_action( 'admin_notices', 'sample_admin_notice_success' );