<?php

/**
 * The front page of the website
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gary Consulting
 * @subpackage gary_consulting
 * @since 1.0.0
 */
require 'header.php';
?>

<div class="jumbotron jumbotron-fluid p-0 m-0">
    <div style="position: relative;">
        <div class="heroText">
            <?php
            $about_qry = array(
                'category_name' => 'heroText'
            );
            $query = new WP_Query($about_qry);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    the_content();
                }
            }
            ?>
        </div>
        <img width="100%" height="100%" id="hero" src="<?php echo esc_url( get_theme_mod( 'customizer_jumbotron' ) ); ?>" />
    </div>
</div>

<div class="container bg-white">
    <div class="row pt-5">
        <div class="col-md-12">
            <?php
            $about_qry = array(
                'category_name' => 'introText'
            );
            $query = new WP_Query($about_qry);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    the_content();
                }
            }
            ?>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-12">
            <?php
            $about_qry = array(
                'category_name' => 'about'
            );
            $query = new WP_Query($about_qry);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    the_content();
                }
            }
            ?>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-md-6">
            <?php
            $contact_qry = array(
                'category_name' => 'contact'
            );
            $query = new WP_Query($contact_qry);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <h2 class="hC introFont"><?php the_title(); ?></h2>
                    <hr/>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>