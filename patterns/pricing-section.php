<?php
/**
 * Title: Pricing Section
 * Slug: ct-tailwind-theme/pricing-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage Coderstime SM
 * @since Coderstime SM 1.0
 */

?>

<!-- wp:group {"className":"mt-20","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group mt-20"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group"
        style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"36px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
        <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color"
            style="margin-bottom:16px;font-size:36px;font-style:normal;font-weight:700">
            <?php esc_html_e( 'Choose your plan', 'ct-startup' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"24px"}}},"textColor":"gray"} -->
        <p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:24px;font-size:18px">
            <?php esc_html_e( 'Honest and affordable pricing model to help you get started easily and trouble free.', 'ct-startup' ); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|20"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                <!-- wp:group {"className":"border-2 border-gray-500 p-4 rounded-md","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#ffffff"},"layout":{"type":"constrained","contentSize":"300px"}}} -->
                <div class="wp-block-group border-2 border-gray-500 p-4 rounded-md has-background"
                    style="border-radius:8px;background-color:#ffffff;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"8px"}}},"textColor":"primary"} -->
                    <h3 class="wp-block-heading has-text-align-left has-primary-color has-text-color"
                        style="margin-bottom:8px;font-size:18px;font-style:normal;font-weight:700">
                        <?php esc_html_e( 'Developer', 'ct-startup' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <h3 class="wp-block-heading has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:48px;font-style:normal;font-weight:800">
                        <?php esc_html_e( '$49', 'ct-startup' ); ?><span
                            style="font-size:24px"><?php esc_html_e( 'per year', 'ct-startup' ); ?></span></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <p class="has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:16px">
                        <?php esc_html_e( 'Up to 2 social networks and 2 automations', 'ct-startup' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:buttons {"className":"rounded-b-lg bg-gray-100 py-5","layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons rounded-b-lg bg-gray-100 py-5">
                            <!-- wp:button {"textAlign":"left","style":{"color":{"background":"#1a1a1a","text":"#ffffff"}}} -->
                            <div class="wp-block-button"><a
                                    class="wp-block-button__link has-text-color has-background has-text-align-left wp-element-button"
                                    style="color:#ffffff;background-color:#1a1a1a"><?php esc_html_e( 'Get Started', 'ct-startup' ); ?></a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                <!-- wp:group {"className":"border-2 border-blue-500 p-4 rounded-md","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"color":{"background":"#ffffff"},"layout":{"type":"constrained","contentSize":"300px"}}} -->
                <div class="wp-block-group border-2 border-blue-500 p-4 rounded-md has-background"
                    style="border-radius:8px;background-color:#ffffff;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"8px"}}},"textColor":"primary"} -->
                    <h3 class="wp-block-heading has-text-align-left has-primary-color has-text-color"
                        style="margin-bottom:8px;font-size:18px;font-style:normal;font-weight:700">
                        <?php esc_html_e( 'Agency', 'ct-startup' ); ?><span
                            style="margin-left:5px; font-size:12px; color:#1e40af;"><?php esc_html_e( '▼', 'ct-startup' ); ?></span>
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"48px","fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <h3 class="wp-block-heading has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:48px;font-style:normal;font-weight:800">
                        <?php esc_html_e( '$99', 'ct-startup' ); ?> <span
                            style="font-size:24px"><?php esc_html_e( 'per year', 'ct-startup' ); ?></span>
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
                    <p class="has-text-align-left has-black-color has-text-color"
                        style="margin-bottom:16px;font-size:16px">
                        <?php esc_html_e( 'Up to 15 social networks and 50 automations', 'ct-startup' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:buttons {"className":"rounded-b-lg bg-blue-50 py-5","layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons rounded-b-lg bg-blue-50 py-5">
                            <!-- wp:button {"textAlign":"left","backgroundColor":"primary","style":{"color":{"text":"#ffffff"}}} -->
                            <div class="wp-block-button"><a
                                    class="wp-block-button__link has-primary-background-color has-text-color has-background has-text-align-left wp-element-button"
                                    style="color:#ffffff"><?php esc_html_e( 'Get Started', 'ct-startup' ); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->