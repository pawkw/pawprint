<?php

require_once('lib/customize.php');
require_once('lib/post_decorations.php');
require_once('lib/enqueue_assets.php');
require_once('lib/sidebars.php');
require_once('lib/theme_support.php');
require_once('lib/navigation.php');

function _themename_handle_delete_post() {
    if( isset($_GET['action']) && $_GET['action'] === '_themename_delete_post') {
        $post_id = isset($_GET['post']) ? $_GET['post'] : null;
        if( !isset($_GET['nonce']) || !wp_verify_nonce( $_GET['nonce'], '_themename_delete_post_' .  $post_id )) {
            return;
        }
        $post = get_post((int) $post_id );
        if( empty($post) ) {
            return;
        }

        if(!current_user_can( 'delete_post', $post_id )) {
            return;
        }
        wp_trash_post( $post_id );
        wp_safe_redirect( home_url() );

        die;
    }
}

add_action( 'init', '_themename_handle_delete_post' );