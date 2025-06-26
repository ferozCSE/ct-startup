<?php
/**
 * Title: Footer CTSM
 * Slug: ct-tailwind-theme/footer-ctsm
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with site title and navigation.
 * @package WordPress
 * @subpackage Coderstime SM
 * @since Coderstime SM 1.0
 */

?>

<!-- wp:group {"className":"space-y-1 px-5 py-16 bg-gray-100","layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group space-y-1 px-5 py-16 bg-gray-100">
    <!-- wp:group {"tagName":"footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"neutral-100","layout":{"type":"constrained"}} -->
    <footer class="wp-block-group has-neutral-100-background-color has-background"
        style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"className":"hover:text-blue-600 cursor-pointer"} -->
                <p class="hover:text-blue-600 cursor-pointer">About</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"hover:text-blue-600 cursor-pointer"} -->
                <p class="hover:text-blue-600 cursor-pointer">Terms of Service</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"hover:text-blue-600 cursor-pointer"} -->
                <p class="hover:text-blue-600 cursor-pointer">Privacy Policy</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"className":"text-neutral-600"} -->
            <p class="text-neutral-600">Company © 2025</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </footer>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->