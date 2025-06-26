<?php
/**
 * Title: Features Section
 * Slug: ct-tailwind-theme/features-section
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage Coderstime SM
 * @since Coderstime SM 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
    <div class="wp-block-group alignwide"
        style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
        <!-- wp:heading {"textAlign":"center","className":"mt-40","style":{"typography":{"fontSize":"36px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"black"} -->
        <h2 class="wp-block-heading has-text-align-center mt-40 has-black-color has-text-color"
            style="margin-bottom:16px;font-size:36px;font-style:normal;font-weight:700">
            <?php esc_html_e( 'Powerful Tools', 'ct-startup' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"40px"}}},"textColor":"gray"} -->
        <p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:40px;font-size:18px">
            <?php esc_html_e( 'We built the best tools to elevate your marketing efforts.', 'ct-startup' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|20"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:group {"className":"mx-auto","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mx-auto">
                    <!-- wp:image {"id":5662,"width":"103px","sizeSlug":"medium","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-medium is-resized"><img
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/user-profile.png'; ?>" alt=""
                            class="wp-image-5662" style="width:103px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}},"textColor":"black"} -->
                <h3 class="wp-block-heading has-text-align-center has-black-color has-text-color"
                    style="margin-top:16px;margin-bottom:8px;font-size:20px;font-style:normal;font-weight:700">
                    Automation</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"gray"} -->
                <p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:0;font-size:14px">
                    <?php esc_html_e( 'Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.', 'ct-startup' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:group {"className":"mx-auto","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mx-auto">
                    <!-- wp:image {"id":5662,"width":"103px","sizeSlug":"medium","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-medium is-resized"><img
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/user-profile.png'; ?>" alt=""
                            class="wp-image-5662" style="width:103px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}},"textColor":"black"} -->
                <h3 class="wp-block-heading has-text-align-center has-black-color has-text-color"
                    style="margin-top:16px;margin-bottom:8px;font-size:20px;font-style:normal;font-weight:700">
                    <?php esc_html_e( 'Schedule', 'ct-startup' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"gray"} -->
                <p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:0;font-size:14px">
                    <?php esc_html_e( 'Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo minec lectus. Nam commodo turpis id lectus scelerisque vulputate.', 'ct-startup' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:group {"className":"mx-auto","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mx-auto">
                    <!-- wp:image {"id":5662,"width":"103px","sizeSlug":"medium","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-medium is-resized"><img
                            src="<?php echo  get_stylesheet_directory_uri() . '/images/user-profile.png'; ?>" alt=""
                            class="wp-image-5662" style="width:103px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}},"textColor":"black"} -->
                <h3 class="wp-block-heading has-text-align-center has-black-color has-text-color"
                    style="margin-top:16px;margin-bottom:8px;font-size:20px;font-style:normal;font-weight:700">
                    <?php esc_html_e( 'Integrations', 'ct-startup' ); ?>
                </h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"gray"} -->
                <p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:0;font-size:14px"><?php esc_html_e( 'Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi
                    nec lectus. Nam commodo turpis id lectus scelerisque vulputate.', 'ct-startup' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->