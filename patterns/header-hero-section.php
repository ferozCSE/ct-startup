<?php
/**
 * Title: Header Hero Section CTMS
 * Slug: ct-tailwind-theme/header-hero-section
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
        <p class="inline-flex items-center gap-4 text-lg font-bold tracking-wide text-white hover:opacity-75">SOCIAL
            MARKETING</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
        <div class="wp-block-group">
            <!-- wp:navigation {"ref":4212,"customTextColor":"#686c72","align":"wide","layout":{"type":"flex"}} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"bg-gray-900 pt-16","layout":{"type":"constrained"}} -->
    <div class="wp-block-group bg-gray-900 pt-16">
        <!-- wp:group {"className":"container mx-auto ","layout":{"type":"constrained"}} -->
        <div class="wp-block-group container mx-auto ">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"textAlign":"center","className":"mb-4 text-3xl font-extrabold text-balance text-white"} -->
                <h2 class="wp-block-heading has-text-align-center mb-4 text-3xl font-extrabold text-balance text-white">
                    Social media marketing for your online business</h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":3,"className":"mx-auto text-lg font-medium text-gray-400"} -->
                <h3 class="wp-block-heading mx-auto text-lg font-medium text-gray-400">Automate your marketing efforts
                    today and get more clients for your business. 7-day trial is now available to check it out.</h3>
                <!-- /wp:heading -->

                <!-- wp:group {"className":"flex flex-wrap justify-center gap-4 pt-10 pb-16","layout":{"type":"constrained"}} -->
                <div class="wp-block-group flex flex-wrap justify-center gap-4 pt-10 pb-16">
                    <!-- wp:necessary-block/buttons-block {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-necessary-block-buttons-block">
                        <!-- wp:necessary-block/button-block {"buttonText":"→ Get Started","buttonWidth":"10vw","buttonType":"info","className":"inline-flex items-center justify-center gap-2 rounded-full border border-blue-800 bg-blue-800 px-6 py-4 leading-6 font-semibold text-white hover:border-blue-700/50 hover:bg-blue-700/50 hover:text-white focus:ring-3 focus:ring-blue-500/50 focus:outline-hidden active:border-blue-700 active:bg-blue-700","style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                        <div class="necessary-block-button align-center alignundefined"
                            style="width:calc(10vw - 1.2rem * .5);height:auto"><a target="_self"
                                class="wp-block-necessary-block-button-block has-text-align-center button button-info align-center inline-flex items-center justify-center gap-2 rounded-full border border-blue-800 bg-blue-800 px-6 py-4 leading-6 font-semibold text-white hover:border-blue-700/50 hover:bg-blue-700/50 hover:text-white focus:ring-3 focus:ring-blue-500/50 focus:outline-hidden active:border-blue-700 active:bg-blue-700 has-small-font-size"
                                style="--button-hover-color:#ffffff;--button-hover-bg:undefined;text-align:center;text-decoration:none">→
                                Get Started</a></div>
                        <!-- /wp:necessary-block/button-block -->

                        <!-- wp:necessary-block/button-block {"buttonText":" Live Demo","buttonWidth":"10vw","buttonType":"info","className":"inline-flex items-center justify-center gap-2 rounded-full border border-gray-800 bg-gray-800 px-6 py-4 leading-6 font-semibold text-white hover:border-gray-700/50 hover:bg-gray-700/50 hover:text-white focus:ring-3 focus:ring-gray-500/25 focus:outline-hidden active:border-gray-700 active:bg-gray-700","style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                        <div class="necessary-block-button align-center alignundefined"
                            style="width:calc(10vw - 1.2rem * .5);height:auto"><a target="_self"
                                class="wp-block-necessary-block-button-block has-text-align-center button button-info align-center inline-flex items-center justify-center gap-2 rounded-full border border-gray-800 bg-gray-800 px-6 py-4 leading-6 font-semibold text-white hover:border-gray-700/50 hover:bg-gray-700/50 hover:text-white focus:ring-3 focus:ring-gray-500/25 focus:outline-hidden active:border-gray-700 active:bg-gray-700 has-small-font-size"
                                style="--button-hover-color:#ffffff;--button-hover-bg:undefined;text-align:center;text-decoration:none">
                                Live Demo</a></div>
                        <!-- /wp:necessary-block/button-block -->
                    </div>
                    <!-- /wp:necessary-block/buttons-block -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"relative mx-5 -mb-20 rounded-sm bg-white p-2 shadow-lg sm:-mb-40 lg:mx-32","layout":{"type":"constrained"}} -->
                <div class="wp-block-group relative mx-5 -mb-20 rounded-sm bg-white p-2 shadow-lg sm:-mb-40 lg:mx-32">
                    <!-- wp:image {"id":5695,"sizeSlug":"full","linkDestination":"none","className":"mx-auto aspect-3/2 w-full rounded-sm object-cover"} -->
                    <figure class="wp-block-image size-full mx-auto aspect-3/2 w-full rounded-sm object-cover"><img
                            src="http://localhost/wp-content/uploads/2025/06/ct-sm.jpg" alt="" class="wp-image-5695" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->