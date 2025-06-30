<?php
/**
 * Title: Footer Startup
 * Slug: ct-startup/footer-startup
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with site title and navigation.
 * @package WordPress
 * @subpackage ct-startup
 * @since ct-startup 1.0
 */

?>

<!-- wp:group {"className":"w-full max-w-[1380px] mx-auto","style":{"spacing":{"padding":{"top":"1.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#000428"}},"textColor":"white","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group w-full max-w-[1380px] mx-auto has-white-color has-text-color has-background has-link-color"
    style="background-color:#000428;padding-top:1.5rem">
    <!-- wp:group {"className":"footer-container","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}},"border":{"radius":"0.38rem"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group footer-container"
        style="border-radius:0.38rem;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:40px">
            <?php esc_html_e( 'Start creating now', 'ct-startup' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"mb-10","layout":{"type":"constrained"}} -->
        <div class="wp-block-group mb-10">
            <!-- wp:paragraph {"align":"center","className":"pt-5","style":{"typography":{"fontSize":"20px"}}} -->
            <p class="has-text-align-center pt-5" style="font-size:20px">
                <?php esc_html_e( 'We are here to help you build your idea.', 'ct-startup' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"mb-10","layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons mb-10">
            <!-- wp:button {"textAlign":"center","className":"bg-[#28a745] text-white text-base rounded-[5px] px-4 py-2 mt-20 transition-opacity hover:opacity-90 is-style-outline","style":{"typography":{"textTransform":"uppercase"}}} -->
            <div
                class="wp-block-button bg-[#28a745] text-white text-base rounded-[5px] px-4 py-2 mt-20 transition-opacity hover:opacity-90 is-style-outline">
                <a class="wp-block-button__link has-text-align-center wp-element-button"
                    style="text-transform:uppercase"><?php esc_html_e( 'Get started today', 'ct-startup' ); ?>
                </a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:group {"className":"my-10","fontSize":"small","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
        <div class="wp-block-group my-10 has-small-font-size">
            <!-- wp:separator {"style":{"color":{"background":"#9f9393"}}} -->
            <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background"
                style="background-color:#9f9393;color:#9f9393" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"align":"center","className":"my-10","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
            <p class="has-text-align-center my-10"><?php esc_html_e( 'Crafted with ❤️ by Coderstime', 'ct-startup' ); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->