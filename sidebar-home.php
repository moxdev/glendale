<?php
/**
 * Custom sidebar for the homepage
 * - Displays the site wide Specials Sidebar on the homepage with optional Event and Announcement
 *   sections configured on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Glendale
 */

?>

<aside id="secondary" class="widget-area" role="complementary">
    <?php if ( function_exists( 'glendale_homepage_sidebar' ) ) {
        glendale_homepage_sidebar();
    } ?>
</aside><!-- #secondary -->