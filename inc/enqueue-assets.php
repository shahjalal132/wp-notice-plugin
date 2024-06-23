<?php

class Enqueue_Assets {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_assets' ] );
    }

    public function enqueue_assets() {

        wp_enqueue_script( "app-js", NOTICE_SYSTEM_PLUGIN_URL . "/assets/js/app.js", [ 'jquery' ], time(), true );
    }
}

new Enqueue_Assets();