<?php
/**
 * Title: Stats Section
 * Slug: ct-tailwind-theme/stats-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage Coderstime SM
 * @since Coderstime SM 1.0
 */

?>

<!-- wp:group {"className":"bg-gray-900 mt-20","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group bg-gray-900 mt-20"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"className":"bg-gray-900","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group bg-gray-900"
        style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","className":"border-r border-gray-700 space-y-1 px-5 py-16","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center border-r border-gray-700 space-y-1 px-5 py-16"
                style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"white"} -->
                <h3 class="wp-block-heading has-text-align-center has-white-color has-text-color"
                    style="margin-bottom:0;font-size:48px;font-style:normal;font-weight:800">
                    <?php esc_html_e( '998k+', 'ct-startup' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"14px"},"spacing":{"margin":{"top":"8px"}}},"textColor":"primary"} -->
                <p class="has-text-align-center has-primary-color has-text-color"
                    style="margin-top:8px;font-size:14px;text-transform:uppercase">
                    <?php esc_html_e( 'Posts', 'ct-startup' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","className":"border-r border-gray-700 space-y-1 px-5 py-16 ","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center border-r border-gray-700 space-y-1 px-5 py-16"
                style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"white"} -->
                <h3 class="wp-block-heading has-text-align-center has-white-color has-text-color"
                    style="margin-bottom:0;font-size:48px;font-style:normal;font-weight:800">
                    <?php esc_html_e( '1.5k+', 'ct-startup' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"14px"},"spacing":{"margin":{"top":"8px"}}},"textColor":"primary"} -->
                <p class="has-text-align-center has-primary-color has-text-color"
                    style="margin-top:8px;font-size:14px;text-transform:uppercase">
                    <?php esc_html_e( 'Automations', 'ct-startup' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center"
                style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"white"} -->
                <h3 class="wp-block-heading has-text-align-center has-white-color has-text-color"
                    style="margin-bottom:0;font-size:48px;font-style:normal;font-weight:800">
                    <?php esc_html_e( '7.9k', 'ct-startup' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"14px"},"spacing":{"margin":{"top":"8px"}}},"textColor":"primary"} -->
                <p class="has-text-align-center has-primary-color has-text-color"
                    style="margin-top:8px;font-size:14px;text-transform:uppercase">
                    <?php esc_html_e( 'Dashboards', 'ct-startup' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->