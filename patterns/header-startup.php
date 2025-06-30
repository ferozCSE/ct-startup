<?php
/**
 * Title: Header CT Startup
 * Slug: ct-startup/header-startup
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage ct-startup
 * @since ct-startup 1.0
 */

?>

<!-- wp:group {"className":"w-full max-w-[1380px] mx-auto bg-[#f9f9f9]","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1150px","wideSize":"1380px"}} -->
<div class="wp-block-group w-full max-w-[1380px] mx-auto bg-[#f9f9f9]"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:group {"align":"full","className":"overflow-hidden relative","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull overflow-hidden relative">
        <!-- wp:group {"className":"w-full min-h-[400px] overflow-hidden bg-[linear-gradient(340deg,_#000428,_#004e92)] transform skew-y-[-9deg] origin-top-left","layout":{"type":"constrained"}} -->
        <div
            class="wp-block-group w-full min-h-[400px] overflow-hidden bg-[linear-gradient(340deg,_#000428,_#004e92)] transform skew-y-[-9deg] origin-top-left">
            <!-- wp:group {"className":"transform skew-y-[9deg]","layout":{"type":"constrained"}} -->
            <div class="wp-block-group transform skew-y-[9deg]">
                <!-- wp:group {"align":"wide","className":"px-5 pt-40","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","alignItems":"center"}} -->
                <div class="wp-block-group alignwide px-5 pt-40">
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
                    <div class="wp-block-group">
                        <!-- wp:site-logo {"width":40,"className":"text-white mr-4"} /-->
                        <!-- wp:paragraph {"className":"text-lg font-bold tracking-wide text-white hover:opacity-75"} -->
                        <p class="text-lg font-bold tracking-wide text-white hover:opacity-75">
                            <?php esc_html_e( 'Startup', 'ct-startup' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:navigation {"ref":4212,"textColor":"white","className":"gap-8","layout":{"type":"flex","justifyContent":"right"}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"mt-20","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mt-20">
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"textAlign":"center","className":"mt-20 text-6xl font-extrabold text-white","style":{"typography":{"lineHeight":"1.2"}}} -->
                        <h2 class="wp-block-heading has-text-align-center mt-20 text-6xl font-extrabold text-white"
                            style="line-height:1.2">
                            <?php esc_html_e( "Let's build the future together.", 'ct-startup' ); ?>
                        </h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","className":"mx-auto mt-7 text-2xl font-medium text-gray-300 max-w-[600px]""} -->
                        <p class="has-text-align-center mx-auto mt-7 text-2xl font-medium text-gray-300 max-w-[600px]">
                            <?php esc_html_e( 'Inspiring tools and resources to help you build your next endeavour easily and effortlessly.', 'ct-startup' ); ?>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"mt-10"} -->
                        <div class="wp-block-buttons mt-10">
                            <!-- wp:button {"backgroundColor":"vivid-green-cyan","className":"is-style-fill shadow-lg px-8 py-4","style":{"border":{"radius":"5px"},"typography":{"fontSize":"18px"}}} -->
                            <div class="wp-block-button is-style-fill shadow-lg px-8 py-4"><a
                                    class="wp-block-button__link has-vivid-green-cyan-background-color has-background wp-element-button"
                                    style="border-radius:5px;font-size:18px"><?php esc_html_e( 'GET STARTED TODAY', 'ct-startup' ); ?>
                                </a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
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
    <!-- wp:group {"className":"flex flex-col md:flex-row items-center py-10","layout":{"type":"constrained"}} -->
    <div class="wp-block-group flex flex-col md:flex-row items-center py-10">
        <!-- wp:group {"className":"w-full md:w-1/2 p-6 order-1 md:order-none","layout":{"type":"constrained"}} -->
        <div class="wp-block-group w-full md:w-1/2 p-6 order-1 md:order-none">
            <!-- wp:image {"id":5763,"width":"294px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img
                    src="<?php echo  get_stylesheet_directory_uri() . '/images/undraw_businessman.png'; ?>" alt=""
                    class="wp-image-5763" style="width:294px;height:auto" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"w-full md:w-1/2 p-6","layout":{"type":"constrained"}} -->
        <div class="wp-block-group w-full md:w-1/2 p-6">
            <!-- wp:heading {"className":"text-3xl font-bold text-gray-900 mb-4"} -->
            <h2 class="wp-block-heading text-3xl font-bold text-gray-900 mb-4">
                <?php esc_html_e( 'Awesome Features', 'ct-startup' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-lg text-gray-500 mb-6"} -->
            <p class="text-lg text-gray-500 mb-6">
                <?php esc_html_e( 'Get to know all the features our resources have to offer for your business', 'ct-startup' ); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"className":"text-lg text-gray-500 space-y-2"} -->
            <ul class="wp-block-list text-lg text-gray-500 space-y-2">
                <li class="flex items-center"><span
                        class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #1', 'ct-startup' ); ?>
                </li>
                <li class="flex items-center"><span
                        class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #2', 'ct-startup' ); ?>
                </li>
                <li class="flex items-center"><span
                        class="text-green-500 mr-2">✓</span><?php esc_html_e( 'Awesome Feature #3', 'ct-startup' ); ?>
                </li>
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->