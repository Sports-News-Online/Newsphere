<?php
/**
 * Recommended plugins
 *
 * @package Newsphere
 */

if ( ! function_exists( 'newsphere_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function newsphere_recommended_plugins() {

        $plugins = array(
            array(
                'name'     => esc_html__( 'AF Companion', 'newsphere' ),
                'slug'     => 'af-companion',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Templatespare', 'newsphere' ),
                'slug'     => 'templatespare',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Elespare', 'newsphere' ),
                'slug'     => 'elespare',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Blockspare', 'newsphere' ),
                'slug'     => 'blockspare',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Latest Posts Block', 'newsphere' ),
                'slug'     => 'latest-posts-block-lite',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Magic Content Box', 'newsphere' ),
                'slug'     => 'magic-content-box-lite',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'WP Post Author', 'newsphere' ),
                'slug'     => 'wp-post-author',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Free Live Chat using 3CX', 'newsphere' ),
                'slug'     => 'wp-live-chat-support',
                'required' => false,
            )

        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'newsphere_recommended_plugins' );
