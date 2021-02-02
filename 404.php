<?php
/**
 * The template for displaying the 404 page.
 *
 * @package Gary Consulting
 * @subpackage gary_consulting
 * @since 1.0.0
 */

get_header();
?>
<div class="container bg-white">
    <div class="row py-5">
        <div class="col-md-12">
		<h1 class="entry-title"><?php _e( 'Page Not Found', 'anniesbakery' ); ?></h1>
		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'anniesbakery' ); ?></p></div>
        </div>
    </div>
</div>
<?php
get_footer();
