<?php
/**
 * Title: Features Startup
 * Slug: ct-startup/features-startup
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 * @package WordPress
 * @subpackage ct-startup
 * @since ct-startup 1.0
 */

?>
<!-- wp:group {"className":"w-full max-w-[1380px] mx-auto bg-[#f9f9f9] flex flex-col md:flex-row items-center py-10 px-4 md:px-64","layout":{"type":"constrained"}} -->
<div
    class="wp-block-group w-full max-w-[1380px] mx-auto bg-[#f9f9f9] flex flex-col md:flex-row items-center py-10 px-4 md:px-64">
    <!-- wp:group {"className":"w-full md:w-1/2 p-6","layout":{"type":"constrained"}} -->
    <div class="wp-block-group w-full md:w-1/2 p-6">
        <!-- wp:heading {"className":"text-3xl font-bold text-gray-900 mb-4"} -->
        <h2 class="wp-block-heading text-3xl font-bold text-gray-900 mb-4">Nomad Support</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"text-lg text-gray-500 mb-6"} -->
        <p class="text-lg text-gray-500 mb-6">
            <?php esc_html_e( 'We offer our services worldwide, 24/7. You can always count on us to deliver the best for your creative projects.', 'ct-startup' ); ?>
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

    <!-- wp:group {"className":"w-full md:w-1/2 p-6 order-1 md:order-none","layout":{"type":"constrained"}} -->
    <div class="wp-block-group w-full md:w-1/2 p-6 order-1 md:order-none">
        <!-- wp:image {"id":5763,"width":"294px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized">
            <img src="<?php echo  get_stylesheet_directory_uri() . '/images/undraw_digital_nomad.png'; ?>" alt=""
                class="wp-image-5775" style="width:294px;height:auto" />
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->