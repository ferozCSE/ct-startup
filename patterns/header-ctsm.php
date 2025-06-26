<?php
/**
 * Title: Header CTSM
 * Slug: ct-tailwind-theme/header-ctsm
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage Coderstime SM
 * @since Coderstime SM 1.0
 */

?>

<!-- wp:group {"className":"bg-gray-900","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group bg-gray-900"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"align":"wide","className":"bg-gray-900","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide bg-gray-900">
        <!-- wp:site-logo {"width":50,"className":"text-white"} /-->

        <!-- wp:paragraph {"className":"inline-flex items-center gap-4 text-lg font-bold tracking-wide text-white hover:opacity-75","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
        <p class="inline-flex items-center gap-4 text-lg font-bold tracking-wide text-white hover:opacity-75">
            <?php esc_html_e( 'SOCIAL MARKETING', 'ct-startup' ); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
        <div class="wp-block-group">
            <!-- wp:navigation {"ref":4212,"customTextColor":"#686c72","align":"wide","className":"gap-10","layout":{"type":"flex","justifyContent":"space-between"}} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->