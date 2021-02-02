<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
            <div class="">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        get_template_part('content-single', get_post_type());
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>